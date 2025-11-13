<?php
// concat
$text = 'str';
$text .= ' str2';
define('constant', 'value'); //for constants
// ternary
$output = 18 > 18 ? "old" : "young";
$age = 18;
$outputAge = match($age) {
  0,1,2 => "baby",
  10,11,12 => "young",
  50,51,52 => "old",
  default => "idk"
}
?>

<?php if ($text) : ?>
  <h1>if</h1>
<?php elseif ($text): ?>
  <h1>elseif</h1>
<?php else: ?>
  <h1>else</h1>
<?php endif; ?>

<h1>
  <?= $outputAge; ?>
  <!-- its the same as <?php echo "" ?> -->
</h1>

<style>
  :root {
    color-scheme: dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>