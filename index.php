<?php
class ArrayCalculation {
    private $arr;

    public function __construct($arr) {
        $this->arr = $arr;
    }

    public function bubbleSort(){
        $n = count($this->arr);

        for($i = 0; $i < $n - 1; $i++){ //4
            for($j = 0; $j < $n - $i -1; $j++){ //4
                if($this->arr[$j] > $this->arr[$j + 1]){
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

class ArrayOutput {
    private $calculate;

    public function __construct($arr) {
        $this->calculate = new ArrayCalculation($arr);
    }

    public function arrayOutput() {
        $this->calculate->bubbleSort();
        $median = $this->calculate->getMedian();
        $largest = $this->calculate->getLargest();
        return [$median, $largest];
    }
}

// Input array (parameters)
$arr = [5, 2, 9, 1, 7];

$sortArr = new ArrayCalculation($arr);
$sortedArr = $sortArr->bubbleSort();
$output = new ArrayOutput($arr);

$output->arrayOutput();
[$median, $largest] = $output->arrayOutput();

echo "Input array: [". implode(",", $arr). "]<br>";
echo "Sorted array: [". implode(",", $sortedArr). "]<br>";
echo "Median: " .$median. "<br>";
echo "Largest: " .$largest. "<br>";


?>