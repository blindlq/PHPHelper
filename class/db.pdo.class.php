<?php

//使用PDO操作数据库类
class PDOHelper
{

    private $dbtype;
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $pdoconn = null;

    //构造函数；
    function __construct($Dbtype, $Host, $Username, $Password, $Dbname)
    {
        $this->dbtype = $Dbtype;//这里要做数据库类型判断
        $this->host = $Host;
        $this->username = $Username;
        $this->password = $Password;
        $this->dbname = $Dbname;
    }

    //连接数据库
    function conn()
    {
        try {
            $this->pdoconn = new PDO("$this->dbtype:host=$this->host;dbname=$this->dbname", "$this->username", "$this->password");
            $this->pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //数据库Query方式(RUID)；
    function query($string)
    {
        try {
            $stmt = $this->pdoconn->prepare($string);
            $stmt->exec();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //数据库多行Query方式(RUID)；
    function mquery($string)
    {
        try {
            $this->pdoconn->beginTransaction();
            $this->pdoconn->exec($string);
            $this->pdoconn->commit();
            return true;
        } catch (PDOException $e) {
            $this->pdoconn->rollback();
            echo "PDO mquery error!" . $e->getMessage();
        }
    }

    //数据库读取数据，通过query();
    //返回一个数组
    function read($string)
    {
        try {
            $stmt = $this->pdoconn->prepare($string);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "PDO query error!" . $e->getMessage();
            return $result = array();
        }
    }
}