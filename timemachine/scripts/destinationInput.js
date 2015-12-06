function changeToUpperCase(me){
me.value = me.value.trim().toUpperCase();

    if (me.value.length!=1){
        return;
    }
    var i;
    var elements = me.form.elements;
    for (i=0, numElements=elements.length; i<numElements; i++) {
        if (elements[i]==me){
             break;
        }
    }
    elements[i+1].focus();

}

function erase(me)
{
   me.value="";
   $("#firstly12").hide();

} 

function changeToUpperCaseLast(me){
me.value = me.value.trim().toUpperCase();

    if (me.value.length!=1){
    	$("#firstly12").hide();
        return;
    }
    var i;
    var elements = me.form.elements;
    for (i=0, numElements=elements.length; i<numElements; i++) {
        if (elements[i]==me){
             break;
        }
    }
    if (me.value.length==1){
    $("#firstly12").show();
	}
    elements[i+1].focus();
    

}

