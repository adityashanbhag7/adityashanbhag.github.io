

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.signupform{
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
}input[type=number], select {
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
    box-sizing: border-box;
}
input[type=email], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
	font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=password], select {
    width:100%;
    padding: 8px 20px;
    margin: 8px 0;
    font-size:15px;
    display: inline-block;
    border:  0px solid #ccc;
    box-shadow: 1px  1px grey;    
    box-sizing: border-box;
}
input[type=submit] {
    width:100%;
    background-color: black;
    color: white;
    padding: 10px 20px;
    margin: 8px 0; 
    border: none; 
    border-radius: 2px;
    cursor: pointer;
}
.si{float:right;}
.si a:link{
color:gray;
text-decoration:none; }
.si a:visited{
color:gray;
text-decoration:none; }
.si a:active{
color:gray;
text-decoration:none; }
.si a:hover{
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



<div class="signupform">
<div class="box1">
<h3 >AUDITION</h3>
<div class="si">
<p><a href="login.php">Login before submitting this form</a></p>
</div>
<form method="post" action="audition1.php">
   
<input type="text" name="firstname" onChange="checkName(this)" required/>
<br>
First Name
<br><br>
<input type="text" name="lastname" onChange="checkName(this)" required/>
<br>
Last Name
<br><br>
<input type="email" name="email" required/>
<br>    
Email  
<br><br>
<input type="number" name="phone" min="7000000000" max="9999999999" required/>
<br>    
Phone  
<br><br>
<input type="text" name="address" required/>
<br>
Address
<br><br>
<input type="int" name="zipcode" required/>
Zipcode
<br><br>
<input type="text"  name="city" onChange="checkName(this)" required/>
<br>
City
<br><br>
<select type="list" name="instrument" required/>
<option value="classical guitar">Classical Guitar</option>
<option value="conducting">Conducting</option>
<option value="jazz">Jazz</option>
<option value="string">String</option>
<option value="voice">Voice</option>
<option value="brass">Brass</option>
<option value="organ">Organ</option>
<option value="woodwind">Woodwind</option>
<option value="piano">Piano</option>
<option value="music eduacation">Music Eduacation</option>
<option value="theory">Theory</option>
<option value="musicology">Musicology</option>
</select>
<br>
Area of study
<br><br>
  
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