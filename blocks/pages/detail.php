<?php 
if(isset($_GET["idTin"])){
    $idTin = $_GET["idTin"];
}
else $idTin = 1;
capnhatluotxem($idTin);
?>
<?php 
    $chitiettin = chitiettin($idTin);
    $idTL = $chitiettin['idTL'];
    $tl = timTL($idTL);
?>
<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12">

                <!-- Post Details Area -->
                <div class="single-post-details-area">
                    <div class="post-content">

                        <div class="text-center mb-50">
                            <p class="post-date"><?php echo $tl['TenTL'] ?></p>
                            <h2 class="post-title"><?php echo $chitiettin['Title']?></h2>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#"><span>bởi</span> <?php echo $chitiettin['Author']?></a>
                                <a href="#"><?php echo $chitiettin['SoLuotXem']?> <span>Lượt xem</span></a>
                            </div>
                        </div>

                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail mb-50 center">
                            <img src="<?php echo $chitiettin['urlHinh']?>" alt="<?php echo $chitiettin['Title_KD']?>">
                        </div>

                        <!-- Post Text -->
                        <div class="post-text">
                            <!-- Share -->

                                    <ul class="mcd-menu">
                                        <a style="text-align: left; color:orangered" href="?p=1&idTL=<?php echo $chitiettin['idTL'] ?>" class="active">
                                                <strong><?php echo $tl['TenTL'] ?></strong>
                                            </a>
                                        <?php
                                        $tincl=tin_cungloai_het( $idTL );
                                        while ($row4=mysqli_fetch_array ( $tincl ))
                                        {
                                            ?>
                                            <li>
                                                <a class="menu-article" <?php 
                                                if($idTin == $row4['idTin'])
                                                { 
                                                    echo "style='color:blue!important;'";
                                                }
                                                else
                                                {
                                                    echo "style='color:#5e5e5e!important;'";
                                                } 
                                                ?> 
                                                href="?p=2&idTin=<?php echo $row4['idTin'] ?>"><?php echo $row4['Title'] ?></a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                            <div class="ml-content">
                                <?php echo $chitiettin['Content']?>
                            </div>



                            <!-- Related Post Area -->
                            <div class="related-posts clearfix">
                                <!-- Headline -->
                                <h4 class="headline">Bài viết cùng chuyên mục</h4>

                                <div class="row">
                                    <?php 
                                        $tincl1 = tin_cungloai($idTL);
                                        while ($row = mysqli_fetch_array($tincl1)) {
                                    ?>
                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-lg-6">
                                        <div class="single-blog-post mb-50">
                                            <!-- Thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="#"><img src="<?php echo $row['urlHinh']?>" alt="<?php echo $row['Title_KD']?>"></a>
                                            </div>
                                            <!-- Content -->
                                            <div class="post-content">
                                                <p class="post-date"><?php echo $tl['TenTL'] ?> </p>
                                                <a href="?p=2&idTin=<?php echo $row['idTin']?>" class="post-title">
                                                    <h4><?php echo $row['Title']?></h4>
                                                </a>
                                                <p class="post-excerpt"><?php echo $row['TomTat']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Comment Area Start -->
                            <div class="comment_area clearfix" id="comment">
                                <h4 class="headline"><?php
                                        $count = comments ($idTin);
                                        $sotin = mysqli_num_rows ($count);
                                        echo $sotin." Bình luận"
                                    ?></h4>
                                <ol>
                                    <!-- Single Comment Area -->
                                    <?php
                                        $comment = comments ($idTin);
                                        while ($row = mysqli_fetch_array ($comment))
                                        {
                                            ?>
                                            <li class="single_comment_area">
                                                <div class="comment-wrapper d-flex">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-author">
                                                        <img src="images/download.png" alt="">
                                                    </div>
                                                    <!-- Comment Content -->
                                                    <div class="comment-content">
                                                        <span class="comment-date"><?php echo $row["dt_created"]?></span>
                                                        <h5><?php echo $row["users"]?></h5>
                                                        <p><?php echo $row["content"]?></p>
                                                    </div>

                                                </div>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                </ol>
                            </div>

                            <!-- Leave A Comment -->
                            <div class="leave-comment-area clearfix">
                                <div class="comment-form">
                                    <h4 class="headline">Để lại bình luận</h4>

                                    <!-- Comment Form -->
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Tên" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Bình luận" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="reset" id="btnSend" class="btn nikki-btn">Gửi</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Content Area End ##### -->