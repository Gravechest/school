<?php
session_start();
echo "Tot ziens" . $_SESSION['USER'];
session_destroy();
?>
