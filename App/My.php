<?php
namespace App;

class My
{
  

    public function first(array $myArray)
    {
        $tempArray = [];
		foreach($myArray as $key=>$value) {
			if(isset($tempArray[$value])) {
				echo "Found $value at index :{$tempArray[$value]} and {$key}";
				return true;
			}
			$tempArray[$value] = $key;
		}
		return false;
    }
	public function second(array $myArray, $k)
    {
        $tempArray = [];
		foreach($myArray as $key=>$value) {
			if(isset($tempArray[$value])) {
				echo "Found $value , " . ($k - $value) . " at index :{$tempArray[$value]} and {$key}";
				// I guess in real world we need index of numbers instead of numbers so I prefer to return indexes.
				return array($tempArray[$value], $key);
			}
			$tempArray[$k - $value] = $key;
		}
		return false;
    }
}
