<div class="container mt-5 py-4">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/detail-room.css">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="image-side">
        <img src="<?= BASEURL; ?>/images/images_rooms/<?= $data['room']['image'] ?>" class="w-100"
          style="border-radius: 20px">
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="description-side" style="padding: 0 1%;">
        <div class="description-side-text" style="min-height: 179px; max-height: 179px;">
          <div class="text-header" style="font-weight: 700; font-size: 25px;">
            <?= $data['room']['name_room']; ?>
          </div>
          <div class="text-price" style="font-weight: 500; font-size: 15px; margin: 0.4% 0;">Rp
            <?= $data['room']['price']; ?> / day
          </div>
          <p class="text-description" style="font-weight: 500; font-size: 12px; margin-bottom: 4%;">
            <?= nl2br($data['room']['description']); ?>
          </p>
          <div class="booking-side" style="padding: 0 1%;">
            <form method="post" action="<?= BASEURL . '/order/order/' . $data['room']['id_room']; ?>"
              enctype="multipart/form-data">
              <div class="mb-2">
                <label for="total_room" class="form-label">Total Room</label>
                <input type="number" class="form-control shadow-none" id="total_room" name="total_room"
                  aria-describedby="emailHelp" placeholder="total room" required>
              </div>
              <div class="mb-2">
                <label for="ktp" class="form-label">Ktp</label>
                <input type="file" class="form-control shadow-none" id="ktp" name="ktp" aria-describedby="fileHelp"
                  placeholder="ktp" required>
              </div>
              <div class="mb-2">
                <label for="check_in" class="form-label">Check In</label>
                <input type="date" class="form-control shadow-none" id="check_in" name="check_in"
                  aria-describedby="dateHelp" required>
              </div>
              <div class="mb-2">
                <label for="check_out" class="form-label">Check Out</label>
                <input type="date" class="form-control shadow-none" id="check_out" name="check_out"
                  aria-describedby="dateHelp" required>
              </div>
              <button type="submit" class="btn shadow-none"
                style="background-color: #1E1E1E; float: right; border: none; border-radius: 10px; margin-top: 5px; padding: 8px 25px; color: #fff;">BOOK</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>