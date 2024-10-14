@extends('layout.base')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stylisé</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/summernote/summernote.min.css') }}">

   
</head>

<body>
    <section>
        <div>
            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="epreuveForm" action="{{ route('epreuves.store') }}" method="POST">
                @csrf

                <label for="classe">Classe:</label>
                <input type="text" id="classe" name="classe" value="{{ old('classe') }}" required>

                <label for="niveau">Niveau:</label>
                <input type="text" id="niveau" name="niveau" value="{{ old('niveau') }}" required>

                <label for="matiere">Matière:</label>
                <input type="text" id="matiere" name="matiere" value="{{ old('matiere') }}" required>

                <label for="contenue">Contenue</label>
                <textarea name="contenue" id="summernote" rows="8"></textarea>

                <button type="submit">Soumettre</button>
            </form>
        </div>

        @section('js')
        <script src="{{ URL::asset('assets/summernote/summernote.min.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('#summernote').summernote({
                    placeholder: "Saisir une longue description ...",
                    height: 150
                });

                const form = document.getElementById('epreuveForm');
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const submitButton = form.querySelector('button[type="submit"]');
                    submitButton.disabled = true;
                    submitButton.innerHTML = 'Envoi en cours...';

                    setTimeout(() => {
                        form.submit();
                    }, 1000);
                });
            });
        </script>
        @endsection
    </section>
</body>

</html>
