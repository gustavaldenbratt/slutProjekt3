<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// TA BORT INLOGGNINGEN
session_destroy();
// SKICKAS VIDARE TILL INDEX.PHP
header("Location: index.php");
exit();
?>