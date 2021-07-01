<?php
    require('../../lib/quantri.php');
    if(isset($_POST['params'])){
        if(isset($_POST['id'])){
            saveReview($_POST["id"],$_POST["params"]);
        }
        else{
            // 
        }
    }
    else{
        delReview($_POST["id"]);
    }
    if(isset($_POST['submitReview'])){
        storeReview($_POST);
        header("location: ../nikki_admin.php?p=reviews");
    }
    else if(isset($_POST['sendReview'])){
        storeReview($_POST);
        header("location: /");
    }
?>
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Review List</h4>
                <a class="btn btn-primary mb-2 float-right" href="?p=reviews&q=add_review">
                    <i class="fa fa-lg fa-plus-square"></i>
                </a>
                    <div class="data-tables datatable-primary table-responsive">
                        <table id="dataTable2" border="2" class="table text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th scope="col">
                                    Action
                                    </th>
                                    <th scope="col" >Show/Hide</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Created/Modified</th>
                                    
                                </tr>
                            </thead>
                            <tbody >
                                <?php
                                    $reviews = getReviews();
                                    while ($row = mysqli_fetch_array($reviews)) {
                                ?>
                                <tr class="overflow-hidden">
                                    <td>
                                        <div class="row">
                                            <i class="ti-trash col-12">
                                                <a id="ease" href="javascript:delReview(<?php echo $row['id']?>);">Del</a>
                                            </i>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label class="switch">
                                            <?php 
                                                if($row['isShow'] == 1){
                                            ?>    
                                                <input id="btnShow" type="checkbox" data-id="<?php echo $row['id']?>" checked>
                                            <?php 
                                                }
                                                else{
                                            ?>
                                                <input id="btnShow" type="checkbox" data-id="<?php echo $row['id']?>">
                                            <?php 
                                                }
                                            ?>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td><div><?php echo $row['name']?></div></td>
                                    <td><div><?php echo $row['email']?></div></td>
                                    <td><text-area rows="3"><?php echo $row['content']?></text-area></td>
                                    <td>
                                        <div class="txt-center">
                                            <form id="rating">
                                                <div class="rating">
                                                    <input id="star5" name="star" type="radio" value="5" <?php echo ($row['rating'] == 5) ? 'checked' : ''?> class="radio-btn hide " readonly>
                                                    <label for="star5" >☆</label>
                                                    <input id="star4" name="star" type="radio" value="4" <?php echo ($row['rating'] == 4) ? 'checked' : ''?> class="radio-btn hide" readonly/>
                                                    <label for="star4" >☆</label>
                                                    <input id="star3" name="star" type="radio" value="3" <?php echo ($row['rating'] == 3) ? 'checked' : ''?> class="radio-btn hide" readonly/>
                                                    <label for="star3" >☆</label>
                                                    <input id="star2" name="star" type="radio" value="2" <?php echo ($row['rating'] == 2) ? 'checked' : ''?> class="radio-btn hide" readonly/>
                                                    <label for="star2" >☆</label>
                                                    <input id="star1" name="star" type="radio" value="1" <?php echo ($row['rating'] == 1) ? 'checked' : ''?> class="radio-btn hide" readonly/>
                                                    <label for="star1" >☆</label>
                                                    <div class="clear"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td><div><?php echo $row['created_at']?></div></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <!-- Primary table end -->
</div>
