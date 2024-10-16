<?php
echo "пример№1<br>";
$massiv[0] = "first";
$massiv[1] = "second";
$massiv[2] = "third";
$massiv[] = "fourth";
$massiv[] = "fifth";
$massiv[] = "sixth";
//count($ages) - встроенная функция, которая возвращает количество элементов массива.
for($i=0;$i<count($massiv);$i++)
{
	echo $massiv[$i]."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№2<br>";
$ar[25] = "first";
$ar[10] = "second";
$ar[49] = "third";
/*
foreach ( - цикл
   array_expression - имя массива
   as $key - сюда записывается ключ
    => $value- сюда записывается текущее значение
) statement
Когда заканчиваются элементы массива происходит выход из массива
*/
foreach($ar as $key => $val)
{
   echo  $key."  ".$val."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№3<br>";
$massiv2 = array("first", "second", "third");
$num = count($massiv2);
for($i = 0; $i < $num; $i++)
{
	echo $massiv2[$i]."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№4<br>";
$massiv3 = array(30 => "first",  15 => "second",  20 => "third");
foreach($massiv3 as $key => $val)
{
   echo  $key."  ".$val."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№5<br>";
$ar2["first"] = "Программирование";
$ar2["second"] = "Дизайн";
$ar2["third"] = "Администрирование";
$ar3 = array( "first" => "Программирование","second" => "Дизайн","third"=>"Администрирование");
reset($ar3);//для установки внутреннего указателя на первый в массиве элемент
/*
array each ( - используется для получения пары ключ-значение из текущего элемента
 		    массива. Возвращается массив содержащий информацию о текущем элементе.
array array - массив, откуда получается значение
)
void list ( - присваивает некоторому набору переменных некоторый набор значений.
 mixed ... - список переменных, в которые записываются значения.
)
Работает только на массивах с числовой нумерацией, где индекс начинается с 0
*/
while (list($key, $value) = each($ar3))
{
	echo "Элемент массива с ключом = ".$key." имеет значение = ".$value."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№6<br>";
$ar4=array(0=>array(34,89,56),1=>array(45,88,99));
  for($i=0; $i<count($ar4); $i++){
     for($j=0; $j<count($ar4[$i]); $j++){
        echo  $ar4[$i][$j]."&nbsp;";
     }
     echo "<br>";
  }
echo "<br><br>";
?>
<?php
echo "пример№7<br>";
/*
array array_fill (- заполняет массив начиная с индекса start_index
   int start_index,
   int num, - сколько раз записывать значения
   mixed value - значение, которое записывать
)
*/
$ar5=array_fill(0,7,"Значение для заполнения");
    for($i = 0; $i < count($ar5); $i++)
    {
      echo $ar5[$i]."<br>";
    }
echo "<br><br>";
?>
<?php
echo "пример№8<br>";
$ar6 = array_fill(12, 7, "Значение для заполнения");
foreach($ar6 as $key => $val)
{
   echo  $key."  ".$val."<br>";
}
echo "<br><br>";
?>
<?php
echo "пример№9<br>";
/*
array array_merge ( - соединяет два и более массивов. Возвращается объединенный массив.
   array array1,
   array array2
   [, array ...]
)
*/
$ar=array(2,67,90);
$ar2=array(32,43,450,2);
$rez = array_merge($ar, $ar2);
print_r($rez);
echo "<br><br>";
?>
<?php
echo "пример№10<br>";
/*
mixed array_search ( - ищет некоторое значение в массиве. В случае успеха
 				   возвращается ключ соответствующий значению.
mixed needle, - что ищется
array haystack - в чем ищется
[, bool strict] - если TRUE, то тогда array_search также проверяет на равенство типы
)
Если ищем строку, поиск производится с учетом регистра.
*/
$array = array(0 => 'blue', 1 => 'yellow', 2 => 'green', 3 => 'red');
echo $key = array_search('red', $array); // $key = 1;
echo "<br><br>";
?>
<?php
echo "пример№11<br>";
/*
void shuffle (  - мешает массив
array array - массив
)
int mt_rand - заполняет случайными числами
( [int min,
int max])
array range ( - заполняет массив диапазоном чисел
 int low,
 int high
[, int step]
)
*/
   $br = range(0,10);//
    for($i=0; $i<10; $i++)
    {
      echo $br[$i]."&nbsp;&nbsp;&nbsp;";
   }
   echo "<br><br>";
   for($i=0; $i<10; $i++)
   {
     $ar[$i]=mt_rand(0, 100);
   }
   shuffle($ar);
   for($i=0; $i<10; $i++){
      echo $ar[$i]."&nbsp;&nbsp;&nbsp;";
   }
   echo "<br><br>";
?>
<?php
 echo "пример№12<br>";
   /*
   bool sort ( - сортирует массив
	array array
	[, int sort_flags] - флаг для сортировки
 	SORT_STRING - сортировать как строки
	SORT_NUMERIC - как числа
	SORT_REGULAR - на основании типа
)
*/
   $ar = array ("Динамо"=>"Киев", "Спартак"=>"Москва","Шахтёр"=>"Донецк");
  sort($ar); //с потерей ключа
  foreach($ar as $key=>$val){
     echo $key."  ".$val;
     echo "<br>";
  }
  echo "<br><br>";
 ?>
 <?php
  echo "пример№13<br>";
  /*
  bool asort ( -сортирует массив с учетом ключей
	array array - массив
	[, int sort_flags]
		SORT_STRING - сортировать как строки
		SORT_NUMERIC - как числа
		SORT_REGULAR - на основании типа
)
*/
  $ar = array ("Динамо"=>"Киев", "Спартак"=>"Москва","Шахтёр"=>"Донецк");
  asort($ar); //без потери ключа
  foreach($ar as $key=>$val){
     echo $key."  ".$val;
     echo "<br>";
  }
  echo "<br><br>";
  ?>
  <?php
   echo "пример№14<br>";
   /*
   bool rsort ( - сортирует массив
	array array
	[, int sort_flags] - флаг для сортировки
 	SORT_STRING - сортировать как строки
	SORT_NUMERIC - как числа
	SORT_REGULAR - на основании типа
)
*/
   $ar = array ("Динамо"=>"Киев", "Спартак"=>"Москва","Шахтёр"=>"Донецк");
  rsort($ar); //с потерей ключа
  foreach($ar as $key=>$val){
     echo $key."  ".$val;
     echo "<br>";
  }
  echo "<br><br>";
 ?>
<?php
  echo "пример№15<br>";
  /*
  bool arsort ( -сортирует массив с учетом ключей
	array array - массив
	[, int sort_flags]
		SORT_STRING - сортировать как строки
		SORT_NUMERIC - как числа
		SORT_REGULAR - на основании типа
)
*/
  $ar = array ("Динамо"=>"Киев", "Спартак"=>"Москва","Шахтёр"=>"Донецк");
  arsort($ar); //без потери ключа
  foreach($ar as $key=>$val){
     echo $key."  ".$val;
     echo "<br>";
  }
  echo "<br><br>";
?>