<?php
$title = $_POST['txtTitle'];
$firstTime = $_POST['firstTime'];
$SecondTime = $_POST['txtSecondTime'];
$timePeriod = $_POST['timeOfDay'];
$content = $_POST['content'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO note(title, firstTime, SecondTime, timePeriod, content) VALUES(:title, :firstTime, :SecondTime, :timePeriod, :content)';
	$statement = $db->prepare($query);
	$statement->bindValue(':title', $title);
	$statement->bindValue(':firstTime', $firstTime);
	$statement->bindValue(':SecondTime', $SecondTime);
	$statement->bindValue(':timePeriod', $timePeriod);
	$statement->bindValue(':content', $content);
	$statement->execute();
	
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: notes.php");
die(); 
?>