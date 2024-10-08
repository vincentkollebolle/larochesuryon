<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <?=$customCSS?>
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/index.php" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="index.php/addform" class="nav-link" href="#">Ajouter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
            <div class="row">
                <div class="col">    
                    <?=$content?>
                    
                </div>  
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
          
          // Sélectionner tous les éléments avec la classe "myClass"
          const elements = document.querySelectorAll('.list-group-item');
          // Utiliser forEach pour parcourir chaque élément
          elements.forEach((element, index) => {
              const dataId = element.dataset.id;
              console.log(dataId);
          });

          // Faire une requête GET vers une URL
          fetch('/index.php/ajax')
          .then(response => {
              if (!response.ok) {
                  throw new Error('Erreur réseau');
              }
              return response.json();  // On transforme la réponse en JSON
          })
          .then(data => {
            let myModal = new bootstrap.Modal(document.getElementById('myModal'), [])
            let myDiv = document.getElementById('ajaxAnswer');
            myDiv.textContent = data;
            myModal.toggle()
            console.log('Données reçues:', data);  // Traiter les données ici
          })
          .catch(error => {
              console.error('Erreur lors de la requête:', error);
          });

        </script>
    </body>
</html>
