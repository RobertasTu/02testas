
    <?php
    
    require_once("connection.php");

    $sql = "SELECT * FROM `klientai` WHERE 1;";

    $rezultatas = $prisijungimas->query($sql);

    while($klientai = mysqli_fetch_array($rezultatas)) {
        echo "<br>";
        echo $klientai["ID"];
        echo " ";
        echo $klientai["Vardas"];
        echo " ";
        echo $klientai["Pavarde"];
        echo " ";
        echo $klientai["teises_id"];
        echo "<br>";



    }

   // $klientai = mysqli_fetch_array($rezultatas);
    mysqli_close($prisijungimas);

    var_dump($klientai);
    
    ?>
    
