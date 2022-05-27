<div class='row feedbacklist' style="width: 100%">
    <div class='col-md-6 col-sm-12'>
    <?php
        $count = 0;
        while ($count < count($data["Feedbacks"])/2){
            echo "
            <div class='row d-flex justify-content-center align-items-center mt-4'>
                <i class='col-1 bi bi-person-circle' style='font-size: 2rem; color: #ff871d;'></i>
                <h6 class='col-2'>".$data["Feedbacks"][$count]->USERNAME."</h6>";
            echo "<div class='col-2 all-star'>";
            $i = 1;
            while ($i <= $data["Feedbacks"][$count]->RATING){
                echo "<i class='ratingstar fas fa-star'></i>";
                $i++;
            }
            $i = 1;
            while ($i <= 5 - $data["Feedbacks"][$count]->RATING){
                echo "<i class='ratingstar far fa-star'></i>";
                $i++;
            }
            echo "</div>
            <h6 class='col-4' style='color: #767676'>".$data["Feedbacks"][$count]->TIMESTAMP."</h6>";
            echo "
            <div class='col-1'></div>
            <input class='form-control' style='width: 500px;' type='text' value='".$data["Feedbacks"][$count]->CONTENT."' aria-label='Disabled input example' disabled readonly>
            ";
            echo "</div>";
            $count++;
        }
    ?>
    </div>
    <div class='col-md-6 col-sm-12'>
    <?php
        if (count($data["Feedbacks"]) % 2 == 0)
            $count = count($data["Feedbacks"])/2;
        else
            $count = count($data["Feedbacks"])/2 + 1;
        while ($count < count($data["Feedbacks"])){
            echo "
            <div class='listFB row d-flex justify-content-center align-items-center mt-4'>
            <i class='col-1 bi bi-person-circle text-right' style='font-size: 2rem; color: #ff871d;'></i>
            <h6 class='col-2'>".$data["Feedbacks"][$count]->USERNAME."</h6>";
            echo "<div class='col-2 all-star'>";
            $i = 1;
            while ($i <= $data["Feedbacks"][$count]->RATING){
                echo "<i class='ratingstar fas fa-star'></i>";
                $i++;
            }
            $i = 1;
            while ($i <= 5 - $data["Feedbacks"][$count]->RATING){
                echo "<i class='ratingstar far fa-star'></i>";
                $i++;
            }
            echo "</div>
            <h6 class='col-4' style='color: #767676'>".$data["Feedbacks"][$count]->TIMESTAMP."</h6>";
            echo "
            <div class='col-1'></div>
            <input class='form-control' style='width: 500px;' type='text' value='".$data["Feedbacks"][$count]->CONTENT."' aria-label='Disabled input example' disabled readonly>
            ";
            echo "</div>";
            $count++;
        }
    ?>
    </div>
</div>