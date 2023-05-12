<?php
if ($_FILES['file']['error'] > 0) {
  echo 'Đã có lỗi xảy ra khi tải lên ảnh!';
} else {
  $uploadDir = 'D:\GitHub\Runner-Inn\asset\upload\avt\\';
  $uploadFile = $uploadDir . basename($_FILES['file']['name']);
  if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
    echo basename($uploadFile);
  } else {
    echo 'Đã có lỗi xảy ra khi tải lên ảnh!';
  }
}
