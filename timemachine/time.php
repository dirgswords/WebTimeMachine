<?php
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
function is_leap_year($year)
{
	return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}
if("" == trim($_POST['month1'])&&"" == trim($_POST['month2'])&&"" == trim($_POST['month3'])&&"" == trim($_POST['day1'])&&"" == trim($_POST['day2'])&&"" == trim($_POST['year1'])&&"" == trim($_POST['year2'])&&"" == trim($_POST['year3'])&&"" == trim($_POST['year4'])){
//do nothing as there is no post data to error check could be sourced from time.php or index.html as well
} else {
$m =$_POST["month1"].$_POST["month2"].$_POST["month3"];
$y =$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
$passvar = $m.$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
$dirurl = "Limbo/index.html?e=".$passvar;

if($_POST["day1"] > 3){ Redirect($dirurl, false); }
if($_POST["day1"] == 3 && $_POST["day2"] > 1){ Redirect($dirurl, false); }
if(!is_numeric($_POST["day1"])){ Redirect($dirurl, false); }
if(!is_numeric($_POST["day2"])){ Redirect($dirurl, false); }
if(!is_numeric($_POST["year1"])){ Redirect($dirurl, false); }
if(!is_numeric($_POST["year2"])){ Redirect($dirurl, false); }
if(!is_numeric($_POST["year3"])){ Redirect($dirurl, false); }
if(!is_numeric($_POST["year4"])){ Redirect($dirurl, false); }

switch ($m) {
    case 'JAN':
        break;
    case 'FEB':
    	if(is_leap_year($y)){
    	if($_POST["day1"] == 3){ Redirect($dirurl, false); }
    	} else {
    	if($_POST["day1"] == 3){ Redirect($dirurl, false); }
    	if($_POST["day1"] == 2 && $_POST["day2"] > 8){ Redirect($dirurl, false); }
    	}
        break;
    case 'MAR':
        break;
    case 'APR':
    	if($_POST["day1"] == 3 && $_POST["day2"] == 1){ Redirect($dirurl, false); }
        break;
    case 'MAY':
        break;
	case 'JUN':
		if($_POST["day1"] == 3 && $_POST["day2"] == 1){ Redirect($dirurl, false); }
        break;
    case 'JUL':
        break;
    case 'AUG':
        break;
    case 'SEP':
    	if($_POST["day1"] == 3 && $_POST["day2"] == 1){ Redirect($dirurl, false); }
        break;
    case 'OCT':
        break;
    case 'NOV':
    	if($_POST["day1"] == 3 && $_POST["day2"] == 1){ Redirect($dirurl, false); }
        break;
    case 'DEC':
        break;
    default:
        Redirect($dirurl, false);
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Time Machine</title>
<link href="css/960.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/text.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="screen" />

<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

<script type="text/javascript" language="Javascript" SRC="scripts/presentDate.js"></script>
<script type="text/javascript" language="Javascript" SRC="scripts/destinationInput.js"></script>
<script type="text/javascript" language="Javascript" SRC="scripts/functions.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
// Get The URL Variables
	var hash = getUrlVars();
  	var last = hash['Last'];  
  	$(document).ready(function() {
		$("#firstly12").hide();
	}); 
</script>
</head>
<body>
<div id="container" class="container_12">
<div id="header" class="container_12">
</div><!-- end header container -->
<div id="subheader" class="grid_12">
</div><!-- end subheader -->

<div id="redheader1" class="grid_3">
<center><h1>MONTH</h1></center>
</div><!-- end redheader1 -->
<div id="redheader2" class="grid_1">
</div><!-- end redheader2 -->
<div id="redheader3" class="grid_2">
<center><h1>DAY</h1></center>
</div><!-- end redheader3 -->
<div id="redheader4" class="grid_1">
</div><!-- end redheader4 -->
<div id="redheader5" class="grid_4">
<center><h1>YEAR</h1></center>
</div><!-- end redheader5 -->
<div id="redheader6" class="grid_1">
</div><!-- end redheader6 -->
<!-- START DESTINATION TIME -------------------------------- -->
<?php
if("" == trim($_POST['year1'])){ 
//echo '<form action="time.php?Last='.$_POST["month1"].$_POST["month2"].$_POST["month3"].$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"].'" method="post" accept-charset=\"utf-8\">';
echo '<form action="time.php?Last='.$_GET["Now"].'" method="post" accept-charset=\"utf-8\">';

} else { 
//echo '<form action="time.php?Last='.$_GET["Now"].'" method="post" accept-charset=\"utf-8\">';
echo '<form action="time.php?Last='.$_POST["month1"].$_POST["month2"].$_POST["month3"].$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"].'" method="post" accept-charset=\"utf-8\">';


}
?> 

<div id="firstly1" class="grid_1">
<center><h1><input type="text" name="month1" value="" maxlength="1" onkeyup="changeToUpperCase(this)" autofocus onfocus="erase(this)"></h1></center>
</div><!-- end firstly1 -->
<div id="firstly2" class="grid_1">
<center><h1><input type="text" name="month2" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly2 -->
<div id="firstly3" class="grid_1">
<center><h1><input type="text" name="month3" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly3 -->
<div id="firstly4" class="grid_1">

</div><!-- end firstly4 -->
<div id="firstly5" class="grid_1">
<center><h1><input type="text" name="day1" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly5 -->
<div id="firstly6" class="grid_1">
<center><h1><input type="text" name="day2" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly6 -->
<div id="firstly7" class="grid_1">

</div><!-- end firstly7 -->
<div id="firstly8" class="grid_1">
<center><h1><input type="text" name="year1" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly8 -->
<div id="firstly9" class="grid_1">
<center><h1><input type="text" name="year2" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly9 -->
<div id="firstly10" class="grid_1">
<center><h1><input type="text" name="year3" value="" maxlength="1" onkeyup="changeToUpperCase(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly10 -->
<div id="firstly11" class="grid_1">
<center><h1><input type="text" name="year4" value="" maxlength="1" onkeyup="changeToUpperCaseLast(this)" onfocus="erase(this)"></h1></center>
</div><!-- end firstly11 -->
<div id="firstly12" class="grid_1">
<center>
<input type="submit" width =75 value="ACCEL TO 88 MPH" >
</center>
</form>
</div><!-- end firstly12 -->
<div id="destinationtime" class="grid_12">
<div id="header1" class="grid_1">
<ul>
<li>MONTH</li>
<li>ABBRs:</li>
</ul>
</div><!-- end header1 -->
<div id="header2" class="grid_1">
<ul>
<li>JAN FEB</li>
<li>MAR APR</li>
<li>MAY JUN</li>
</ul>
</div><!-- end header2 -->
<div id="header3" class="grid_1">
<ul>
<li>JUL AUG</li>
<li>SEP OCT</li>
<li>NOV DEC</li>
</ul>
</div><!-- end header3 -->
<br><center><h1>DESTINATION TIME</h1></center><br>
</div><!-- end greenheader -->

<div id="redheader1" class="grid_3">
<center><h1>MONTH</h1></center>
</div><!-- end redheader1 -->
<div id="redheader2" class="grid_1">

</div><!-- end redheader2 -->
<div id="redheader3" class="grid_2">
<center><h1>DAY</h1></center>
</div><!-- end redheader3 -->
<div id="redheader4" class="grid_1">

</div><!-- end redheader4 -->
<div id="redheader5" class="grid_4">
<center><h1>YEAR</h1></center>
</div><!-- end redheader5 -->
<div id="redheader6" class="grid_1">
</div><!-- end redheader6 -->
<!-- START PRESENT TIME -------------------------------- -->
<div id="secondly1" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['month1'])){  echo $_GET["Now"][0]; } else { echo $_POST["month1"]; }
?>
</h1></center>
</div><!-- end secondly1 -->
<div id="secondly2" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['month2'])){  echo $_GET["Now"][1]; } else { echo $_POST["month2"]; }
?>
</h1></center>
</div><!-- end secondly2 -->
<div id="secondly3" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['month3'])){  echo $_GET["Now"][2]; } else { echo $_POST["month3"]; }
?>
</h1></center>
</div><!-- end secondly3 -->
<div id="secondly4" class="grid_1">

</div><!-- end secondly4 -->
<div id="secondly5" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['day1'])){  echo $_GET["Now"][3]; } else { echo $_POST["day1"]; }
?>
</h1></center>
</div><!-- end secondly5 -->
<div id="secondly6" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['day2'])){  echo $_GET["Now"][4]; } else { echo $_POST["day2"]; }
?>
</h1></center>
</div><!-- end secondly6 -->
<div id="secondly7" class="grid_1">

</div><!-- end secondly7 -->
<div id="secondly8" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['year1'])){  echo $_GET["Now"][5]; } else { echo $_POST["year1"]; }
?>
</h1></center>
</div><!-- end secondly8 -->
<div id="secondly9" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['year2'])){  echo $_GET["Now"][6]; } else { echo $_POST["year2"]; }
?>
</h1></center>
</div><!-- end secondly9 -->
<div id="secondly10" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['year3'])){  echo $_GET["Now"][7]; } else { echo $_POST["year3"]; }
?>
</h1></center>
</div><!-- end secondly10 -->
<div id="secondly11" class="grid_1">
<center><h1>
<?php
if("" == trim($_POST['year4'])){  echo $_GET["Now"][8]; } else { echo $_POST["year4"]; }
?>
</h1></center>
</div><!-- end secondly11 -->
<div id="secondly12" class="grid_1">
<?php
//MAY NEED MORE CONDITIONS FOR EXTRA ERROR CHECK
if("" == trim($_POST['month1'])){
echo '<center><a href="paper.php?Last='.$_GET["Now"].'&Now='.$_GET["Last"].'"><img src="images/getout.png" ></a></center>';
} else {
echo '<a href="paper.php?Last='.$_POST["month1"].$_POST["month2"].$_POST["month3"].$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"].'&Now='.$_GET["Last"].'"><img src="images/getout.png" ></a>';
}
?> 
</div><!-- end secondly12 -->
<div id="presenttime" class="grid_12">
<br><center><h1>PRESENT TIME</h1></center><br>
</div><!-- end presenttime -->

<div id="redheader1" class="grid_3">
<center><h1>MONTH</h1></center>
</div><!-- end redheader1 -->
<div id="redheader2" class="grid_1">
</div><!-- end redheader2 -->
<div id="redheader3" class="grid_2">
<center><h1>DAY</h1></center>
</div><!-- end redheader3 -->
<div id="redheader4" class="grid_1">
</div><!-- end redheader4 -->
<div id="redheader5" class="grid_4">
<center><h1>YEAR</h1></center>
</div><!-- end redheader5 -->
<div id="redheader6" class="grid_1">
</div><!-- end redheader6 -->
<div id="thirdly1" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[0] +"</h1></center>" );
</script>
</div><!-- end thirdly1 -->
<div id="thirdly2" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[1] +"</h1></center>" );
</script>
</div><!-- end thirdly2 -->
<div id="thirdly3" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[2] +"</h1></center>" );
</script>
</div><!-- end thirdly3 -->
<div id="thirdly4" class="grid_1">

</div><!-- end thirdly4 -->
<div id="thirdly5" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[3] +"</h1></center>" );
</script>
</div><!-- end thirdly5 -->
<div id="thirdly6" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[4] +"</h1></center>" );
</script>
</div><!-- end thirdly6 -->
<div id="thirdly7" class="grid_1">

</div><!-- end thirdly7 -->
<div id="thirdly8" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[5] +"</h1></center>" );
</script>
</div><!-- end thirdly8 -->
<div id="thirdly9" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[6] +"</h1></center>" );
</script>
</div><!-- end thirdly9 -->
<div id="thirdly10" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[7] +"</h1></center>" );
</script>
</div><!-- end thirdly10 -->
<div id="thirdly11" class="grid_1">
<script type="text/javascript">
document.write("<center><h1>" + last[8] +"</h1></center>" );
</script>
</div><!-- end thirdly11 -->
<div id="thirdly12" class="grid_1">
<center><img src="images/flux.gif" width="70" height="75"></center>
</div><!-- end thirdly12 -->
<div id="lasttime" class="grid_12">
<br><center><h1>LAST TIME DEPARTED</h1></center><br>
</div><!-- end lasttime -->
<div id="footer" class="grid_12">
<center>
Copyright 2015 RightNowWebsites Denver Metro Web Design
</center>
</div><!-- end footer -->
</div><!-- end container -->
</body>
</html>
