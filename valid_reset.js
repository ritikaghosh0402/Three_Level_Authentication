function valid_func(){
    var vm=document.forms["set"]["Email"].value;

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
    alert("submitted");
    return true;
}