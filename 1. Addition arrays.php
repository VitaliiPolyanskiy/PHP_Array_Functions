﻿<?php
$a = array("и"=>"Информатика",
           "ф"=>"Физкультура");
$b = array("и"=>"История","б"=>"Биология",
           "ф"=>"Физика");
$c = $a + $b;
$d = $b + $a;
print_r($c);
/* получим: Array([и]=>Информатика
   [ф]=>Физкультура [б]=>Биология) */
print_r($d);
/* получим: Array([и]=>История
   [б]=>Биология [ф]=>Физика) */
?>