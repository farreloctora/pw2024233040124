<style>
.box {
    display: inline-block;
    border: 1px solid black;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background-color: plum;
}
</style>

<?php
for ($i = 10; $i >= 1; $i--) {
  $str = "";
  for ($j = 1; $j <= $i; $j++) {
      $str .= "<div class='box'>$j</div>";
  }
  echo "$str <br>";
}
?>