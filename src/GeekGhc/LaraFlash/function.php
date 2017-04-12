<?php
if (!function_exists('laraflash')) {
    //默认是success类型
    function laraflash($message = '',$type = "success")
    {
        $notify = app('laraflash');
        if (!is_null($message)) {
            return $notify->message($message,$type);
        }
        return $notify;
    }
}
