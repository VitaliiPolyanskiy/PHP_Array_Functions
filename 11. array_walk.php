﻿<?php

$books1 = array(
  "А.С. Пушкин"=>"Руслан и Людмила",
  "Л.Н. Толстой"=>"Война и мир",
  "М.Ю. Лермонтов"=>"Герой нашего времени");
// создаем функцию, которую хотим
// применить к элементам массива

function try_walk($val,$key,$data){
   echo "$data \"$val\" написал $key<br>";
}
// применяем ко всем элементам массива
// $books1 функцию try_walk
array_walk($books1,"try_walk","Роман");
?>
