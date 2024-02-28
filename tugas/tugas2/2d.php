<style>
.box {
  display: inline-block;
    border: 1px solid black;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
}
</style>

<?php
for ($i = 0; $i < 5; $i++) {
    $str = "";
    for ($j = 0; $j < 5; $j++) {
        if (($i + $j) % 2 == 0) {
            $str .= "<div class='box' style='background-color: black;'> </div>";
        } else {
            $str .= "<div class='box' style='background-color: white;'> </div>";
        }
    }
    echo "$str <br>";
}
?>