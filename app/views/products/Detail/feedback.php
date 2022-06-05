<div class='row feedbacklist' style="width: 100%, gap: 1cm">
    <div class='col-md-6 col-sm-12'>
    <?php
        $count = 0;
        while ($count < count($data["Feedbacks"])/2){
            echo "
            <div class='row d-flex align-items-center mt-4'>
                <div class='col-2 d-flex justify-content-end'>
                    <i class='bi bi-person-circle' style='font-size: 2rem; color: #ff871d'></i>
                </div>
                <div class='col-2'>
                <h6>".$data["Feedbacks"][$count]->USERNAME."</h6></div>";
            echo "<div class='col-4 all-star'>";
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
            <div class='col-4 text-center'>
            <h6 style='color: #767676'>".$data["Feedbacks"][$count]->TIMESTAMP."</h6></div>";
            echo "
            <div class='col-2'></div>
            <div class='col-10'>
                <input class='form-control' type='text' value='".$data["Feedbacks"][$count]->CONTENT."' aria-label='Disabled input example' disabled readonly>
            </div>
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
            <div class='row d-flex align-items-center mt-4'>
                <div class='col-2 d-flex justify-content-end'>
                    <i class='bi bi-person-circle' style='font-size: 2rem; color: #ff871d;'></i>
                </div>
                <div class='col-2'>
                <h6>".$data["Feedbacks"][$count]->USERNAME."</h6></div>";
            echo "<div class='col-4 all-star'>";
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
            <div class='col-4 text-center'>
            <h6 style='color: #767676'>".$data["Feedbacks"][$count]->TIMESTAMP."</h6></div>";
            echo "
            <div class='col-2'></div>
            <div class='col-10'>
                <input class='form-control' type='text' value='".$data["Feedbacks"][$count]->CONTENT."' aria-label='Disabled input example' disabled readonly>
            </div>
            ";
            echo "</div>";
            $count++;
        }
    ?>
    </div>
</div>