<? 
    include_once("db.php");

    $name = isset($_POST["name"]) && $_POST["name"] != '' ? $_POST["name"] : false;
    $desc = isset($_POST["desc"]) && $_POST["desc"] != '' ? $_POST["desc"] : false;

    if ($name && $desc) {
        if (isset($_FILES["img"]) && $_FILES["img"]["size"] > 0 && $_FILES["img"]["size"] < 500000) {
            $file = $_FILES["img"];
            
            $link_file = "/ovchinnikov/db_product/files/".$file["name"];
            $file_name = $_SERVER["DOCUMENT_ROOT"].$link_file;
            
            copy($file["tmp_name"], $file_name);
        }

        $data_add = [
            "name" => $name,
            "desc" => $desc,
            "file" => isset($link_file) ? $link_file : ""
        ];

        if($id = addProduct($data_add)) {
            $result = [
                'error' => 0,
                'success' => 1,
                'id' => $id
            ];
            echo json_encode($result);
        } else {
            $result = [
                'error' => 1,
                'success' => 0,
                'id' => 0
            ];
            echo json_encode($result);
        }

    }
?>