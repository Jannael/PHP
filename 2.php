<?php
$base = 15;
$height = 10;
$area = ($base * $height) / 2;
define('imgUrl', './img/triangle.png')
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

  <title>2</title>
</head>

<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  section {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
  }

  img {
    width: <?= $base . "cm"; ?>;
    height: <?= $height . "cm"; ?>;
  }

  p {
    font-weight: bold;
  }
</style>

<main>
  <section>
    <img src="<?= imgUrl; ?>" alt="">
    <article>
      <input type="number" id="height" placeholder="height">
      <input type="number" id="width" placeholder="width">
      <!-- cspell:disable-next-line -->
      <p id="content"><?= "La altura del traingulo es: " . $height . "<br>la medida de la base es: " . $base . "<br> por tanto la altura es: " . $area ?></p>

      <script>
        const width = document.getElementById('width')
        const height = document.getElementById('height')
        const text = document.getElementById('content')
        const img = document.querySelector('img')

        function renderTriangle () {
          img.style.width = width.value + "cm"
          img.style.height = height.value + "cm"
          // cspell:disable-next-line
          text.innerHTML = `La altura del traingulo es: ${height.value} cm <br>la medida de la base es: ${width.value} cm <br> por tanto la altura es: ${(width.value * height.value) / 2} cm^2`
        }

        width.addEventListener('input', (e) => renderTriangle())
        height.addEventListener('input', (e) => renderTriangle())
      </script>
    </article>
  </section>
</main>