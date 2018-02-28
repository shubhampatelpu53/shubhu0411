<?php
if($_GET["auth"] == md5(7)){
	session_start();
	
	session_destroy();
	header("location: index.html");

}
else{
	echo "You are Smart Enough";
}
?>
