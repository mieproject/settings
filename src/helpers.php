<?php

use Illuminate\Support\Str;


if (! function_exists('setting')) {
    function setting($key, $default = null){
        if (is_null($key)) {
            return new MieProject\Settings\Models\Setting();
        }
        if (is_array($key)) {
            return MieProject\Settings\Models\Setting::setByKey($key[0], $key[1]);
        }
        $value = MieProject\Settings\Models\Setting::getByKey($key); // ""
        return is_null($value) ? value($default) : $value;
    }
}
