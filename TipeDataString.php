<?php

echo 'Nama : ';
echo 'Geisha Luthan Waldhani';
echo "\n";

echo "Nama : ";
echo "Geisha\t Lutfhan\t Waldhani\n";
echo "\n";

echo <<<TEXT
Ini adalah contoh string yang sangat panjang, dan juga
gak perlu ngetik  ENTER 
secara manual "bisa quote" juga (heredoc)
TEXT;

echo <<<'TEXT'
Ini adalah contoh string yang sangat panjang, dan juga
gak perlu ngetik  ENTER 
secara manual "bisa quote" juga (nowdoc)
TEXT;

?>