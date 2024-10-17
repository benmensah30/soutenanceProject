@extends('layout.base')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Epreuves</title>
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

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

<body>
    <div class="border datatable-cover bord">
        <table id="datatable" class="stripe" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Classe</th>
                    <th>Matière</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($epreuves as $epreuve)
                <tr>
                    <td>{{ $epreuve->id }}</td>
                    <td>{{ $epreuve->classe }}</td>
                    <td>{{ $epreuve->matiere }}</td>
                    <td class="text-center">

                        <a href="{{ route('pdf_epreuves.show', ['epreuve_id' => $epreuve->id]) }}" class="icon-button primary">
                            <i class="fa fa-eye"></i>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;

                        &nbsp;
                        <form action="{{ route('epreuves.destroy',  $epreuve->id)  }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="icon-button">
                                <i class="fas fa-trash">
                                </i>
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "pageLength": 5,
                "lengthMenu": [5, 10, 25, 50]
            });
        });
    </script>
</body>

</html>