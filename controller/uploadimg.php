<?php
if ($_FILES['image']['error'] > 0) {
    echo 'error';
} else {
    $uploadDir = 'D:\GitHub\Runner-Inn\asset\upload\img\\';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo basename($uploadFile);
    } else {
        echo 'error';
    }
}
