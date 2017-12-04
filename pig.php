<?php
header("content-type:text/html;charset=utf8");
    function MakeCow($n) {
        static $num = 1;
        for($j=1; $j<=$n; $j++){
            if($j>=4 && $j<15) {
                $num++;
                MakeCow ($n-$j);
            }
            if($j==20){
                $num--;
                echo $num."<br>";
            }
        }
        return $num;
    }
   echo '十年后有'.MakeCow(4).'头牛';


    ?>
