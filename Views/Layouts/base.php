<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
    <link href="<?= URL ?>public/CSS/main.css" rel="stylesheet" />
    <?php if(!empty($page_css)) : ?>
        <?php foreach($page_css as $fichier_css) : ?>
            <link href="<?= URL ?>public/CSS/<?= $fichier_css ?>" rel="stylesheet" />
        <?php endforeach; ?>
    <?php endif; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>
<?php require_once('Views/Layouts/header.php');?>
<div class="px-2 lg:px-0 lg:w-9/12 lg:mx-auto">
    <?php
    try {
        Toolbox::displayAlerts();
    } catch (Exception $e) {
        throw new \RuntimeException($e->getMessage());
    }
    ?>
    <?= $page_content; ?>
</div>
<?php require_once('Views/Layouts/footer.php');?>
<script src="<?= URL ?>public/Javascript/navbar.js"></script>
<?php if(!empty($page_javascript)) : ?>
    <?php foreach($page_javascript as $fichier_javascript) : ?>
        <script src="<?= URL?>public/JavaScript/<?= $fichier_javascript ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>


