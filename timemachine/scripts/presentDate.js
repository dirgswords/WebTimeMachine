// ------------------------- Get Present Date in MON DD YYYY for DeLorean ---------------------------- //
function getMonth1(){

var today = new Date();
var mm = today.getMonth()+1; //January is 0!

if(mm<10) {
    mm='0'+mm
} 

switch(mm) {
    case 01:
        return 'J';
        break;
    case 02:
        return 'F';
        break;
    case 03:
        return 'M';
        break;
    case 04:
        return 'A';
        break;
    case 05:
        return 'M';
        break;
    case 06:
        return 'J';
        break;
    case 07:
        return 'J';
        break;
    case 08:
        return 'A';
        break;
    case 09:
        return 'S';
        break;
    case 10:
        return 'O';
        break;
    case 11:
        return 'N';
        break;
    case 12:
        return 'D';
        break;
    default:
        return '?';
}
}

function getMonth2(){

var today = new Date();
var mm = today.getMonth()+1; //January is 0!

if(mm<10) {
    mm='0'+mm
} 

switch(mm) {
    case 01:
        return 'A';
        break;
    case 02:
        return 'E';
        break;
    case 03:
        return 'A';
        break;
    case 04:
        return 'P';
        break;
    case 05:
        return 'A';
        break;
    case 06:
        return 'U';
        break;
    case 07:
        return 'U';
        break;
    case 08:
        return 'U';
        break;
    case 09:
        return 'E';
        break;
    case 10:
        return 'C';
        break;
    case 11:
        return 'O';
        break;
    case 12:
        return 'E';
        break;
    default:
        return '?';
}
}

function getMonth3(){

var today = new Date();
var mm = today.getMonth()+1; //January is 0!

if(mm<10) {
    mm='0'+mm
} 

switch(mm) {
    case 01:
        return 'N';
        break;
    case 02:
        return 'B';
        break;
    case 03:
        return 'R';
        break;
    case 04:
        return 'R';
        break;
    case 05:
        return 'R';
        break;
    case 06:
        return 'N';
        break;
    case 07:
        return 'L';
        break;
    case 08:
        return 'G';
        break;
    case 09:
        return 'P';
        break;
    case 10:
        return 'T';
        break;
    case 11:
        return 'V';
        break;
    case 12:
        return 'C';
        break;
    default:
        return '?';
}
}

function getDay1(){

	var today = new Date();
	var dd = today.getDate();

	if(dd<10) {
   	 dd='0'+dd
	} else {
	 dd=dd+'0'
	}

	return dd[0];

}

function getDay2(){

var today = new Date();
var dd = today.getDate();

if(dd<10) {
    dd='0'+dd
} else {
	 dd=dd+'0'
}

return dd[1];

}
// Returns First Number in Current Year
function getYear1(){

var today = new Date();
var yyyy = today.getFullYear();
var yyyy = yyyy+"0"; // array conversion
return yyyy[0];

}

// Returns Second Number in Current Year
function getYear2(){

var today = new Date();
var yyyy = today.getFullYear();
var yyyy = yyyy+"0"; // array conversion
return yyyy[1];

}

// Returns Third Number in Current Year
function getYear3(){

var today = new Date();
var yyyy = today.getFullYear();
var yyyy = yyyy+"0"; // array conversion
return yyyy[2];

}

// Returns Forth Number in Current Year
function getYear4(){

var today = new Date();
var yyyy = today.getFullYear();
var yyyy = yyyy+"0"; // array conversion
return yyyy[3];

}

// Returns Whole Date in proper passing form

function getFullDate(){

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

switch(mm) {
    case 01:
        today = "JAN"+dd+yyyy;
		return today;
        break;
    case 02:
        today = "FEB"+dd+yyyy;
		return today;
        break;
    case 03:
        today = "MAR"+dd+yyyy;
		return today;
        break;
    case 04:
        today = "APR"+dd+yyyy;
		return today;
        break;
    case 05:
       	today = "MAY"+dd+yyyy;
		return today;
        break;
    case 06:
        today = "JUN"+dd+yyyy;
		return today;
        break;
    case 07:
        today = "JUL"+dd+yyyy;
		return today;
        break;
    case 08:
        today = "AUG"+dd+yyyy;
		return today;
        break;
    case 09:
        today = "SEP"+dd+yyyy;
		return today;
        break;
    case 10:
        today = "OCT"+dd+yyyy;
		return today;
        break;
    case 11:
        today = "NOV"+dd+yyyy;
		return today;
        break;
    case 12:
        today = "DEC"+dd+yyyy;
		return today;
        break;
    default:
        return '?';
}
}