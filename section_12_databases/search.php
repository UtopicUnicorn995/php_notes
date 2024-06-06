<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $userSearch = $_POST["usersearch"];

    try {
        require_once 'includes/dbh.inc.php';
        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':usersearch', $userSearch);
        $stmt->execute();

        // using associative array is prefered and easier
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die('Query failed: "' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching Page</title>
</head>

<body>
    <h3>Search results: </h3>

    <?php
    if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
    } else {
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li> Hello bitches, my username is " . htmlspecialchars($result['username']) . " and my comment is: " . htmlspecialchars($result['comment_text']) . "</li>";
        };
        echo "</ul>";
    }
    ?>

</body>

</html>