
    <div class="content">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/room.css">
        <div class="content-room">
            <div class="p-5">
                <div class="d-flex justify-content-end">


                    <div class="text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                        <label class="mr-2">Sort by:</label>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle shadow-none" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Relevance
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Relevance</a></li>
                                <li><a class="dropdown-item" href="#">Price Descending</a></li>
                                <li><a class="dropdown-item" href="#">Price Ascending</a></li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="row row-cols-1 row-cols-md-5 ">


                    <div class="col mb-3">
                        <div class="card h-100">
                            <img src="./images/room-imahe.png" class="card-img-top" alt="...">

                            <div class="card-text">
                                <div class="row fw-bold fs-5 mb-1">
                                    <div class="name-room">Penthouse Suite</div>
                                </div>
                                <div class="fs-6 mb-1  desc-room harga">Rp. 120.000,- /Day</div>
                                <div class="fs-6 mb-3 desc-room">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</div>
                                <div class="row d-flex justify-content-end">
                                    <a class="button-book btn col-5 text-white shadow-none"
                                        href="<?= BASEURL; ?>/room/detail">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
