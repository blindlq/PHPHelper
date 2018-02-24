<?php
header("Content-type: text/html; charset=utf-8");
require('class/index.php');

HeaderHelper::meta('a','1');

//$file = new FileHelper("\\项目\\PHPhelper\\test.txt");
//$file->open();


//SessionHelper::start();
//SessionHelper::set("name", "Ali");
//echo SessionHelper::get("name");
//SessionHelper::destory();

//PDO方法连接Mysql数据库
/*
$mysql = new PDOHelper("mysql","localhost","root","password","db");
$mysql -> conn();
$result = $mysql -> read("select * from test");
echo $result[0]['names'];
*/

//mysqli方法连接数据库；
/*
$mysql = new MysqlHelper('localhost','root','password','db');
$mysql -> conn();
$mysql -> query("set names utf8");
$mysql -> close();
*/

//测试数据库创建表
/*
$ctable = $mysql -> query("CREATE TABLE IF NOT EXISTS test(id INT AUTO_INCREMENT, names VARCHAR(100),PRIMARY KEY ( id ));");
if($ctable){
    echo "ok";
}
else{
    echo "no".$mysql->error();
}
*/

//测试数据库插入数据
/*
$itable = $mysql->query("INSERT INTO test (id,names)VALUES(NULL,'Tom');");
*/

//测试数据库读取数据
/*
$itable = $mysql->read("SELECT * FROM test;");
print_r($itable[0]['id']); //[0]表示第1行数据，[0]['id']标是该行数据中id字段
*/

//echo date("Y/m/d");
//echo time();

//测试读取文件并输出，fgets和fgetc两种方法
/*
$file = fopen('example.txt','r') or exit("no this file.");
while(!feof($file)){
    echo fgets($file);
}
while(!feof($file)){
    echo fgetc($file);
}
*/
?>

<head>
    <title>本地测试</title>
</head>
<body>

</body>
