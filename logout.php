<?php
	session_start();
    session_unset();  //generally till here is enough
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);

	echo header("Location: login.php?logout=1"); // Just for demo should use $_SESSION instead of $_GET
?>