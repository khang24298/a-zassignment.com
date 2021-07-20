<?php 
    if(isset($_GET['idTL']))
    {
        $idTL = $_GET['idTL'];
    }
    else $idTL = 1;
?>
<?php 
    $tl = timTL($idTL);
    if(isset($_GET["page"]) && ($_GET["page"] > 0))
    {
        $page = $_GET["page"];

    }
    else $page = 1;
?>
<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="row">
                       
                        <!-- Section Heading -->
                        <div class="col-12">
                            <div class="section-heading">
                                <h2><?php echo $tl['TenTL']?></h2>
                                <p>Post categories: <?php echo $tl['TenTL']?></p>
                            </div>
                        </div>
                            <?php 
                                $sotin1trang = 4;
                                $from = ($page - 1)*$sotin1trang;
                                $tintrongloai = tin_loaitin_phantrang($idTL, $from, $sotin1trang);
                                while ($row = mysqli_fetch_array($tintrongloai)) {
                             ?>
                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="?p=2&idTin=<?php echo $row['idTin']?>"><img src="<?php echo $row['urlHinh']?>" alt="<?php echo $row['Title_KD']?>"></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date"><?php echo $row['Created_at']?> / <?php echo $tl['TenTL']?></p>
                                        <a href="?p=2&idTin=<?php echo $row['idTin']?>" class="post-title">
                                            <h4><?php echo $row['Title']?></h4>
                                        </a>
                                        <p class="post-excerpt"><?php echo $row['TomTat']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                    </div>
                </div>

                <!-- Pager -->
                <ol class="nikki-pager">
                    <?php 
                        $sotin = count_tin($idTL);
                        $rowsotin = mysqli_num_rows($sotin);
                        $sotrang = ceil(($rowsotin/$sotin1trang));
                        for($i=1;$i<=$sotrang;$i++)
                        {

                    ?>
                    <li><a <?php if($page == $i) echo "style='background:black;color:white'"?> href="?p=1&idTL=<?php echo $idTL?>&page=<?php
                     echo $i ?>"><i class="fa" ></i> <?php echo $i ?></a></li>
                    <?php } ?>
                </ol>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-50">
                        <form class="search-form" action="#" method="post">
                            <input type="search" name="search" class="form-control" placeholder="Search...">
                            <button><i class="fa fa-send"></i></button>
                        </form>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Categories</h6>
                        </div>
                        <ol class="nikki-catagories">
                            <?php 
                                $theloai = theloai();
                                while ($row1=mysqli_fetch_array($theloai)) {
                                    # code...
                            ?>
                            <li><a href="?p=1&idTL=<?php echo $row1['idTL']?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $row1['TenTL']?></span> <span><?php
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
                            <h6>Latest Posts</h6>
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
                                <a class="post-author"><span>by</span> <?php echo $row3['Author']?></a>
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
<!-- ##### Blog Content Area End ##### -->