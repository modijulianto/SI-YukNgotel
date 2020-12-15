<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/frontend/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">Booking Now</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Rooms Area Start -->
<div class="roberto-rooms-area section-padding-100-0" style="background-color:whitesmoke;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                            </div>
                            <div class="col-md-9">
                                <div class="row text-center">
                                    <div class="col-sm-3">
                                        <h6>1. ORDER</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h5>></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>2. PAYMENT</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h5>></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>3. COMPLETE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Detail Pemesanan</h5>
                        <hr>
                        <img src="/upload/kamar/<?= $book['foto_kamar']; ?>" class="d-block w-100" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>