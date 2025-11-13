<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <!-- cspell:disable-next-line -->
  <title>avg de Calificaciones</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100dvh;
    }

    form {
      margin-bottom: 20px;
      width: 40%;
    }

    input {
      margin: 5px;
    }

    .result {
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- cspell:disable-next-line -->
  <h1>Calculadora de avg</h1>

  <form method="post">
    <!-- cspell:disable-next-line -->
    <label>Calificación 1: <input type="number" name="c1" step="0.01" required></label><br>
    <!-- cspell:disable-next-line -->
    <label>Calificación 2: <input type="number" name="c2" step="0.01" required></label><br>
    <!-- cspell:disable-next-line -->
    <label>Calificación 3: <input type="number" name="c3" step="0.01" required></label><br>
    <!-- cspell:disable-next-line -->
    <button type="submit">Calcular promedio</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $c1 = floatval($_POST["c1"]);
    $c2 = floatval($_POST["c2"]);
    $c3 = floatval($_POST["c3"]);

    $avg = ($c1 + $c2 + $c3) / 3;

    // cspell:disable-next-line
    echo "<div class='result'>promedio: " . number_format($avg, 2) . "</div>";

    if ($avg >= 9) {
      // cspell:disable-next-line
      echo "<p>🎉 ¡Excelente desempeño!</p>";
    } elseif ($avg >= 7) {
      // cspell:disable-next-line
      echo "<p>🙂 Buen trabajo, sigue esforzándote.</p>";
    } elseif ($avg >= 5) {
      // cspell:disable-next-line
      echo "<p>😐 Pasaste, pero puedes mejorar.</p>";
    } else {
      // cspell:disable-next-line
      echo "<p>⚠️ Necesitas estudiar más.</p>";
    }
  }
  ?>
</body>

</html>