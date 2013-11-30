<?php

mysql_connect("localhost", "root");
mysql_select_db("world");


$LOOKUP = $_REQUEST['lookup'];

# execute a SQL query on the database
	$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
	//print $results;
	# loop through each country
	?> <countrydata> <?php
	while ($row = mysql_fetch_array($results)) {
	  ?>
	 
		<country>
			<name><?php echo"Country: " . $row["name"]; ?></name>
			<br>
			<ruler><?php echo "Head of State: ".$row["head_of_state"]; ?></ruler>
		</country>
	  <br>
	  <br>
	  <?php
	}
?>
	</countrydata>
