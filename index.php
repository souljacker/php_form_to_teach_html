
<?php

if (!empty($_POST)) {
    echo "<h2>Dados enviados via POST</h2>";
    echo "<table>";
    echo "<thead><tr><td>Chave</td><td>Valor</td></tr></thead>";
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo "<strong>$key</strong>";
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

if (!empty($_GET)) {
    echo "<h2>Dados enviados via GET</h2>";
    echo "<table>";
    echo "<thead><tr><td>Chave</td><td>Valor</td></tr></thead>";
    foreach ($_GET as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo "<strong>$key</strong>";
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
