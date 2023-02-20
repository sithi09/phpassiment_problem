


<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


function sort_strings_by_length($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}
$array = array("apple", "banana", "pear", "orange", "kiwi");
$sorted_array = sort_strings_by_length($array);
print_r($sorted_array);

function concatenate_strings_from_end($str1, $str2) {
    $length1 = strlen($str1);
    $length2 = strlen($str2);
  
    if ($length1 < $length2) {
      return $str2 . $str1;
    } else {
      $end_of_str1 = substr($str1, $length1 - $length2);
      return $end_of_str1 . $str2;
    }
  }
  $str1 = "Hello";
$str2 = "sithi";
$result = concatenate_strings_from_end($str1, $str2);
echo $result;

function remove_first_last_element($array) {
    $length = count($array);
  
    if ($length <= 2) {
      return array();
    } else {
      return array_slice($array, 1, $length - 2);
    }
  }
  $array = array(1, 2, 3, 4, 5);
$new_array = remove_first_last_element($array);
print_r($new_array); 

function contains_only_letters_and_whitespace($string) {
    if (preg_match('/^[a-zA-Z\s]+$/', $string)) {
      return true;
    } else {
      return false;
    }
  }
  $string1 = "It is a valid string";
$string2 = "It is an invalid string 879!";
$result1 = contains_only_letters_and_whitespace($string1);
$result2 = contains_only_letters_and_whitespace($string2);
echo $result1; 
echo $result2; 
echo "\n";


function find_second_largest($array) {
    $length = count($array);
  
    if ($length < 2) {
      return null;
    } else {
      $largest = $array[0];
      $second_largest = null;
  
      for ($i = 1; $i < $length; $i++) {
        if ($array[$i] > $largest) {
          $second_largest = $largest;
          $largest = $array[$i];
        } else if ($array[$i] < $largest && ($second_largest === null || $array[$i] > $second_largest)) {
          $second_largest = $array[$i];
        }
      }
  
      return $second_largest;
    }
  }

  $array = array(1, 2, 3, 4, 5);

$second_largest = find_second_largest($array);

echo $second_largest;


