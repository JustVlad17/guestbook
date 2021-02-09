<?php
if (!empty($_POST['name']) && !empty($_POST['feedback'])) {
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $date = date("Y-m-d H:i:s");;
    $add = "INSERT INTO guest (name, text, date) VALUES ('$name', '$feedback', '$date')";
    $insert = mysqli_query($link, $add) or die (mysqli_error($link));
}
?>