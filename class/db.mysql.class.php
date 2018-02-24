<?php

//使用Mysqli操作数据库类
class Mysql
{

    //定义变量；
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $dbconn = null;

    //构造函数；
    function __construct($Host, $Username, $Password, $Dbname)
    {
        $this->host = $Host;
        $this->username = $Username;
        $this->password = $Password;
        $this->dbname = $Dbname;
    }

    //数据库连接的函数；
    //成功返回true，失败返回false
    function conn()
    {
        $this->dbconn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->dbconn) {
            return true;
        } else {
            return false;
        }
    }

    //数据库Query方式(RUID)；
    function query($string)
    {
        $result = mysqli_query($this->dbconn, $string);
        if (!$result) {
            echo "Query error!" . $this->error();
            return false;
        }
        return true;
    }

    //数据库多行Query方式(RUID)；
    function mquery($string)
    {
        $result = $this->dbconn->multi_query($string);
        if (!$result) {
            echo "Query error!" . $this->error();
            return false;
        }
        return true;
    }

    //数据库读取数据，通过query();
    //返回一个数组
    function read($string)
    {
        $list = array();
        $result = $this->query($string);
        while ($row = mysqli_fetch_array($result)) {
            $list[] = $row;
        }
        return $list;
    }

    //返回数据库错误；
    function error()
    {
        return mysqli_error($this->dbconn);
    }

    //关闭数据库连接；
    function close()
    {
        mysqli_close($this->dbconn);
    }
}

?>