<?php
if (isset($_POST['colors']) && isset($_POST['size'])) {
  $colors = json_decode($_POST['colors'], true);
  $size = (int) $_POST['size'];
  $zip = new ZipArchive();
  $zipFileName = tempnam(sys_get_temp_dir(), 'colors') . '.zip';

  if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
    foreach ($colors as $colorInfo) {
      $color = $colorInfo['color'];
      $label = $colorInfo['label'];
      $image = imagecreatetruecolor($size, $size);
      list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
      $colorAlloc = imagecolorallocate($image, $r, $g, $b);
      imagefill($image, 0, 0, $colorAlloc);
      ob_start();
      imagepng($image);
      $imageData = ob_get_clean();
      imagedestroy($image);
      $zip->addFromString($label . ".png", $imageData);
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