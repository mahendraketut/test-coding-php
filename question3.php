<?php
$warna = ['merah', 'kuning', 'hijau'];

function changeColor()
{
    static $i = 0;
    global $warna;
    return $warna[$i++ % 3];
}

for ($i = 0; $i < 10; $i++) {
    echo changeColor() . "\n";
}
