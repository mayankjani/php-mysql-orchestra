<?php
if(isset($_POST) && $_POST['save'])
{
	$city = $_POST['city'];

	$short = $_POST['shortcode'];

	$con = mysql_connect('a.db.shared.orchestra.io','user_7f77c07e','FYwnfb,GZ5^,wQ') or die("error");
	mysql_select_db("db_7f77c07e", $con) or die("error");
	$sql = "insert into city_table(name,short_name) values('$city','$short')";

	mysql_query($sql);
}
?>
<form name="city" action="city.php" method="post">
City: <input type="text" name="city"><br />
Short Code: <input type="text" name="shortcode"><br />
<input type="submit" name="save" value="SAVE">
</form>

