function printtime()
{
	var d=new Date();
	var hrs=d.getHours();
	var mins=d.getMinutes();
	var secs=d.getSeconds();
	var x=document.getElementById("time");
	x.innerHTML="Time "+hrs+":"+mins+":"+secs;
}