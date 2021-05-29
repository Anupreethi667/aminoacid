<DOCTYPE html>
<head>
<title>Comparison</title>
</head>
<style>
* {
 margin-top: 15px;
  padding: 0;
}

table {
border-collapse: collapse;  
width:30%;
margin-left: auto;
margin-right: auto;
}

td {
  height: 30px;
}

table, td{
	    border: 1px solid #ddd;
	   text-align: left;
           padding: 8px;
	
}

tr:nth-child(odd) {background-color: #f2f2f2;}




input{

font-size:135%;
}

select{

font-size:135%;
}



</style>
<body style="text-align:center">
<p style="font-size:70px"> Comparison of Sidechain Characters </p>
<form id="form1" method="POST">
    <select name="search">
    <option disabled selected>-- Select Amino Acid --</option>
    <option value="Alanine">Alanine</option>	
    <option value="Arginine">Arginine</option>
    <option value="Asparagine">Asparagine</option>
    <option value="Aspartic acid">Aspartic acid</option>
    <option value="Cysteine">Cysteine</option>
    <option value="Glutamic acid">Glutamic acid</option>
    <option value="Glutamine">Glutamine</option>
    <option value="Histidine">Histidine</option>
    <option value="Isoleucine">Isoleucine</option>
    <option value="Leucine">Leucine</option>
    <option value="Lysine">Lysine</option>
    <option value="Phenyl alanine">Phenyl alanine</option>
    <option value="Proline">Proline</option>
    <option value="Serine">Serine</option>
    <option value="Threonine">Threonine</option>
    <option value="Tryptophan">Tryptophan</option>
    <option value="Tyrosine">Tyrosine</option>
    <option value="Valine">Valine</option>
  </select>
  
    <select name="search_2">
    <option disabled selected>-- Select Amino Acid --</option>
    <option value="Alanine">Alanine</option>	
    <option value="Arginine">Arginine</option>
    <option value="Asparagine">Asparagine</option>
    <option value="Aspartic acid">Aspartic acid</option>
    <option value="Cysteine">Cysteine</option>
    <option value="Glutamic acid">Glutamic acid</option>
    <option value="Glutamine">Glutamine</option>
    <option value="Histidine">Histidine</option>
    <option value="Isoleucine">Isoleucine</option>
    <option value="Leucine">Leucine</option>
    <option value="Lysine">Lysine</option>
    <option value="Phenyl alanine">Phenyl alanine</option>
    <option value="Proline">Proline</option>
    <option value="Serine">Serine</option>
    <option value="Threonine">Threonine</option>
    <option value="Tryptophan">Tryptophan</option>
    <option value="Tyrosine">Tyrosine</option>
    <option value="Valine">Valine</option>
  </select>


<input type ="submit" name="submit" value="Compare">
</form>

<br>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "aminoacid";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
if(isset($_POST['submit'])) 
{
	

		$acid = ($_POST['search']);
                $acid_2 = ($_POST['search_2']);

		$sql = "select * from aminoacid.sidechain_charecter where amino_acid like '%$acid%'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Sidechain </td>";
                echo "<td style='font-size:20px'>" .$row["sidechain"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Acidic Or Basic </td>";
                echo "<td style='font-size:20px'>" . $row['acidity_or_basicity'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Nature </td>";
                echo "<td style='font-size:20px'>" . $row['nature'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Hydrophobicity </td>";
                echo "<td style='font-size:20px'>" . $row['hydrophobicity'] . "</td>";
	    echo "</tr>" ;			
	    echo "</table><br>";

}
} else {
	echo "0 records";
}

$sql_2 = "select * from aminoacid.sidechain_charecter where amino_acid like '%$acid_2%'";
$result_2 = $conn->query($sql_2);

			if ($result_2->num_rows > 0){
		while($row = $result_2->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Sidechain </td>";
                echo "<td style='font-size:20px'>" .$row["sidechain"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Acidic Or Basic </td>";
                echo "<td style='font-size:20px'>" . $row['acidity_or_basicity'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Nature </td>";
                echo "<td style='font-size:20px'>" . $row['nature'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Hydrophobicity </td>";
                echo "<td style='font-size:20px'>" . $row['hydrophobicity'] . "</td>";
	    echo "</tr>" ;			
	    echo "</table>";

}
} else {
	echo "0 records";
}


$conn->close();

}


?>

<form action="http://localhost/amino_acid/vertical.php">
    <input type="submit" value="Clear Response" />
</form>

<form action="home.html">
    <input type="submit" value="Home" />
</form>



</body>
</html>