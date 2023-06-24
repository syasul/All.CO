<link rel="stylesheet" href="<?= BASEURL; ?>/css/detail-room.css">
<div class="container mt-5 py-4">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="image-side">
        <img src="<?= BASEURL; ?>/images/images_rooms/<?= $data['room']['image'] ?>" class="w-100" style="border-radius: 20px">
      </div>
    </div>
    <div class="col-12 col-md-4">
      <h2><?= $data['room']['name_room']; ?></h2>
      <h4>Rp<?= $data['room']['price']; ?> / day</h4>
      <p><?= nl2br($data['room']['description']); ?></p>
      <form method="post" action="<?= BASEURL . '/order/order/' . $data['room']['id_room']; ?>" enctype="multipart/form-data">
        <div class="mb-2">
          <label for="total_room" class="form-label">Total Room</label>
          <input type="number" class="form-control shadow-none" id="total_room" name="total_room" aria-describedby="emailHelp" placeholder="total room" required>
        </div>
        <div class="mb-2">
          <label for="ktp" class="form-label">Ktp</label>
          <input type="file" class="form-control shadow-none" id="ktp" name="ktp" aria-describedby="fileHelp" placeholder="ktp" required>
        </div>
        <div class="mb-2">
          <label for="check_in" class="form-label">Check In</label>
          <input type="date" class="form-control shadow-none" id="check_in" name="check_in" aria-describedby="dateHelp" required>
        </div>
        <div class="mb-2">
          <label for="check_out" class="form-label">Check Out</label>
          <input type="date" class="form-control shadow-none" id="check_out" name="check_out" aria-describedby="dateHelp" required>
        </div>
        <button type="submit" class="btn btn-primary shadow-none">BOOK</button>
      </form>
    </div>
  </div>
</div>