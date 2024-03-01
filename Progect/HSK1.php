<!DOCTYPE html>
<html lang="ru">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HSK1</title>
</head>

<body>
    <?php require "blocks/header.php" ?>
    <h2 style="text-align: center;">HSK1</h2>
    <div class="container mt-5">
        <div class="d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 15; $i++) :
            ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><? echo "Урок " . $i + 1 ?></h4>
                    </div>
                    <div class="card-body">
                        <img style="display: block; margin: 0 auto;" ; src="img/LES_NUM/<?php echo ($i + 1) ?>.jpg">
                        <button type="button" class="w-100 btn btn-lg btn-primary m-2" onclick="window.location.href = '/lessons/<?php echo ($i + 1) ?>.php';">ПЕРЕЙТИ К УРОКУ</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <?php require "blocks/footer.php" ?>
</body>

</html>