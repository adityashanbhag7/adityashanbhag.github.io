<!DOCTYPE html>
<html>
<head>
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
.rp{
background-color:white;
font-family:'Quicksand';
text-align:left; padding:20px;
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



<div class="rp">
<h2 style="text-align:center;">REPORT PROBLEMS</h2><hr>
1.Like any musical instrument, pianos and guitars suffer normal wear and tear over time, and problems are bound to occur eventually.<br>
2.We request your information only because we may need to ask for additional information that might help us to best address the problem you are reporting.<br>
3.Mention Room no. and Insturment no. if possible.
<hr>
<div class="box1">
<h3>Report Information</h3>
<form method="post" action="problem1.php">
<input type="email" name="email" required/>
<br>    
Email  
<br><br>
<textarea name="comment" type="text" rows="4" cols="73" required/></textarea>
<br>
Elaborate your problem
 <br><br>
<input type="submit" value="SUBMIT">

</form>
</div></div>

<div class="bottom">
<div id="topimg">
<a href="#top"><img src="image/top.png" style="width:40px;height:40px;"></a>
</div>
<br><br><br>
<div class="st">
<a href="https://www.facebook.com/universityofutahschoolofmusic?fref=ts"><img src="image/facebook.jpg" style="width:50px;height:50px;"></a>
<a href="https://plus.google.com/u/0/"><img src="image/googleplus.jpg" style="width:50px;height:50px;"></a>
<a href="https://www.instagram.com/juilliardschool/"><img src="image/instagram.jpg" style="width:50px;height:50px;"></a>
<a href="https://twitter.com/juilliardschool"><img src="image/twitter.jpg" style="width:50px;height:50px;"></a>
</div>


<div class="end">
<p><a href="privacypolicy.html"> | Privacy Policy | </a><a href="disclaimer.html"> | Disclaimer | </a><a href="contact.html"> | Contact us | </a></p>

</div>

</div>

</body>
</html>