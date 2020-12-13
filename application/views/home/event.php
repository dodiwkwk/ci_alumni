<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?= base_url(); ?>assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>EVENT</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                        <?php foreach($event as $event): ?>
                            <div class="col-md-6">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                     <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="<?= base_url('assets/img/event/') . $event['foto'] ?>" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="<?= base_url(); ?>" class="post-title"><?= $event['nama_event'] ?></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><?= $event['judul_event'] ?></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <div class="row">
                                      <div class="col-11 text-truncate" >
                                       <p><?= $event['deskripsi'] ?></p>
                                      </div>
                                    </div>
                                    <!-- Read More btn -->
                                    <a href="<?= base_url(); ?>home/blog" class="btn academy-btn btn-sm mt-15">Read More</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="<?= base_url('home/search_event') ?>" method="post">
                                <div class="input-group">
                                   <input type="text" name="keyword" class="form-control" placeholder="Cari Lowongan.." autocomplete="off">
                                   <div class="input-group-append">
                                      <input class="btn btn-outline-dark" type="submit" value="Cari" name="submit">
                                   </div>
                                </div>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Kategori</h5>
                            <ul>
                                <li><a href="<?= base_url('home/informasi') ?>">Lowongan Kerja</a></li>
                                <li><a href="<?= base_url('home/event') ?>">Event</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
