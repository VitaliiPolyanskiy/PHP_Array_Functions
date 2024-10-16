<?php
$persons = array("Иванов", "Петров",
    "Сидорова","Зайцева", "Волкова");
$triples = array_chunk($persons,3);
    // делим массив на подмассивы
    // по три элемента
foreach ($triples as $k => $table){
    // выводим полученные тройки
  echo "За столиком номер $k сидят: <ul>";
  foreach ($table as $pers)
     echo "<li>$pers";
  echo "</ul>";
}
?>
