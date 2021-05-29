<DOCTYPE html>
<html>
<head>
<title> Reactions </title>
</head>
<style>
*{
font: Times New Roman;
}

body{
	background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(reaction.jpg);
	height:100vh;
	background-size:cover;
	position:absolute;
	background-repeat:no-repeat;
	background-attachment: fixed;
}

table {
border-collapse: collapse;  
width:65%;
margin-left: auto;
margin-right: auto;
}

td {
  height: 30px;
 background: #fff2f2;
}

table, td{
	   border: 3.5px solid white;
	  border-top:5px solid #ffcccc;
	   text-align: left;
           padding: 8px;
	
}

tr:nth-child(even) td {background: #ffcccc;}




input{

font-size:100%;
background:#fff2f2;
color: black;
}




</style>
<body style="text-align:center">
<p style="text-align:center; font-size:60px; color: white"> Reactions of Amino Acids </p>

<form method="post" style="font-size:30px; color: white">
Enter Amino Acid : &nbsp; <input type="text" name="search"> <br><br>
<input type ="submit" name="submit1" value="Select">
</form> 

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "aminoacid";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
if(isset($_POST['submit1'])) {	
	$acid1 = ($_POST['search']);
	$sql = "select * from reactions where reactions.amino_acids like '%$acid1%'";
	$result = $conn->query($sql);
		if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" .$acid1. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Name of Reaction or Test </td>";
                echo "<td style='font-size:20px'>" .$row["reaction_or_test"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Type of Reaction </td>";
                echo "<td style='font-size:20px'>" .$row["type_of_reaction"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Process </td>";
                echo "<td style='font-size:20px'>" .$row["process"]. "</td>";
	    echo "</tr>";
            echo "</table><br>";

}
} else {
	echo "0 records";
}
}
$conn->close();
?>
	
<form action="http://localhost/amino_acid/reactions.php" style="font-size:135%; ">
    <input type="submit" value="Clear Response" />
</form>

<form action="home.html" style="font-size:135%;">
    <input type="submit" value="Home" />
</form>
</body>

</html>