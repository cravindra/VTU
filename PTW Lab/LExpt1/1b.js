function getSquare(num)
{
	var output="";
	if(num<0||num==null||isNaN(num))
	{
		alert("Invalid input!");
		return;
	}
	document.write("<h1>Square series for "+num+" terms:</h1><br/>");
	for(var i=1;i<=num;i++)
	{
		output+="\n"+i+": "+i*i;
	}
	alert(output);

}