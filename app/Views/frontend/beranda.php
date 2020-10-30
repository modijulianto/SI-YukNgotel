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

            <div class="col-lg-3 intro_col">
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
            <div class="col-lg-3 intro_col">
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
            <div class="col-lg-3 intro_col">
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
            <div class="col-lg-3 intro_col">
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

        </div>
    </div>
</div>

<!-- CTA -->

<div class="cta">
    <!-- Image by https://unsplash.com/@thanni -->
    <div class="cta_background" style="background-image:url(/assets/frontend/images/cta.jpg)"></div>

    <div class="container">
        <div class="row">
            <div class="col">

                <!-- CTA Slider -->

                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>

                    </div>

                    <!-- CTA Slider Nav - Prev -->
                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                    C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
                    11.042,18.219 " />
                        </svg>
                    </div>

                    <!-- CTA Slider Nav - Next -->
                    <div class="cta_slider_nav cta_slider_next">
                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
                17.046,15.554 " />
                        </svg>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- Offers -->

<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Tujuan Populer</h2>
            </div>
        </div>
        <div class="row offers_items">

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url(/assets/frontend/images/offer_1.jpg)"></div>
                                <div class="offer_name"><a href="#">grand castle</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/sailboat.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by Egzon Bytyqi -->
                                <div class="offers_image_background" style="background-image:url(/assets/frontend/images/offer_2.jpg)"></div>
                                <div class="offer_name"><a href="#">turkey hills</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$50<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/sailboat.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                <div class="offers_image_background" style="background-image:url(/assets/frontend/images/offer_3.jpg)"></div>
                                <div class="offer_name"><a href="#">island dream</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$90<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/sailboat.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@mantashesthaven -->
                                <div class="offers_image_background" style="background-image:url(/assets/frontend/images/offer_4.jpg)"></div>
                                <div class="offer_name"><a href="#">travel light</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$30<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="/assets/frontend/images/sailboat.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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
                        <div class="trending_image"><img src="/assets/images/akomodasi/<?= $ako['foto']; ?>"></div>
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