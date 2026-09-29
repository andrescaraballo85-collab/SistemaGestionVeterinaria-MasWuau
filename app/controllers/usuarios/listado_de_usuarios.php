<?php

$sql = "SELECT * FROM tb_usuarios";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO:: FETCH_ASSOC);

