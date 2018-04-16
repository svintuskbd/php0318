<?php

function customArrayMerge($arr1, $arr2)
{
    foreach ($arr2 as $key => $value) {
        if (is_string($key) && isset($arr1[$key])) {
            $arr1[$key] = $value;
        } else {
            if (is_string($key)) {
                $arr1[$key] = $value;
            } else {
                $arr1[] = $value;
            }
        }
    }

    return $arr1;
}

function customArrayUnique($arr)
{
    $resultArr = [];

    foreach ($arr as $value) {
        $count = 0;
        foreach ($resultArr as $item) {
            if ($value == $item) {
                $count++;
            }
        }
        if ($count == 0) {
            $resultArr[] = $value;
        }
    }
    return $resultArr;
}

function customTrim($string)
{
    $i = 0;
    $arr = [];
    while (isset($string{$i})) {
        $arr[] = $string{$i};
        $i++;
    }

    foreach ($arr as $key => $value) {
        if ($value == ' ') {
            unset($arr[$key]);
        } else {
            break;
        }
    }

    for ($q = count($arr); $q > 0; $q--) {
        if ($arr[$q] == ' ') {
            unset($arr[$q]);
        } else {
            break;
        }
    }

    $res = null;
    foreach ($arr as $v) {
        $res .= $v;
    }

    return $res;
}


function myTrim($str)
{
    $i = 0;
    $res = null;
    while ($str{$i}) {
        if ($str{$i} == " ") {
            $i++;
        } else break;

    }
    $j = $i;

    while ($str{$i}) {
        $i++;
    }

    while ($i > $j) {
        if ($str{$i - 1} == " ") {
            $i--;
        } else break;
    }

    while ($i > $j) {
        $res .= $str{$j};
        $j++;
    }
    var_dump($res);
}

function calc()
{
    if($_POST) {
        $operand = $_POST['operand'];
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];

        if ($operand == '*') {
            return $val1 * $val2;
        } elseif ($operand == '/' && $val2 != 0) {
            return $val1 / $val2;
        } elseif ($operand == '-') {
            return $val1 - $val2;
        } elseif ($operand == '+') {
            return $val1 + $val2;
        } elseif ($val2 == 0) {
            return 'Error!';
        }

        return 'Error';
    }

    return '';
}