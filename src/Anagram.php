<?php
    class Anagram
    {
        function anagramFinder ($word, $possible_anagrams)
        {
            $result = array();

            if (!$word || count($possible_anagrams) == 0) {
                return $result;
            }

            if (count($possible_anagrams) == 1) {
                if ($word !== $possible_anagrams[0]) {
                    $wordls = str_split($word);
                    $possls = str_split($possible_anagrams[0]);
                    $inter = array_intersect($wordls, $possls);
                    if ($inter === $wordls) {
                        return $possible_anagrams;
                    }
                }
            }

            return $result;
        }
    }

?>
