<!-- <div class="container image-slider">
    <div class="image-item">
        <div class="image-grid__item">
            <a href="/blogs/detail" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog6_1024x1024.png?v=1639709323)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description">
            Today Is The Best Day To Starting Training. No Excuses
        </div>
        <div class="image-hr"></div>
        <div clasehcs="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
    <div class="image-item">
        <div class="image-grid__item">
            <a href="#" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog5_1024x1024.png?v=1639709301)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description">
            Fitness is not about being better than someone else
        </div>
        <div class="image-hr"></div>
        <div class="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
    <div class="image-item">
        <div class="image-grid__item">
            <a href="#" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog3_553c7cb8-982a-4e28-a694-2d2a42e9adb0_1024x1024.png?v=1639709275)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description">
            What Happend at the rx-fitness Chalenge Last Weekend
        </div>
        <div class="image-hr"></div>
        <div class="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
    <div class="image-item">
        <div class="image-grid__item">
            <a href="#" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog4_b28dfcca-2a30-4325-824a-02c86a38381f_1024x1024.png?v=1639709240)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description image-description__short">
            How to exercise effectively
        </div>
        <div class="image-hr"></div>
        <div class="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
    <div class="image-item">
        <div class="image-grid__item">
            <a href="#" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog2_f0c4728c-b443-49dd-9abd-44773eb908d4_1024x1024.png?v=1639709221)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description">
            How to know enough or not?
        </div>
        <div class="image-hr"></div>
        <div class="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
    <div class="image-item">
        <div class="image-grid__item">
            <a href=''></a>
            <a href="#" class="grid-item">
            <div class="grid-item__image" style="background-image: url(https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog1_0d29b473-654a-48d5-902d-1ecdfc32efdf_1024x1024.png?v=1639709165)"></div>
            <div class="grid-item__hover"></div>
            <div class="grid-item__name">Read more</div>
            </a>
        </div>
        <h4 class="image-title">NEWS</h4>
        <div class="image-description">
            Diet when exercising weight loss, science for women
        </div>
        <div class="image-hr"></div>
        <div class="image-detail">
            Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
        </div>
    </div>
</div> -->

<?php 
    $i = 0;
    echo "<div class='container image-slider'>";
    while ($i<count($data['blogs'])) {
        $hreflink =  URL_ROOT . "/blogs/detail/".$data['blogs'][$i]->ID;
        $bgurl = $data['blogs'][$i]->IMAGE;
        $title = $data['blogs'][$i]->TITLE;
        $content = $data['blogs'][$i]->CONTENT;
        echo "
        <div class='image-item'>
            <div class='image-grid__item'>
                <a href='$hreflink' class='grid-item'>
                <div class='grid-item__image' style='background-image: url($bgurl)'></div>
                <div class='grid-item__hover'></div>
                <div class='grid-item__name'>Read more</div>
                </a>
            </div>
            <h4 class='image-title'>NEWS</h4>
            <div class='image-description'>
                $title
            </div>
            <div class='image-hr'></div>
            <div class='image-detail'>
                Cho đến đôi khi, nỗi sợ hãi và cục diện kinh tế, nỗi đau của những mũi tên trên khắp thế giới, nhu cầu muốn có mi tự do hoặc xấu xí. Mặc dù vậy, bất động sản thuần túy của các thành viên ...
            </div>
        </div>
        ";
        $i++;
        $hreflink = "";
    }
    echo "</div>"
?>
