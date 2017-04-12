<?php
if (!function_exists('laraflash')) {
    //默认是info类型
    function laraflash($message = '',$type = "info")
    {
        $notify = app('laraflash');
        if (!is_null($message)) {
            return $notify->message($message,$type);
        }
        return $notify;
    }
}
