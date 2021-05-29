<!DOCTYPE html>
<style>
*{
margin-top:10px;
}
.anu {
  background-color:white;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 46px;
  cursor: pointer;
  float:right;
}
</style>
<html>
  <head>
    <title>Queries</title>
    <link rel="stylesheet" type="text/css" href="css.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<button class="anu"><a href="home.html"><i class="fa fa-home"></i></a></button> 
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Queries and Suggestions </h1>
          </div>
          <div class="panel-body">
            <form method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                />
              </div>
              <div class="form-group">
                <label for="Institution">Institution</label>
                <input
                  type="text"
                  class="form-control"
                  id="Institution"
                  name="Institution"
                />
              </div>


              <div class="form-group">
                <label for="Profession">Profession</label>
                <input
                  type="text"
                  class="form-control"
                  name="Profession"
                />
              </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  name="Email"
                />
              </div>
              <div class="form-group">
                <label for="Query">Query</label>
                <input
                  type="text"
                  class="form-control"
                  id="Query"
                  name="Query"
                />
              </div>
              <input type="submit" name="submit" class="btn btn-primary" />
            </form>
          </div>
        </div>
      </div>
    </div>
  
  </body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "aminoacid";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
if(isset($_POST['submit'])) {	


$sql = "INSERT INTO aminoacid.queries (Name, Institution, Profession, Email, Query)
VALUES ('".$_POST["Name"]."','".$_POST["Institution"]."','".$_POST["Profession"]."','".$_POST["Email"]."','".$_POST["Query"]."')";

$result = mysqli_query($conn,$sql);

}
$conn->close();
?>
	