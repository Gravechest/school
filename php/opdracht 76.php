<?php
$email = htmlspecialchars($_POST['email']);
$wachtwoord = htmlspecialchars($_POST['wachtwoord']);
$bestand=fopen("gebruikers.txt","r");
if(!bestand){
    echo "Kon geen bestand openen!";
}
while(!feo($bestand)){
    $account = fgets($bestand);
    $account = explode("*",$account);
    if($account[1] == $email && $account[2] == $wachtwoord){
        session_start();
        $_SESSION['USER'] = $email;
        $_SESSION['STATUS'] = 1;
        $_SESSION['ID'] = $_COOKIE["PHPSESSID"];
        echo "
        <script>
        alert('U bent ingelogt als $email.');
        location.href='welkom.php
        </script>'";
    }
}
echo "<script>
alert('Wachtwoord of gebruikersnaam ongeldig');
location.href = 'inloggen.html';
</script>";
?>
