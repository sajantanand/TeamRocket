	<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/dir/TeamRocket/collab/siteincludes/main.css">

</head>



	<table id="head">
		<tr><td>
			<center><h1 id="title">co//ab</h1></center>
			<ul>
				<li><a id="head" href="http://localhost/dir/TeamRocket/collab/home.php">Home</a></li>
				<li><a id="head" href="http://localhost/dir/TeamRocket/collab/moreinformation.php">More Information</a></li>
				<li><a id="head" href="http://localhost/dir/TeamRocket/collab/view-avail-cal.php">Calendar</a></li>
			

<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    echo "<li id='userInfo'><a id='userInfo' href='http://localhost/dir/TeamRocket/collab/login.php'> Login </a> <br/> <a id='userInfo2' href='http://localhost/dir/TeamRocket/collab/register.php'> Register now</a></li>";
    
}
else{

	echo "<li id='userInfo'> Hello, " . $fgmembersite->UserFullName() .  "<a id='userInfo' href='http://localhost/dir/TeamRocket/collab/logout.php'> Logout </a> </li>";
}

?>



			</ul>




		</td></tr>
	</table>
	<!--end head-->
	<br/><br/><br/>