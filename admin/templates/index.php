<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>medical expert report</title>
  </head>
  <body class="bg-secondary">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
   
    <button name="accueil" type="button" class="btn btn-light">
      <a style="color: black;" href="?page=accueil">Accueil</a>
    </button>
      <div class="row">
        <h1 class="text-light" id="cv_heading" style="text-align: center;">
          Generate Dynamic medical expert report
        </h1>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" placeholder="Enter la date du document" class="form-control">
          </div>
          <div class="mb-3">
            <label>Magistrat</label>
            <input type="text" name="magistrat"  placeholder="Enter le nom du magistrat" class="form-control">
          </div>
          <div class="mb-3">
            <label>Numero dossier</label>
            <input type="text" name="dossier"  placeholder="Enter le numero du dossier" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de jugement</label>
            <input type="date" name="dateJug" placeholder="Enter la date du jugement" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de jugement probatoire</label>
            <input type="date" name="dateJugProb" placeholder="Enter la date du jugement probatoire" class="form-control">
          </div>
          <div class="mb-3">
            <label>Compagnie d'assurance</label>
            <input type="text" name="assurance"  placeholder="Enter la compagnie d'assurance" class="form-control">
          </div>
          <div class="mb-3">
            <label>reference</label>
            <input type="text" name="ref" placeholder="Enter numero de reference" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de deposition</label>
            <input type="date" name="dateDep" placeholder="Enter la date de deposition" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nom du victime</label>
            <input type="text" name="victime"  placeholder="Enter le nom du victime" class="form-control">
          </div>
          <div class="mb-3">
            <label>Numero CIN</label>
            <input type="text" name="cin"  placeholder="Enter le numero du CIN" class="form-control">
          </div>
          <div class="mb-3">
            <label>Date de delivrance de CMI</label>
            <input type="date" name="dateDeliv" placeholder="Enter la date du delivrance de CMI" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nom du docteur</label>
            <input type="text" name="docteur"  placeholder="Enter le nom du docteur" class="form-control">
          </div>
          <div class="mb-3">
            <label>Le docteur rélève ce qui suit</label>
            <textarea class="form-control" name="dossierMed" id="edu"></textarea>
          </div>
        </div>
        <div class="col-md-6 bg-light shadow p-4">
          <div class="mb-3">
          <div class="mb-3">
            <label>Certificats</label>
            <input type="text" name="certificate1" placeholder="Certificate name" class="form-control">
            <input type="text" name="certificate2" placeholder="Certificate name" class="form-control">
            <input type="text" name="certificate3" placeholder="Certificate name" class="form-control">
          </div>
          <div class="mb-3">
            <label>Examen medical</label>
            <textarea class="form-control" name="examem" id="cv"></textarea>
          </div>
          </div>
          <div class="mb-3">
            <label>Conlusion de l'expertise du Dr Rahmani</label>
            <textarea class="form-control" name="conclusion" id="skill">
            </textarea>
          </div>
          <div class="mb-3">
            <button type="submit" name="btn" class="btn btn-dark">Generate report</button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Online CDN Links --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'examem',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'conclusion',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'dossierMed',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
    </script>
  </body>
</html>

