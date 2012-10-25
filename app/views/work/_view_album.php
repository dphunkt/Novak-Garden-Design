<div class="span9" itemscope itemtype="http://schema.org/ImageGallery">
    <ul class="breadcrumb">
        <li>
            <a href="/">Home</a> <span class="divider">&raquo;</span>
        </li>
        <li>
            <a href="/work">Work</a> <span class="divider">&raquo;</span>
        </li>
        <li class="active">
            <?=$album['name']?>
        </li>
    </ul>
    <div id="album_slider" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
        <?php
            foreach($album_images as $i => $image) {
            if(empty($image['name'])) $image['name'] = '';
            //if($image['width'] != 720) continue;
            ?>
                <div class="<?php if ($i == 0) echo 'active '?>item">
                    <img src="<?=$image['source']?>" alt="<?=ucwords($image['name'])?>"/><br>
                    <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.novakgardendesign.com%2F&media=<?=$image['source']?>&description=<?=$image['name']?>" class="pin-it-button block" count-layout="horizontal">Pin It</a>
                    <? if ($image['name']) {?>
                        <div class="carousel-caption"><p><?=$image['name'];?></p></div><? 
                    }?>
                </div>
                <?
            } ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#album_slider" data-slide="prev"><i class="icon-white icon-chevron-left"></i></a>
        <a class="carousel-control right" href="#album_slider" data-slide="next"><i class="icon-white icon-chevron-right"></i></a>
    </div>
</div>