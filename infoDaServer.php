<?php
// Indirizzo IP del client
$ip = $_SERVER['REMOTE_ADDR'];
// User-Agent del browser
$user_agent = $_SERVER['HTTP_USER_AGENT'];
// Nome del file corrente
$nome_file = basename(__FILE__);

echo "<strong>Indirizzo IP:</strong> $ip<br>";
echo "<strong>User-Agent:</strong> $user_agent<br>";
echo "<strong>Nome file:</strong> $nome_file<br>";
?>
