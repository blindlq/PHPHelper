<?php
//引用index自己使用的方法
require_once('index.function.php');


//引用class文件夹下除了index自己使用的其它所有class.php文件
$files = getFile(__DIR__);
for ($i = 0; $i < count($files); $i++) {
    if ($files[$i] != "index.php" && $files[$i] != "index.function.php") {
        require_once($files[$i]);
    }
}

// 以下为测试区域

echo $res = Randomcode::int(0);