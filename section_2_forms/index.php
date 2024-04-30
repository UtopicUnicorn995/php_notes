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
            <input type="text" name="firstname" id="firstname" placeholder="Firstname...">
            <!-- Front end security is not safe -->
            <label for="lastname">Lastname?</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>