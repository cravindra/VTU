
function moveTop(newTop)
{	p1=document.getElementById("p1").style.zIndex;
	p2=document.getElementById("p2").style.zIndex;
	p3=document.getElementById("p3").style.zIndex;
	var top=(p1>p2)?((p1>p3)?"p1":"p3"):((p2>p3)?"p2":"p3");
	document.getElementById(top).style.zIndex=0;
	newTop.style.zIndex=10;
	
}
