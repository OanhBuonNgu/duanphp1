<section class="section mb-0">
    <div class="row">
        <?php $tinmoinhat = TinMoiNhat($soTin=4) ?>
        <?php foreach($tinmoinhat as $t) { ?>
        <!-- World -->
        <div class="col-md-6 mb-40">
            <div class="title-wrap bottom-line bottom-line--orange">
                <h3 class="section-title section-title--sm">World</h3>
            </div>
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="index.php?oanh=tin&idTin=<?$t['idTin'] ?>">
                        <div class="thumb-container thumb-75">
                            <img data-src="<?=$t['urlHinh'];?>" src="<?=$t['urlHinh'];?>"
                                class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                    
                </div>

                <div class="entry__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                        <a href="index.php?oanh=tin&idTin=<?$t['idTin'] ?>"> 
                            <?=$t['TieuDe'] ?> </a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i> <?=$t['Ngay']?>
                            </li>
                        </ul>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i style="font-family: Arial, Helvetica, sans-serif;"><?=$t['SoLanXem']?> View</i>
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">
                        <p style="font-family: Arial, Helvetica, sans-serif;"><?=$t['TomTat'] ?></p>
                    </div>
                </div>
            </article>
        </div>
        <?php } ?>
        <!-- end world -->
    </div>
    <?php require_once "hotnews.php"?>
</section>
<!-- end posts from categories -->