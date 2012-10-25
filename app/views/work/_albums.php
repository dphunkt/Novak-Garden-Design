<div class="span9" itemscope itemtype="http://schema.org/CollectionPage">
    <ul class="clearfix breadcrumb">
        <li>
            <a href="/">Home</a> <span class="divider">|</span>
        </li>
        <li class="active">
            <a href="/work">Work</a>
        </li>
    </ul>
    <ul id="albums" class="thumbnails clearfix">
        <?php
        foreach($albums as $album) {
            $description = !empty($album['description']) ? $album['description'] : '';
            $photo = 'https://graph.facebook.com/' . $album['id'] . '/picture?type=album';?>
            <li class="box">
                <a class="thumbnail" href="/work/<?=url::urlize($album['name'])?>/<?=$album['id']?>" data-content="<?=$description?>">
                    <img src=<?=$photo?> alt="<?=$album['name']?>" />
                </a>
                <h4 class="caption"><?=$album['name']?></h4>
            </li><?
        }?>
    </ul>
</div>