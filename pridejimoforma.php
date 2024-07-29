<?php
require_once("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
h1 {
    text-align: center;
}
.container {
    position:absolute;
    top:50%;
    left:50%;
    transform: translateY(-50%) translateX(-50%);
}


    </style>

</head>
<body>

    <div class="container">

        
            <form action="pridejimoforma.php" method="get">
            <h1>Testine forma</h1>
            <div class="form-group">
                <label for="Vardas">Vardas</label>
                <input class="form-control" type="text" value="test" name="Vardas"/>
            </div>
            <div class="form-group">
            <label for="Pavarde">Pavarde</label>
            <input class="form-control" type="text" value="test" name="Pavarde"/>
            </div>
            <div class="form-group">
            <label for="teises_id">teises_id</label>
            <input class="form-control" type="text" value="2" name="teises_id"/>
            </div>
            <button class="btn btn-primary" type="submit" name="prideti">Prideti nauja</button>
            </form>
    </div>

    <?php
    if(isset($_GET["prideti"])) {
        if(isset($_GET["Vardas"]) && !empty($_GET["Vardas"]) && isset($_GET["Pavarde"]) && !empty($_GET["Pavarde"]) && isset($_GET["teises_id"]) && !empty($_GET["teises_id"]) ) {
           $vardas = $_GET["Vardas"];
           $pavarde = $_GET["Pavarde"];
           $teises_id = $_GET["teises_id"];

           
           $sql = "INSERT INTO `klientai`(`Vardas`, `Pavarde`, `teises_id`) VALUES ('$vardas','$pavarde',$teises_id);";  
            
            if (mysqli_query($prisijungimas, $sql)) {
                echo "Irasas yra pridetas";
            } else {
                echo "kazkas negerai";
            }
        }

    }
    
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>