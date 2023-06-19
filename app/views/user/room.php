<div class="content">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/room.css">
    <div class="content-room">
        <div class="p-5">

            <div class="row row-cols-1 row-cols-md-5 mt-4">
                <?php foreach ($data['room'] as $room) : ?>
                    <div class="col mb-3">
                        <div class="card h-100">
                            <img src="<?= BASEURL; ?>/images/images_rooms/<?= $room['image'] ?>" class="card-img-top" alt="..." style="width: 207px;">

                            <div class="card-text">
                                <div class=" row fw-bold fs-5 mb-1">
                                    <div class="name-room"><?= $room['name_room'] ?></div>
                                </div>
                                <div class="fs-6 mb-1  desc-room harga">Rp. <?= $room['price'] ?>,- /Day</div>
                                <div class="fs-6 mb-3 desc-room" style="text-overflow: ellipsis; white-space: nowrap;  overflow:hidden;"><?= $room['description'] ?></div>
                                <div class="row d-flex justify-content-end">
                                    <a class="button-book btn col-5 text-white shadow-none" href="<?= BASEURL; ?>/room/detail/<?= $room['id_room'] ?>">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>