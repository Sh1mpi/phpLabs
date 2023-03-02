<?php
if(isset($_POST['result'])) {
    $result = urlencode($_POST['result']);
    echo 'index.php?result=' . $result;
}
  
?>