<? $block = get_fields('options')['blosk_partnery']; ?>
<!--SECTION PARTNERS-->
<section class="py-5 ">
    <div class="container px-0 md:px-5 mx-auto">
        <?if(count($block) > 8){?>
            <!--   SLIDER VERSION     -->
            <div class="partners-items">
                <?foreach ($block as $item){?>
                    <div class="partners-item lg:w-auto relative bg-mlgreen rounded-lg my-3">
                        <div class="flex align-center justify-center rounded h-full py-3">
                            <img src="<?=$item['logo_partnera']['sizes']['thumbnail']?>" class="block object-cente mx-auto" width="125" height="35" alt="<?=$item['logo_partnera']['title']?>">
                        </div>
                    </div>
                <?}?>
            </div>
        <?}else{?>
            <!--STATIC VERSION-->
            <div class="flex flex-row flex-wrap justify-between">
                <?foreach ($block as $item){?>
                    <div class="partners-item w-1/2 sm:w-1/3 md:w-1/4 lg:w-auto relative bg-mlgreen rounded-lg m-2 my-3">
                        <div class="flex align-center justify-center rounded h-full py-3">
                            <img src="<?=$item['logo_partnera']['sizes']['thumbnail']?>" class="block object-cente mx-auto" width="125" height="35" alt="<?=$item['logo_partnera']['title']?>">
                        </div>
                    </div>
                <?}?>
            </div>
        <?}?>
    </div>
</section>
