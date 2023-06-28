<?php
class ArrayCalculation {
    private $arr;

    public function __construct($arr) {
        $this->arr = $arr;
    }

    public function bubbleSort() {
        $n = count($this->arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($this->arr[$j] > $this->arr[$j + 1]) {
                    $temp = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$j + 1];
                    $this->arr[$j + 1] = $temp;
                }
            }
        }
        return $this->arr;
    }

    public function getMedian() {
        $n = count($this->arr);
        if ($n % 2 == 0) {
            return ($this->arr[$n / 2 - 1] + $this->arr[$n / 2]) / 2;
        } else {
            return $this->arr[$n / 2];
        }
    }

    public function getLargest() {
        return end($this->arr);
    }
}




?>