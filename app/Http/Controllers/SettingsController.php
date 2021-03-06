<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use stdClass;
use App\Http\Controllers\Controller;


class SettingsController extends Controller
{
    public function getEdit(){
        $settings = Settings::findOrFail(1);
        return view('admin.settings.edit', ['settings' => $settings]);
    }

    public function postEdit(Request $request) {
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required',
            'zalo'=>'required|numeric',
            'facebook'=>'required',
            'youtube'=>'required',
        ],[
            'name.required' => 'The Name field is required.',
            'name.max' => 'The Name may not be greater than 50 characters.',
            'email.required' => 'The Email field is required.',
            'zalo.required' => 'The Zalo field is required.',
            'facebook.required' => 'The Facebook field is required.',
            'youtube.required' => 'The youtube field is required.',
        ]);

        $settings = Settings::find(1);
        $settings->name = $request->name;
        $settings->mail = $request->email;
        $settings->zalo = $request->zalo;
        $settings->facebook = $request->facebook;
        $settings->youtube = $request->youtube;

        $mang = ["logo","favicon"];
        foreach($mang as $key=>$value){

            if($request->hasFile($mang[$key])){
                $file = $request->file($mang[$key]);
                $filename = $file->getClientOriginalName();
                $random = Str::random(4)."_".$filename;
                while(file_exists("upload/settings".$random)){
                    $random = Str::random(4)."_".$filename;
                }
                $file->move("upload/settings", $random);
                File::delete(public_path("upload/settings/".$settings->$value));
                $settings->$value = $random;
                $key++;
            } else{
                $settings->$value = $settings->$value;
            } 
        }   
        $settings->save();
        Toastr::success('L??u th??nh c??ng', 'Th??nh c??ng', ["positionClass" => "toast-top-center"]);
        return response()->json();
    }
}