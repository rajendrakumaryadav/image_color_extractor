<?php 
require 'vendor/autoload.php';
echo "<link rel='stylesheet' href='css/style.css'/>";

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

$palette = Palette::fromFilename('./image.jpg');
$colors = $palette->getMostUsedColors(1026);

foreach ($colors as $color => $count) {
?>
   <div class="cell" style="background: <?php echo Color::fromIntToHex($color); ?>;">
    <?php echo Color::fromIntToHex($color); ?>
   </div>

<?php } ?>