<!-- content -->
<div class="content">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/detail-room.css">
    <div class="row">
        <div class="col-sm-8">
            <div class="image-side">
                <img src="<?= BASEURL; ?>/images/images_rooms/<?= $data['room']['image'] ?>" alt="" srcset="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="description-side">
                <div class="description-side-text">
                    <div class="text-header">
                        <?= $data['room']['name_room'] ?>
                    </div>
                    <div class="text-price">Rp.
                        <?= $data['room']['price'] ?>,- /Day
                    </div>
                    <div class="text-description">
                        <?= $data['room']['description'] ?>
                    </div>
                </div>
                <div class="booking-side">
                    <form>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="Name" disabled>

                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Ktp</label>
                            <input type="file" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="ktp">

                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Check In</label>
                            <input type="date" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Check Out</label>
                            <input type="date" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>


                        <button tyoe>BOOK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>