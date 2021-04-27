<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "pcparts";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<!-- ------------------------------------ -->
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
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Evaluacion
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item color" href="amd.html" target="in-blank">AMD</a>
                        <a class="dropdown-item color" href="intel.html" target="in-blank" > INTEL</a>
                        
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>

        <!-- ------------------------- -->

<div id="container">



    <label for="">


    <!-- VIDEOCARD -->

    <h3>Tarjeta de Video</h3>
    <br>

    <form action="calculos.php" method="post">

    <select name="tarjetadevideo" id="">

    <?php 
    $query = "SELECT * FROM `videocard`";
    $ejecutar=mysqli_query($connect, $query) or die(mysqli_error($connect)); 
    ?>


    <?php  foreach ($ejecutar as $opciones):  ?>

        <option value="<?php echo $opciones['gpu'] ?>">  <?php echo $opciones['gpu'] ?> </option>

    <?php endforeach ?> 
    
    </select>
    
    



    <!-- RAM -->
    <br>
    <br>
    <h3>Memoria RAM</h3>
    <br>
    <select name="memoriaram" id="">
    <?php 
    $query3 = "SELECT * FROM `ram`";
    $ejecutar3=mysqli_query($connect, $query3) or die(mysqli_error($connect)); 
 
    ?>

    <?php  foreach ($ejecutar3 as $opciones3):  ?>

    <option value="<?php echo $opciones3['name'] ?>">  <?php echo $opciones3['name'] ?> </option>

    <?php endforeach ?> 

    </select>


    <!-- PROCESADOR -->
    <br>
    <br>
    <h3>Procesador</h3>
    <br>
    <select name="procesador" id="">
    <?php 
    $query4 = "SELECT * FROM `cpu`";
    $ejecutar4=mysqli_query($connect, $query4) or die(mysqli_error($connect)); 
    
 
    ?>

    <?php  foreach ($ejecutar4 as $opciones4):  ?>

    <option value="<?php echo $opciones4['series'] ?>">  <?php echo $opciones4['series'] ?> </option>

    <?php endforeach ?> 

    </select>



    <!-- Fuente de Poder -->
    <br>
    <br>
    <h3>Fuente de Poder</h3>
    <br>
    <select name="fuentedepoder" id="">
    <?php 
    $query5 = "SELECT * FROM `powersupply`";
    $ejecutar5=mysqli_query($connect, $query5) or die(mysqli_error($connect)); 
 
    ?>

    <?php  foreach ($ejecutar5 as $opciones5):  ?>

    <option value="<?php echo $opciones5['energyEfficiency'] ?>">  <?php echo $opciones5['energyEfficiency'] ?> </option>

    <?php endforeach ?> 

    </select>

    

    <!-- --- -->

    <!-- MotherBoard -->
    <br>
    <br>
    <h3>Mother Board</h3>
    <br>
    <select name="tarjetamadre" id="">
    <?php 
    $query6 = "SELECT * FROM `motherboard`";
    $ejecutar6=mysqli_query($connect, $query6) or die(mysqli_error($connect)); 
 
    ?>

    <?php  foreach ($ejecutar6 as $opciones6):  ?>

    <option value="<?php echo $opciones6['brand'] ?>">  <?php echo $opciones6['brand'] ?> </option>

    <?php endforeach ?> 

    </select>


    
    


    <button type="submit">Submit</button>
    </form>
    </label>


    <?php
    
    ?>


</div>
    
</body>
</html>