<?php
header("content-type:text/html;charset=utf8");
$s="12345";
$s[$s[1]]="2";
echo $s."<br>";


function monkey($m,$n){
    for($i=1;$i<$m+1;$i++){
        $arr[]=$i;
    }
    $i=0;
    while(count($arr)>1){
     if(($i+1)%$n==0){
         unset($arr[$i]);
     }else{
         array_merge($arr,$arr[$i]);
         unset($arr[$i]);
      }
        $i++;
    }
    return $arr[$i];
}


function monkey1($m,$n){
    //定义一个数组
    for($i=1;$i<$m+1;$i++){
        $arr[]=$i;
    }
    //数组里的任意一个数
    // $arr=rand(1,10);
    //$arr=array(1,2,3,4,5,6,7,8,9);
    //设置数组指针
    $i=0;
    //循环数组,判断猴子次数
    while(count($arr)>1){
        if(($i+1)%$n==0){
            unset($arr[$i]);//把第m只猴子踢出去
        }else{
            array_push($arr,$arr[$i]);//把第m只猴子放在最后面
            unset($arr[$i]);//删除
        }
        $i++;
    }
    return $arr[$i];//返回结果
}
//var_dump((monkey(6,4)));//测试，输出编号
echo "猴子大王的编号是".intval((monkey(6,8)))."<br>";



function monkey3($m,$n){
    for($i=1;$i<$m+1;$i++){
        $arr[]=$i;
    }
    $i=0;
    while(count($arr)>1){
        if(($i+1)%$n==0){
            unset($arr[$i]);
        }else{
            array_push($arr,$arr[$i]);
            unset($arr[$i]);
        }
        $i++;
    }
    return $arr[$i];
}
echo "猴子大王的编号是".intval((monkey(6,8)))."<br>";













die;
$i=1;
while($i++){
    if(($i-1)%5==0){ //第一个人
        $m = ($i-1)-($i-1)/5;
        if(($m-1)%5==0){ //第二个人
            $n = ($m-1)-($m-1)/5;
            if(($n-1)%5==0){ //第三个人
                $o = ($n-1)-($n-1)/5;
                if(($o-1)%5==0){ //第四个人
                    $p = ($o-1)-($o-1)/5;
                    if(($p-1)%5==0){ //第五个人
                        $q = ($p-1)-($p-1)/5;
                        if(($q-1)%5==0){ //第二天
                            echo $i;
                            break;
                        }
                    }
                }
            }
        }
    }
}







?>