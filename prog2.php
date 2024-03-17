<?php
// 1 Fill the array as follows: write 'x' into the first element, 'xx' into the second, 'xxx' into the third, and so on.
$arr = [];
$str = '';
for ($i = 1; $i <= 10; $i++) {
    $str .= 'x';
    $arr[] = $str;
}
 
// 2 Using two nested loops, fill the array as follows: write '1' in the first element, '22' in the second, '333' in the third, and so on.
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $str = '';
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
    $arr[] = $str;
}
 
// 3 We make a function arrayFill, which will fill the array with the given values. The first parameter function takes the value passed in for the array, and the second parameter is how many elements should be in the array. Example: arrayFill('x', 5) make array ['x', 'x', 'x', 'x', 'x'].
function arrayFill ( $str ,  $kol )
{
    $result = [];
    for ($i =1; $i <= $kol; $i++) {
        $result[] = $str;
    }
    return $result;
}
 
// 4 Given an array of numbers. Determine how many elements from the beginning of the array must be added to make the total more than 10. Read that the array has the required number of elements.
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$kol = 0;
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
    $kol++;
    if ($sum > 10) {
        break;
    }
}
echo $kol;
 
// 5 Given a two-dimensional array with numbers, for example [[1, 2, 3], [4, 5], [6]]. Find the composition of the elements of this array. The array, of course, can be arbitrary.
$sum = 0;
foreach ($arr as $item) {
    foreach ($item as $subItem) {
        $sum += $subItem;
    }
}

// 6 Given a three-dimensional array with numbers, for example [[[1, 2], [3, 4]], [[5, 6], [7, 8]]]. Find the composition of the elements of this array. The array, of course, can be arbitrary.
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sum = 0;
foreach ($arr as $elem) {
    foreach($elem as $subElem) {
        foreach($subElem as $subSubElem) {
            $sum += $subSubElem;
        }
    }
}
echo $sum;
 
// 7 Using two loops, we create the array [[1, 2, 3], [4, 5, 6], [7, 8, 9]].
$arr = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $count;
        $count++;
    }
}