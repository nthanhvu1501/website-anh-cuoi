<?php
require './connect.php';
?>
<div class="container">
    <div class="image-list masonry">
        <?php
        $sql = "SELECT * FROM image";
        $result = $conn->query($sql);
        $i = 1;
        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
                ?>
                <div class="masonry-item mb-3">
                    <img src="./uploads/<?= $row['image']?>"
                        data-id="<?= $i?>" class="carousel-image w-100 rounded-3" data-toggle="modal" data-target="#exampleModal">
                </div>
                <?php
                $i++;
            endwhile;
        endif;
        ?>


    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Images will be added dynamically via JavaScript -->
                    </div>
                   
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-primary">
                        Chọn ảnh
                    </button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
                    </a>
    </div>
</div>