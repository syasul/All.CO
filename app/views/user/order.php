<div class="row flash" style="margin-top: 50px;">
    <div class="col-sm-12">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="content">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/order.css">
    <div class="content-room">
        <div class="p-5">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">username</th>
                        <th scope="col" class="text-center">Name Room</th>
                        <th scope="col" class="text-center">Total Room</th>
                        <th scope="col" class="text-center">Check In</th>
                        <th scope="col" class="text-center">Check Out</th>
                        <th scope="col" class="text-center">total_day</th>
                        <th scope="col" class="text-center">total_price</th>
                        <th scope="col" class="text-center">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Order'] as $room) : ?>
                        <tr>
                            <td scope="col" class="text-center"><?= $data["user"] ?></td>
                            <td scope="col" class="text-center"><?= $room["name_room"] ?></td>
                            <td scope="col" class="text-center"><?= $room["total_order"] ?></td>
                            <td scope="col" class="text-center"><?= $room["check_in"] ?></td>
                            <td scope="col" class="text-center"><?= $room["check_out"] ?></td>
                            <td scope="col" class="text-center"><?= $room["total_day"] ?></td>
                            <td scope="col" class="text-center"> Rp. <?= $room["total_price"] ?></td>
                            <td class="text-center">
                                <?php if (0 == $room['status']) { ?>
                                    <span class="badge bg-secondary">Pending</span>
                                <?php } else { ?>
                                    <span class="badge bg-success">Approved</span>
                                <?php } ?>
                            </td>

                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>