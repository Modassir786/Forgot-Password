<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="forget.css">





</head>
<body>

<div class="email_box" id="email_boxA">
    <form action="" method="post" name="forming">
        <div class="input_box"><input type="text" name="email" autocomplete="on" placeholder="Email" class="email_form"></div>
        <div class="input_box"><input type="submit" name="check" value="Submit" class="email_form btn"></div>
    </form>
</div>

<div class="email_box" id="email_boxB" style="display:none;">
    <form action="" method="post">
        <div class="input_box"><input type="text" name="code" autocomplete="off" placeholder="OTP" class="email_form"></div>
        <div class="input_box"><input type="submit" name="chk_otp" value="Submit OTP" class="email_form btn"></div>
    </form>
</div>

<div class="email_box" id="email_boxC" style="display:none;">
    <form action="" method="post">
        <div class="input_box"><input type="text" name="password" autocomplete="off" placeholder="New Password" class="email_form"></div>
        <div class="input_box"><input type="text" name="" autocomplete="off" placeholder="Re-enter New Password" class="email_form"></div>
        <div class="input_box"><input type="submit" name="updpassC" value="Reset Password" class="email_form btn"></div>
    </form>
</div>
<?php include('forgetSetting.php'); ?>
</body>
</html>