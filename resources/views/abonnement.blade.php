@extends('layout.base')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnements</title>
</head>

<body class="image10">
    <div>
        <nav class="container  border-bottom border-black">
            <div class="row gap-2" style="height: 50px; margin-top: 20px;">
                <div class="col">
                    <div class="image6"></div>
                </div>
                <div class="col"><a class="nav-link active" href="">connessance c++</a></div>
                <div class="col"><a class="nav-link active" href="{{ route('dashboard') }}">Aceuil</a></div>
                <div class="col"><a class="nav-link active" href="{{ route('profile.edit') }}">profil</a></div>
                <div class="col"><a class="nav-link active" href="{{ route('epreuves.index') }}">Epreuves</a></div>
                <div class="col"><a class="nav-link active" href="{{ route('logout') }}">Deconnexion</a></div>
            </div>
        </nav>
        <div>
            <h1>
                Liste des abonnements
            </h1>
        </div>
        <div class="image10">
        </div>
    </div>

</body>

</html>