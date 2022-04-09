<div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" align="center">
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="<?php echo $data["Images"][0]->IMAGE;?>" class="rounded" /></div>
            <?php
                $i = 1;
                while ($i < count($data["Images"])){
                    echo "<div class='carousel-item'> <img src='".$data["Images"][$i]->IMAGE."' class='rounded' /> </div>";
                    $i++;
                }
            ?>
        </div>
        <ol class="carousel-indicators list-inline">
            <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-bs-slide-to="0" data-bs-target="#myCarousel"> <img src="<?php echo $data["Images"][0]->IMAGE;?>" class="img-fluid rounded" /> </a> </li>
            <?php
                $i = 1;
                while ($i < count($data["Images"])){
                    echo "<li class='list-inline-item'> <a id='carousel-selector-'".$i."' data-bs-slide-to='".$i."' data-bs-target='#myCarousel'> <img src='".$data["Images"][$i]->IMAGE."' class='img-fluid rounded' /> </a> </li>";
                    $i++;
                }
            ?>
        </ol>
    </div>
</div>