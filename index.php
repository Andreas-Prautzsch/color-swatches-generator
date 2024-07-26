<?php
// Tailwind CSS Farbpalette
$colors = [
  "gray" => [
    "50" => "#f9fafb", "100" => "#f3f4f6", "200" => "#e5e7eb", "300" => "#d1d5db", "400" => "#9ca3af", "500" => "#6b7280", "600" => "#4b5563", "700" => "#374151", "800" => "#1f2937", "900" => "#111827"
  ],
  "red" => [
    "50" => "#fef2f2", "100" => "#fee2e2", "200" => "#fecaca", "300" => "#fca5a5", "400" => "#f87171", "500" => "#ef4444", "600" => "#dc2626", "700" => "#b91c1c", "800" => "#991b1b", "900" => "#7f1d1d"
  ],
  "yellow" => [
    "50" => "#fffbeb", "100" => "#fef3c7", "200" => "#fde68a", "300" => "#fcd34d", "400" => "#fbbf24", "500" => "#f59e0b", "600" => "#d97706", "700" => "#b45309", "800" => "#92400e", "900" => "#78350f"
  ],
  "green" => [
    "50" => "#ecfdf5", "100" => "#d1fae5", "200" => "#a7f3d0", "300" => "#6ee7b7", "400" => "#34d399", "500" => "#10b981", "600" => "#059669", "700" => "#047857", "800" => "#065f46", "900" => "#064e3b"
  ],
  "blue" => [
    "50" => "#eff6ff", "100" => "#dbeafe", "200" => "#bfdbfe", "300" => "#93c5fd", "400" => "#60a5fa", "500" => "#3b82f6", "600" => "#2563eb", "700" => "#1d4ed8", "800" => "#1e40af", "900" => "#1e3a8a"
  ],
  "indigo" => [
    "50" => "#eef2ff", "100" => "#e0e7ff", "200" => "#c7d2fe", "300" => "#a5b4fc", "400" => "#818cf8", "500" => "#6366f1", "600" => "#4f46e5", "700" => "#4338ca", "800" => "#3730a3", "900" => "#312e81"
  ],
  "purple" => [
    "50" => "#f5f3ff", "100" => "#ede9fe", "200" => "#ddd6fe", "300" => "#c4b5fd", "400" => "#a78bfa", "500" => "#8b5cf6", "600" => "#7c3aed", "700" => "#6d28d9", "800" => "#5b21b6", "900" => "#4c1d95"
  ],
  "pink" => [
    "50" => "#fdf2f8", "100" => "#fce7f3", "200" => "#fbcfe8", "300" => "#f9a8d4", "400" => "#f472b6", "500" => "#ec4899", "600" => "#db2777", "700" => "#be185d", "800" => "#9d174d", "900" => "#831843"
  ],
  "rose" => [
    "50" => "#fff1f2", "100" => "#ffe4e6", "200" => "#fecdd3", "300" => "#fda4af", "400" => "#fb7185", "500" => "#f43f5e", "600" => "#e11d48", "700" => "#be123c", "800" => "#9f1239", "900" => "#881337"
  ],
  "amber" => [
    "50" => "#fffbeb", "100" => "#fef3c7", "200" => "#fde68a", "300" => "#fcd34d", "400" => "#fbbf24", "500" => "#f59e0b", "600" => "#d97706", "700" => "#b45309", "800" => "#92400e", "900" => "#78350f"
  ],
  "lime" => [
    "50" => "#f7fee7", "100" => "#ecfccb", "200" => "#d9f99d", "300" => "#bef264", "400" => "#a3e635", "500" => "#84cc16", "600" => "#65a30d", "700" => "#4d7c0f", "800" => "#3f6212", "900" => "#365314"
  ],
  "emerald" => [
    "50" => "#ecfdf5", "100" => "#d1fae5", "200" => "#a7f3d0", "300" => "#6ee7b7", "400" => "#34d399", "500" => "#10b981", "600" => "#059669", "700" => "#047857", "800" => "#065f46", "900" => "#064e3b"
  ],
  "teal" => [
    "50" => "#f0fdfa", "100" => "#ccfbf1", "200" => "#99f6e4", "300" => "#5eead4", "400" => "#2dd4bf", "500" => "#14b8a6", "600" => "#0d9488", "700" => "#0f766e", "800" => "#115e59", "900" => "#134e4a"
  ],
  "cyan" => [
    "50" => "#ecfeff", "100" => "#cffafe", "200" => "#a5f3fc", "300" => "#67e8f9", "400" => "#22d3ee", "500" => "#06b6d4", "600" => "#0891b2", "700" => "#0e7490", "800" => "#155e75", "900" => "#164e63"
  ],
  "sky" => [
    "50" => "#f0f9ff", "100" => "#e0f2fe", "200" => "#bae6fd", "300" => "#7dd3fc", "400" => "#38bdf8", "500" => "#0ea5e9", "600" => "#0284c7", "700" => "#0369a1", "800" => "#075985", "900" => "#0c4a6e"
  ],
  "violet" => [
    "50" => "#f5f3ff", "100" => "#ede9fe", "200" => "#ddd6fe", "300" => "#c4b5fd", "400" => "#a78bfa", "500" => "#8b5cf6", "600" => "#7c3aed", "700" => "#6d28d9", "800" => "#5b21b6", "900" => "#4c1d95"
  ],
  "fuchsia" => [
    "50" => "#fdf4ff", "100" => "#fae8ff", "200" => "#f5d0fe", "300" => "#f0abfc", "400" => "#e879f9", "500" => "#d946ef", "600" => "#c026d3", "700" => "#a21caf", "800" => "#86198f", "900" => "#701a75"
  ]
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
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f4f4f4;
    }

    h1 {
      text-align: center;
    }

    .color-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 20px;
    }

    .color-box {
      width: 50px;
      height: 50px;
      margin: 5px;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border 0.3s ease;
    }

    .color-box:hover {
      border: 2px solid #000;
    }

    .color-box.selected {
      border: 2px solid #000;
    }

    .category-title {
      text-align: center;
      margin-top: 20px;
    }

    #download-btn {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #1cb095;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    #download-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <h1>Farbe auswählen und Bild herunterladen</h1>

  <?php foreach ($colors as $color_name => $shades) : ?>
    <div class="category-title"><?= ucfirst($color_name) ?></div>
    <div class="color-container">
      <?php foreach ($shades as $shade => $hex) : ?>
        <div class="color-box" style="background-color: <?= $hex ?>;" data-color="<?= $hex ?>"></div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>

  <div class="category-title">Lichtfarben (Kelvin)</div>
  <div class="color-container">
    <?php foreach ($kelvin_colors as $kelvin => $hex) : ?>
      <div class="color-box" style="background-color: <?= $hex ?>;" data-color="<?= $hex ?>"></div>
    <?php endforeach; ?>
  </div>

  <button id="download-btn">Bilder herunterladen</button>

  <form id="download-form" action="download_zip.php" method="POST" style="display:none;">
    <input type="hidden" name="colors" id="colors-input">
  </form>

  <script>
    document.addEventListener( 'DOMContentLoaded', function () {
      const colorBoxes = document.querySelectorAll( '.color-box' );
      const downloadBtn = document.getElementById( 'download-btn' );
      const colorsInput = document.getElementById( 'colors-input' );
      let selectedColors = [];

      colorBoxes.forEach( box => {
        box.addEventListener( 'click', function () {
          this.classList.toggle( 'selected' );
          const color = this.getAttribute( 'data-color' );
          if ( this.classList.contains( 'selected' ) ) {
            selectedColors.push( color );
          } else {
            selectedColors = selectedColors.filter( c => c !== color );
          }
        } );
      } );

      downloadBtn.addEventListener( 'click', function () {
        if ( selectedColors.length > 0 ) {
          colorsInput.value = JSON.stringify( selectedColors );
          document.getElementById( 'download-form' ).submit();
        } else {
          alert( 'Bitte wählen Sie mindestens eine Farbe aus.' );
        }
      } );
    } );
  </script>
</body>

</html>