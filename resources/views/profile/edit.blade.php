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

@extends('layout.base')

@section('content')
<div class="container">
    <h1>Modifier mon profil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nom -->
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Mot de passe -->
        <div class="mb-3">
            <label for="password" class="form-label">Nouveau mot de passe (facultatif)</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirmation du mot de passe -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
