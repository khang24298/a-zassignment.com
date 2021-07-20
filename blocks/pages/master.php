<?php 
    if(isset($_GET["page"]) && ($_GET["page"] > 0))
    {
        $page = $_GET["page"];

    }
    else $page = 1;
?>
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <div class="a" style="--n: 5;">
                <div class="dot" style="--i: 0;"></div>
                <div class="dot" style="--i: 1;"></div>
                <div class="dot" style="--i: 2;"></div>
                <div class="dot" style="--i: 3;"></div>
                <div class="dot" style="--i: 4;"></div>
            </div>
        </div>
    </div>

    <div class="hero-post-slides owl-carousel">
    <?php
        $tinmaster = tinmaster();
        while ($row = mysqli_fetch_array($tinmaster)) {
    ?>
        <!-- Single Hero Post -->
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url('<?php echo $row['urlHinh']?>');"></div>
            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms"> <?php 
                    $idTL = $row['idTL']; 
                    $tentl = timTL($idTL);
                    echo $tentl['TenTL']?></p>
                    <a href="?p=2&idTin=<?php echo $row['idTin']?>" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2><?php echo $row['Title']?></h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms"><?php echo $row['TomTat']?></p>
                    <a href="?p=2&idTin=<?php echo $row['idTin']?>" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Đọc thêm</a>
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>
    <?php 
        }
    ?>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-100">
    <div class="container">

        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="row">

                        <!-- Featured Post Area -->
                        <div class="col-12">
                            <div class="featured-post-area mb-50">
                                <!-- Thumbnail -->
                                <?php 
                                    $tin1 = tinmaster();
                                    $tin1 = mysqli_fetch_array($tin1);
                                ?>
                                <div class="post-thumbnail mb-30">
                                    <a href="?p=2&idTin=<?php echo $tin1['idTin']?>"><img src="<?php echo $tin1['urlHinh']?>" alt="<?php echo $tin1['Title_KD']?>"></a>
                                </div>
                                <!-- Featured Post Content -->
                                <div class="featured-post-content">
                                    <p class="post-date"> 
                                       <?php 
                                        $idTL = $tin1['idTL']; 
                                        $tentl = timTL($idTL);    
                                        echo $tentl['TenTL']?> 
                                    </p>
                                    <a href="?p=2&idTin=<?php echo $tin1['idTin']?>" class="post-title">
                                        <h2><?php echo $tin1['Title']?></h2>
                                    </a>
                                    <p class="post-excerpt"><?php echo $tin1['TomTat']?></p> 
                                </div>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex align-items-center justify-content-between">
                                    <!-- Author Comments -->
                                    <div class="author-comments">
                                        <a href="#"><span>bởi</span> <?php echo $tin1['Author']?></a>
                                        <a href="#"><?php echo $tin1['SoLuotXem'] ?><span> Lượt xem</span></a>
                                    </div>
                                    <!-- Social Info -->
                                    <div class="social-info">
                                        <a href="https://www.facebook.com/vietthueluanvantienganh"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <?php 
                            $sotin1trang = 4;
                            $from = ($page - 1)*$sotin1trang;
                            $phantrang = tinxemnhieu($from,$sotin1trang);
                            while ($row2 = mysqli_fetch_array($phantrang)) {
                        ?>
                        <div class="col-12 col-sm-6">
                            <div class="single-blog-post mb-50">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail">
                                    <a href="?p=2&idTin=<?php echo $row2['idTin']?>"><img src="<?php echo $row2['urlHinh']?>" alt="<?php echo $row2['Title_KD']?>"></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <p class="post-date">
                                        <?php
                                            $idTL = $row2['idTL']; 
                                            $tentl2 = timTL($idTL);
                                            echo $tentl2['TenTL'];   
                                        ?>
                                    </p>
                                    <a href="?p=2&idTin=<?php echo $row2['idTin']?>" class="post-title">
                                        <h4><?php echo $row2['Title']?></h4>
                                    </a>
                                    <p class="post-excerpt"><?php echo $row2['TomTat']?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <!-- Pager -->
                <ol class="nikki-pager">
                    <?php 
                        $sotin = DanhSachTinTuc();
                        $rowsotin = mysqli_num_rows($sotin);
                        $sotrang = ceil(($rowsotin/$sotin1trang));
                        for($i=1;$i<=$sotrang;$i++)
                        {

                    ?>
                    <li><a <?php if($page == $i) echo "style='background:black;color:white'"?> href="?p=0&idTL=<?php echo $idTL?>&page=<?php
                     echo $i ?>"><i class="fa" ></i> <?php echo $i ?></a></li>
                    <?php } ?>
                </ol>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <div class="widget-title">
                            <h6>Danh mục bài viết</h6>
                        </div>
                        <ol class="nikki-catagories">
                            <?php 
                                $theloai = theloai();
                                while ($row1=mysqli_fetch_array($theloai)) {
                                    # code...
                            ?>
                            <li><a href="?p=1&idTL=<?php echo $row1['idTL']?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            <?php echo $row1['TenTL']?></span> <span><?php
                                $idTL = $row1["idTL"];
                                $count = count_tin($idTL);
                                $dem = mysqli_num_rows($count);
                                echo $dem;
                            ?>
                            </span></a></li>
                            <?php } ?>
                        </ol>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Theo dõi chúng tôi</h6>
                        </div>
                        <!-- Widget Social Info -->
                        <div class="widget-social-info text-center">
                            <a href="https://www.facebook.com/vietthueluanvantienganh"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="https://pinterest.com"><i class="fa fa-whatsapp"></i></i></a>
                            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Bài viết mới nhất</h6>
                        </div>

                        <!-- Single Latest Posts -->
                        <?php 
                            $tinmoinhat = tinmoinhat();
                            while ($row3 = mysqli_fetch_array($tinmoinhat)) {
                        ?>
                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <img src="<?php echo $row3['urlHinh']?>" alt="<?php echo $row3['Title_KD']?>">
                            </div>
                            <div class="post-content">
                                <a href="?p=2&idTin=<?php echo $row3['idTin']?>" class="post-title">
                                    <h6><?php echo $row3['Title']?></h6>
                                </a>
                                <a class="post-author"><span>bởi</span> <?php echo $row3['Author']?></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Content Area End #####