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
<link href="css/paper.css" rel="stylesheet" type="text/css" media="screen" />

<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

<script type="text/javascript" language="Javascript" SRC="scripts/presentDate.js"></script>
<script type="text/javascript" language="Javascript" SRC="scripts/destinationInput.js"></script>
<script type="text/javascript" language="Javascript" SRC="scripts/functions.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
// Get The URL Variables
	var hash = getUrlVars();
  	var last = hash['Last'];
  	var now = hash['Now'];
  	var redir = "Limbo/index.html?e="+last+now;
// Check for URL tampering
if (last.length != 9){ window.location = redir; }
if (now.length != 9){ window.location = redir; }
if(!isNumber(last[3])){ window.location = redir; }
if(!isNumber(last[4])){ window.location = redir; }
if(!isNumber(last[5])){ window.location = redir; }
if(!isNumber(last[6])){ window.location = redir; }
if(!isNumber(last[7])){ window.location = redir; }
if(!isNumber(last[8])){ window.location = redir; }
if(!isNumber(now[3])){ window.location = redir; }
if(!isNumber(now[4])){ window.location = redir; }
if(!isNumber(now[5])){ window.location = redir; }
if(!isNumber(now[6])){ window.location = redir; }
if(!isNumber(now[7])){ window.location = redir; }
if(!isNumber(now[8])){ window.location = redir; }
if(last[3] > 3){ window.location = redir; }
if(last[3] == 3 && last[4] > 1){ window.location = redir; }
if(now[3] > 3){ window.location = redir; }
if(now[3] == 3 && now[4] > 1){ window.location = redir; }
if (!isMonth(last)){ window.location = redir; }
if (!isMonth(now)){ window.location = redir; }
</script>
</head>
<body>
<?php require("scripts/connect.php");
$date = $_GET["Last"];
 //CHECK TO SEE IF DAY HAS BEEN VISITED  ------------------------
$sql="SELECT day FROM days";
if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    // Got Data now Compare
    if($row[0] == $date){ $match = 1; break; } else { $match = 0; }
    }
  // Free result set
  mysqli_free_result($result);
} else { printf ("Didn't get day FROM days"); }
 //IF NO MATCH CREATE DEFAULT DATA <DAY, HEADLINE, LOG, IMAGENAME, IMAGE> IN DATABASE  ------------------------
 if($match == 0){
  $headline = "YOU ARE THE FIRST TO VISIT THIS DAY";
  $log = "THE NEWS IS UNWRITTEN SAY SOMETHING ABOUT THIS DAY";
  $imagename = null;
  $image = null;
  //echo 'creating data now';
  $sql = "INSERT INTO days (day, headline, log, imagename, image)
			VALUES ('$date', '$headline', '$log', '$imagename', '$image')";

	if ($conn->query($sql) === TRUE) {
    	//echo "Created Record";
	} else {
   	 echo "Error: " . $sql . "<br>" . $conn->error;
	}
 } else {
 //UPDATE VALUES FROM POST VALUES TO DATABASE MAY HAVE TO DESIGNATE SOURCE?  ------------------------ 
if("" == trim($_POST['headline'])){
	//echo 'NO POST DATA';
} else {
	// POST DATA SO UPDATE
	$headline = $_POST["headline"];
	$log = $_POST["log"];
	//image properties
  	$file = $_FILES['image']['tmp_name'];
  	if($file == null){
  		//echo "Please Select an Image";
  	} else {
  		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  		$imagename = $_FILES['image']['name'];
  					$sql = "UPDATE days SET imagename='$imagename', image='{$image}' WHERE day='$date'";
					if (mysqli_query($conn, $sql)) {
   	 				//echo "Record updated successfully";
					} else {
   		 				echo "Error updating record: " . mysqli_error($conn);
					}
	}
	$sql = "UPDATE days SET headline='$headline', log='$log' WHERE day='$date'";
	if (mysqli_query($conn, $sql)) {
   	 //echo "Record updated successfully";
	} else {
   		 echo "Error updating record: " . mysqli_error($conn);
	}
}
}
 $conn->close();
?>
<div id="container" class="container_12">
<div id="paperheader" class="grid_12">
<script type="text/javascript">
document.write("<a href=\"time.php?Last="+now+"&Now="+last+"\"><img class=\"upperimg\" src=\"images/getin.png\" width=\"100\"></a>" );
</script>
<center><h1>THE DAILY NEWS</h1></center>
<center><hr></center>
<center><h2>
<?php 
	$date = $_GET["Last"];
	$month = $date[0].$date[1].$date[2];
  	$day = $date[3].$date[4];
  	$year = $date[5].$date[6].$date[7].$date[8];
  	echo $month.' '.$day.' '.$year;
?>
</h2></center>
<center><hr></center>
<br><br>
<?php
echo '<form action="paper.php?Last='.$_GET["Last"].'&Now='.$_GET["Now"].'" id="timeform" method="post" enctype="multipart/form-data" accept-charset=\"utf-8\">';
?> 
<center>
<?php require("scripts/connect.php");
// QUERY AND DISPLAY HEADLINE FROM MATCHED RECORD --------------------------------------
$date = $_GET["Last"];
$sql="SELECT headline FROM days WHERE day = '$date'";

if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo '<input type="text" name="headline" value="'.$row[0].'">';
    }
  // Free result set
  mysqli_free_result($result);	
  $conn->close();
} 
?>
</center>
<div id="col1" class="grid_6 alpha">
<br>
<center>
     Select image to upload:
    <input type="file" name="image">
</center>
<br>
<center>
<hr><br>
<?php require("scripts/connect.php");
// QUERY AND DISPLAY IMAGE FROM MATCHED RECORD --------------------------------------
$date = $_GET["Last"];
$sql="SELECT image FROM days WHERE day = '$date'";

if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo '<img src="data:image/jpg;base64,'.base64_encode($row[0]).'" width="450">';
    }
  // Free result set
  mysqli_free_result($result);	
  $conn->close();
} 
?>
<br><br><hr>
</center>
</div>
<div id="col2" class="grid_6 omega">
<br>
<center><input type="submit" value="ReWrite History">
<br><br>
<?php require("scripts/connect.php");
// QUERY AND DISPLAY LOG FROM MATCHED RECORD --------------------------------------
$date = $_GET["Last"];
$sql="SELECT log FROM days WHERE day = '$date'";
if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo '<textarea name="log" form="timeform">'.$row[0].'</textarea>';
    }
  // Free result set
  mysqli_free_result($result);	
  $conn->close();
} 
?>
</form>
</center>
</div>
</div><!-- end paperheader -->
<div id="footer" class="grid_12">
<center>
Copyright 2015 RightNowWebsites Denver Metro Web Design
</center>
</div><!-- end footer -->
</div><!-- end container -->
</body>
</html>
