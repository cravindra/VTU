function check_usn(usn,sem)
{
	
	var pos1=usn.search(/^[1-4][A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}$/);
	var pos2=sem.search(/^[1-8]$/);
	//document.append("<p>USN :"+usn+"</p><p>pos: "+pos+"</p>");
	if(pos1==0 && pos2==0)
		alert("Valid USN and SEM!");
	else if(pos1==0)
		alert("Valid USN, invalid SEM!");
	else if(pos2==0)
		alert("Invalid USN, Valid SEM!");
	else
		alert("Invalid USN and SEM!");
}