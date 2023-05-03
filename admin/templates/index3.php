<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ordonnance</title>
  </head>
  <body class="bg-secondary">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
   
    <button name="accueil" type="button" class="btn btn-light">
      <a style="color: black;" href="?page=accueil">Accueil</a>
    </button>
      <div class="row">
        <h1 class="text-light" id="cv_heading3" style="text-align: center;">
          Generate Ordonnance
        </h1>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
            <label>Nom et prénom</label>
            <input type="text" name="nom"  placeholder="Enter le nom et le prénom du malade" class="form-control">
          </div>
          <div class="mb-3">
            <label>Médicament 1</label>
            <input type="text" name="pg"  placeholder="Enter le nom de médicament" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix unitaire de médicament 1</label>
            <input type="text" name="pu1" placeholder="Enter le prix unitaire" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nombre de médicament 1</label>
            <input type="text" name="nombre1" placeholder="Enter le nombre de médicament 1" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix totale de médicament 1</label>
            <input type="text" name="pt1" placeholder="Enter le prix total" class="form-control">
          </div>
          <div class="mb-3">
          <label>Médicament 2</label>
            <input type="text" name="pg2"  placeholder="Enter le nom de médicament" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix unitaire de médicament 2</label>
            <input type="text" name="pu2" placeholder="Enter le prix unitaire" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nombre de médicament 2</label>
            <input type="text" name="nombre2" placeholder="Enter le nombre de médicament 2" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix totale de médicament 2</label>
            <input type="text" name="pt2" placeholder="Enter le prix total" class="form-control">
          </div>
          <div class="mb-3">
            <label>Médicament 3</label>
            <input type="text" name="pg3"  placeholder="Enter le nom de médicament" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix unitaire de médicament 3</label>
            <input type="text" name="pu3" placeholder="Enter le prix unitaire" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nombre de médicament 3</label>
            <input type="text" name="nombre3" placeholder="Enter le nombre de médicament 3" class="form-control">
          </div>
          <div class="mb-3">
            <label>Prix totale de médicament 3</label>
            <input type="text" name="pt3" placeholder="Enter le prix total" class="form-control">
          </div>
          </div>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
            <label>Ajouter un commentaire ou autre chose</label>
            <textarea class="form-control" name="ajout" id="edu"></textarea>
          </div>
          <div class="mb-3">
            <label>Prochain rendez-vous</label>
            <input type="date" name="rdv"  placeholder="Enter la date de rendez-vous" class="form-control">
          </div>
          <div class="mb-3">
            <label>Lieu</label>
            <input type="text" name="lieu" placeholder="Enter le lieu" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de visite</label>
            <input type="date" name="dateV" placeholder="Enter la date de visite" class="form-control">
          </div>
          <div class="mb-3">
            <label>Montant Global</label>
            <input type="text" name="montant"  placeholder="Enter le montant global" class="form-control">
          </div>
          <div class="mb-3">
            <button type="submit" name="btn3" class="btn btn-dark">Generate ordonnance</button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Online CDN Links --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'ajout',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
    </script>
  </body>
</html>

