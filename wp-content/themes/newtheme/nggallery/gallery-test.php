<?php
/**
 * Template Page for the gallery overview
 *
 * Follow variables are useable :
 *
 * $gallery     : Contain all about the gallery
 * $images      : Contain all images, path, title
 * $pagination  : Contain the pagination content
 *
 * You can check the content when you insert the tag <?php var_dump($variable) ?>
 * If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
 **/
?>

<?php if (!defined('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
    <div class="work-full-media mb-80 mb-xs-40">

        <ul class="clearlist work-full-slider owl-carousel">
            <?php foreach ($images as $image) : ?>

                <?php if (!$image->hidden) { ?>
                    <li>
                        <img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>"
                             src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
                    </li>
                <?php } ?>

                <?php if ($image->hidden) continue; ?>
                <?php if ($gallery->columns > 0 && ++$i % $gallery->columns == 0) { ?>
                    <br style="clear: both"/>
                <?php } ?>

            <?php endforeach; ?>
        </ul>

    </div>
    <!-- Work Item (Lightbox) -->


<?php endif; ?>