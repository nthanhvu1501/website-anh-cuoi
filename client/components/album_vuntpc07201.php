<div class="container my-3">
    <h2 class="text-center text-uppercase">
        album ảnh cưới
    </h2>
    <div class="row">
        <?php
        require '../connect.php';
        $sql = $conn->query("SELECT * FROM album");
        if ($sql->num_rows > 0):
            while ($album = $sql->fetch_assoc()):
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="../uploads/<?= $album['thumbnail']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $album['name']?></h5>
                            <p class="card-text text-truncate"><?= $album['description']?></p>
                            <div class="text-center">
                                <a href="./album-detail_vuntpc07201.php?id_album=<?= $album['id_album']?>" class="btn btn-primary">Xem album</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>

    </div>
</div>