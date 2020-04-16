<?php
// Input DATA from HTML Module Page
$PDA = $_POST["PDA"];
$TIPOLOGIA = $_POST["Type"];
$SEGNALAZIONE = $_POST["Sign"];
$MARCA = $_POST["Brand"];
$MODELLO = $_POST["Model"];
$DATA = $_POST["Date"];

// Local Data Conversion
$timestamp = strtotime($DATA);
$new_date = date("Y-m-d", $timestamp);
echo $new_date;

// Verify the Data submitted by the User

$sql = INSERT INTO \`Richieste\`(\`ID\`, \`ID_PDA\`, \`Tipologia\`, \`Segnalazione\`, \`Stato\`, \`Giorni\`, \`Marca\`, \`Modello\`, \`Data\`, \`User`)
VALUES (:value2, :value3, :value4, :value5, :value6, :value7, :value8, :value9, :value10)
$stmt = $db->prepare($sql);
$stmt->bindParam(':value2', $PDA, PDO::PARAM_STR);
$stmt->bindParam(':value3', $TIPOLOGIA, PDO::PARAM_STR);
$stmt->bindParam(':value4', $SEGNALAZIONE, PDO::PARAM_STR);
$stmt->bindParam(':value5', NULL, PDO::PARAM_STR);
$stmt->bindParam(':value6', NULL, PDO::PARAM_STR);
$stmt->bindParam(':value7', $MARCA, PDO::PARAM_STR);
$stmt->bindParam(':value8', $MODELLO, PDO::PARAM_STR);
$stmt->bindParam(':value9', $DATA, PDO::PARAM_STR);
$stmt->bindParam(':value10', $PDA, PDO::PARAM_STR);
$stmt->execute();
?>
