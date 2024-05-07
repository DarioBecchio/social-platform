<?php require './helpers/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Utenti</title>
</head>
<body>


<?php
/*------------------------------------------- (3) QUERIES ----------------------------------------------------------//

3)
Posso finalmente, nel linguaggio MySQL creare una richiesta, o meglio "interrogazione" (la chiamiamo $query), nella quale poter scrivere istruzioni MySQL che mi permettono di selezionare all'interno di una TABELLA determinata uno o più RECORD.

Nel linquaggio Sql (Structured Query Language) l'istruzione SELECT serve a cercare qualcosa all'interno di un database e memorizzarla per il successivo utilizzo.

SINTASSI
SELECT campi FROM nomeTabella WHERE secondoQualeCriterio, ORDINA I RISULTATI

$query = "SELECT * FROM admin WHERE 1";

- * è la wildcard che indica tutti i record della tabella
- admin è il nome della tabella
- 1 è un valore che inseriamo quando non si vuole impostare nessun criterio, 1 = true, 0 = false

--------------------------------------------------------------------- SELECT DI UTENTI SENZA CRITERI -------------------------------------------------------------*/
$query = "SELECT `posts` . `user_id`, `users` . `username`, SUM(CASE WHEN `likes` . `post_id` IS NOT NULL THEN 1 ELSE 0 END) AS `total_likes_received`
FROM `posts`
LEFT JOIN likes ON `posts` . `id` = `likes` . `post_id`
GROUP BY `posts` . `user_id`
ORDER BY `total_likes_received` DESC;";
$result = $connection->query($query);

//----------------------------------------------------------- RISULTATI SELECT SENZA CRITERI ------------------------------------------------//

// Ciclo sul $result trasformando $result in un array associativo
while ( $row = $result->fetch_assoc() ) {
  echo "<p>{$row['type']} </p>";
}
echo "<hr>";
?>

</body>
</html>