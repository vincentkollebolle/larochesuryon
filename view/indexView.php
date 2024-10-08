<!-- templates/list.php -->
<?php $title = 'List of Contacts' ?>
<?php $customCSS =""; ?>
<?php ob_start() ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center mb-4"><?=$title?></h1>

                <div class="list-group">
                    <?php foreach ($contacts as $contact): ?>
                        <a class="list-group-item list-group-item-action" data-id="<?=$contact['id']?>">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?= htmlspecialchars($contact['forname']) ?></h5>
                                <small>ID: <?=$contact['id']?></small>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                <!-- Bouton pdf-->
                <a href="/index.php/pdf" class="my-4 btn btn-outline-primary" 
                    target="_blank" role="button">
                    <i class="fas fa-file-pdf"></i> Télécharger le PDF
                </a>
                <!-- Bouton spreadsheet-->
                <a href="/index.php/excel" class="my-4 btn btn-outline-primary" 
                    target="_blank" role="button">
                    <i class="fa-solid fa-file-excel"></i> Télécharger le Excel
                </a>
                <!-- Modal -->
                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Mon Titre etc...</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div id="ajaxAnswer" class="alert alert-warning"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (empty($contacts)): ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        No contacts found.
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'view/layoutView.php' ?>
