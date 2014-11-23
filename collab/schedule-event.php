<?PHP
require_once("./include/membersite_config.php");

//echo "month:" . $_GET["month"] . "day:" . $_GET["day"] . "Year:" . $_GET["year"];

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>

<script>
var timesOpen = ["9:30","8:00","11:00"];
var timesClosed = ["19:00","18:30","20:00"];
function genTable() {
     var body = document.getElementsByClassName("textbodylocation")[0];
        tbl  = document.createElement('table');
    tbl.style.width='100px';
    tbl.style.border = "1px solid black";

    for(var i = 0; i < 3; i++){
        var tr = tbl.insertRow();
        for(var j = 0; j < 4; j++){
            if(j==0) {
                var td = tr.insertCell();
                td.appendChild(document.createTextNode('Desk ' + i))
                td.style.border = "1px solid black";
            }
            if(j==1) {
                var td = tr.insertCell();
                td.appendChild(document.createTextNode('Open From: ' + timesOpen[i]))
                td.style.border = "1px solid black";
            }
            if(j==2) {
                var td = tr.insertCell();
                td.appendChild(document.createTextNode('Open Until: ' + timesClosed[i]))
                td.style.border = "1px solid black";
            }
            if(j==3) {
                var td = tr.insertCell();
                var button = document.createElement('BUTTON');
                button.innerHTML = "Reserve";
                button.onclick = function(){ reserve(i); };
                td.appendChild(button);
                td.style.border = "1px solid black";
            }






        }
    }
    body.appendChild(tbl);
}

function reserve(num){
	alert("Your Schedule has been created.");

}
</script>


  <?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>

Start time:
  <select>
  <?PHP
  for ($x =0; $x < 24; $x++){
    echo "<option value='$x:00'>$x:00</option>";
    echo "<option value='$x:30'>$x:30</option>";
	}
?>
</select>
 
End time:
  <select>
  <?PHP
  for ($x =0; $x < 24; $x++){
    echo "<option value='$x:00'>$x:00</option>";
    echo "<option value='$x:30'>$x:30</option>";
	}
?>
</select>

<button onclick="genTable()">Find Available Rooms</button>








</center>
<?php include 'siteincludes/bodyend.php';?>
</center>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<?php include 'siteincludes/footer.php';?>
</body>
</html>
