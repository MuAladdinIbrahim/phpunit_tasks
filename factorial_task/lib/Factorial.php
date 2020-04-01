<?php
class Factorial
{
    public function cal_fac($num)
    {
        // using for loop
        // if ($num < 1 || is_float($num)) {
        //     return NULL;
        // } elseif ($num == 1) {
        //     return 1;
        // } else {
        //     $factorial = 1;
        //     for ($i = 1; $i <= $num; $i++) {
        //         $factorial = $factorial * $i;
        //     }
        //     return $factorial;
        // }

        //using recursion 
        if ($num == 1) {
            return 1;
        } elseif ($num < 1 || is_float($num)) {
            return NULL;
        } else {
            return $num * $this->cal_fac($num - 1);
        }
    }
}

// $fac = (new Factorial)->cal_fac(1.5);
// echo $fac . PHP_EOL;
