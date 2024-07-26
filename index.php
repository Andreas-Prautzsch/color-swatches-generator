<?php
// Farben definieren
$colors = [
  "red" => "#FF0000",
  "green" => "#00FF00",
  "blue" => "#0000FF",
  "yellow" => "#FFFF00",
  "cyan" => "#00FFFF",
  "magenta" => "#FF00FF",
  "white" => "#FFFFFF",
  "black" => "#000000",
  // Fügen Sie weitere Farben nach Bedarf hinzu
];

// Lichttemperaturen definieren (in Kelvin)
$kelvin_colors = [
  1000 => "#FF3800",
  1500 => "#FF7E00",
  2000 => "#FF9D00",
  2500 => "#FFD100",
  3000 => "#FFE39F",
  3500 => "#FFFFB5",
  4000 => "#FFFFFF",
  4500 => "#BFCFFF",
  5000 => "#9FCFFF",
  5500 => "#ADDFFF",
  6000 => "#9EDFFF",
  6500 => "#8DDFFF",
  7000 => "#7CDFFF",
  7500 => "#6BDEFF",
  8000 => "#5ADEFF",
  8500 => "#49DEFF",
  9000 => "#38DEFF",
  9500 => "#27DEFF",
  10000 => "#16DEFF",
];
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Color Picker</title>
</head>

<body>
  <h1>Farbe auswählen und Bild herunterladen</h1>
  <form action="" method="GET">
    <label for="color">Farbe:</label>
    <select name="color" id="color">
      <?php foreach ($colors as $name => $hex) : ?>
        <option value="<?= $hex ?>"><?= ucfirst($name) ?></option>
      <?php endforeach; ?>
    </select>

    <label for="kelvin">Lichttemperatur (Kelvin):</label>
    <select name="kelvin" id="kelvin">
      <?php foreach ($kelvin_colors as $kelvin => $hex) : ?>
        <option value="<?= $hex ?>"><?= $kelvin ?>K</option>
      <?php endforeach; ?>
    </select>

    <button type="submit">Bild herunterladen</button>
  </form>

  <?php
  if (isset($_GET['color']) || isset($_GET['kelvin'])) {
    $color = isset($_GET['color']) ? $_GET['color'] : null;
    $kelvin = isset($_GET['kelvin']) ? $_GET['kelvin'] : null;
    $selectedColor = $color ? $color : $kelvin;
    if ($selectedColor) {
      header("Content-type: image/png");
      $image = imagecreatetruecolor(100, 100);
      list($r, $g, $b) = sscanf($selectedColor, "#%02x%02x%02x");
      $color = imagecolorallocate($image, $r, $g, $b);
      imagefill($image, 0, 0, $color);
      imagepng($image);
      imagedestroy($image);
      exit;
    }
  }
  ?>
</body>

</html>