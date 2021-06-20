<?php

use Illuminate\Support\Str;
use MieProject\Settings\Models\Setting;


if (!function_exists('setting')) {

    function setting($key, $lang = null, $default = null)
    {
        if (is_null($key)) {
            return new Setting();
        }

        if (is_array($key)) {
            return Setting::set($key[0], $key[1]);
        }

        if ($lang != null) {
            $value = Setting::get($key, $lang);
        } else {
            $value = Setting::get($key);
        }

        return is_null($value) ? value($default) : $value;
    }
}