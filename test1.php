<DOCTYPE html>
<html>
<body>
<?php
$n = 30; // 예시로 n = 10으로 설정합니다.
$sum = 0; // 합을 저장할 변수를 초기화합니다.
$product = 1; // 곱을 저장할 변수를 초기화합니다.

for ($i = 1; $i <= $n; $i++) {
  echo $i . " "; // 1부터 n까지의 숫자를 출력합니다.
  $sum += $i; // 합을 누적합니다.
  $product *= $i; // 곱을 누적합니다.
}

echo "<br>"; // 줄바꿈을 출력합니다.
echo "합: " . $sum . "<br>"; // 전체 합을 출력합니다.
echo "곱: " . $product . "<br>"; // 전체 곱을 출력합니다.
?>
</body>
</html>
