<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Lava', 'Female', 'April 03, 2023', 'Edlan', 'EdlanLava@gmail.com', 'Pandacaqui', '09123456789');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Bully',
			'gender' => 'Male',
			'birthdate' => 'December 26, 2022',
			'owner' => 'Edlan',
			'email' => 'EdlanBully@gmail.com',
			'address' => 'Pandacaqui',
			'contact_number' => '09123456789'
		],
		[
			'name' => 'Shagy',
			'gender' => 'Male',
			'birthdate' => 'March 05, 2023',
			'owner' => 'Edlan',
			'email' => 'EdlanShagy@gmail.com',
			'address' => 'Pandacaqui',
			'contact_number' => '09123456789'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

