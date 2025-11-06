<?php
require_once "DataBase.php";

if (isset($_GET['id_pais'])) {
    $idPais = intval($_GET['id_pais']);
    $db = new DataBase("ajax_paises", "root", "");
    $conn = $db->connect();

    $provincias = $db->read("SELECT * FROM provincias WHERE id_pais = ?", [$idPais]);
    $db->close();

    if (count($provincias) > 0) {
        echo '<option value="">-- Selecione uma província --</option>';
        foreach ($provincias as $p) {
            echo '<option value="' . $p['id'] . '">' . htmlspecialchars($p['nome']) . '</option>';
        }
    } else {
        echo '<option value="">Nenhuma província encontrada</option>';
    }
}
