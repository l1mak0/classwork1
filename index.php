<?php
//require "./autoload.php";
require "./Translate.php";

use translate_1\Translate as trans_1;
use translate_2\Translate as trans_2;

$t_1 = new trans_1();
$t_2 = new trans_2();


$t_1->trans();
echo "<br>";
$t_2->trans();