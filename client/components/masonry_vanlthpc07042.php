<?php
require '../connect.php';
?>
<div class="container my-3">
    <?php 
    $album_id = $_GET['album_id'];
    $album = $conn->query("SELECT name,description FROM album WHERE album_id = '$album_id'")->fetch_assoc();
    ?>
    <h2 class="text-center text-uppercase mb-3"><?= $album['name']?></h2>
    <h3 class="text-center text-uppercase mb-3"><?= $album['description']?></h3>
    <div class="image-list masonry" style="--i:3;">
        <?php
        $sql = "SELECT * FROM image WHERE album_id = '$album_id'";
        $result = $conn->query($sql);
        $i = 1;
        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
                ?>
                <div class="masonry-item mb-3">
                    <img src="../uploads/<?= $row['image'] ?>" data-id="<?= $i ?>" class="carousel-image w-100 rounded-3"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Images will be added dynamically via JavaScript -->
                        </div>
    
                    </div>
                    <button class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>