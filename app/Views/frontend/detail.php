<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                    <h2 class="room-title"><?= $room['nama_tipeKamar']; ?></h2>
                    <h2 class="room-price">Rp.<?= number_format($room['tarif'], 0, ',', '.'); ?> <span>/ Per Night</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Rooms Area Start -->
<div class="roberto-rooms-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- Single Room Details Area -->
                <div class="single-room-details-area mb-50">
                    <!-- Room Thumbnail Slides -->
                    <div class="room-thumbnail-slides mb-50">
                        <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/upload/kamar/<?= $room['foto_kamar']; ?>" class="d-block w-100" alt="">
                                </div>
                                <!-- <div class="carousel-item">
                                    <img src="img/bg-img/49.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/bg-img/50.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/bg-img/51.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/bg-img/52.jpg" class="d-block w-100" alt="">
                                </div> -->
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                    <img src="/upload/kamar/<?= $room['foto_kamar']; ?>" class="d-block w-100" alt="">
                                </li>
                                <!-- <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                    <img src="img/bg-img/49.jpg" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                    <img src="img/bg-img/50.jpg" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                    <img src="img/bg-img/51.jpg" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                    <img src="img/bg-img/52.jpg" class="d-block w-100" alt="">
                                </li> -->
                            </ol>
                        </div>
                    </div>

                    <!-- Room Features -->
                    <div class="room-features-area d-flex flex-wrap mb-50">
                        <h6>Size: <span><?= $room['luas_kamar']; ?></span></h6>
                        <h6>Capacity: <span>Max persion <?= $room['max_guest']; ?></span></h6>
                        <h6>Status:
                            <?php if ($room['status'] == "Ready") { ?>
                                <span style="color:lawngreen"><?= $room['status']; ?></span>
                            <?php } else { ?>
                                <span style="color:lightslategray"><?= $room['status']; ?></span>
                            <?php } ?>
                        </h6>
                        <h6>Services: <span>Wifi, television ...</span></h6>
                    </div>
                    <h6>Deskripsi : </h6>
                    <p><?= $room['keterangan']; ?></p>
                </div>

                <!-- Room Service -->
                <div class="room-service mb-50">
                    <h4>Room Services</h4>

                    <ul>
                        <li><img src="/assets/frontend/img/core-img/icon1.png" alt=""> Air Conditioning</li>
                        <li><img src="/assets/frontend/img/core-img/icon2.png" alt=""> Free drinks</li>
                        <li><img src="/assets/frontend/img/core-img/icon3.png" alt=""> Restaurant quality</li>
                        <li><img src="/assets/frontend/img/core-img/icon4.png" alt=""> Cable TV</li>
                        <li><img src="/assets/frontend/img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                        <li><img src="/assets/frontend/img/core-img/icon6.png" alt=""> Service 24/24</li>
                    </ul>
                </div>

                <!-- Room Review -->
                <div class="room-review-area mb-100">
                    <h4>Room Review</h4>

                    <!-- Single Review Area -->
                    <div class="single-room-review-area d-flex align-items-center">
                        <div class="reviwer-thumbnail">
                            <img src="/assets/frontend/img/bg-img/53.jpg" alt="">
                        </div>
                        <div class="reviwer-content">
                            <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                <div class="reviwer-title">
                                    <span>27 Aug 2019</span>
                                    <h6>Brandon Kelley</h6>
                                </div>
                                <div class="reviwer-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                        </div>
                    </div>

                    <!-- Single Review Area -->
                    <div class="single-room-review-area d-flex align-items-center">
                        <div class="reviwer-thumbnail">
                            <img src="/assets/frontend/img/bg-img/54.jpg" alt="">
                        </div>
                        <div class="reviwer-content">
                            <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                <div class="reviwer-title">
                                    <span>27 Aug 2019</span>
                                    <h6>Sounron Masha</h6>
                                </div>
                                <div class="reviwer-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                        </div>
                    </div>

                    <!-- Single Review Area -->
                    <div class="single-room-review-area d-flex align-items-center">
                        <div class="reviwer-thumbnail">
                            <img src="/assets/frontend/img/bg-img/55.jpg" alt="">
                        </div>
                        <div class="reviwer-content">
                            <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                <div class="reviwer-title">
                                    <span>27 Aug 2019</span>
                                    <h6>Amada Lyly</h6>
                                </div>
                                <div class="reviwer-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                        </div>
                    </div>

                </div>
                <center class="mb-5">
                    <a href="/Hotel/booking/<?= md5($room['id_kamar']); ?>" class="btn btn-primary">Book Now</a>
                </center>
            </div>

            <div class="col-12 col-lg-4">
                <?= $this->include('frontend/form_cari'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Rooms Area End -->
<?= $this->endSection('content'); ?>