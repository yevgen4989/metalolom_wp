<?php
/**
 * Acf block: Слайдер-блок
 */

$arImages = array();

foreach ($block['data']['slayder_blok_images'] as $blok_image){
    $arImages[] = wp_get_attachment_image_src($blok_image, 'large');
}
?>
<div class="gallery-items relative">
    <?foreach ($arImages as $key => $image){?>
        <div class="item">
            <img src="<?=$image[0]?>" width="1024" height="682" alt="slide-<?=$key?>" class="block object-cover">
        </div>
    <?}?>
</div>
