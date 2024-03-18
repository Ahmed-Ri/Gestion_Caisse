<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
<!-- Inclusion de la feuille de style Bootstrap à partir du dossier assets/css.-->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

<!-- Inclusion de la feuille de style personnalisée pour des styles CSS -->
<link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/js/style.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Inclusion du composant de navigation. -->
    @include('Nav.nav')
    <!-- Définition d'une section pour le contenu principal de la page.-->
    @yield('content')   
    <!-- Définition d'une section pour inclure des scripts JavaScript supplémentaires.-->
    @yield('extra-js')   
    <!-- Définition d'une section pour inclure des balises meta supplémentaires. -->
    @yield('extra-meta')
</body>
</html>



