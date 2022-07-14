<?PHP
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>website-hosting.eu.org</title>
<meta name="description" content="Free unlimited web hosting with PHP and MySQL">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> 
<link href="bootstrap.min.css" rel="stylesheet">
<style>
.block { background-color: #f1f1f1; border: 1px; border-style: solid; border-color: #e1e1e1; border-radius: 5px 5px 5px 5px; padding: 5px; margin: 5px; }
</style>
</head>
<body>
<a href="/index.php" class="btn btn-primary btn-block">website-hosting.eu.org</a><br>
<div class="container"><div class="row"><div class="col-md-6"><p>
<form class="block" action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login" >
<p><div class="btn btn-default">Sign In</div> <font color="gray"><small>Login</small></font></p>
<p><input class="form-control" placeholder="Username" name="uname" type="text" alt="username" required></p>
<p><input class="form-control" placeholder="Password" type="password" name="passwd" alt="password" required></p>
<p><input type="submit" name="Submit" value="Sign In" class="btn btn-primary"/></p>
</form></p></br></div>
<div class="col-md-6"><p>
<form class="block" method=post action="http://order.<?echo $yourdomain;?>/register2.php">
<p><div class="btn btn-default">Sign Up</div> <font color="gray"><small>Register</small></font></p>
<p><input class="form-control" placeholder="sub-Domain" type=text name=username value="" pattern="[a-z0-9]{4,15}" maxlength="16" required></p>
<p><input class="form-control" placeholder="Password" type=password name=password pattern=".{6,15}" maxlength="8" required></p>
<p><input class="form-control" placeholder="Email Address" type=text name=email pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" required></p>		
<p><input type=hidden name=id value="<?PHP echo $id; ?>">
<p><img class="btn btn-default" src="http://order.<? echo "$yourdomain" ;?>/image.php?id=<?PHP echo $id; ?>"> <font color="gray"><small>Security Code</small></font></p>
<p><input class="form-control" placeholder="Enter Security Code" type=text pattern=".{4,6}" name=number required></p>
<center><p><button type="submit" class="btn btn-primary">Sign Up</button></p></center>
</form></br></p></br></div></br>
</br></div></br>


