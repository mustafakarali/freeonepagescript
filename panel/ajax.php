<?php
require "../config.php";
if (isset($_POST["deleteContact"])){
    $id = $_POST["id"];

    $query = $db->prepare("DELETE FROM contacts WHERE id = :id");
    $on = $query->execute(["id" => $id]);

    echo $on;
}
?>