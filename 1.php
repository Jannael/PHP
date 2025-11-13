<?php
  // cspell:disable-next-line
  $name = 'Jannael';
  $age = 19;
?>

<head>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

</head>

<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  main {
    width: 50%;
    text-align: center;
    height: 50%;
  }
  p {
    font-size: 10px;
  }

</style>
<main>
  <section>
    <h1><?= $name; ?></h1>
    <!-- cspell:disable-next-line -->
    <p><?= "Mi nombre es: " . $name . " Y tengo: " . $age . " años" ?></p>
  </section>
</main>