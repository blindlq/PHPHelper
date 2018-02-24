<?php

//Session操作类
class SessionHelper
{

    //开始一个Session
    static function start()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    //设置Session的字段和值
    static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    //读取Session中某个字段的值
    static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    //清空Session中某个字段的值
    static function delete($key)
    {
        unset($_SESSION[$key]);
    }

    //销毁这个Session
    static function destory()
    {
        $_SESSION = array();
        session_destroy();
    }

}