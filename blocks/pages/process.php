<?php
    require "../../lib/trangchu.php";
    $idTin = $_POST["idTin"];settype ($idTin,"int");
    $content = check_quotes ($_POST["content"]);
    $user = check_quotes ($_POST["user"]);
    $user_email = check_quotes ($_POST["email"]);
    insert_comments ($user, $user_email, $content, $idTin);

    if(isset($_POST['sendReview'])){
        
        storeReview($_POST);
        // var_dump($_POST);
        // header("location: /");
    }
?>
<h4 class="headline"><?php
    $count = comments ($idTin);
    $sotin = mysqli_num_rows ($count);
    echo $sotin." COMMENTS"
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
                    <img src="img/download.png" alt="">
                </div>
                <!-- Comment Content -->
                <div class="comment-content">
                    <span class="comment-date"><?php echo $row["dt_created"]?></span>
                    <h5><?php echo $row["users"]?></h5>
                    <p><?php echo $row["content"]?></p>
                </div>
            </div>
            <?php
            $idCom = $row["idCom"];
            $reply_com = reply_comments ($idCom);
            while ($row2 = mysqli_fetch_array ($reply_com))
            {
                if ( mysqli_num_rows ( $reply_com )==0 )
                {
                    echo "<div style='display:none'>";
                    ?>
                    <ol class="children">
                        <li class="single_comment_area">
                            <div class="comment-wrapper d-flex">
                                <!-- Comment Meta -->
                                <div class="comment-author">
                                    <img src="../../img/download.png" alt="">
                                </div>
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <span class="comment-date"><?php echo $row2["dt_created"] ?></span>
                                    <h5><?php
                                        echo $row2["users"]
                                        ?></h5>
                                    <p><?php echo $row2["content"]?></p>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <?php
                    echo "</div>";
                }
            }
            ?>
        </li>
        <?php
    }
    ?>
</ol>