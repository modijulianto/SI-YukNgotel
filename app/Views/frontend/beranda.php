<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Welcome Area Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);" data-img-url="/assets/frontend/img/bg-img/16.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Resort</h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">Temukan Kenyamananmu</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(/assets/frontend/img/bg-img/17.jpg);" data-img-url="/assets/frontend/img/bg-img/17.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Resort</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Bersama Kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(/assets/frontend/img/bg-img/18.jpg);" data-img-url="/assets/frontend/img/bg-img/18.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                <h2 data-animation="fadeInDown" data-delay="500ms">Booking Akomodasi Termurah</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- About Us Area Start -->
<section class="roberto-about-area section-padding-100-0">
    <!-- Hotel Search Form Area -->
    <div class="hotel-search-form-area">
        <div class="container-fluid">
            <div class="hotel-search-form">
                <form action="/Hotel/cari" method="post">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-6 col-md-2 col-lg" style="height:122px">
                            <label for="destination">Destination</label>
                            <!-- <input type="text" class="form-control" id="destination" name="destination" placeholder="Your destination"> -->
                            <select class="form-control" name="destination" id="destination"></select>
                        </div>
                        <div class="col-6 col-md-2 col-lg">
                            <label for="checkIn">Check In</label>
                            <input type="date" class="form-control" id="checkIn" name="checkin">
                        </div>
                        <div class="col-6 col-md-2 col-lg">
                            <label for="checkOut">Check Out</label>
                            <input type="date" class="form-control" id="checkOut" name="checkout">
                        </div>
                        <div class="col-3 col-md-1">
                            <label for="adults">Guest</label>
                            <select name="adults" id="adults" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6>About Us</h6>
                    <h2>Welcome to <br>YukNgotel.com</h2>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">yukngotel.com adalah pionir agent booking hotel online di Indonesia yang bisa menjadi pilihan terbaik Anda untuk pesan hotel murah di berbagai kota favorit. Selain itu, yukngotel.com juga memiliki fitur spesial untuk Anda yang ingin pesan hotel online.</h5>
                    <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Putu Modi Julianto</span></p>
                    <img src="/assets/frontend/img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="/assets/frontend/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="/assets/frontend/img/bg-img/14.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="/assets/frontend/img/bg-img/15.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->

<!-- Service Area Start -->
<div class="roberto-service-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-content d-flex align-items-center justify-content-between">
                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="/assets/frontend/img/core-img/icon-1.png" alt="">
                        <h5>Transportion</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/assets/frontend/img/core-img/icon-2.png" alt="">
                        <h5>Reiseservice</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="/assets/frontend/img/core-img/icon-3.png" alt="">
                        <h5>Spa Relaxtion</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="/assets/frontend/img/core-img/icon-4.png" alt="">
                        <h5>Restaurant</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <img src="/assets/frontend/img/core-img/icon-1.png" alt="">
                        <h5>Bar &amp; Drink</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- Our Room Area Start -->
<section class="roberto-rooms-area">
    <div class="rooms-slides owl-carousel">
        <!-- Single Room Slide -->
        <div class="single-room-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="room-thumbnail h-100 bg-img" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);"></div>

            <!-- Content -->
            <div class="room-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Premium King Room</h2>
                <h3 data-animation="fadeInUp" data-delay="300ms">400$ <span>/ Day</span></h3>
                <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                    <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 5</span></li>
                    <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                    <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom</span></li>
                </ul>
                <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
            </div>
        </div>

        <!-- Single Room Slide -->
        <div class="single-room-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="room-thumbnail h-100 bg-img" style="background-image: url(/assets/frontend/img/bg-img/17.jpg);"></div>

            <!-- Content -->
            <div class="room-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Best King Room</h2>
                <h3 data-animation="fadeInUp" data-delay="300ms">125$ <span>/ Day</span></h3>
                <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                    <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 5</span></li>
                    <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                    <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom</span></li>
                </ul>
                <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
            </div>
        </div>
    </div>
</section>
<!-- Our Room Area End -->
<!-- Projects Area Start -->
<div class="row mt-5">
    <!-- Section Heading -->
    <div class="col-12">
        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
            <h6>Tipe Akomodasi</h6>
            <h2>Tujuan Populer</h2>
        </div>
    </div>
</div>
<section class="roberto-project-area">
    <!-- Projects Slide -->
    <div class="projects-slides owl-carousel">
        <?php foreach ($akomodasi as $val) { ?>
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(/assets/images/akomodasi/<?= $val['foto_tipe']; ?>);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Akomodasi</h6>
                        <h5><?= $val['nama_tipe']; ?></h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Akomodasi</h6>
                        <h5><?= $val['nama_tipe']; ?></h5>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Projects Area End -->

<!-- Blog Area Start -->
<section class="roberto-blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h6>Popular Destination</h6>
                    <h2>Tujuan Populer</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/bali.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Bali</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/jogja.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Yogyakarta</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/jakarta.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Jakarta</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/bandung.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Bandung</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/bogor.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Bogor</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="/assets/images/lokasi_populer/puncak.jpeg" width="100%" alt="">
                    <div class="service-title d-flex align-items-center justify-content-center">
                        <h5>Puncak</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

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

<script>
    $("#destination").select2({
        minimumInputLength: 3,
        allowClear: true,
        placeholder: 'Your Destination',
        ajax: {
            url: "/Referensi/cari_destination",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    des: params.term // search term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>
<?= $this->endSection('content'); ?>