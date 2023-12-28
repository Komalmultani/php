var mydisp;
function mainFunt()
{
mydisp=setTimeout("displ()",1500);
}
function displ()
{
 document.getElementById("loader").style="display:none";
 document.getElementById("main-content").style="display:block";
 
}