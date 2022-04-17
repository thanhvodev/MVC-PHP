<div class="grid wide container">
    <div class="row">
        <div class="col l-12 m-12">
            <div class="main__path" style="margin-bottom:32px; padding: 0; width: 100%; margin-top: 16px;">
                Home &nbsp > &nbsp News  > &nbsp Fitness is not about being better than someone else
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col l-6 m-12 c-12 item__image">
            <div class="grid">
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <img src="<?php echo $data['blogs'][$data['id']-1]->IMAGE; ?>" alt="" class="main__image1">
                    </div>
                    <div class="col l-12 m-12 c-12 author" style="display: flex; justify-content: center; align-items: center;">
                        <i class="fa-solid fa-user-tie"></i> &nbsp Tran Nhat Huy &nbsp &nbsp
                        <i class="fa-solid fa-clock"></i> &nbsp 24.March.2022 &nbsp &nbsp
                        <i class="fa-solid fa-comment"></i> &nbsp Comment &nbsp &nbsp 
                    </div>
                </div>
            </div>
        </div>
        <div class="col l-6 m-12 c-12 item__info">
            <div class="item__name"><?php echo $data['blogs'][$data['id']-1]->TITLE; ?></div>
            <div class="item__desc"><?php echo $data['blogs'][$data['id']-1]->CONTENT; ?></div>
            <div class="item__desc" style="width: 100%; text-align: end; margin-top: 16px;"><?php echo $data['blogs'][$data['id']-1]->WRITER; ?></div> 
        </div>
    </div>

    <div class="row">
        <div class="col l-12 paracolor" style="margin-top: 32px;">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>

    <div class="row">
        <div class="col l-6 m-6 c-6">
            <div class="tags__icon margintopdefault">T A G S</div>
        </div>
        <div class="col l-6 m-6 c-6 margintopdefault" style="display: flex; justify-content: end; align-items: center;">
            <div class="tags__icons">
                <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="tags__icons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <div class="tags__icons">
                <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="line"></div>

<div class="ourblog mt-5">R E L A T E D P O S T</div>
<div class="horizontalline"></div>


<?php

    // echo $data['title'];
    include APP_ROOT . '/views/components/blogslider.php';


    print_r($data['blogs'][$data['id']-1]->ID);
?>