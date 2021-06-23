<?php
session_start();
include_once 'conn/database.php';

//afvangen formuliervelden...
if (isset($_POST['submit'])){
    $inlognaam = $_POST['inlognaam'];
    $wachtwoord = $_POST['wachtwoord'];
    $_SESSION['ingelogd']=true;
}
else {
    //niet gepost...
    header('refresh: 1; login.php');
    exit();
}
for(int i = 0;i < strlen($inlognaam);i++){
    if($inlognaam[i] == '\''){
        break;
    }
    if(i == strlen($inlognaam) - 1){
        for(int i2 = 0;i2 < strlen($wachtwoord);i2++){
            if($wachtwoord[i2] == '\''){
                break;
            }
            if(i2 == strlen($wachtwoord) - 1){
                //select-query met 'WHERE email='' and wachtwoord='';
                $query = "SELECT id, email, wachtwoord FROM klant
                WHERE email='$inlognaam' and wachtwoord='$wachtwoord';";
                $result= mysqli_query($dbconn, $query);
                //aantal records bepalen mysqli_num_rows($result);
                $aantal = mysqli_num_rows($result);

                //aantal=1 =>Programma.php...
                if ($aantal==1) {
                header('refresh: 1; _programma.php');
                exit;
                }
                else {
                header('refresh: 1; login.php');
                exit;
                }
                //als het niet lukt, laat het even weten!

            }
        }
    }
}

?>
