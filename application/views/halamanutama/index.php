<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <?php $i = 1; ?>
            <?php foreach ($art_selamat as $asel) : ?>
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= base_url('assets/img/artikel/artikel_sambutan/') . $asel['gambar']; ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s"><?= $asel['judul_sambutan']; ?></p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"><?= $asel['isi_sambutan']; ?></h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>

    </div>
    <!-- slider Area End-->

    <!-- Team-profile Start -->
    <div class="team-profile team-padding">
        <div class="container">
            <div class="row">
                <div class="row" style="width: 65%;">
                    <?php $i = 1; ?>
                    <?php foreach ($art_prof as $ap) : ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-profile mb-30">
                                <!-- Front -->
                                <div class="single-profile-front">
                                    <div class="profile-img">
                                        <img src="<?= base_url('assets/img/artikel/artikel_profile/') . $ap['gambar_prof']; ?>" alt="">
                                    </div>
                                    <div class="profile-caption">
                                        <h4><a href="#"><?= $ap['judul_prof']; ?></a></h4>
                                        <p><?= $ap['deskrips']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30">
                        <!-- Back -->
                        <div class="single-profile-back-last">
                            <h2>Apa yang dapat kami bantu?</h2>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore smod
                                tem magna aliqua. Ut enim.</p>
                            <a href="#">Lihat profile »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team-profile End-->

    <!-- We Trusted Start-->
    <div class="we-trusted-area trusted-padding">
        <div class="container">
            <div class="row d-flex align-items-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="trusted-img">
                        <img src="assets/buson/assets/img/team/wetrusted.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="trusted-caption">
                        <h2>Kami berharap pelayanan kami memuaskan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru dolor sit amet,
                            consectetur adipn.</p>
                        <a href="#" class="btn trusted-btn">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- We Trusted End-->

    <!-- services Area Start-->
    <div class="services-area section-padding2">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($servis as $sp) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="<?= $sp['icon_serv']; ?>"></span>
                            </div>
                            <div class="services-caption">
                                <h4><?= $sp['judul_serv']; ?></h4>
                                <p><?= $sp['ket_serv']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!-- button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-50">
                    <a href="services.html" class="border-btn">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- services Area End-->

    <!-- Testimonial Start -->
    <div class="testimonial-area fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45">
                                <img src="assets/buson/assets/img/logo/testimonial.png" class="ani-btn " alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>You can’t succeed if you just do what others do and
                                    follow the well-worn path. You need to create a new and
                                    original path for yourself. </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45">
                                <img src="assets/buson/assets/img/logo/testimonial.png" class="ani-btn" alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>You can’t succeed if you just do what others do and
                                    follow the well-worn path. You need to create a new and
                                    original path for yourself. </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Recent Area Start -->
    <div class="recent-area section-paddingt">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Our Recent News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="assets/buson/assets/img/recent/rcent_1.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Business planing</span>
                            <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="assets/buson/assets/img/recent/rcent_2.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Audit</span>
                            <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="assets/buson/assets/img/recent/rcent_3.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Business planing</span>
                            <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Area End-->

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">

            </div>
        </div>
    </div>
    <!-- Request Back End -->

</main>