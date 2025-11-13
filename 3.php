<?php
define('thermometerPng', './img/thermometer.png')
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

  <title>3</title>
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

    figure {
      width: 300px;
      position: relative;
    }

    .height {
      position: absolute;
      width: 5px;
      background: #f21;
      bottom: 15%;
      left: calc(50% - 5px);
      transform: rotate(180deg);
    }
  </style>
</head>
<main>
  <section>
    <figure>
      <img src="<?= thermometerPng; ?>" alt="">
      <div class="height"></div>
    </figure>
    <article>
      <!-- cspell:disable-next-line -->
      <input type="number" id="grades" placeholder="Ingresa en grados celsius">
      <p id="text"></p>
    </article>
  </section>
  <script>
    const input = document.getElementById('grades')
    const text = document.getElementById('text')
    const height = document.querySelector('.height')

    function convertToFahrenheit(value) {
      const converted = (value * 9 / 5) + 32
      const heightValue = (converted / 70 <= 70) ? converted / 70 : 70
      height.style.height = heightValue + "%"

      text.innerHTML = `El valor en Fahrenheit es: ${converted}`
    }

    input.addEventListener('input', () => convertToFahrenheit(input.value))
  </script>
</main>