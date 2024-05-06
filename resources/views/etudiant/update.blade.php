<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Update Etudiant</h1>
    @foreach ($etudiants as $etudiant)
    <form action="update/traitement" method="post" style="width:30%">
    @csrf
  <div class="mb-3"  >
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" value="{{$etudiant->nom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" value="{{$etudiant->prenom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date de Naissance</label>
    <input type="date" class="form-control" name="dtn" value="{{$etudiant->dtn}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach






</body>
</html>

