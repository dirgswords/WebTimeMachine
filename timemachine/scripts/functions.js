
// Get URL Variables
function getUrlVars()
{
    
var vars = [], hash;
var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
     for(var i = 0; i < hashes.length; i++)    
	{        
	hash = hashes[i].split('=');        
	vars.push(hash[0]);        
	vars[hash[0]] = hash[1];    
	}     
return vars;
}

function leapYear(year)
{
  return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
}

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function isMonth(m) {
var test = 1;
var mon= m[0]+m[1]+m[2];
var day= m[3]+m[4];
var year= m[5]+m[6]+m[7]+m[8];
switch(mon) {
    case "JAN":
        return test;
        break;
    case "FEB":
    	if(leapYear(year)){
    	if(m[3] == 3){ test=0; }
    	} else {
    	if(m[3] == 3){ test=0; }
    	if(m[3] == 2 && m[4] > 8){ test=0; }
    	}
        return test;
        break;
    case "MAR":
        return test;
        break;
    case "APR":
        if(m[3] == 3 && m[4] == 1){ test=0; }
        return test;
        break;
    case "MAY":
        return test;
        break;
    case "JUN":
        if(m[3] == 3 && m[4] == 1){ test=0; }
        return test;
        break;
    case "JUL":
        return test;
        break;
    case "AUG":
        return test;
        break;
    case "SEP":
        if(m[3] == 3 && m[4] == 1){ test=0; }
        return test;
        break;
    case "OCT":
        return test;
        break;
    case "NOV":
        if(m[3] == 3 && m[4] == 1){ test=0; }
        return test;
        break;
    case "DEC":
        return test;
        break;
    default:
    	test=0;
    	return test;
    	break;
        
}
}
