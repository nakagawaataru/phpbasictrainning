<?php

$a = array(
    0=>array(
        0=> 'AA',
        1=> 'AB',

    ),
    1=> array(
        0 => 'BA',
        1 => 'BB',
    ),
    2=> array(
        0 => 'CA',
        1 => 'CB',
    )
    );
foreach ($a as $key1 => $value1) {
foreach ($value1 as $key2 => $value2) {
    echo $key1 . "" . $key2 . "" . $value2 . "<br>";
}


//echo $key => $value . "<br>";
//var_dump($value);
//echo "<br>";

}


?>
