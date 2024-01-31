<?php
session_start();
session_destroy();
header("Location: index.php?logout=true"); // Redirect to user page with logout parameter
exit();
?>