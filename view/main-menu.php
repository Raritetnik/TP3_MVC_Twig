<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ path }}css/style.css">
    <title>{{ title }}</title>
</head>
<body>
<header class="menu-principale">
    <a href="{{path}}"><h1>Admin Panel</h1></a>
    {% if session.lvlAccess >= 2 %}
        <a href="{{path}}?url=journal">Journal de bord</a>
    {% endif %}
    <nav>
            <a href="{{path}}?url=membre">Membre</a>
            <a href="{{path}}?url=facture">Facture</a>
            <a href="{{path}}?url=livre">Livre</a>
            <a href="{{path}}?url=commande">Commande</a>
        {% if guest %}
            <a href="{{path}}?url=connexion/login">Login</a>
        {% else %}
            {% if session.lvlAccess >= 3 %}
                <a href="{{path}}?url=connexion/create">Création</a>
            {% endif %}
            <a href="{{path}}?url=connexion/logout">Logout</a>

        {% endif %}
    </nav>
</header>