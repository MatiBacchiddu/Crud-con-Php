

<?php 

include ('db.php');


if(isset($_POST['save-task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $creado = $_POST['created_at'];
    
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if( !$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Se ha guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header('Location: index.php');
}

?>