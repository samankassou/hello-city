<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>
    </head>
    <body>
        <p>Built with &hearts; by SAMANKASSOU FOULLA</p>
        <p><a href="/">Revenir à la page d'accueil</a></p>
        <footer>
            <p>&copy; Copyright {{ date('Y') }}</p>
        </footer>
    </body>
</html>
