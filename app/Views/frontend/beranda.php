<?= $this->extend('layout/template_front'); ?>

<?= $this->section('content'); ?>
<!-- Search -->

<div class="search">


    <!-- Search Contents -->

    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">

                <!-- Search Panel -->

                <div class="search_panel active">
                    <form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_item">
                            <div>destination</div>
                            <input type="text" class="destination search_input" required="required">
                        </div>
                        <div class="search_item">
                            <div>check in</div>
                            <input type="date" class="check_in search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                            <div>check out</div>
                            <input type="date" class="check_out search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                            <div>guest</div>
                            <select name="adults" id="adults_1" class="dropdown_item_select search_input">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <button class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Cari Berdasarkan Tipe Akomodasi</h2>
            </div>
        </div>
        <div class="row trending_container">

            <!-- Trending Item -->
            <?php foreach ($akomodasi as $ako) { ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="trending_item clearfix">
                        <div class="trending_image"><img src="/assets/images/akomodasi/<?= $ako['foto_tipe']; ?>"></div>
                        <div class="trending_content">
                            <div class="trending_title"><a href="#"><?= $ako['nama_tipe']; ?></a></div>
                            <div class="trending_price">From $182</div>
                            <div class="trending_location">madrid, spain</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">Tujuan Populer</h2>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
                        Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                </div>
            </div>
        </div> -->
        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/bali.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Bali</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/jakarta.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Jakarta</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/bandung.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Bandung</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/jogja.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Yogyakarta</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/bogor.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Bogor</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/malang.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Malang</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/puncak.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Puncak</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 intro_col" style="margin-bottom: 30px;">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(/assets/images/lokasi_populer/semarang.jpeg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <!-- <div class="intro_date">May 25th - June 01st</div> -->
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">see
                                more<span></span><span></span><span></span></a>
                        </div>
                        <div class="intro_center text-center">
                            <h1 style="font-size: 35px;">Semarang</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="contact">
    <div class="contact_background" style="background-image:url(/assets/frontend/images/contact.png)"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">get in touch</div>
                    <form action="#" id="contact_form" class="contact_form">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">send
                            message<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>