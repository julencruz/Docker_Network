<?php
$conn = pg_connect("host=Database port=5432 dbname=AppDB user=useradmin password=secure1234");

if (!$conn) {
    echo "<p>Error: No se pudo conectar a la base de datos.</p>";
    exit;
}

$server = gethostname();

// Insertar registro
$insertQuery = "INSERT INTO \"AppTable\" (\"WebServer\", \"Datetime\") VALUES ('$server', CURRENT_TIMESTAMP)";
$insertResult = pg_query($conn, $insertQuery);

if (!$insertResult) {
    echo "<p>Error al insertar datos.</p>";
    exit;
}

// Consultar cantidad de veces que ha respondido
$countQuery = "SELECT COUNT(*) FROM \"AppTable\" WHERE \"WebServer\" = '$server'";
$result = pg_query($conn, $countQuery);

if ($result) {
    $count = pg_fetch_result($result, 0, 0);
} else {
    echo "<p>Error al contar registros.</p>";
}

echo '<h1 style="font-family: Arial, sans-serif;">WebServer ID: ' . gethostname() . ' - Num served requests: ' . $count . '</h1>';

pg_close($conn);
?>