<?php
session_start();
require_once '../backend/config.php';
if(!isset($_SESSION['user_id']))
{
    $msg = "Je moet eerst inloggen!";
    header("Location: $base_url/admin/login.php?msg=$msg");
    exit;
}
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina / Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once '../../header.php'; ?>
    <div class="container">

        <a href="create.php">Nieuwe attractie maken &gt;</a>

        <?php
        require_once '../backend/conn.php';
        $query = "SELECT * FROM rides ORDER BY title";
        $statement = $conn->prepare($query);
        $statement->execute();
        $attracties = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <p>Aantal attracties: <strong>
                <?php echo count($attracties) ?>
            </strong></p>
        <table>
            <tr>
                <th>Titel</th>
                <th>Themagebied</th>
                <th>Beschrijving</th>
                <th>Min. lengte</th>
                <th>Fastpass</th>
            </tr>
            <?php foreach($attracties as $attractie): ?>
                <tr>
                    <td><?php echo $attractie['title']; ?></td>
                    <td><?php echo ucfirst($attractie['themeland']); ?></td>
                    <td><?php echo $attractie['description']?></td>
                    <td><?php echo $attractie['min_length']; ?></td>
                    <td><?php if ($attractie['fast_pass']) echo "Ja"; else echo "Nee"; ?></td>
                    <td><a href="edit.php?id=<?php echo $attractie['id']; ?>">aanpassen</a></td>
                </tr>
            <?php endforeach; ?>
        </table>


    </div>

</body>

</html>
