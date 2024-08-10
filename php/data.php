<?php

$connect = new PDO("mysql:host=localhost;dbname=vreserve", "root", "");

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{

		$query = "
		SELECT wildlife.Name, SUM(donations.Amount) AS Total 
		FROM wildlife JOIN donations ON donations.Wildlife_ID = wildlife.Wildlife_ID
		GROUP BY donations.Wildlife_ID
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'language'		=>	$row["Name"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}

?>