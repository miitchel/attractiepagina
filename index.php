<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <div class="attracties-grid">
                <div class="attractie">
                    <div class="attractie-image">
                        <img src="img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg" alt="">
                    </div>
                    <div class="attractie-beschrijving">
                        <p>ADVENTURELAND</p>
                        <h1>Speedy XL</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, praesentium numquam cum doloribus dolores dolorum, atque sit non qui rem. Saepe exercitationem, cumque dolorum inventore soluta ipsa, illum ea tempora!</p>
                        <p>120cm minimale lengte</p>
                    </div>

                </div>
            </div>
        </main>
    </div>

</body>

</html>
