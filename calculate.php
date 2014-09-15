<?php
	$page_title="Home";
	require("header.php");
	if(isset($_GET['a'])==0||isset($_GET['sign'])==0||isset($_GET['b'])==0){
		echo header("Location: index.php");
	}
?>

<?php 
	$c=0;
	switch ($_GET['sign']) {
	case '+':
		$c=$_GET['a']+$_GET['b'];
		break;
	case '-':
		$c=$_GET['a']-$_GET['b'];
		break;
	case '*':
		$c=$_GET['a']*$_GET['b'];
		break;
	case '/':
	if ($_GET['b']!=0){
		$c=$_GET['a']/$_GET['b'];
	}
	break;
}

?>

<div> 
<?php echo $_GET['a']." ".$_GET['sign']." ".$_GET['b']." = ".$c; ?>
</div>

<?php
	
	include("footer.php");

?>