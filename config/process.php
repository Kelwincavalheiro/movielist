<?php
session_start();

include_once("connection.php");

include_once("url.php");

$data = $_POST;

if(!empty($data)){
 
    if($data["type"] === "create"){
        
        $title = $data["title"];
        $img = $data["img"];
        $synopsis = $data["synopsis"];

        $query = "INSERT INTO movielist (title,img,synopsis) VALUES (:title,:img,:synopsis)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":img", $img);
        $stmt->bindParam(":synopsis", $synopsis);
  
        try{
            $stmt->execute();
            $_SESSION["msg"] = "Movie added successfully!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }

    } else if ($data["type"] === "edit"){

        $id = $data["id"];
        $title = $data["title"];
        $img = $data["img"];
        $synopsis = $data["synopsis"];

        $query = "UPDATE movielist 
                SET title = :title,img = :img,synopsis = :synopsis
                WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":img", $img);
        $stmt->bindParam(":synopsis", $synopsis);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Movie updated successfully!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }
        
    }else if ($data["type"] === "delet"){
        
        $id = $data["id"];
        $query ="DELETE FROM movielist WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Movie removed successfully!";

        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error"; 
        }
    }

    header("location: " .$BASE_URL. "../index.php");

}else{

    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }

    if(!empty($id)){
        $query = "SELECT * FROM movielist WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $movies = $stmt->fetch();
    }else {

    $movielist = [];

    $query = "SELECT * FROM movielist";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $movielist = $stmt->fetchAll();
    }
}

$conn = null;

?>