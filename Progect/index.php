<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <title>HSKRep</title>
</head>

<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <h3 class="mb-5">Полезные статьи</h3>
    <div class="d-flex flex-wrap">
      <?php
      for ($i = 0; $i < 6; $i++) :
      ?>
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Курсы языка</h4>
          </div>
          <div class="card-body">
            <img src="img/course.jpg" alt="">
            <h1 class="card-title pricing-card-title">$200<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>до 10 учеников в группах</li>
              <li>индивидуальный подход к каждому</li>
              <li>обратная связь</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">ЗАПИСАТЬСЯ НА КУРСЫ</button>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <?php require "blocks/footer.php" ?>
  </div>
</body>

</html>