<DOCTYPE html>
<head>
<title>Essential</title>
</head>
<style>
* {
 margin-top: 15px;
  padding: 0;
}

table {
border-collapse: collapse;  
width:80%;
margin-left: auto;
margin-right: auto;
}

td {
  height: 30px;
}

table, td, th{
	border: 3px solid #ddd;
	text-align: center;
        padding: 8px;
	background: white;
	color:black;
	
}

tr:nth-child(odd) th {background: #f2f2f2;}

body{
    background: #2e2a2a;
    color: #FFF;
    font-family: Times New Roman;
}

input{

font-size:135%;
background:white;
width:100px;
}

</style>

<body style="text-align:center">
<p style="font-size:70px; color:white"> Essential Amino Acids </p>
</body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "aminoacid";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * FROM nutritional_requirement WHERE nutritional_requirement.nutritional_requirement ='Semi-essential' or nutritional_requirement.nutritional_requirement ='Essential'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th style='font-size:27px'>Amino Acid</th>";
                echo "<th style='font-size:27px'>Nutrional Requirement</th>";
		echo "<th style='font-size:27px'>Description</th>";
		echo "<th style='font-size:27px'>Food Source</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style='font-size:22px'>" . $row['amino_acid'] . "</td>";
                echo "<td style='font-size:22px'>" . $row['nutritional_requirement'] . "</td>";
		 echo "<td style='font-size:22px'>" . $row['description'] . "</td>";
		 echo "<td style='font-size:22px'>" . $row['source'] . "</td>";
           echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
<br>
<form action="http://localhost/amino_acid/N_R.html">
    <input type="submit" value="Go Back" />
</form>

<form action="home.html">
    <input type="submit" value="Home" />
</form>

</html>