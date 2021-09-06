<?php
require "../config.php";
if (isset($_POST["save"])){
    global $db;

    $data = $_POST;
    $files = array_keys($_FILES);
    foreach ($files as $file){
        $data[$file] = "";
    }
    unset($data["save"]);
    $folder = "assets/images/";
    $targetDir = "../assets/front/" . $folder;
    $extensions = ["gif","jpg","png","jpeg","webp"];
    foreach ($data as $key => $value){
        if (isset($_FILES[$key])){
            $file = $_FILES[$key];
            if (!empty($file["name"])){
                $file_name = $folder . basename($_FILES[$key]["name"]);
                $targetFile = $targetDir . basename($_FILES[$key]["name"]);
                $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                if (in_array($imageFileType,$extensions)){
                    if (!file_exists($targetFile)){
                        if (move_uploaded_file($_FILES[$key]["tmp_name"],$targetFile)){
                            $update = $db->prepare("UPDATE theme SET value = ? WHERE name = ?");
                            $update->execute([$file_name,$key]);
                        }else{
                            echo "dosya yüklenirken bir sorun oluştu : ". $_FILES[$key]["error"];
                            exit;
                        }
                    }else{
                        echo "dosya zaten mevcut";
                        exit;
                    }
                }else{
                    echo "dosya uzantısı desteklenmiyor";
                    exit;
                }
            }else{

            }
        }else{
            $update = $db->prepare("UPDATE theme SET value = ? WHERE name = ?");
            $update->execute([$value,$key]);
        }
    }


    header("Location: ".URL."panel/edit-theme?success");
}else{
    echo "POST İŞLEMİ GEREKLİ";
}
?>