<?php
$arr = array(1,2,3,4,5);
$sub_arr = array_slice($arr,2);
print_r($sub_arr);
/*
выведет Array ( [0] => 3 [1] =>4 [2] => 5 ),
т.е. подмассив, состоящий из элементов
3, 4, 5 */
$sub_arr = array_slice($arr,-2);
print_r($sub_arr);
   // выведет Array ( [0] => 4 [1] => 5 ),
   // т.е. подмассив, из элементов 4, 5
?>

<?php
$arr = array(1,2,3,4,5);
$sub_arr = array_slice($arr, 2, 2);
    // содержит массив из элементов 3, 4
print_r($sub_arr);

$sub = array_slice($arr,-3, 2);
    // тоже содержит массив из элементов 3, 4
print_r($sub);

$sub1 = array_slice($arr,0, -1);
    // содержит массив из элементов 1, 2, 3, 4
print_r($sub_arr);

$sub2 = array_slice($arr,-4, 2);
    // содержит массив из элементов 2, 3
print_r($sub2);
?>
