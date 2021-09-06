<?php

function clean($val,$method = false){
    if($method == false){
        return strip_tags(addslashes(htmlspecialchars($val)));
    }else if($method == "post"){
        return strip_tags(addslashes(htmlspecialchars($_POST[$val])));
    }else if($method == "get"){
        return strip_tags(addslashes(htmlspecialchars($_GET[$val])));
    }
}

function getValue($name){
    global $db;
    $query = $db->prepare("SELECT * FROM theme WHERE name = :name");
    $query->execute(["name" => $name]);
    $fetchData = $query->fetch(PDO::FETCH_ASSOC);
    return $fetchData["value"];
}




