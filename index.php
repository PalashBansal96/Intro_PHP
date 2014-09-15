<?php
	$page_title="Home";
	require("header.php");
?>

<form action="calculate.php" method="get">
<input type="number" name="a" /> <select name="sign"> <option value='+' >+</option> <option value='-' >-</option> <option value='*' >x</option> <option value='/' >/</option> </select> <input type="number" name="b" />
<input type="submit" value="Submit" />
</form>

<?php
	
	include("footer.php");

?>