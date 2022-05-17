<!DOCTYPE html>
<html>
<body>

<?php
 //echo "<table style='border: solid 1px black;'>";
 $actual = "";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        //return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
        $actual = parent::current();
        //echo $actual;
    }

    function beginChildren() {
        //echo "<tr>";
    }

    function endChildren() {
        //echo "</tr>" . "\n";
        //echo "<br>"."\n";
    }
}



try {
    include_once ("conexion.php");
    $conn = CConexion::ConexionBD();

    $stmt = $conn->prepare("SELECT MAX(id) AS id FROM Cuentas");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
    }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "<br>".$actual;
$conn = null;
//echo "</table>";
?>

</body>
</html>