<?php

function figureRomawi($angka)
{
    $angka = intval($angka);
    $result = '';

    $array = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($array as $roman => $value) {
        $matches = intval($angka / $value);

        $result .= str_repeat($roman, $matches);

        $angka = $angka % $value;
    }

    return $result;
}
?>
<?php
echo "<h1>".figureRomawi(1)."<h1>";
echo "<h1>".figureRomawi(10)."<h1>";
echo "<h1>".figureRomawi(1000)."<h1>";
echo "<h1>".figureRomawi(7)."<h1>";

?>