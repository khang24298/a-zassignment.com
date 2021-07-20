
<style>
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
                    <h4 class="header-title">Feedbacks List</h4>
                    <a class="btn btn-primary mb-2 float-right" href="?p=feedback&q=create_feedback">
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
                                        <th scope="col">Pictures</th>
                                        <th scope="col">Created/Modified</th>
                                        
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php
                                        $feedbacks = getFeedbacks();
                                        while ($row = mysqli_fetch_array($feedbacks)) {
                                    ?>
                                    <tr class="overflow-hidden">
                                        <td>
                                            <div class="row">
                                                <i class="ti-trash col-12">
                                                    <a id="ease" href="javascript:delFeedback(<?php echo $row['id']?>);">Del</a>
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
                                        <td><img src="<?php echo $row['urlImage']?>"/></td>
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
            url: 'feedback/upload.php',
            type: 'POST',
            data: {
                id: id,
                isShow: isShow,
            },
            success: function (result) {
                location.reload();
            },
            error: function (xhr, desc, err) {
                console.log("error");
            }
        });
    });

    function delFeedback(id){
        $.ajax({
            url: 'feedback/upload.php',
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