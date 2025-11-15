<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h2>Liste des étudiants</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
                <th>Niveau</th>
            </tr>
        </thead>

        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->matricule }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->filiere }}</td>
                <td>{{ $etudiant->niveau }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
