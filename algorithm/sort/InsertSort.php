<?php
class InsertSort {

    /**
     * @desc class main func
     * @author wangchengfei
     * @param sort array
     * @ret array
     */
    public function sort(array $arr){
        if( count( $arr ) == 1 || !is_array( $arr )){
            return array();
        }

        $length = count($arr) - 1;
        for( $i = 1; $i <= $length; $i++ ){
            $key = $arr[$i];
            for( $j = $i-1; $j >= 0 && $arr[$j] > $key; $j-- ){
                $this->swap($arr, $j, $j+1);
            }
            $arr[$j+1] = $key;
        }
        return $arr;
    }

    /**
     * @desc swap two num
     * @author wangchengfei
     * @param sort array
     * @ret array
     */
    private function swap(array &$arr, int $i, int $j){
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }
}

$testArr = array(1,3,5,9,10,3,2,5,8);
$sortObj = new InsertSort();
var_dump($sortObj->sort($testArr));
