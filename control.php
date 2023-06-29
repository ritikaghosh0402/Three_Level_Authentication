<?php
include "dao.php";
/*==========================================================================================*/
/*========================================SIGN UP===========================================*/
/*==========================================================================================*/
if(isset($_POST['sign_pass'])) //for password signup
{
    $n=$_POST['Name'];
    $e=$_POST['Email'];
    $p=$_POST['Password'];
    $pass=array("n"=>$n,"e"=>$e,"p"=>$p);
    session_start();
    if($_SESSION['email']==$e)
    {
        header("Location:Sign_Color.php");
    }
    else if(email_check_pass($e)!=1)
    {
        if(sign_pass($pass))
        {
            session_start();
            $_SESSION['email']=$e;
            header("Location:Sign_Color.php");
        }
        else
        {
            header("Location:Sign_Pass.php");          
        }
    }
    else 
    {
        $v='f';
        header("Location:Sign_Pass.php?v=$v");
    } 
}
if(isset($_POST['sign_color'])) //for color signup
{
    $e=$_POST['email'];
    $c=$_POST['favclr'];
    $color=array("e"=>$e,"c"=>$c);
    if(sign_color($color))
    {
        session_start();
        $_SESSION['email']=$e;
        header("Location:Sign_Image.php");
    }
    else
    {
        header("Location:Sign_Color.php");          
    }
}
if(isset($_POST['sign_img']) && $_FILES['image']) //for image signup
{
    $e=$_POST['email'];
    $i=$_FILES['image'];
    $n=$i['name'];
    $t=$i['type'];
    $err=$i['error'];
    $s=$i['size'];
    $tmp=$i['tmp_name'];
    if($err==0)
    {
        if($s<=256700000)
        {
            $image=array("e"=>$e,"n"=>$n);
            if(sign_image($image))
            {
                if(move_uploaded_file($tmp,"uploaded_files/".$n))
                {
                    session_start();
                    $_SESSION['email']=$e;
                    header("Location:thank_you.php");
                }
                else
                {
                    header("Location:Sign_Image.php");
                }
            }
        }
        else
        {
            echo "<script>alert('file size is maximum');</script>";
        }
    }
    else
    {
        echo "<script>alert('there is some error');</script>";
    }
}
/*==========================================================================================*/
/*========================================LOGIN=============================================*/
/*==========================================================================================*/
if(isset($_POST['log_pass'])) //for password login
{
    $e=$_POST['Email'];
    $p=$_POST['Password'];
    $pass=array("e"=>$e,"p"=>$p);
    if(log_pass($pass))
    {
        session_start();
        $_SESSION['email']=$e;
        header("Location:Log_Color.php");
    }
    else
    {
        header("Location:Log_Pass.php");          
    }
}
if(isset($_POST['log_color'])) //for color login
{
    $e=$_POST['email'];
    $c=$_POST['favclr'];
    $color=array("e"=>$e,"c"=>$c);
    if(log_color($color))
    {
        session_start();
        $_SESSION['email']=$e;
        header("Location:Log_Image.php");
    }
    else
    {
        header("Location:Log_Color.php");          
    }
}
if(isset($_POST['log_img']) && $_FILES['image']) //for color image
{
    $e=$_POST['email'];
    $i=$_FILES['image'];
    $n=$i['name'];
    $tmp=$i['tmp_name'];
    $image=array("e"=>$e,"n"=>$n);
            if(log_image($image))
            {
                session_start();
                $_SESSION['email']=$e;
                header("Location:welcome.php");
            }
            else
            {
                header("Location:Log_Image.php");          
            }
}
/*==========================================================================================*/
/*========================================LOGOUT============================================*/
/*==========================================================================================*/
if(isset($_GET['name'])=="out")
{
    session_start();
    session_unset();
    header("Location:Home.php");
}
/*==========================================================================================*/
/*===================================FORGOT PASSWORD========================================*/
/*==========================================================================================*/
if(isset($_POST['sub_mail'])) //otp generation
{
    $e=$_POST['Email'];
    if(email_check_pass($e))
    {
        if(get_otp($e))
        {
            // echo "store";
            session_start();
            $_SESSION["mail"]=$e;
            header("Location:OTP.php");
        }
        else
        {
            // echo "not store";
            header("Location:Forgot_Pass.php");
        }
    }
    else
    {
        echo "<script>alert('Your email id does not exist');</script>";
    }
}
if(isset($_POST['sub_otp'])) //email varification
{
    $e=$_POST['email'];
    $otp=$_POST['otp'];
    $arr=array("e"=>$e,"otp"=>$otp);
    if(verify_otp($arr))
    {
        session_start();
        $_SESSION['mail']=$e;
        header("Location:Reset_Pass.php");
    }
    else
    {
        header("Location:OTP.php");
    }
}
if(isset($_POST['sub_pass'])) //reset password
{
    $e=$_POST['email'];
    $p=$_POST['pass'];
    $arr=array("e"=>$e,"p"=>$p);
    if(reset_pass($arr))
    {
        session_start();
        $_SESSION['mail']=$e;
        header("Location:Log_Pass.php");
    }
    else
    {
        header("Location:Reset_Pass.php");
    }
}
?>