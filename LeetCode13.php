<?php
    class Solution {

        /**
         * @param String $s
         * @return Integer
         */
        function romanToInt($s) {
            $ans=0;
            $symbol=array("CM","CD","XC","XL","IX","IV","I","V","X","L","C","D","M");
            $value=array(900,400,90,40,9,4,1,5,10,50,100,500,1000);
            $i=0;
            while(!empty($s)){
                while(strpos($s,$symbol[$i])!==false){
                    if(substr_count($s,$symbol[$i])>1){
                        for($j=1;$j<=substr_count($s,$symbol[$i]);$j++){
                            $ans+=$value[$i];
                        }
                    }
                    else{
                        $ans+=$value[$i];
                    }
                    $s=str_replace($symbol[$i],'',$s);
                }
                if($i<12){
                    $i++;
                }
            }
            return $ans;
        }
    }
?>