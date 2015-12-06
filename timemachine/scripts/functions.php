<?php
$last = 0;
$tempmonth = $_POST["month1"].$_POST["month2"].$_POST["month3"];
$headlinedate = $_POST["month1"].$_POST["month2"].$_POST["month3"]." ".$_POST["day1"].$_POST["day2"].", ".$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];

switch ($tempmonth) {
    case "JAN":
        	$intdate = "81".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "FEB":
        	$intdate = "82".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "MAR":
        	$intdate = "83".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "APR":
        	$intdate = "84".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "MAY":
        	$intdate = "85".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "JUN":
        	$intdate = "86".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "JUL":
        	$intdate = "87".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "AUG":
        	$intdate = "88".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "SEP":
        	$intdate = "89".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "OCT":
        	$intdate = "10".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "NOV":
        	$intdate = "11".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    case "DEC":
        	$intdate = "12".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
    default:
            $intdate = "??".$_POST["day1"].$_POST["day2"].$_POST["year1"].$_POST["year2"].$_POST["year3"].$_POST["year4"];
        break;
        
} 
?>