<?php

namespace Hello;

class FizzBuzz
{
	public function getNumber($num)
	{
		if ($num % 15 == 0) {
			return "FizzBuzz";
		} elseif ($num % 5 == 0) {
			return "Buzz";
		} elseif ($num % 3 == 0) {
			return "Fizz";
		} else {
			return $num;
		}  

	}

}

?>