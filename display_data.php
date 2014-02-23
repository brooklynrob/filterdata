<?php

// Include the connection file
include "db/connect.php";

$sql = "SELECT * FROM testdb.members ";

if (isset($_POST['search'])) {
	$search_term = mysql_real_escape_string($_POST['search_box']);
}

if ($search_term == "") {

}

	else {
		$sql .= "WHERE NAME = '{$search_term}' ";
		$sql .= " OR level = '{$search_term}'";
}

	

$query = mysql_query($sql) or die(mysql_error());


?>

<form name="search_form" method="POST" action="display_data.php">

Search (Enter blank to search all): <input type="text" name="search_box" value="<?php echo $search_term ?>" />
<input type="submit" name="search" value="Search the table...">
</form>

You searched for&nbsp;"<?php echo $search_term ?>".
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



