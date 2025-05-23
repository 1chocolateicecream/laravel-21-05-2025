<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<form action="/submit-contact" method="POST">
    @csrf

    <div>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="saturs">Jautajums:</label>
        <textarea id="saturs" name="saturs" required></textarea>
    </div>

    <div>
        <button type="submit">sutit</button>
    </div>
</form>

</body>
</html>