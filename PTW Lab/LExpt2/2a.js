function check_usn(usn)
{	
	var pos=usn.search(/^[1-4][A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}$/);
	if(pos==0)
		alert("Valid USN!");
	else
		alert("Invalid USN!");
}