<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class="col s12">
<h1>Liste Etudiant</h1>
    <a href="/ajouterEtudiant" class="btn btn-primary">Ajouter Etudiant</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Date de Naissance</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $etudiants as $etd )
        <tr>
            <td>{{$etd->nom}}</td>
            <td>{{$etd->prenom}}</td>
            <td>{{$etd->dtn}}</td>
            <td>
            <a href="/updateEtudiant/{{ urlencode($etd->nom) }}" class="btn btn-info">Update</a>
            <a href="/deleteEtudiant/{{ urlencode($etd->nom) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach



    </tbody>
</table>
</div>
</div>
</body>
</html>

