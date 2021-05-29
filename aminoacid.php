<doctype html>
<html>

<style>
table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: auto;
    margin-right: auto;
}

th {
    background-color: #009879;
    color: #ffffff;
    padding: 12px 15px;
    text-align: center;
}

td {
    background: white;
    padding: 12px 15px;
    text-align: center;
}
tr:nth-child(even) td { background:#f3f3f3; } 

tr {
    border-bottom: 1px solid #dddddd;
}

tr{
    border-bottom: 2px solid #009879;
}

.btn {
  background-color:white;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 46px;
  cursor: pointer;
  float:right;
}
</style>

<head>
<title>Amino Acids</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<p style="text-align:center; font-size:50px; color:#009879"> Amino Acids <button class="btn"><a href="home.html"><i class="fa fa-home"></i></a></button> </p>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "aminoacid";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * FROM amino_acid";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";    
	echo "<tr>";
                echo "<th style='font-size:27px'>Amino Acid</th>";
                echo "<th style='font-size:27px'>Single Letter Code</th>";
                echo "<th style='font-size:27px'>Three Letter Code</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
          
	echo "<tr>";
                echo "<td style='font-size:22px'>" . $row['amino_acid'] . "</td>";
                echo "<td style='font-size:22px'>" . $row['single_letter_code'] . "</td>";
                echo "<td style='font-size:22px'>" . $row['three_letter_code'] . "</td>";
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
</body>

</html>