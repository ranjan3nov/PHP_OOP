<?php
// String Operation Helper Static Class

// 1)  Create StringHelper Class
// 2) Define a method countVowel($content) Static Method
// 3) Count number of vowels in string

class StringHelper
{
    static public function countVowel($str)
    {
        $vowels = "AEIOUaeiou";
        $count = 0;
        try {

            // for ($i = 0; $i < strlen($vowels); $i++) {
            //     $count += substr_count($str, $vowels[$i]);

            // }
            foreach(str_split($vowels) as $char) {
                $count += substr_count($str, $char);

            }
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
        }
        echo $count;
    }
}
StringHelper::countVowel("Aeroplane");
StringHelper::countVowel("This is a String to Count Vowels");
