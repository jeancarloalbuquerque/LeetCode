<?php

class Solution {

    function plusOne($digits) {
        $this->reverseArray($digits);

        $index = 0;
        list($sum, $carry) = $this->sum($digits[$index], 1);

        $digits[$index] = $sum;
        
        while ($carry > 0) {
            list($sum, $carry) = $this->sum($digits[++$index] ?? 0, $carry);
            $digits[$index] = $sum;
        }
        
        $this->reverseArray($digits);
        
        return $digits;
    }

    function reverseArray(&$array) {
        $start = 0;
        $end = count($array) - 1;

        while ($start < $end) {
            $tmp = $array[$start];

            $array[$start] = $array[$end];
            $array[$end] = $tmp;

            $start++;
            $end--;
        }
    }

    function sum(int $number = 0, int $add = 0, int $carry = 0) {
        $number += $add;

        $sum = $number % 10;
        $carry = intdiv($number, 10);
                
        return array($sum, $carry);
    }

}
