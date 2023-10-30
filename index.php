<?php

include('cookie.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php
    $cookie = new Cookie();
    $cookie->setType(' клубничное');
    $cookie->setType(' ванильное');
    $cookie->setType(' овсяное');
    $cookie->setType(' шоколадное');

    $types = implode(", ", $cookie->getType());
    ?>
    <p class ="title1">
      Виды печенья:
      <?= $types ?>
    </p>
  </div>
</body>

</html>

<?php
function showCookiesType($cookie)
{
  $types = implode("-", $cookie->getType());
  echo "<p>{$types}</p>";
}
?>