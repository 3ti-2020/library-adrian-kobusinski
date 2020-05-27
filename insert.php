<?php
    $conn = new mysqli("127.0.0.1", "root", "", "library");
    $imie = $_POST['imie'];
    $zarobki = $_POST['nazwisko'];
    $dzial = $_POST['tytul'];
    $sql = "INSERT INTO lista(id_imie, id_nazwisko, id_tytul) VALUES ('$imie', '$zarobki', '$dzial')";
    mysqli_query($conn, $sql);
    header("location: index.php");

?> 