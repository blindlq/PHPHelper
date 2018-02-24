<?php

class Header
{
    //HTML标准头部
    static function standard()
    {
        header("Content-type: text/html; charset=utf-8");
    }

    //设置头部的META标签
    static function meta($name, $content)
    {
        echo '<meta name="' . $name . '" content="' . $content . '">';
    }

    //设置通过META进行页面自动刷新
    static function metarefresh($second)
    {
        if (is_int($second)) {
            echo '<meta http-equiv="refresh" content="' . $second . '">';
        } else {
            echo "Error:metarefresh(); time is not a int.";
        }
    }

    //移动设备优先
    static function mobile()
    {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    }

    //移动设备优先，并禁止缩放
    static function mobilefix()
    {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
    }

    //定义网站标题
    static function title($title)
    {
        echo '<title>' . $title . '</title>';
    }
}