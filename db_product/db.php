<? require_once("../lib/my_function.php") ?>

<?php

    $host = "localhost";
    $db_user = "ck27434_dpi2021";
    $db_name = "ck27434_dpi2021";
    $db_pass = "kPEp8akV";

    $mysqli = mysqli_connect($host, $db_user, $db_pass, $db_name);

    function getList() : array {
        $connect = $GLOBALS['mysqli'];
        $result = $connect->query("SELECT * FROM product");
        $data = array();

        while($row = $result->fetch_assoc()) {
            $data[$row["id"]] = $row;
            //vd($row);
        }

        return $data;
        
    }

    function addProduct($data) {
        $connect = $GLOBALS["mysqli"];

        $stmt = $connect->prepare("INSERT INTO `product` (`id`, `name`, `desc`, `img`) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param('sss', $data['name'], $data['desc'], $data['file']);
        if($stmt->execute()) {
            $stmt->close();
            return $connect->insert_id;
        } else {
            $stmt->close();
            return 0;
        }
      
    }