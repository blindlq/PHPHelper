<?php

//文件IO操作类
class FileHelper
{
    private $path;
    private $result;
    private $file;

    //构造函数
    function __construct($Path)
    {
        $this->path = $_SERVER['DOCUMENT_ROOT'] . $Path;
    }

    //打开一个文件流，文件IO的先决条件
    function open()
    {
        $this->file = fopen($this->path, 'r+') or exit("Error!Open failed!");
        if (!$this->file) {
            return false;
        } else {
            return true;
        }
    }

    //读取一个文件的文本内容，需要先open
    function get()
    {
        if (isset($this->file)) {
            while (!feof($this->file)) {
                $this->result .= fgets($this->file);
            }
            return $this->result;
        } else {
            die("Error!The file must be opened first.");
        }
    }

    //把string以文本方式写入文件
    function set($content)
    {
        fwrite($this->file, $content);
    }

    //清空一个文件的全部文本内容
    function clear()
    {
        $this->file = fopen($this->path, 'w+') or exit("Error!Open failed!");
    }

    //关闭文件流
    function close()
    {
        fclose($this->file);
    }

}