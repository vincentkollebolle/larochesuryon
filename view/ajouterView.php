<!-- templates/list.php -->
<?php $title = 'Add a Contacts' ?>
<?php $customCSS = ""; ?>
<?php ob_start() ?>
    <h1 class="my-4">Ajouter un contact</h1>
    
    <form action="/index.php/processform" method="POST">
        <label>Prénom </label><br/>
        <input name="forname" type="text" placeholder="Ici rentrez votre prénom..." class="form-control" />
        <input name="name" type="text" placeholder="Ici rentrez votre nom..." class="form-control" />
        <button class="btn btn-outline-primary my-4" type="submit">Ajouter</button>
    </form>
<?php $content = ob_get_clean() ?>

<?php include 'view/layoutView.php' ?>