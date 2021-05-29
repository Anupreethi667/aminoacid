<!DOCTYPE html>
<html>

<head>
  <title> Metabolism </title>
</head>
<body style="text-align:center">
<br>
<br>
<p style="color:white; font-size:70px"> Metabolic Fate of Amino Acids<p>
<br>
<br>
<div class="container">
<a href="http://localhost/amino_acid/glucogenic.php">
  <button class="button button1" style="float:left; margin-left:100px"> Glucogenic </button>
</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<a href="http://localhost/amino_acid/ketogenic.php">
  <button class="button button4" style="float:left; margin-left:350px">Ketogenic</button>
</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<a href="http://localhost/amino_acid/Glucogenic_and_ketogenic.php">
  <button class="button button2" style="float:left; margin-left:650px">Glucogenic and Ketogenic</button>
</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<a href="home.html">
  <button class="button button5" style="float:left; margin-left:950px">Home</button>
</a>
</div>
</body>

<style>
*{
	margin:0 auto;
	padding:0;
	box-sizing:border-box;
	font-family:"Times New Roman", Times, serif;
}

body{
	background-image:linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.85)), url(metabolism.jpg);
	height:100vh;
	background-size:cover;
	background-position:fixed;
	background-repeat:no-repeat;
	opacity:0.95;
}

.button {
  background-color: #707070; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22.5px;
  margin: 4px 2px;
  width:225px;
  height:85px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button1 {border-radius: 10px;}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2 {border-radius: 10px;}

.button4:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button4 {border-radius: 10px;}

.button5:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button5 {border-radius: 10px;}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button4 {background-color: #e7e7e7; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */
</style>

</html>