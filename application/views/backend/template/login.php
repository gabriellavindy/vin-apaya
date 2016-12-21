<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Apaya - Photo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/admin/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body style="background-image: url(<?php echo base_url() ?>static/admin/img/bg-login6.jpg)">
<div class="logo"></div>
    <div class="login-block">
        <h1>Login</h1>
        <form action="<?php echo base_url('admin/login/validate'); ?>" method="post">
            <input type="text" value="" placeholder="Username" name="username" />
            <input type="password" value="" placeholder="Password" name="password" />
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
