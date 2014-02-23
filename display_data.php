<?php

// Include the connection file
include "connection.php";

$sql = "SELECT * FROM testdb.members WHERE name = 'Rob'";

$query = mysql_query($sql) or die(mysql_error());


?>

<table width="70%" cellpadding="5" cellspace="5">

<tr>
	<td><strong>ID</strong></td>
	<td><strong>Name<strong></td>
	<td><strong>Level<strong></td>


</tr>

<?php while ($row = mysql_fetch_array($query)) { ?>
<tr>
	<td><?php echo $row['ID']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['level']; ?></td>	

</tr>
<?php } ?>

</table>



