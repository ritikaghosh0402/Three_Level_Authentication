<?php
include "database.php";
/*==========================================================================================*/
/*=================================EMAIL EXSISTING CHECK====================================*/
/*==========================================================================================*/
function email_check_pass($e) //check for duplicate email in pass
{
    $con=$GLOBALS['con'];
    $sql_check="select Email from password";
    $result=$con->query($sql_check);
    $emails=array();
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['Email']==$e)
            {
                return 1;
                break;
            }
        }
    }
}
/*==========================================================================================*/
/*========================================SIGN UP===========================================*/
/*==========================================================================================*/
function sign_pass($pass) //for password signup
{
    $n=$pass['n'];
    $e=$pass['e'];
    $p=$pass['p'];
    $con=$GLOBALS['con'];
    $sql="insert into password values(null,?,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("sss",$n,$e,$p);
    if($st->execute())
    {
        return 1;
    }
    else
    {
        return 0;
    }  
}
function sign_color($color) //for color signup
{
    $e=$color['e'];
    $c=$color['c'];
    $con=$GLOBALS['con'];
    $sql="insert into color values(null,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ss",$e,$c);
    if($st->execute())
    {
        return 1;
    }
    else
    {
       return 0;
    }
}
function sign_image($image) //for color signup
{
    $e=$image['e'];
    $n=$image['n'];
    $con=$GLOBALS['con'];
    $sql="insert into image values(null,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ss",$e,$n);
    if($st->execute())
    {
        return 1;
    }
    else
    {
       return 0;
    }
}
/*==========================================================================================*/
/*========================================LOGIN=============================================*/
/*==========================================================================================*/
function log_pass($pass) //for password login
{
    $e=$pass['e'];
    $p=$pass['p'];
    $con=$GLOBALS['con'];
    $sql="select Email,Password from password";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['Email']==$e && $row['Password']==$p)
            {
                return 1;
                break;
            }
        }
    }
}
function log_color($color) //for color login
{
    $e=$color['e'];
    $c=$color['c'];
    $con=$GLOBALS['con'];
    $sql="select Email,Color from color";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['Email']==$e && $row['Color']==$c)
            {
                return 1;
                break;
            }
        }
    }
}
function log_image($image) //for image login
{
    $e=$image['e'];
    $n=$image['n'];
    $con=$GLOBALS['con'];
    $sql="select Email,Image from image";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['Email']==$e && $row['Image']==$n)
            {
                return 1;
                break;
            }
        }
    }
}
/*==========================================================================================*/
/*========================================RESET PASSWORD====================================*/
/*==========================================================================================*/
function get_otp($e)
{
    $otp=rand(100000,999999);
    $to_email =$e;
    $subject = "One Time Password for Email Verification";
    $body = "Hi, This is your OTP-".$otp;
    $headers = "From:priyamaity869@gmail.com";
    
    if (mail($to_email, $subject, $body, $headers))
    {
        $s=1; //status
        $con=$GLOBALS['con'];
        $sql="insert into otp values(null,?,?,?)";
        $st=$con->prepare($sql);
        $st->bind_param("sii",$e,$otp,$s);
        if($st->execute())
        {
            return 1;
        }
        else
        {
            return 0;
        }  
    } else 
    {
        echo "Email sending failed...";
    }  
}
function verify_otp($arr)
{
    $e=$arr['e'];
    $otp=$arr['otp'];
    $con=$GLOBALS['con'];
    $sql="select Email,OTP,Status from otp";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['Email']==$e && $row['OTP']==$otp && $row['Status']==1)
            {
                return 1;
                break;
            }
        }
    }
}
function reset_pass($arr)
{
    $e=$arr['e'];
    $p=$arr['p'];
    $con=$GLOBALS['con'];
    $sql="update password set Password=? where Email=?";
    $st=$con->prepare($sql);
    $st->bind_param("ss",$p,$e);
    if($st->execute())
    {
        $s=0;
        $con=$GLOBALS['con'];
        $sql="update otp set Status=? where Email=?";
        $st=$con->prepare($sql);
        $st->bind_param("is",$s,$e);
        if($st->execute())
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    else
    {
        echo "Password can not update";
    }
}
?>