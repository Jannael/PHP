<?php
  // cspell:disable-next-line
  $name = 'Jannael';
  $age = 19;
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
  <title>1</title>
</head>

<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100dvh;
    font-size: 3rem;
  }
  main {
    width: 50%;
    text-align: center;
  }
  h1 {
    font-size: 6rem;
  }
</style>

<main>
  <section>
    <h1><?= $name; ?></h1>
    <!-- cspell:disable-next-line -->
    <p><?= "Mi nombre es: " . $name . " Y tengo: " . $age . " años" ?></p>
  </section>
</main>