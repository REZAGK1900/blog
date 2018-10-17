<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        //dd($setting);
        return view('setting')->with('settings', $settings);
    }

    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'name' => 'required|min:10|max:100',
            'title' => 'required|min:10|max:250',
            'keywords' => 'min:10|max:400',
            'description' => 'min:10|max:250',
        ],[
            'name.required' => 'وارد کردن نام سایت ضروری است.',
            'name.min' => 'نام سایت کمتر از 10 کاراکتر است.',
            'name.max' => 'نام سایت بیشتر از 100 کاراکتر است.',
            'title.required' => 'وارد کردن عنوان سایت ضروری است',
            'title.min' => 'عنوان سایت کمتر از 10 کاراکتر است',
            'title.max' => 'عنوان سایت بیشتر از 250 کاراکتر است',
            'keywords.min' => 'کلمه های کلیدی وارد شده کمتر از 10 کارکتر است',
            'keywords.max' => 'کلمه های کلیدی وارد شده بیشتر از 400 کارکتر است',
            'description.min' => 'توضیحات سایت کمتر از 10 کارکتر است',
            'description.max' => 'توضیحات سایت بیشتر از 250 کارکتر است',
        ]);

         if($validator->fails())
         {
             return back()->with(['errors' => $validator->errors()]);
         }

        $id = $request->input('id');
        $res = Setting::where('ID', $id)->update(['title' => $request->title, 'name' => $request->name,
            'keyword' => $request->keywords,'description' => $request->description]);

        if($res == 1)
        {
            return back()->with('message', 'تنظیمات سایت با موفقیت بروز رسانی شد.');
        }
        else
        {
            return back()->with('message', 'مشکلی در بروز رسانی تنظیمات به وجود آمده است.');
        }
    }
}
