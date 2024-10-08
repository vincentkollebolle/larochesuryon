<!-- templates/list.php -->
<?php $title = 'Detail of a Contacts' ?>
<?php $customCSS = ""; ?>
<?php ob_start() ?>
    <h1><?=$contact['forname']?> <?=$contact['name']?></h1>
    <p>...</p>

<?php $content = ob_get_clean() ?>

<?php include 'view/layoutView.php' ?>