<form action="getSearch.php" method="get">
  <label for="termine">Cerca una parola:</label>
  <input type="text" name="termine" id="termine" required>
  <input type="submit" value="Cerca">
</form>

<?php
if (isset($_GET["termine"])) {
    $termine = htmlspecialchars($_GET["termine"]);
    echo "Hai cercato: $termine";
}
?>
