<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" id="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input type="text" id="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="none">Dog</option>
                <option value="none">Cat</option>
                <option value="none">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>