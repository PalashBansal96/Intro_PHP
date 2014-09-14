<?php
	session_start();

	if(isset($_SESSION['Login'])==False&&$page_title!="Login Page"){  // User is not yet logged in
		echo header("Location: login.php");
		exit();
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
	<head>
		<title><?php echo $page_title; ?></title>
		
		<!-- CSS include lines here NOT JS -->
		
	</head>
	
	<body>

<?php if(isset($_SESSION['Login'])){ ?>   <!-- Navigation Bar Code below (If we plan to add CSS)  -->
	Welcome <?php echo $_SESSION['Name'];?> <br/>
	<a href="logout.php">Logout</a>

<?php } ?>