

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<title>MUSIC</title>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function checkName(input) {

    // Check if input contains a digit
    if (/\d/.test(input.value)) {
        alert('Name contains a number');

        // Remove all digit characters
        input.value = input.value.replace(/\d/gi, '');
    }

    // Check if input is empty
    if (input.value === ' ') {
        alert('Name is empty');
    }

    return true;
}
</script>
<style>
.loginform{
	width:100%;
    font-family: 'Roboto';
    background-color:white;
	margin-bottom:0px;padding-bottom:0px;
	overflow:hidden;
z-index:-1;
}
input[type=date], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}

input[type=list], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=number], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=int], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=text], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box; }
	
	input[type=password], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box; }
	
input[type=submit] {
    width:100%;
    background-color: black;
    color: white;
    padding: 10px 20px;
    margin: 8px 0; 
    border: none; 
    border-radius: 2px;
    cursor: pointer; }
.li{float:right;}
.li a:link{
color:gray;
text-decoration:none; }
.li a:visited{
color:gray;
text-decoration:none; }
.li a:active{
color:gray;
text-decoration:none; }
.li a:hover{
color:green;
text-decoration:none; }	
</style>

</head>
<body>

<div class="top">
<div class="logo">
<a href="index.php"><img src="image/muslogo1.jpg" style="width:50px;height:50px;"></a>
</div>
<div class="mu">
<a href="index.php">WONDER UNIVERSITY</a>
</div>
</div>



<div class="loginform">
<div class="box1">
<h3 >Login</h3>
<p>Login unsuccessful, Try again.

<form method="post" action="login1.php">

<input type="text" name="username" required/>
<br>
Username
<br><br>
<input type="password"  name="password" required/>
<br>
Password
<br><br>
<div class="li">
<p><a href="signup.php">SIGN UP?</a></p>
</div>
<input type="submit" value="SUBMIT">

</form>
</div>
</div>

<div class="bottom">
<div id="topimg">
<a href="#top"><img src="image/top.png" style="width:40px;height:40px;"></a>
</div>
<br><br><br>
<div class="st">
<a href="#"><img src="image/facebook.jpg" style="width:50px;height:50px;"></a>
<a href="#"><img src="image/googleplus.jpg" style="width:50px;height:50px;"></a>
<a href="#"><img src="image/instagram.jpg" style="width:50px;height:50px;"></a>
<a href="#"><img src="image/twitter.jpg" style="width:50px;height:50px;"></a>
</div>


<div class="end">
<p><a href="#"> | Privacy Policy | </a><a href="#"> | Terms of Use | </a><a href="contact.html"> | Contact us | </a></p>

</div>

</div>

</body>
</html>