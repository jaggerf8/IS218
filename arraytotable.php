<?php



public function arraytotable($array)
{
	echo "<table>";
	echo '<tr>';
	foreach($array[0] as $key=>$value)
	{
		echo "<th> $key </th>";
	}
	echo '</tr>';
	foreach($array as $row)
	{
		echo "<tr>";
		foreach($array as $column)
		{
			echo "<td> $column </td>";
		}
		echo "</tr>";
	}
	echo "</table>";

}



$array = array(
    array('first'=>'tom', 'last'=>'smith',
        'email'=>'tom@example.org', 'company'=>'example ltd'),
	        array('first'=>'hugh', 'last'=>'blogs',
		        'email'=>'hugh@example.org',
			'company'=>'example ltd'),
			            array('first'=>'steph',
				    'last'=>'brown',
				                'email'=>'steph@example.org',
						'company'=>'example
						ltd') )


echo arraytotable($array); 
?>

