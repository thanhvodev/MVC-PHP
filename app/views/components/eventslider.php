<?php 
    $i = 0;
    echo "<div class='container image-slider'>";
    while ($i<count($data['events'])) {
        $hreflink =  URL_ROOT . "/events/detail/".$data['events'][$i]->ID;
        $bgurl = $data['events'][$i]->IMAGE;
        $title = $data['events'][$i]->TITLE;
        $content = $data['events'][$i]->CONTENT;
        echo "
        <div class='image-item'>
            <div class='image-grid__item'>
                <a href='$hreflink' class='grid-item'>
                <div class='grid-item__image' style='background-image: url($bgurl)'></div>
                <div class='grid-item__hover'></div>
                <div class='grid-item__name'>Read more</div>
                </a>
            </div>
            <h4 class='image-title'>EVENTS</h4>
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
