<?php

include 'view.php';
back_home();

$conn = new mysqli('localhost','root','');

function connect($conn){
    if (!$conn) {
        die('Ei ole ühendust'.mysqli_connect_error());
    } else {echo "Ühendus on olemas.<br>";}
    
}


function show_all($conn){
    $sql = "SELECT * FROM kit15e.isik";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo "<b>ID on:</b> ".$row["ID"].
                 " Nimi on: ".$row["Nimi"].
            " Perenimi on: ".$row["Perenimi"].
            " Isikukood on: ".$row["Isikukood"].
            " ja sisestusaeg on ".$row["Aeg"]
                ."<br>";
        }
    } else {"Sul on tühi baas, tee midagi kasulikku";}

}

function add_record($conn){
    $sql = "INSERT INTO kit15e.isik (Nimi, Perenimi, Isikukood) VALUES ('Märt','Mõistlik','37606082541') ";
    $result = $conn -> query($sql);
}

function delete_record($conn){
    $sql = "DELETE FROM kit15e.isik WHERE Isikukood='37606082541'";
    $result = $conn -> query($sql);
}

// connect($conn);
// add_record($conn);
// show_all($conn);
// delete_record($conn);

function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki kirjeid'>"; 
        if(isset($_POST['show'])){
            show_all($conn);
        } else {echo "Ei õnnestunud";}
}

function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa kirje'>"; 
        if(isset($_POST['add'])){
            add_record($conn);
        } else {echo "Ei õnnestunud";}
}

function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>"; 
        if(isset($_POST['delete'])){
            delete_record($conn);
        } else {echo "Ei õnnestunud";}
}

?>

<!doctype html>
<html>
    <body>
        <form action='' method='post'>
           <ul>
            <li><?php show_button($conn); ?></li> <li><?php add_button($conn); ?></li>   
            <li><?php delete_button($conn); ?></li>
           </ul> 
        </form>
    </body>
</html>