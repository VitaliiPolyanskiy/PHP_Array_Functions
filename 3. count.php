<?php
$del_items = array(
	"langs" => array("10"=>"Python", "12"=>"Lisp"),
    "other"=>"Информатика");
echo count($del_items) . "<br>";
    // выведет 2
echo count($del_items,COUNT_RECURSIVE);
    // выведет 4
?>