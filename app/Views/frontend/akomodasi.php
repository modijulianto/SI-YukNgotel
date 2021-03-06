<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">Our <?= $tipe->nama_tipe; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $tipe->nama_tipe; ?></li>
                        </ol>
                    </nav>
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
                <?php foreach ($hotel as $val) { ?>
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="/upload/akomodasi/<?= $val['foto']; ?>" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?= $val['nama_akomodasi']; ?></h2>
                            <h4>400$ <span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>30 ft</span></h6>
                                <h6>Capacity: <span>Max persion 5</span></h6>
                                <h6>Bed: <span>King beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="/Hotel/rooms/<?= $val['id_akomodasi']; ?>" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                <?php } ?>
                <?= $pager->links('tb_akomodasi', 'akomodasi_pagination'); ?>
                <!-- Pagination -->

            </div>

            <div class="col-12 col-lg-4">
                <!-- Hotel Reservation Area -->
                <?= $this->include('frontend/form_cari'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Rooms Area End -->

<!-- Call To Action Area Start -->
<section class="roberto-cta-area">
    <div class="container">
        <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(/assets/frontend/img/bg-img/1.jpg);">
            <div class="row align-items-center">
                <div class="col-12 col-md-7">
                    <div class="cta-text mb-50">
                        <h2>Contact us now!</h2>
                        <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                    </div>
                </div>
                <div class="col-12 col-md-5 text-right">
                    <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Area End -->

<!-- Partner Area Start -->
<div class="partner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="/assets/frontend/img/core-img/p1.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="/assets/frontend/img/core-img/p2.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="/assets/frontend/img/core-img/p3.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="/assets/frontend/img/core-img/p4.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="/assets/frontend/img/core-img/p5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Area End -->
<?= $this->endSection('content'); ?>