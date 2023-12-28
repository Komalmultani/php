function valid()
{
    if(document.frm.email.value=="")
    {
        alert('Please enter your email Address')
        document.frm.email.focus();
        return false;
    }
    if(document.frm.password.value=="")
    {
        alert('Please enter your Password')
        document.frm.password.focus();
        return false;
    }
    if(document.frm.cpassword.value=="")
    {
        alert('Please enter your Confirmed Password')
        document.frm.cpassword.focus();
        return false;
    }

    if(document.frm.password.value=="")
    {
        alert('Please enter your Password')
        document.frm.password.focus();
        return false;
    }

    if(document.frm.phone.value=="")
    {
        alert('Please enter your Phone')
        document.frm.phone.focus();
        return false;

    }

    if(document.frm.img.value=="")
    {
        alert('Please select your images')
        document.frm.img.focus();
        return false;
    }
}