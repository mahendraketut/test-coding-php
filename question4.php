<?php
$angka = [23, 44, 55, 87, 65];

function secondMaxValue($arr)
{
    rsort($arr);
    return $arr[1];
}

echo secondMaxValue($angka);
