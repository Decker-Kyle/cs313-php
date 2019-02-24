<div>

<?php
try
{

	$statement = $db->prepare('SELECT id, title, firstTime, SecondTime, timePeriod, content FROM note');
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo $row['title'];
		echo $row['firstTime'] . ' - ' . $row['SecondTime'] . '<br />';
		echo $row['timePeriod'];
		echo $row['content'];
		echo '</p><br />';

	}
}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
?>

</div>