<?php
if (!defined('FW')) die('Forbidden');

$slider_id = uniqid('e25-icon-slider-');
$slide_auto_rotate = $atts['e25_slides_auto']['true'];
$slide_auto_rotate_status = $atts['e25_slides_auto']['e25_slides_auto_choice'];
//Variables


?>
    <div class="e25-icon-slider <?php //echo $slider_id; ?>" id="<?php echo $slider_id; ?>">
        <?php foreach (fw_akg('e25_slide_add', $atts, array()) as $slide) : ?>
            <?php $slide_img = $slide['e25_slide_image']; ?>
            <div>
                <?php if($slide_img != "") : ?>
                <img src="<?php echo $slide_img['url']; ?>"/>
                <?php endif; ?>

                <?php if($slide_img != "") : ?>
                <h3><?php echo $slide['e25_slide_description']; ?></h3>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>


    <style>
        .e25-icon-slider div img{
            margin: auto;
        }
        .e25-icon-slider div {
            text-align: center;
        }
        body{
            background: #f2f2f2;
        }
    </style>

    <script>

        $('#<?php echo $slider_id; ?>').slick({

            autoplay: <?php echo $slide_auto_rotate_status; ?>,

            <?php if($slide_auto_rotate != "" && $slide_auto_rotate_status == 'true') :?>
            autoplaySpeed: <?php echo $slide_auto_rotate['e25_slides_time']; ?>,
            <?php endif; ?>

            centerMode: false,
            slidesToShow: <?php echo $atts['e25_slides_display']; ?>,
            slidesToScroll: 1,
            arrows: <?php echo $atts['e25_slider_arrows'] ?>,
            dots: <?php echo $atts['e25_slider_dots'] ?>
        });

    </script>


<?php
fw_print($atts);