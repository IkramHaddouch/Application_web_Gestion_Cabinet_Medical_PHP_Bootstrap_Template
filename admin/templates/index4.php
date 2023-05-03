<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Facture</title>
  </head>
  <body class="bg-secondary">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
   
    <button name="accueil" type="button" class="btn btn-light">
      <a style="color: black;" href="?page=accueil">Accueil</a>
    </button>
      <div class="row">
        <h1 class="text-light" id="cv_heading4" style="text-align: center;">
          Generate invoice
        </h1>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
            <label>Nom et prénom</label>
            <input type="text" name="nom"  placeholder="Enter le nom et le prénom du client" class="form-control">
          </div>
          <div class="mb-3">
            <label>Dossier Nº</label>
            <input type="text" name="dossier"  placeholder="Enter le numero de dossier" class="form-control">
          </div>
          <div class="mb-3">
            <label>Adresse du cabinet</label>
            <input type="text" name="adresseCabinet"  placeholder="Enter l'adresse du cabinet" class="form-control">
          </div>
          <div class="mb-3">
            <label>Adresse du client</label>
            <input type="text" name="adresseClient"  placeholder="Enter l'adresse du client" class="form-control">
          </div>
          <div class="mb-3">
            <label>Facture Nº</label>
            <input type="text" name="facture"  placeholder="Enter le numero de facture" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date"  placeholder="Enter la date" class="form-control">
          </div>
          <div class="mb-3">
            <label>Echéance</label>
            <input type="date" name="echeance"  placeholder="Enter l'échéance" class="form-control">
          </div>
          <div class="mb-3">
            <label>Paiement</label>
            <input type="text" name="paiement"  placeholder="Enter Payée ou Non Payée" class="form-control">
          </div>
          <div class="mb-3">
                <label>Numero de service</label>
                <input type="text" name="num1"  placeholder="Enter le numero de service" class="form-control">
            </div>
            <div class="mb-3">
                <label>Service 1</label>
                <input type="text" name="service1"  placeholder="Enter le service 1" class="form-control">
            </div>
            <div class="mb-3">
                <label>Prix de service 1</label>
                <input type="text" name="prix1"  placeholder="Enter le prix 1" class="form-control">
            </div>
        </div>
        <div class="col-md-6 bg-light shadow p-4">
            <div class="mb-3">
                <label>Numero de service</label>
                <input type="text" name="num2"  placeholder="Enter le numero de service" class="form-control">
            </div>
            <div class="mb-3">
                <label>Service 2</label>
                <input type="text" name="service2"  placeholder="Enter le service 2" class="form-control">
            </div>
            <div class="mb-3">
                <label>Prix de service 2</label>
                <input type="text" name="prix2"  placeholder="Enter le prix 2" class="form-control">
            </div>
            <div class="mb-3">
                <label>Numero de service</label>
                <input type="text" name="num3"  placeholder="Enter le numero de service" class="form-control">
            </div>
            <div class="mb-3">
                <label>Service 3</label>
                <input type="text" name="service3"  placeholder="Enter le service 3" class="form-control">
            </div>
            <div class="mb-3">
                <label>Prix de service 3</label>
                <input type="text" name="prix3"  placeholder="Enter le prix 3" class="form-control">
            </div>
            <div class="mb-3">
                <label>Prix total</label>
                <input type="text" name="pt" placeholder="Enter le prix total" class="form-control">
            </div>
            <div class="mb-3">
                <label>Ajouter un commentaire ou autre chose</label>
                <textarea class="form-control" name="ajout" id="edu"></textarea>
            </div>
            <div class="mb-3">
            <button type="submit" name="btn4" class="btn btn-dark">Generate invoice</button>
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

