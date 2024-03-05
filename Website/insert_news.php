<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $description = isset($_POST["description"]) ? $_POST["description"] : '';
    $author = isset($_POST["author"]) ? $_POST["author"] : '';
    $publish_date = isset($_POST["publish_date"]) ? $_POST["publish_date"] : '';

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comments";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if an image is selected
    if (isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])) {
        // Image upload handling
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is an actual image or a fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "Error: File is not an image.";
            $uploadOk = 0;
        }

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Error: File already exists.";
            $uploadOk = 0;
        }

        // Check file size (limit to 2 MB)
        if ($_FILES["image"]["size"] > 2097152) {
            echo "Error: File is too large. Max 2 MB is allowed.";
            $uploadOk = 0;
        }

        // Allow only certain image file formats (e.g., JPG, JPEG, PNG, GIF)
        if (
            $imageFileType != "jpg" && $imageFileType != "jpeg" && 
            $imageFileType != "png" && $imageFileType != "gif"
        ) {
            echo "Error: Only JPG, JPEG, PNG, and GIF formats are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Error: Image upload failed.";
        } else {
            // Attempt to move the uploaded image to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // Image uploaded successfully, now insert data into the "news" table
                $image_name = basename($_FILES["image"]["name"]);
                $sql = "INSERT INTO news (title, description, image_name, author, publish_date) 
                        VALUES ('$title', '$description', '$image_name', '$author', '$publish_date')";
                
                if ($conn->query($sql) === TRUE) {
                    // Redirect back to the news page with a success query parameter
                    header("Location: news.php?success=1");
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: Image upload failed.";
            }
        }
    } else {
        // Image not selected
        echo "Error: Please select an image.";
    }

    // Close the database connection
    $conn->close();
}
?>
