<DOCTYPE html>

<style>
body {
background-color:#E6E6FA;
}

table {  
    color: #333;
    font-family: Times New Roman;
    width: 90%; 
    border-collapse: 
    collapse; border-spacing: 0;
    margin-left: auto;
    margin-right: auto; 
}

td, th {  
    border: 3.5px solid white; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #8f7ff1; 
    font-weight: bold;
}

td {  
    background: #f2f0fd;
    text-align: center;
}

tr:nth-child(odd) td { background:#E6E6FA; } 

input{
    font-size:135%;
	 
}
</style>

<head>
<title>Glucogenic</title>
</head>

<body>
<p style="text-align:center; font-size:50px; color:#363636 "> Ketogenic Amino Acids  </p>
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

$sql = "select * FROM metabolic_fate WHERE metabolic_fate='Ketogenic'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th style='font-size:27px'>Amino Acid</th>";
                echo "<th style='font-size:27px'>Metabloic Fate</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style='font-size:22px'>" . $row['amino_acid'] . "</td>";
                echo "<td style='font-size:22px'>" . $row['description'] . "</td>";
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
<form style="text-align:center" action="http://localhost/amino_acid/metabolism.php">
    <input type="submit" value="Go Back" />
</form>

</html>		