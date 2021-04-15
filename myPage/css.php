<style>
*{
    margin:0;
}
.display_flex{
    display:flex;
}

.top_menu{
    position:fixed;
    <?php
    $top_height=100;
    ?>
    height:<?=$top_height?>;
    width:100%;
    background:<?=white(20)?>;
}
.menu{
    <?php
    $menu_width=200;
    if($_SESSION['menu']==0){
        ?>
        display:none;
        <?php
    }
    ?>

    height:100%;
    width:<?=$menu_width?>;
    background:<?=white(0)?>;
    position:fixed;
    opacity:80%;
}
.open{
    <?php
    $open_width=50;
    $open_height=50;
    if($_SESSION['menu']==1){
        ?>
        display:none;
        <?php
    }else{
        ?>
        display:flex;
        <?php
    }
    ?>

    cursor:pointer;
    position:absolute;
    width:<?=$open_width?>;
    height:<?=$open_height?>;
    background:black;
    color:gray;
    font-size:300%;
    align-items:center;
}
.close{
    <?php
    $close_width=50;
    $close_height=50;
    ?>

    cursor:pointer;
    position:absolute;
    width:<?=$close_width?>;
    height:<?=$close_height?>;
    background:black;
    display:flex;
    color:white;
    font-size:300%;
    align-items:center;
    
    right:0;
    opacity:80%;
}
.center{
    margin:0 auto;
}
.main{
    width:100%;
    top:<?=$top_height?>;
    position:absolute;
    z-index:-1;
    background:red;
}
.article{
    background:green;
    <?php
    $article_margin=50;
    ?>
    margin:0 <?=$article_margin?> 0 <?=$article_margin?>;
}
</style>