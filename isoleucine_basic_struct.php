
<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
           Isoleucine
    </title> 
    <link rel="stylesheet" type="text/css" href="css_struct_basic/css_isoleucine_basic_struct.css">
</head> 
  
<body style="text-align:center; font-size:35px;" > 
        
 	<h1> Isoleucine </h1>
	
    <?php
      
        
$link = mysqli_connect("localhost", "root", "", "aminoacid");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}           
 $sql = "SELECT amino_acid.*, structure.structure_type, structure.description, structure.chemical_formula, structure.about FROM structure JOIN amino_acid ON amino_acid.amino_acid=structure.amino_acid WHERE amino_acid.amino_acid='Isoleucine'";
;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
	    echo "<table>";
            echo "<tr>";
                echo "<th style='font-size:50px'>Charecteristics</th>";
                echo "<th style='font-size:50px'>Isoleucine</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style='font-size:30px'> Amino Acid </td>";
                echo "<td style='font-size:30px'>" . $row['amino_acid'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> IUPAC Name </td>";
                echo "<td style='font-size:30px'>" . $row['IUPAC name'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> Canonical Smile </td>";
                echo "<td style='font-size:30px'>" . $row['canonical smiles'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> Chemical Formula </td>";
                echo "<td style='font-size:30px'>" . $row['chemical_formula'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> Type of Structure </td>";
                echo "<td style='font-size:30px'>" . $row['structure_type'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> Structure </td>";
                echo "<td style='font-size:30px'>" . $row['about'] . "</td>";
	    echo "</tr>";
            echo "<tr>";
                echo "<td style='font-size:30px'> Description </td>";
                echo "<td style='font-size:30px'>" . $row['description'] . "</td>";
	    echo "</tr>";	    
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }

 
// Close connection
mysqli_close($link); 
        } 
         
    ?> 
<br>
      
<form action="http://localhost/amino_acid/basic_amino_acid.html">
    <input type="submit" value="Go Back" />
</form>



<form action="home.html">
    <input type="submit" value="Home" />
</form>

<style>
input{
font-size:75%;
}
</style>

      
    
</head> 
  
</html> 