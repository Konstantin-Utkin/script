<?php

    function SinOut($degrees, $minutes)
    {
         $pi = 3.14159265359;
         $i = 0;
         for($j = 0; $j < 600; $j=$j+$minutes)
         {
             echo "</br> min=".$j."	"; 
             for($i = 0; $i < 360; $i=$i+$degrees)
             {
                 $sinResult=number_format( sin(($i+$j/60)*$pi/180), 2 );
                 echo "	".$sinResult;
             }
         }
    }  

    SinOut(10, 6);
?>