function carttotal()
{

    var p=document.getElementById("price").value;
    var q=document.getElementById("qty").value;
    var t=p*q;
    document.getElementById("tot").innerHTML=t;
    document.getElementById("tot1").innerHTML=t;
}