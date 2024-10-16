<?php
$langs = array("Lisp","Python","Java",
               "PHP","Perl");
if (in_array("PHP",$langs,true))
    echo "Надо бы изучить PHP<br>";
// выведет сообщение "Надо бы изучить PHP"
if (in_array("php",$langs, true))
    echo "Надо бы изучить php<br>";
// ничего не выведет, поскольку в массиве
// есть строка "PHP", а не "php"
?>
