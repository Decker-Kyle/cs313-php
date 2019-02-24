<div>

<?php
try
{

	$statement = $db->prepare('SELECT id, title, firsttime, secondtime, timeperiod, content FROM note');
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo $row['title'];
		echo $row['firsttime'] . ' - ' . $row['secondtime'] . '<br />';
		echo $row['timeperiod'];
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