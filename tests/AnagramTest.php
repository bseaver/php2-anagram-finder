<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_anagramFinder_blanks()
        {
            // Arrange
            $new_anagram = new Anagram;
            $word = "";
            $possible_list = array();
            $expected_result = array();

            // Act
            $actual_result = $new_anagram->anagramFinder($word, $possible_list);

            //Assert
            $this->assertEquals($expected_result, $actual_result);
        }
    }

?>
