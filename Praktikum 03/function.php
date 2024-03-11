<?php

function tambah ($nilai,$nilai2)
{
  echo $nilai + $nilai2;
}

tambah (1,2);
echo "<br>";
function hitungumur ($tahunLahir, $tahunSekarang = 2024)
{
    echo $tahunSekarang - $tahunLahir;
}

hitungumur(1920);