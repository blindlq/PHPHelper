<?php

    //生成随机验证字符/码的方法
    class Randomcode  {

        //生成简单的计算公式
        static function cal(){
            $num1 = rand(0,10); //第一个数
            $num2 = rand(0,10); //第二个数
            $method = rand(0,2);    //计算符
            $res;   //结果
            switch($method){
                case 0:
                $res = $num1+$num2;
                $method = '+';
                break;
                case 1:
                $res = $num1-$num2;
                $method = '-';
                break;
                case 2:
                $res = $num1 * $num2;
                $method = '×';
                break;
                default:
                break;
            }
            $array = array($num1,$method,$num2,$res);
            return $array;
        }

        //生成指定长度的int
        static function int($length){
            if(is_integer($length) && $length!=0){
                $res = "";
                for($i=0;$i<$length;$i++){
                   $base_int = rand(0,9);
                   $res .= $base_int;    
                }
                return $res;
            }
            else{
                return 0;
            }
        }
        
        //生成指定长度的英文string
        static function en($length){
            
        }
    }
    

?>