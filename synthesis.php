<DOCTYPE html>
<head>
<title>Sythesis</title>
</head>

<style>
*{
background-color:#595959;
font: Times New Roman;
}

table {
border-collapse: collapse;  
width:70%;
margin-left: auto;
margin-right: auto;
}

td {
  height: 30px;
  background: white;
}

table, td{
	   border: 3.5px solid white;
	   border-top:5px solid #ddd;
	   text-align: left;
           padding: 8px;
	
}

tr:nth-child(even) td { background:#ddd; }

select{
font-size:135%;
margin-left:20px;
background:white;
}

input{
font-size:135%;
background:white;
}

option{
color:white;
}
</style>

<body style="text-align:center">
<p style="font-size:70px; color:white"> Synthesis of Amino Acids </p>
<form id="form" method="POST">
    <select name="search1">
    <option disabled selected>-- Essential Amino Acids --</option>
    <option value="Histidine">Histidine</option>
    <option value="Isoleucine">Isoleucine</option>
    <option value="Leucine">Leucine</option>
    <option value="Lysine">Lysine</option>
    <option value="Methionine">Methionine</option>
    <option value="Phenyl alanine">Phenyl alanine</option>
    <option value="Threonine">Threonine</option>
    <option value="Tryptophan">Tryptophan</option>
    <option value="Valine">Valine</option>
  </select>
<input type ="submit" name="submit1" value="...">

    <select name="search2">
    <option disabled selected>-- Non Essential Amino Acids --</option>
    <option value="Alanine">Alanine</option>
    <option value="Asparagine">Asparagine</option>
    <option value="Aspartic acid">Aspartic acid</option>
    <option value="Cysteine">Cysteine</option>
    <option value="Glutamic acid">Glutamic acid</option>
    <option value="Glutamine">Glutamine</option>
    <option value="Glycine">Glycine</option>
    <option value="Proline">Proline</option>
    <option value="Serine">Serine</option>
    <option value="Tyrosine">Tyrosine</option>
  </select>
<input type ="submit" name="submit2" value="...">
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
if(isset($_POST['submit1'])) {	

		$acid1 = ($_POST['search1']);

		$sql = "select * from essential_amino_acid where essential_amino_acid.amino_acid like '%$acid1%'";

$result = $conn->query($sql);

		if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Synthesized From </td>";
                echo "<td style='font-size:20px'>" .$row["synthesized from"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Enzymes Involved </td>";
                echo "<td style='font-size:20px'>" .$row["enzymes"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Brief Description </td>";
                echo "<td style='font-size:20px'>" .$row["process"]. "</td>";
	    echo "</tr>";
            echo "</table><br>";

}
} else {
	echo "0 records";
}
}

if(isset($_POST['submit2'])) {	

		$acid2 = ($_POST['search2']);

		$sql2 = "select * from non_essential_amino_acid where non_essential_amino_acid.amino_acid like '%$acid2%'";

$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0){
		while($row = $result2->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Synthesized From </td>";
                echo "<td style='font-size:20px'>" .$row["synthesized_from"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Enzymes Involved </td>";
                echo "<td style='font-size:20px'>" .$row["enzyme"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Brief Description </td>";
                echo "<td style='font-size:20px'>" .$row["process"]. "</td>";
	    echo "</tr>";
            echo "</table><br>";

}
} else {
	echo "0 records";
}
}
?>
<form action="http://localhost/amino_acid/synthesis.php">
    <input type="submit" value="Clear Response" />
</form>

<form action="home.html">
    <input type="submit" value="Home" />
</form>
</body>

</html>