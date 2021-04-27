<?php

$option = $_POST['tarjetadevideo'];
$option1 = $_POST['memoriaram'];
$option2 = $_POST['procesador'];
$option3 = $_POST['fuentedepoder'];
$option4 = $_POST['tarjetamadre'];

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "pcparts";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT price FROM videocard WHERE gpu = '".$option."'";

$query2 = "SELECT price FROM ram WHERE name = '".$option1."'";

$query3 = "SELECT price FROM cpu WHERE series = '".$option2."'";

$query4 = "SELECT price FROM powersupply WHERE energyEfficiency = '".$option3."'";

$query5 = "SELECT price FROM motherboard WHERE brand = '".$option4."'";

$result = mysqli_query($connect,$query);

$result2 = mysqli_query($connect,$query2);

$result3 = mysqli_query($connect,$query3);

$result4 = mysqli_query($connect,$query4);

$result5 = mysqli_query($connect,$query5);


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostics</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>

<header class="header ">
        <div class="container fluid  ">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="index.html">PC Diagnostics</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Diagnostico</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="prueba.php">Evaluacion</a>
                      </li>
                        
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>

        <?php
            echo "<h5> Este es el precio de tu tarjeta grafica </h5>";
           
            $values4 = [];
            while($row = mysqli_fetch_assoc($result)) {
                $values4 = $row['price']; 
                echo "$"; echo $row['price']."<br>"; 
                
                
            } 



            echo "<br>";
            echo "<h5> Este es el precio de tu Memoria RAM </h5>";
            $values3 = [];
            while($row = mysqli_fetch_assoc($result2)) {
                $values3 = $row['price']; 
                echo "$"; echo $row['price']."<br>"; 
                
                
            } 
            
            echo "<br>";
            echo "<h5> Este es el precio de tu Procesador </h5>";
            $values1 = [];
            while($row = mysqli_fetch_assoc($result3)) {
                $values1 = $row['price']; 
                echo "$"; echo $row['price']."<br>"; 
                
                
            } 


           

            echo "<br>";
            echo "<h5> Este es el precio de tu Fuente de poder </h5>";
            $values2 = [];
            while($row = mysqli_fetch_assoc($result4)) {
                $values2 = $row['price']; 
                echo "$"; echo $row['price']."<br>"; 
                
                
            } 

            echo "<br>";
            echo "<h5> Este es el precio de tu MotherBoard </h5>";
            $values = [];
            while($row = mysqli_fetch_assoc($result5)) {
                $values = $row['price']; 
                echo "$"; echo $row['price']."<br>"; 
                
                
            } 

            echo "<br>";
            echo "<h5> Este es el precio total de todos los componentes de tu computadora: </h5>";

            echo "$";  $sum = $values2 + $values + $values1 + $values3 + $values4; 

            
            echo $sum; 

            

          
          

            /* print_r ($values);  */




           







            echo "<br>";
            echo "Los componentes que elegiste:";
            echo "<br>";
            echo $option;
            echo "<br>";

            echo $option1; 
            echo "<br>";

            echo $option2;
            echo "<br>"; 

            echo $option3;
            echo "<br>"; 

            echo $option4;
            echo "<br>"; 

        ?>
    
</body>
</html>