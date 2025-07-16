<form action="formvaluta.php" method="post">
  <label for="euro">Importo in &euro;:</label>
  <input type="number" step="0.01" name="euro" id="euro" required>
  <input type="submit" value="Converti in $">
</form>

<?php
if (isset($_POST["euro"])) {
    $euro = floatval($_POST["euro"]);
    $tasso = 1.10; // 1 euro = 1.10 dollari (puoi aggiornare il tasso se necessario)
    $dollari = $euro * $tasso;
    echo "<p>$euro &euro; corrispondono a " . number_format($dollari, 2) . " $</p>";
} else {
    echo "Nessun importo inserito.";
}
?> 