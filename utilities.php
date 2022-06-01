<?php
class utilities
{
	static function trueUser()
	{
		if (!$_SESSION["id"] == "") {

		} else {
			header('Location: index.php');
		}
	}
	static function inactivity()
	{
		$inactividad = 50000;
		if(isset($_SESSION["timeout"])){
			$sessionTTL = time() - $_SESSION["timeout"];
			if($sessionTTL > $inactividad){
				session_destroy();

				header("Location: ./msgConfirmation.php");
				echo($sessionTTL);
			}
		}
		$_SESSION["timeout"] = time();
	}
	static function verificationLevel()
	{
		if ($_SESSION["verificationlevel"] == "" || $_SESSION["verificationlevel"] == "0") {
			header('Location: profile2.php');
		} elseif ($_SESSION["verificationlevel"] == "11") {
			header('Location: profile3.php');
		} elseif ($_SESSION["verificationlevel"] == "12") {
			header('Location: profile4.php');
		} elseif ($_SESSION["verificationlevel"] == "21") {
			header('Location: profile5.php');
		} elseif ($_SESSION["verificationlevel"] == "22") {
			header('Location: profile6.php');
		}
	}

}
