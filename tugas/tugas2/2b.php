<?php
for ($i = 1; $i <= 10; $i++) {
   $str = "";
   for ($j = 1; $j <= $i; $j++) {
       $str .= " $j";
   }
   echo "$str <br>";
}
?>