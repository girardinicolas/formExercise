<form action="formetà.php" method="post">
  <input type="text" name="nome">
  <input type="date" name="data">
  <input type="submit" value="Invia">
</form>

<?php
if (isset($_POST["nome"])) {
    $nome = htmlspecialchars($_POST["nome"]);
    echo "Ciao $nome!<br>";
} else {
    echo "Nessun nome inserito.<br>";
}

if (isset($_POST["data"])) {
    $data = htmlspecialchars($_POST["data"]);
    // Calcolo età
    $oggi = new DateTime();
    $nascita = DateTime::createFromFormat('Y-m-d', $data);
    if ($nascita) {
        if ($nascita > $oggi) {
            echo "La data di nascita non può essere nel futuro.";
        } else {
            $eta = $oggi->diff($nascita)->y;
            echo "Hai $eta anni.";
        }
    } else {
        echo "Formato data non valido.";
    }
} else {
    echo "Nessuna data inserita.";
}
?>
