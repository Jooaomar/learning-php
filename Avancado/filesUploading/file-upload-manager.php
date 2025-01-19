<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Verifica se o arquivo foi carregado sem erro
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) 
    {
        $allowed_ext = array("jpg" => "image/jpg",
                            "jpeg" => "image/jpeg",
                            "gif" => "image/gif",
                            "png" => "image/png");
        $file_name = $_FILES["photo"]["name"];
        $file_type = $_FILES["photo"]["type"];
        $file_size = $_FILES["photo"]["size"];

        // Verificar extensão do arquivo
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed_ext)) 
        {
            die("Error: Please select a valid file format.");
        }

        if (in_array($file_type, $allowed_ext))
        {
            // Verifica se o arquivo existe antes de enviá-lo
            if (file_exists("upload/".$_FILES["photo"]["tmp_name"])) {
                echo $_FILES["photo"]["name"] . " already exists!";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/".$_FILES["photo"]["name"]);
                echo "Your file uploaded successfully.";
            }
        }
        else 
        {
            echo "Error: Please try again!";
        }
    }
    else 
    {
        echo "Error: ". $_FILES["photo"]["error"];
    }
}