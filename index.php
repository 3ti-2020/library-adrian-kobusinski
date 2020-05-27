<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Zadanie</title>
</head>
<body>
<div class="main">
    <div class="head">

    <form action="insert.php" method="POST">
        <input type="text" name="imie" placeholder="Podaj imie " id="">
        <input type="text" name="nazwisko" placeholder="Podaj nazwisko " id="">
        <input type="text" name="tytul" placeholder="Podaj tytul " id="">
        <input type="submit" value="wyslij">
    </form>


    </div>
    <div class="left">
    <?php
    $conn = new mysqli("127.0.0.1", "root", "", "library" );
    $sql = "SELECT * FROM autorzy";
    $result = mysqli_query($conn, $sql);

    echo("<table class='table'>");
    echo("SELECT * FROM lista");
    echo("
        <th>Imie</th>
        <th>Tytul</th>
        
    ");

    while($row=mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>");
        echo($row["id_imie"]);
        echo("</td>");
        echo("<td>");
        echo($row["id_tytul"]);
        echo("</td>");
        echo("</tr>");
    }
    echo("</table>");
?>
    </div>
    <div class="right">

    <form action="delete.php" method="POST">
    <input type="text" name="id_imie" placeholder="Podaj imie " id="">
        <input type="text" name="id_del" value="'.$row['id_imie'].'"style="display: none;" id="">
        <input type="submit" value="X">
    </form>


    </div>

</div>
</body>
</html>