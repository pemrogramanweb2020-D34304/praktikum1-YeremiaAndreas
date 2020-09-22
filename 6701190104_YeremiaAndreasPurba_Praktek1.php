<?php  
echo "<center>";
echo "No.1" . "<br>";
$star = 5;
for ($a = 1; $a <= $star; $a++) {
  for ($b = 1; $b <= $a; $b++) {
    echo " &nbsp";
  }
  for ($c = $star; $c >= $a; $c -= 1) {
    echo "*";
  }
  echo "<br>";
}
echo "</center>";

echo "<center>";
echo "No.2" . "<br>";
$a = 10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo "*";
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}
echo "</center>";

echo "<center>";
echo " No.3" . "<br>";
for($a = 5; $a >= 1; $a--){
  for($b = 1; $b <= 1  - $a; $b++){
      echo " ";
  }
  for($k = 1; $k < $a;$k++){
      echo "$k";
  }
  for($l = $a; $l >=1; $l--){
      echo "$l";
  }
echo "<br>";
}
?> 