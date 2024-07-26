<?php
if (isset($_POST['colors'])) {
  $colors = json_decode($_POST['colors'], true);
  $zip = new ZipArchive();
  $zipFileName = tempnam(sys_get_temp_dir(), 'colors') . '.zip';

  if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
    foreach ($colors as $color) {
      $image = imagecreatetruecolor(100, 100);
      list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
      $colorAlloc = imagecolorallocate($image, $r, $g, $b);
      imagefill($image, 0, 0, $colorAlloc);
      ob_start();
      imagepng($image);
      $imageData = ob_get_clean();
      imagedestroy($image);
      $zip->addFromString('color-' . substr($color, 1) . '.png', $imageData);
    }
    $zip->close();

    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="colors.zip"');
    readfile($zipFileName);
    unlink($zipFileName);
  } else {
    echo 'Fehler beim Erstellen der ZIP-Datei.';
  }
  exit;
}
?>