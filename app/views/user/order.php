<div class="content">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/order.css">
    <div class="content-room">
        <div class="p-5">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">username</th>
                        <th scope="col">Name Room</th>
                        <th scope="col">Total Room</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">total_day</th>
                        <th scope="col">total_price</th>
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Order'] as $room) : ?>
                        <tr>
                            <td scope="col"><?= $data["user"] ?></td>
                            <td scope="col"><?= $room["name_room"] ?></td>
                            <td scope="col"><?= $room["total_order"] ?></td>
                            <td scope="col"><?= $room["check_in"] ?></td>
                            <td scope="col"><?= $room["check_out"] ?></td>
                            <td scope="col"><?= $room["total_day"] ?></td>
                            <td scope="col"><?= $room["total_price"] ?></td>
                            <td>
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