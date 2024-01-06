<?php

if (isset($_FILES['photo'])) {
   if (move_uploaded_file($file['tmp_name'], 'uploads/' . $new_filename)) {
         header("Location: index.php?upload=success&filename=$new_filename");
        exit();
    } else {
        header("Location: index.php?error=upload_failed");
        exit();
    }
} else {
}
?>