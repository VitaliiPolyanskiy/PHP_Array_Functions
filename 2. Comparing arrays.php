﻿<?php

$a = array("x"=> "Химия",
			"и"=>"Информатика",
           "м"=>"Математика");
$b = array("м"=>"Математика",
           "и"=>"Информатика",
           "x"=> "Химия");
$c = array("м"=>"Математика",
           "и"=>"Информатика",
           "x"=> "Химия");
if ($a == $b) echo "Массивы равны и";
  else echo "Массивы НЕ равны и ";
if ($a === $b) echo " эквивалентны";
  else echo " НЕ эквивалентны";
// получим echo "Массивы равны и НЕ эквивалентны"
if ($c == $b) echo "<br />Массивы равны и";
  else echo "<br />Массивы НЕ равны и ";
if ($c === $b) echo " эквивалентны";
  else echo " НЕ эквивалентны";
?>