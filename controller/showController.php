<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);   
$contact = get_contact_by_id($id);
include("view/showView.php");
?>
