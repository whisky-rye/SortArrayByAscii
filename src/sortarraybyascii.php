<?php
/**
 * @author  MysTic Zhong
 * 按照ascii码对一层数组按照健名排序
 * 排序规则
 * 1.先按字母 a-z
 * 2.同字母时大写优先 A先于a
 * 3.前面完全一样,最后有多余字符的排后
 * 4.本排序不考虑特殊符号含下划线和数字
 */
namespace mysticzhong;

class sortarraybyascii{

    private $standardAlphabet = [
        'A' => 1, 'a' => 2,
        'B' => 3, 'b' => 4,
        'C' => 5, 'c' => 6,
        'D' => 7, 'd' => 8,
        'E' => 9, 'e' => 10,
        'F' => 11, 'f' => 12,
        'G' => 13, 'g' => 14,
        'H' => 15, 'h' => 16,
        'I' => 17, 'i' => 18,
        'J' => 19, 'j' => 20,
        'K' => 21, 'k' => 22,
        'L' => 23, 'l' => 24,
        'M' => 25, 'm' => 26,
        'N' => 27, 'n' => 28,
        'O' => 29, 'o' => 30,
        'P' => 31, 'p' => 32,
        'Q' => 33, 'q' => 34,
        'R' => 35, 'r' => 36,
        'S' => 37, 's' => 38,
        'T' => 39, 't' => 40,
        'U' => 41, 'u' => 42,
        'V' => 43, 'v' => 44,
        'W' => 45, 'w' => 46,
        'X' => 47, 'x' => 48,
        'Y' => 49, 'y' => 50,
        'Z' => 51, 'z' => 52
    ];


    /**
     * 主入口方法
     * 使用仿冒泡排序进行比较
     */
    public function mainToSort($arr){

        $arrNum = count($arr);
        if ($arrNum == 0 || $arrNum == 1) {
            return $arr;
        }

        $keys = array_keys($arr);

        for($k=0; $k<$arrNum-1; $k++) {

            for($j=0; $j<$arrNum-1-$k; $j++){

                $strict = $this->strictAlphabet($keys[$j],$keys[$j+1]);
                if(!$strict){
                    $tmp = $keys[$j];
                    $keys[$j] = $keys[$j+1];
                    $keys[$j+1] = $tmp;
                }

            }

        }

        $resultArr = [];
        foreach ($keys as $k1 => $v1) {
            $resultArr[$v1] = $arr[$v1];
        }

        return $resultArr;
    }


    /**
     * 严格比较模式 只能比较两个单词之间
     * @return boolean 返回前单词顺序是否先于后单词 true=是 false=否
     */
    private function strictAlphabet($word1,$word2){

        $maxKeyLength = (strlen($word1) >= strlen($word2)) ? strlen($word1) : strlen($word2);
        for ($s=0; $s<$maxKeyLength; $s++){
            if(!isset($word1[$s])){ // 前单词较短
                return true;
            }

            if(!isset($word2[$s])){ // 后单词较短
                return false;
            }

            if($this->standardAlphabet[$word1[$s]] > $this->standardAlphabet[$word2[$s]]){
                return false;
            }else if($this->standardAlphabet[$word1[$s]] < $this->standardAlphabet[$word2[$s]]){
                return true;
            }
            // else{
                // pass
            // }
        }

        return true;
    }


}



