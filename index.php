<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset = "UTF-8">
	<title>KIT15E kodukas</title>
<!-- javascript aja näitamiseks  -->    
    <script>
    window.onload = function(){
        (function (){
            var date = new Date();
            var time = date.getHours()+':'+date.getMinutes()+':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
            document.getElementsByTagName('div')[0].innerHTML = "JS kell: "+time;
            window.setTimeout(arguments.callee,1000);
        })();
    };
       
    </script>
    
    
    
</head>
<body>

TERE! mina olen väike kodukas!<br>
    
<a href="http://www.tptlive.ee">Kooli kodukas</a>
    
<?php
    
include '/functions/aeg.php';
include '/functions/counter.php';
include 'view.php';
    
back_home();
menu();
$greeting = "Tere";
$nr = 1;
$nr1 = "1";
$nrcomma = 19.8;
$nrcomma1 = 10.18;
echo "<div></div>";
aeg();

echo $nrcomma."<br>";

echo $nrcomma1."<br>";

echo $nrcomma-$nrcomma1."<br>";

echo "$greeting!<br>";

echo '<b>$greeting!<br></b>';

echo "See on teine rida!<br>";    
    
loendur();
?>

<img src="img/laptop-154091__340.png" alt="Siin peab olema pilt">

</body>
</html>
