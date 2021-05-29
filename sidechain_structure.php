<DOCTYPE html>
<head>
<title>Sidechain</title>
</head>

<style>


table {
border-collapse: collapse;  
width:50%;
margin-left: auto;
margin-right: auto;
}

td {
  height: 30px;
}

table, td{
	    border: 3.5px solid #ddd;
	   text-align: left;
           padding: 8px;
	
}

tr:nth-child(odd) {background-color: #f2f2f2;}

select{
font-size:135%;
margin-left:20px;
}

input{
font-size:135%;
}

.first {
	width=80%;
	margin : auto;
	text-align: center;
	padding-top:100px;
}

.first h1 { 
	font-size:36px;
	font-weight:600;
}

.first p {
	color : #777;
	font-size: 23px;
	font-weight: 400;
	line-height: 22px;
	padding : 10px;
}
.hero-btn {
	display: inline-block;
	text-decoration: none;
	color : black;
	border : 1px solid black;
	padding : 12px 34px;
	font-size: 13px;
	background : transparent;
	position : relative;
	cursor : pointer;
}

.hero-btn:hover{
	border: 1px solid #f44336;
	background : #f44336;
	transition: 1s;
}
</style>

<body style="text-align:center">
<p style="font-size:70px"> Sidechain Characters </p>
<form id="form" method="POST">
    <select name="search1">
    <option disabled selected>-- Non Polar R Groups --</option>
    <option value="Alanine">Alanine</option>
    <option value="Isoleucine">Isoleucine</option>
    <option value="Leucine">Leucine</option>
    <option value="Phenyl alanine">Phenyl alanine</option>
    <option value="Proline">Proline</option>
    <option value="Tryptophan">Tryptophan</option>
    <option value="Valine">Valine</option>
  </select>
<input type ="submit" name="submit1" value="...">

    <select name="search2">
    <option disabled selected>-- Polar Uncharged R Groups --</option>
    <option value="Asparagine">Asparagine</option>
    <option value="Cysteine">Cysteine</option>
    <option value="Glutamine">Glutamine</option>
    <option value="Serine">Serine</option>
    <option value="Threonine">Threonine</option>
    <option value="Tyrosine">Tyrosine</option>
  </select>
<input type ="submit" name="submit2" value="...">

    <select name="search3">
    <option disabled selected>-- Polar Charged R Groups --</option>
    <option value="Arginine">Arginine</option>
    <option value="Aspartic acid">Aspartic acid</option>
    <option value="Glutamic acid">Glutamic acid</option>
    <option value="Histidine">Histidine</option>
    <option value="Lysine">Lysine</option>
  </select>
<input type ="submit" name="submit3" value="...">
</form>
<br>
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

		$sql = "select sidechain_charecter.*, amino_acid.*, structure.chemical_formula, structure.about FROM sidechain_charecter JOIN structure ON sidechain_charecter.amino_acid=structure.amino_acid JOIN amino_acid ON sidechain_charecter.amino_acid=amino_acid.amino_acid where structure.amino_acid like '%$acid1%'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Chemical Formula </td>";
                echo "<td style='font-size:20px'>" .$row["chemical_formula"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> IUPAC name </td>";
                echo "<td style='font-size:20px'>" .$row["IUPAC name"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Canonical Smile </td>";
                echo "<td style='font-size:20px'>" .$row["canonical smiles"]. "</td>";
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
            echo "<tr>";
                echo "<td style='font-size:20px'> About Sidechain </td>";
                echo "<td style='font-size:20px'>" .$row["about"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Description </td>";
                echo "<td style='font-size:20px'>" .$row["description"]. "</td>";
	    echo "</tr>";			
	    echo "</table><br>";

}
} else {
	echo "0 records";
}
}
if(isset($_POST['submit2'])) {	

		$acid2 = ($_POST['search2']);

		$sql2 = "select sidechain_charecter.*, amino_acid.*, structure.chemical_formula, structure.about FROM sidechain_charecter JOIN structure ON sidechain_charecter.amino_acid=structure.amino_acid JOIN amino_acid ON sidechain_charecter.amino_acid=amino_acid.amino_acid where structure.amino_acid like '%$acid2%'";

		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0){
		while($row = $result2->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Chemical Formula </td>";
                echo "<td style='font-size:20px'>" .$row["chemical_formula"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> IUPAC name </td>";
                echo "<td style='font-size:20px'>" .$row["IUPAC name"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Canonical Smile </td>";
                echo "<td style='font-size:20px'>" .$row["canonical smiles"]. "</td>";
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
            echo "<tr>";
                echo "<td style='font-size:20px'> About Sidechain </td>";
                echo "<td style='font-size:20px'>" .$row["about"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Description </td>";
                echo "<td style='font-size:20px'>" .$row["description"]. "</td>";
	    echo "</tr>";			
	    echo "</table><br>";

}
} else {
	echo "0 records";
}
}
if(isset($_POST['submit3'])) {	

		$acid3 = ($_POST['search3']);

		$sql3 = "select sidechain_charecter.*, amino_acid.*, structure.chemical_formula, structure.about FROM sidechain_charecter JOIN structure ON sidechain_charecter.amino_acid=structure.amino_acid JOIN amino_acid ON sidechain_charecter.amino_acid=amino_acid.amino_acid where structure.amino_acid like  '%$acid3%'";

		$result3 = $conn->query($sql3);

		if ($result3->num_rows > 0){
		while($row = $result3->fetch_assoc() ){
		echo "<table>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Amino Acid </td>";
                echo "<td style='font-size:20px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Chemical Formula </td>";
                echo "<td style='font-size:20px'>" .$row["chemical_formula"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> IUPAC name </td>";
                echo "<td style='font-size:20px'>" .$row["IUPAC name"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Canonical Smile </td>";
                echo "<td style='font-size:20px'>" .$row["canonical smiles"]. "</td>";
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
            echo "<tr>";
                echo "<td style='font-size:20px'> About Sidechain </td>";
                echo "<td style='font-size:20px'>" .$row["about"]. "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:20px'> Description </td>";
                echo "<td style='font-size:20px'>" .$row["description"]. "</td>";
	    echo "</tr>";			
	    echo "</table><br>";

}
} else {
	echo "0 records";
}
}
$conn->close();


?>

<form action="http://localhost/amino_acid/sidechain_structure.php">
    <input type="submit" value="Clear Response" />
</form>

<form action="home.html">
    <input type="submit" value="Home" />
</form>

<section class="first">
<h1> Comparison </h1>
<p> Click on the link below to compare the sidechain charecters of 2 different amino acids <p>
<a href="http://localhost/amino_acid/vertical.php" class="hero-btn"> COMPARISONS </a>
</section>
</body>
</html>