<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <?php foreach($banner as $result): ?>
            <div class="single-hero-slide bg-img" style="background-image: url(<?= base_url('assets/img/banner/') . $result['gambar'] ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"><?= $result['judul_banner'] ?></h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms"><?= $result['deskripsi'] ?></h2>
                                <a href="<?= base_url(); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?= base_url(); ?>assets/img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>TESTIMONI</span>
                        <h3>Apa Kata Alumni ?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <?php foreach($testimoni as $testi): ?>
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="<?= base_url('assets/img/profile/') . $testi['gambar'] ?>">
                        </div>
                        <div class="testimonial-content">
                            <p><?= $testi['testimoni']; ?></p>
                            <h6><span><?= $testi['nama'] ?>,</span> Alumni</h6>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>Apakah Kamu Tertarik Dengan Prodi Pendidikan Fisika ?</h3>
                        <a href="https://untirta.ac.id/" target="_blank" class="btn academy-btn">Mari Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->