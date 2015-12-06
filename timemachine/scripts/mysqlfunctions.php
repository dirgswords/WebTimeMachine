<div id="header" class="grid_12">
<center>
<?php require 'scripts/functions.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 //CHECK TO SEE IF DAY HAS BEEN VISITED  ------------------------
$sql="SELECT day FROM days";
if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    // Got Data now Compare
    if($row[0] == $intdate){ $match = 1; break; } else { $match = 0; }
    }
  // Free result set
  mysqli_free_result($result);
} else { printf ("Didn't get day FROM days"); }
    
if($match){ 
// MATCH SO DISPLAY HEADLINE FOR HEADER1 AND CURRENT LOG FOR HEADER 2
} else {
// NO MATCH SO CREATE RECORD INSERT DAY INTO DAYS WITH BLANK LOG
$tempheadline = "<h1>Headline for ". $headlinedate."</h1>";
$sql = "INSERT INTO days (day, headline)
VALUES ($intdate, '$tempheadline')";

	if ($conn->query($sql) === TRUE) {
    	//echo "Created Record";
	} else {
   	 echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
// QUERY AND DISPLAY HEADLINE FROM MATCHED RECORD --------------------------------------
$sql="SELECT headline FROM days WHERE day = $intdate";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ($row[0]);
    }
  // Free result set
  mysqli_free_result($result);	 
// GET ID ------------------------------------------------ ------------------------ 
$sql="SELECT id FROM days WHERE day = $intdate";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    $id = $row[0];
    }
  // Free result set
  mysqli_free_result($result);	
}
// GET UPDATE ------------------------------------------------ ------------------------ 
$update = $_POST["update"];
// QUERY AND UPDATE LOG FROM TEXTBOX FROM MATCHED RECORD --------------------------------------------------
if ($update != null)
{
$sql = "UPDATE days SET log='$update' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    $last = 1;
} else {
    //echo "Error updating record: " . mysqli_error($conn);
}
  // Free result set
  mysqli_free_result($result);
}  
$conn->close();
?>
</center>
</div><!-- end header -->
<div id="header2" class="grid_12">
<center>
<?php require 'scripts/functions.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
if($match){
// QUERY AND DISPLAY LOG FROM MATCHED RECORD --------------------------------------
$sql="SELECT log FROM days WHERE day = $intdate";

if ($result=mysqli_query($conn,$sql))
{
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ($row[0]);
    }
  // Free result set
  mysqli_free_result($result);	
} 
} else {
printf ("<h1>You are the first to travel to this date</h1>");
} 
$conn->close();
}
?>
</center>
</div><!-- end header2 -->
<div id="header3" class="grid_12">
<?php
echo '<form action="time.php?Last='.$_POST["month1"].$_POST["month2"].$_POST["month3"].$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"].'" method="post" accept-charset=\"utf-8\">';
//echo '<form action="paper.php?Last='.$_POST["month1"].$_POST["month2"].$_POST["month3"].$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"].'" method="post" accept-charset=\"utf-8\">';
?> 


  <input type="textbox" maxlength="250" autofocus name="update">
  <input type="submit" value="Update Headline">

</div><!-- end header3 -->
