<?php


namespace MieProject\Settings\Controllers;


use App\Http\Controllers\Controller;
use MieProject\Settings\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index(){
        return view('mie-setting::index');
    }

    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
        $data = $this->validate($request, $rules);
        $validSettings = array_keys($rules);

         foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }

        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
