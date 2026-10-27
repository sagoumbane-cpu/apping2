<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

```
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
    }

    header {
        background-color: #1e3a5f;
        color: white;
        text-align: center;
        padding: 20px;
    }

    nav {
        background-color: #333;
        padding: 12px;
        text-align: center;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 15px;
    }

    main {
        max-width: 500px;
        margin: 30px auto;
        padding: 25px;
        background-color: white;
        border-radius: 8px;
    }

    label {
        display: block;
        margin-top: 15px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        box-sizing: border-box;
    }

    button {
        margin-top: 20px;
        padding: 12px 20px;
        background-color: #1e3a5f;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
```

</head>

<body>

```
<header>
    <h1>Contactez-nous</h1>
    <p>Nous sommes à votre écoute.</p>
</header>

<nav>
    <a href="index.php">Accueil</a>
    <a href="service.php">Services</a>
    <a href="contact.php">Contact</a>
</nav>

<main>
    <h2>Envoyez-nous un message</h2>

    <form action="#" method="post">

        <label for="nom">Nom complet :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Votre message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Envoyer</button>

    </form>
</main>
```

</body>
</html>
