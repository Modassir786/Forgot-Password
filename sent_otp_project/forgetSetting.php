<?php
session_start();
if(isset($_POST['check'])){
include('dbcone.php');
$email=$_POST['email'];
$char="1234567890";
$code=substr(str_shuffle($char),0,6);
$checkout=mysqli_query($conn,"SELECT * FROM `sent_otp` WHERE email='$email'");
if(mysqli_num_rows($checkout)>0){
    $_SESSION['EMAIL']=$email;
    $_SESSION['VS_CODE']=$code;
    $gen_otp=mysqli_query($conn,"UPDATE `sent_otp` SET vs_code='$code' WHERE `sent_otp`.email='$email'");
    if($gen_otp){
        echo "OTP send successfully";
        echo "<script>document.getElementById('email_boxB').style.display='block';
        forming.gmail.value='';
        </script>";


        $html="
        <div style='width:100%; height:434px; background:khaki; position:fixed; top:0; left:0;'>
        <h1 style='text-align:center; color:blue; padding-top:15px; width:100%; background:silver; padding-bottom:13px;'>facebook</h1>
        <span style='font-size:18px; color:purple;margin-left:10px; margin-bottom:10px;'>Your Password has been forgotten?</span><br><br>
        <span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Email: $email</span><div><br>
        <span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Verification Code:<span style='color:blue;'> $code</span><br></span><data style='margin-left:10px; color:black;'><br><br><br><br><br><br><br><br><pre>   Programing dbsignup_data width<pre>   php,javascript,html,css,mysqli used in</data><br><span style='margin-top:100px; margin-left:10px;><pre>     <data>Emailed me:</data><a herf='mmodassirking25@gmail.com' stle='color:blue; margin-top:100px;'><pre>   mmodassirking25@gmail.com</a></span><br><pre>   <a href='https://www.facbook.com/'>https://kd23kj343.comcdn.io/php/index.php?</a><div>";


  include('insertotp.php');
    }
}else{
    echo "Invalid email or password?";
}
}
?>
<?php 
include('dbcone.php');
if(isset($_POST['chk_otp'])){
$code=$_POST['code'];

$email=$_SESSION['EMAIL'];


$check_otp=mysqli_query($conn,"SELECT * FROM `sent_otp` WHERE email='$email' and vs_code='$code'");
if(mysqli_num_rows($check_otp)>0){
    $modass=mysqli_query($conn,"UPDATE `sent_otp` SET vs_code='' WHERE `sent_otp` . email='$email'");
    echo "Sucess OTP";
    echo "<script>document.getElementById('email_boxC').style.display='block'; document.getElementById('email_boxA').style.display='none'; forming[0].reset();</script>";

}
else{
    echo "Invalid OTP";
    echo "<script>document.getElementById('email_boxB').style.display='block'; document.getElementById('email_boxA').style.display='none'; forming[0].reset();</script>";
}
}
?>
<?php 
include('dbcone.php');
if(isset($_POST['updpassC'])){
$password=$_POST['password'];

$email=$_SESSION['EMAIL'];
   
$lendi=mysqli_query($conn,"UPDATE `sent_otp` SET password='$password' WHERE `sent_otp` . email='$email'");
if($lendi){
     $_SESSION['PASSWORD']=$password;
}
}
?>