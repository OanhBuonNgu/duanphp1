<?php 
        $idLT=0;
        if (isset($_GET['idLT'])) $idLT = $_GET['idLT'];
        settype($idLT, "int");
        $tintrongloai = TinTrongLoai($idLT);
        $tenLT = layTenLoaiTin($idLT);
?>
<div class="title-wrap">
    <h1><?=$tenLT?></h1>
</div>

<div class="row">
   <?php foreach ($tintrongloai as $tin) {?>
    <div class="col-md-6">
        <article class="entry">
            <div class="entry__img-holder">
                <a href="index.php?oanh=tin&idTin=<?=$tin['idTin'] ?>">
                    <div class="thumb-container thumb-75">
                        <img data-src="<?=$tin['urlHinh']?>" src="<?=$tin['urlHinh']?>"
                            class="entry__img lazyloaded" alt="">
                    </div>
                </a>
            </div>

            <div class="entry__body">
                <div class="entry__header">
                    <h2 class="entry__title">
                    <a href="index.php?oanh=tintrongloai&idTin=<?=$tin['idTin'] ?>"> 
                            <?=$tin['TieuDe'] ?> </a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            <?=$tin['Ngay']?>
                        </li>
                        <li class="entry__meta-comments">
                           
                            <a style="font-family: Arial, Helvetica, sans-serif;" href="#"> Số Lần Xem <?=$tin['SoLanXem']?></a>
                        </li>
                    </ul>
                </div>
                <div class="entry__excerpt">
                </div>
            </div>
        </article>
    </div>
    <?php } ?>
</div>

<!-- Pagination -->
<nav class="pagination">
    <span class="pagination__page pagination__page--current">1</span>
    <a href="#" class="pagination__page">2</a>
    <a href="#" class="pagination__page">3</a>
    <a href="#" class="pagination__page">4</a>
    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
</nav>