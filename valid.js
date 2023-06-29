function valid_func(){
    var vn=document.forms["spass"]["Name"].value;
    var vm=document.forms["spass"]["Email"].value;
    var vp=document.forms["spass"]["Password"].value;
    var vcp=document.forms["spass"]["Confirm_Password"].value;

    if(vn==null||vn==" ")
    {
        document.getElementById('n').innerHTML="<div class='err_clr'>**Name is required**</div>";
        return false;
    }
    if(vm==null||vm==" ")
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**email id is required**</div>";
        return false;
    }
    if(vm.indexOf('@')<=0)
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**Invalid email id**</div>";
        return false;
    }
    if((vm.charAt(vm.length-4)!='.')&&(vm.charAt(vm.length-3)!='.'))
    {
        document.getElementById('e').innerHTML="<div class='err_clr'>**Invalid email id**</div>";
        return false;
    }
    if(vp==" "||vp==null)
    {
        document.getElementById('p').innerHTML="<div class='err_clr'>**Password is required**</div>";
        return false;
    }
    if(vcp==" "||vcp==null)
    {
        document.getElementById('cp').innerHTML="<div class='err_clr'>**Confirm your password**</div>";
        return false;
    }
    // if(vp.length<6)
    //     {
    //         document.getElementById('p').innerHTML="<div class='err_clr'>**Password should be in 6 character**</div>";
    //     return false;
    //     }
    //     if(vcp.length<6)
    //     {
    //         document.getElementById('cp').innerHTML="<div class='err_clr'>**Password should be in 6 character**</div>";
    //     return false;
    //     }
    // if(vp!=vcp)
    // {
    //     document.getElementById('cp').innerHTML="<div class='err_clr'>**Password did not match**</div>";
    //     return false;
    // }
    alert("submitted");
    return true;
}