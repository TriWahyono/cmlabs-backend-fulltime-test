<?php
echo "No.1 \n 
Buat loop yang mencetak angka 1-100, JIKA kelipatan 3 maka outputnya Fizz , JIKA kelipatan 5 outputnya Buzz dan JIKA kelipatan 3 dan 5 keluarkan FizzBuzz
\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
echo "================================================ \n";

?>
