
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
                Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam ut purus mattis mauris sodales...
            </div>
        </div>
        ";
        $i++;
        $hreflink = "";
    }
    echo "</div>"
?>