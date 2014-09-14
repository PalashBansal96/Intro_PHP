<?php
	$page_title="Login Page";
	if(isset($_SESSION['Login'])){            //If already logged in
		echo header("Location: index.php");
		exit();
	}

	require("header.php");
?>

<?php 

	$Users = array(
			"Palash" => "HeeHaw!",
			"Lohit" => "12345",
			"Nalin" => "passwords",
			"Divam" => "this_ones_mine"
		);
?>


<?php
	$Error = "";
	if(isset($_POST["User_Name"])){             // If login details sent by POST
		if(isset($Users[  $_POST["User_Name"]  ])){
			if( $Users[  $_POST["User_Name"]  ] == $_POST["Password"] ){  // Yay! Passwords Matched
				// Set Sessions Variable
				$_SESSION['Login']=True;
				$_SESSION['Name']=$_POST['User_Name'];
				//Could add more session feilds with dataases

				echo header("Location: index.php"); // Go to HomePage
			}
			else{
				$Error="User Name and Password does not match";
			}
		}
		else{
			$Error="User Name does not exist";
		}
	}

?>

<h1> Login Page </h1>

<?php //Logout Message

	if(isset($_GET["logout"])){  // Just for demo should use $_SESSION instead of $_GET
		if($_GET["logout"]==1){
?>

<div id="Logout_Message"> You have successfully logged out. </div>
<?php		} //inner if 
} //outer if
?>


<div id = "Error"> <?php echo $Error;?> </div>


<form action="login.php" method="POST">

User Name:<input type="text" name="User_Name" />
Password: <input type="password" name="Password"/>

<input type = "submit"> <!-- No need of Name here -->

</form>


<?php
	
	include("footer.php");
?>