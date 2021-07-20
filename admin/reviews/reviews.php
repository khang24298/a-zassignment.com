<style>
.txt-center {
  text-align: center;
}
.hide {
  display: none;
}

.clear {
  float: none;
  clear: both;
}

.rating {
    width: 90px;
    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}

.rating > label {
    float: right;
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1.1em;
    cursor: pointer;
    color: #000;
}

.rating > label:hover,
.rating > label:hover ~ label,
.rating > input.radio-btn:checked ~ label {
    color: transparent;
}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > input.radio-btn:checked ~ label:before,
.rating > input.radio-btn:checked ~ label:before {
    content: "\2605";
    position: absolute;
    left: 0;
    color: #FFD700;
}

/* Switch button */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<div class="main-content-inner" id="review-section">
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
                                                    <input id="btnShow" data-id="<?php echo $row['id']?>" type="checkbox" checked >
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
                                                <form>
                                                    <div class="rating">
                                                        <input type="radio" value="5" <?php echo ($row['rating'] == 5) ? 'checked' : ''?> class="radio-btn hide " />
                                                        <label for="star5" >☆</label>
                                                        <input  type="radio" value="4" <?php echo ($row['rating'] == 4) ? 'checked' : ''?> class="radio-btn hide"/>
                                                        <label for="star4" >☆</label>
                                                        <input  type="radio" value="3" <?php echo ($row['rating'] == 3) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star3" >☆</label>
                                                        <input type="radio" value="2" <?php echo ($row['rating'] == 2) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star2" >☆</label>
                                                        <input  type="radio" value="1" <?php echo ($row['rating'] == 1) ? 'checked' : ''?> class="radio-btn hide" />
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
</div>
<script type="text/javascript">
    var isShow;
    $("input[type=checkbox]").change(function(el) {
        let id = el.currentTarget.dataset.id
        console.log(id)
        if(this.checked) {
            isShow = 1;
        }
        else{
            isShow = 0;
        }
        $.ajax({
            url: 'reviews/xuly.php',
            type: 'POST',
            data: {
                id: id,
                params:{
                    isShow: isShow,
                }
            },
            success: function (result) {
                location.reload();
            },
            error: function (xhr, desc, err) {
                console.log("error");
            }
        });
    });
    function delReview(id){
        $.ajax({
            url: 'reviews/xuly.php',
            type: 'POST',
            data: {
                id: id,
            },
            success: function (result) {
                location.reload();
            },
            error: function (xhr, desc, err) {
                console.log("error");
            }
        });
    }

</script>