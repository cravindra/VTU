function getFibs(num)
{
	var fib1=0,fib2=1,fib=0;
	var output="";
	if(num<0||num==null||isNaN(num))
	{
		alert("Invalid input!");
		return;
	}
	document.write("<h1>Fibonacci for "+num+" terms:</h1><br/>");
	if(num==1)
		output+=fib1;
	else{
		output+=fib1+" "+fib2;
		if(num>2)
		{
			for(var i=2;i<num;i++)
			{
				fib=fib1+fib2;
				fib1=fib2;
				fib2=fib;
				output+=" "+fib;
			}
		}
	}
	document.write("<h2>"+output+"</h2><br/");

}