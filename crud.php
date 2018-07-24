<?php

$paramArray = [
	["name"=>"foo", "age"=>1],
	["name"=>"bob", "age"=>5],
	["name"=>"lam", "age"=>3],
	["name"=>"gum", "age"=>9],
];

/**
 * a Function that takes an associative array of people with names and ahes and returns an average age.
 *
 * @param array $personsArray an array of people
 * @return int $averageAge average age of people in the array
 */

function averageAge(array $personsArray) : float{

	$totalAge = 0;

	foreach($personsArray as $person) {

		//PHP_EQL creates a new line when outputting values from the script
		echo $person["name"] . " is " . $person["age"] . PHP_EOL;
		$totalAge += $person["age"];
	}
		//make sure the $totalAge is correct number
		echo"total age is " . $totalAge . PHP_EOL;


	return ($totalAge / count($personsArray));

}

echo "the average age is " . averageAge($paramArray) . PHP_EOL;
