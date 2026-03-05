<?php
// load.php
$end = microtime(true) + 1.5; // 1.5초 정도 CPU 태우기
$x = 0;
while (microtime(true) < $end) {
  $x += crc32(random_bytes(1024));
}
echo "ok $x\n";
