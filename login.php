<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title onclick="klere()">Yeet</title>
    <link rel="stylesheet" href="opmaak.css">
</head>
<body>

    <form id="login" action="Login.php" method="post">
    <input name="login">Gebruikersnaam</input><br>
	<input name="wachtwoord">Wachtwoord</input><br>
	<input type="submit"></input>
</form>
<script>
var count = 0;
var check = setInterval( function check(){
    var form = document.getElementById("login");
        var yeet = document.getElementById("inlogtext");
            if (yeet != null){
                var kassa = document.createElement("BUTTON");
                kassa.innerHTML = "Kassasysteem"; 
                kassa.id = "yeet";
                kassa.onclick = hyperlink();
                document.body.appendChild(kassa);
                var invent = document.createElement("BUTTON");
                invent.innerHTML = "Kassasysteem"; 
                invent.id = "yeet";
                invent.onclick = hyperlink2();
                document.body.appendChild(invent);
                form.remove();
                yeet.remove();

                stop();
            }
        },10);
    function stop(){
    clearInterval(check);
    }
    function hyperlink(){
        var count += 1;
        if (count >= 2){
            location.replace("http://localhost/Project03/Kassa.php");
        }
    }
    function hyperlink2(){
        var count += 1;
        if (count >= 2){
            location.replace("http://localhost/Project03/Inventaris.php");
        }
    }
</script>

</body>
</html>
<?php
    $connect = mysqli_connect("127.0.0.1","root",NULL,"csv_db 12");
    $data = mysqli_query($connect, "SELECT * FROM login");
    $an = mysqli_fetch_array($data);
    if ($_POST["login"] == $an["Gebruikersnaam"] && $_POST["wachtwoord"] == $an["Wachtwoord"]){
        echo "<p id=\"inlogtext\">yeet</p>";
    }
    else if ($_POST["login"] == $an["Gebruikersnaam"]){
        echo "Verkeerd wachtwoord";
    }
    while ($an = mysqli_fetch_all($data)){
        echo $an["Gebruikersnaam"];
        echo "yeet";
        if ($_POST["login"] == $an["Gebruikersnaam"] && $_POST["wachtwoord"] == $an["Wachtwoord"]){
            echo "U bent ingelogt";
        }
    }
?>























