<div class="grid wide container">
    <div class="row">
        <div class="col l-12 m-12">
            <div class="main__path" style="margin-bottom:32px; padding: 0; width: 100%; margin-top: 32px; display:flex;">
                <a class="detail__home__href" href="<?php echo URL_ROOT . "/";?>" style="text-decoration: none; color: rgb(100,100,100);">Home</a>
                &nbsp > &nbsp
                <a class="detail__home__href" href="<?php echo URL_ROOT . "/blogs";?>" style="text-decoration: none; color: rgb(100,100,100);">News & Events</a>
                &nbsp > &nbsp
                <div style="color:orange;"><?php echo $data['events'][$data['id']-1]->TITLE; ?></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col l-6 m-12 c-12 item__image">
            <div class="grid">
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <img src="<?php echo $data['events'][$data['id']-1]->IMAGE; ?>" alt="" class="main__image1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col l-6 m-12 c-12 item__info">
            <div class="item__name"><?php echo $data['events'][$data['id']-1]->TITLE; ?></div>
            <div class="item__desc"><?php echo $data['events'][$data['id']-1]->CONTENT; ?></div>
            <!-- <div class="item__desc" style="width: 100%; text-align: end; margin-top: 16px;"><?php echo $data['events'][$data['id']-1]->WRITER; ?></div>  -->
        </div>
    </div>

    <div class="row">
        <div class="col l-12 paracolor" style="margin-top: 32px;">
            Cho đến đôi khi, nỗi sợ hãi và cục diện kinh tế, nỗi đau của những mũi tên trên khắp thế giới, nhu cầu muốn có mi tự do hoặc xấu xí. Mặc dù vậy, bất động sản thuần túy của các thành viên ...
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

<div class="ourblog mt-5">R E L A T E D &nbsp &nbsp E V E N T S</div>
<div class="horizontalline"></div>


<?php

    // echo $data['title'];
    include APP_ROOT . '/views/components/eventslider.php';


    // print_r($data['events'][$data['id']-1]->ID);
?>