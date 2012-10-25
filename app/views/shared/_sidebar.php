<div class="sidebar span3 relative">
    <div class="center">
        <a href="/"><img src="/images/ngdc_logo_270x131.png" alt="Novak Garden Design & Construction" /></a><br>
        Phone: (401) 327 1841 | Fax: (888) 429 1863
    </div>
    <?php
        if (!empty($pagename)) { ?>
            <h1><?=$pagename?></h1><?
        }
        
        if (!empty($description)) {
            echo $description;
        }
    ?>
    <?php /*
    <div class="social">
        <div class="fb-like" data-send="false" data-layout="box_count" data-font="Helvetica" data-show-faces="true" data-href="http://www.novakgardendesign.com" data-width="55"></div>
        <div class="g-plusone" data-size="tall" annotation="bubble" data-href="http://www.novakgardendesign.com"></div>
        <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
        <script type="IN/Share" data-counter="top" data-url="http://www.novakgardendesign.com"></script>
    </div>
    */ ?>
</div>