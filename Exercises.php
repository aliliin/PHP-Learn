<?php

// 编写一个带两个字符串并返回（true或false）的函数，无论它们是否为字谜。
// 'Dave Barry', 'Ray Adverb' ➞ true

$str = [1, 2, 3];
$str = 'ada';
$str = 'Ada';
$str = "Cat, dog, and mouse.";
if (is_string($str) && strlen($str) > 2) {
    $arr = str_split($str);
    $num = count($arr);
    if ($num === 3) {
        if ($arr[0] == $arr[2]) {
            echo "Two's a pair.";
            die;
        } else {
            echo $arr[2] . $arr[1] . $arr[0];
        }
    }
    if ($arr[0] === $arr[$num - 1]) {
        echo "Two's a pair.";
    }
    $newStr = '';
    foreach ($arr as $key => $string) {
        if ($key == $num) {
            var_dump(1);die;
        }
        $oneString = $string;
        var_dump($string);

    }

} else {
    echo "Incompatible";
}
die;
echo preg_match('/^(\d{6}|\d{4})$/', $pin);

// 创建一个带有正数和负数数组的函数。返回一个数组，其中第一个元素是正数的计数，第二个元素是负数的总和。
// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]  ➞ [10, -65];
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

if (empty($arr)) {
    return [];
}
$positiveNumber = 0;
$negative       = 0;
foreach ($arr as $key => $str) {
    if ($str >= 0) {
        $positiveNumber++;
    }
    if ($str < 0) {
        $negative += $str;
    }
}
var_dump($positiveNumber);
var_dump($negative);
die;

//"%fd76$fd(-)6GvKlO." ➞ "fd76fd-6GvKlO"
$str = 'The quick brown fox';
$arr = str_split($str);

$newStr = '';
foreach ($arr as $key => $string) {
    if (ctype_alnum($string)) {
        $newStr .= $string;
    } elseif ($string == '_' || $string == '-' || $string == ' ') {
        $newStr .= $string;
    }
}
echo $newStr;die;
class Decbin
{
    public static function countOneNumber($number)
    {
        return substr_count(decbin($number), 1);
    }
}
$number    = 1234567890;
$newNumber = Decbin::countOneNumber($number);
echo $newNumber;
die;
// 创建一个函数，该函数接受一个项目数组，删除所有重复的项目，并以与旧数组相同的顺序返回一个新数组（减去重复项
// ["John", "Taylor", "John"] ➞ ["John", "Taylor"]
// [1, 0, 1, 0] ➞ [1, 0]
// ['The', 'big', 'cat'] ➞ ['The', 'big', 'cat']

$arr = ['John', 'Taylor', 'John', 'john'];
print_r(array_values(array_unique($arr)));
die;
// 给定一个数字数组，编写一个函数，该函数返回一个数组…
// [1, 4, 4, 4, 4, 4, 3, 2, 1, 2] ➞ [1, 2, 3, 4]
$arr = [6, 7, 3, 2, 1];
$arr = array_unique($arr);
sort($arr);
print_r($arr);
die;
//创建一个函数，用于交替字符串中字母的大小写。
// Hello" ➞ "HeLlO
$str    = 'OMG!!! This website is awesome!!';
$result = '';
$upper  = true;
foreach (str_split(strtolower($str)) as $c) {
    $result .= $upper ? strtoupper($c) : $c;
    $upper = !$upper;
}
echo $result;
die;

var_dump($strArr);die;
echo mb_convert_case('Hello', MB_CASE_TITLE);
die;
$haystack = 'acbdx';
$needle   = 'bd';
echo test::strStr($haystack, $needle);

class test
{
    public function strStr($haystack, $needle)
    {
        $arr = explode($needle, $haystack);
        if (count($arr) > 1) {
            return strlen($arr[0]);
        } else {
            return -1;
        }
    }
}
die;
$arr = [2, -1, 4, 8, 10];
$arr = [-3, -4, -10, -2, -3];
echo array_sum(array_map('abs', $arr));
$num = 0;
foreach ($arr as $abs) {
    $num += abs($abs);
}
var_dump($num);
die;
//  创建一个接受字符串并返回其中包含的元音数量（计数）的函数。
//  "Celebration" ➞ 5

$str = "Celebration";
$num = strlen(preg_replace('/[^aeiou]/i', '', $str));
$num = preg_match_all('/[^aeiou]/i', $str);
var_dump($num);die;
// 隐藏指定的字符串
// "4556364607935616" ➞ "############5616"

$str       = "64607935616";
$strNumber = strlen($str);
if ($strNumber < 4) {
    return $str;
}
$newStr = substr($str, -4);
return str_pad($newStr, $strNumber, '#', STR_PAD_LEFT);
die;
var_dump($newStr);
die;

// 创建一个获取数字数组并仅返回偶数值的函数。
//[1, 2, 3, 4, 5, 6, 7, 8] ➞ [2, 4, 6, 8];
$array1 = [1, 2, 3, 4, 5, 6, 7, 8];
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, function ($key) {
    return $key % 2 === 0;
}));
echo "Even:\n";
print_r(array_filter($array2, "even"));die;
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
var_dump(array_filter($arr, "even"));die;
// 创建一个函数，该函数将任何非负数作为参数，并以降序返回数字。降序是指从最高到最低排序。
// $this->assertEquals(977766200, sortDecending(670276097));
// 1254859723 ➞ 9875543221
$numbersStr = 670276097;
$arr        = str_split($numbersStr);
rsort($arr);
$str = implode($arr);
var_dump($str);
die;
// 创建一个采用字符串数组的函数。返回数组中恰好是四个字母的所有单词。
// ["Ryan", "Kieran", "Jason", "Matt"] ➞ ["Ryan", "Matt"]
$arr    = ["Ryan", "Kieran", "Jason", "Matt"];
$newArr = [];
foreach ($arr as $str) {
    if (strlen($str) == 4) {
        $newArr[] = $str;
    }
    continue;
}
var_dump($newArr);
die;
// 创建一个函数，该函数接受一组名称并返回一个首字母大写的数组。
$arr    = ['mARIANN', 'jOI', 'gEORGEANN'];
$newArr = [];
array_map('ucfirst', array_map('strtolower', $arr));
foreach ($arr as $str) {

    $str      = strtolower($str);
    $newArr[] = ucwords($str);
}
var_dump($newArr);die;
// 创建一个函数，该函数采用1到10之间的数字数组（不包括一个数字）并返回缺少的数字。
/*
[1, 2, 3, 4, 6, 7, 8, 9, 10] ➞ 5
 */
$arr = [7, 2, 3, 6, 5, 9, 1, 4, 8];

echo 55 - array_sum($arr);
die;
//   创建一个函数，该函数接受一个数字数组并返回一个数组，其中每个数字是其自身的总和+数组中的所有先前数字。
$arr = [3, 3, -2, 408, 3, 3];
// [3, 3, -2, 408, 3, 3] ➞ [3, 6, 4, 412, 415, 418]

$newArr = array();
$sum    = 0;
foreach ($array as $n) {
    $sum += $n;
    $newArr[] = $sum;
}
return $newArr;

// 创建一个带有数字数组的函数，并将平均值作为字符串返回。
$arr = [1, 0, 4, 5, 2, 4, 1, 2, 3, 3, 3];
echo round(array_sum($arr) / count($arr), 2);
die;
$arr = str_split("testing");
$num = count($arr);
if ($num % 2 === 0) {
    $num = $num / 2;
    echo substr('testing', $num - 1, 2);
} else {
    $num = ceil($num / 2);
    echo substr('testing', $num - 1, 1);
}

// var_dump(str_split(highLow("4 5 29 54 4 0 -214 542 -64 1 -3 6 -6")));

die;
// 创建一个接受字符串并返回一个字符串的函数，其中每个字符重复一次。
$variable = str_split("Shanghai");

$str = '';
foreach ($variable as $key => $value) {
    $str .= $value . $value;
}
echo $str;die;
die;

$arr = ["a", 1, "i", "o", "u"];
var_dump(array_filter($arr, 'is_integer'));
die;
if (isset($arr1)) {
    return $arr1;
} else {
    return [];
}

die;
function formatPhoneNumber($numbers)
{
    return vsprintf('(%d%d%d) %d%d%d-%d%d%d%d', $numbers);
}
echo formatPhoneNumber($numbers);
die;
