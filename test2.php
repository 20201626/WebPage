<?php

// 사용자로부터 n을 입력 받음
$n = intval(readline("Enter a number between 10 and 100: "));

// n이 10 이하거나 100 초과인 경우 오류 메시지 출력
if ($n < 10 || $n > 100) {
  echo "Error: n must be between 10 and 100.\n";
  exit();
}

// n개의 랜덤한 정수 생성
$numbers = [];
for ($i = 0; $i < $n; $i++) {
  $numbers[] = rand(10, 100);
}

// 생성된 숫자 출력
echo "Generated numbers: " . implode(", ", $numbers) . "\n";

// 숫자를 오름차순으로 소팅
sort($numbers);

// 소팅된 숫자 출력
echo "Sorted numbers: " . implode(", ", $numbers) . "\n";

?>
