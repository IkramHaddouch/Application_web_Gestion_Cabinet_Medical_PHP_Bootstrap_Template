<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>medical permit report</title>
  </head>
  <body class="bg-secondary">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
   
    <button name="accueil" type="button" class="btn btn-light">
      <a style="color: black;" href="?page=accueil">Accueil</a>
    </button>
      <div class="row">
        <h1 class="text-light" id="cv_heading2" style="text-align: center;">
          Generate Dynamic medical permit report
        </h1>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Enter le nom du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prénom</label>
            <input type="text" name="prenom"  placeholder="Enter le prénom du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Sexe</label>
            <input type="text" name="sexe"  placeholder="Entrer le sexe du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de naissance</label>
            <input type="date" name="dateN" placeholder="Enter la date de naissance du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Adresse</label>
            <input type="text" name="adresse" placeholder="Enter l'adresse du patient'" class="form-control">
          </div>
          <div class="mb-3">
            <label>Profession</label>
            <input type="text" name="profession"  placeholder="Enter la profession du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>CIN</label>
            <input type="text" name="cin" placeholder="Enter numero de CIN du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Catégorie du permis</label>
            <input type="text" name="categorie" placeholder="Enter la catégorie du permis" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de l'examen</label>
            <input type="date" name="dateE"  placeholder="Enter la date de l'examen" class="form-control">
          </div>
          <div class="mb-3">
            <label>Poids</label>
            <input type="text" name="poids"  placeholder="Enter le poids du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Taille</label>
            <input type="text" name="taille" placeholder="Enter la taille du patient" class="form-control">
          </div>
          <div class="mb-3">
            <label>Ajouter commentaire ou autre chose</label>
            <textarea class="form-control" name="ajout1" id="cv">
            </textarea>
          </div>

        </div>
        <div class="col-md-6 bg-light shadow p-4">
        <div class="mb-3">
            <label>Oeil gauche de loin</label>
            <input type="text" name="ogl"  placeholder="Enter le Pourcentage de vision de l'oiel gauche de loin " class="form-control">
          </div>
          <div class="mb-3">
            <label>Oeil droite de loin</label>
            <input type="text" name="odl"  placeholder="Enter le Pourcentage de vision de l'oiel droite de loin " class="form-control">
          </div>
          <div class="mb-3">
            <label>Oeil gauche de près</label>
            <input type="text" name="ogp"  placeholder="Enter le Pourcentage de vision de l'oiel gauche de près " class="form-control">
          </div>
          <div class="mb-3">
            <label>Oeil droite de près</label>
            <input type="text" name="odp"  placeholder="Enter le Pourcentage de vision de l'oiel droite de près " class="form-control">
          </div>
          <div class="mb-3">
            <label>Ajouter commentaire ou autre chose</label>
            <textarea class="form-control" name="ajout2" id="skill">
            </textarea>
          </div>
          <div class="mb-3">
            <label>Ajouter commentaire ou autre chose</label>
            <textarea class="form-control" name="ajout3" id="skill">
            </textarea>
          </div>
          <div class="mb-3">
            <button type="submit" name="btn2" class="btn btn-dark">Generate report</button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Online CDN Links --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'ajout1',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'ajout2',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'ajout3',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
    </script>
  </body>
</html>