<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML-CSS-REPORT</title>
  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" media="screen">
  <link href="assets/css/report.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Title</a>
      <div class="d-flex">
        <button class="btn btn-success me-2" type="button">Print</button>
        <button class="btn btn-info" type="button">Download</button>
      </div>
    </div>
  </nav>

  <div class="page-margin-top"></div>

  <page size="A4">
    <article>This is an A4 document.</article>
    <?php
    for ($i = 1; $i <= 25; $i++) {
      echo '<p>' . $i . '</p>';
    }
    ?>
  </page>
  <page size="A4">
    <article>This is an A4 document.</article>
  </page>

  <!-- <div class="page-margin-top"></div>
  <page size="A4"></page>
  <page size="A4"></page>
  <page size="A4" layout="landscape"></page>
  <page size="A5"></page>
  <page size="A5" layout="landscape"></page>
  <page size="A3"></page>
  <page size="A3" layout="landscape"></page> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>