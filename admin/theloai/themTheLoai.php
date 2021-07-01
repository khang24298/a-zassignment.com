<?php
if ( isset( $_POST['add'] ) ){
    if ( ( $_POST['TenTL']!="" )&&( $_POST['AnHien']!="" ) ){
    $TenTL   =check_quotes ( $_POST['TenTL'] );
    $TenTL_KD=vn_to_str ( $TenTL );
    $AnHien  =$_POST['AnHien'];
    $ThuTu = $_POST['ThuTu'];
    themTheLoai( $TenTL,$TenTL_KD,$AnHien,$ThuTu);
        ?>
        <script>
            window.location.href="../admin/nikki_admin.php?p=theloai";
        </script>
        <?php
} else{
    echo "<p style='color:red'>Please fill in all fields</p>";
        ?>
        <script>
            setTimeout(function (){window.location.href="../admin/nikki_admin.php?p=theloai";},3000);
        </script>
        <?php
}}?>
<div class="col-lg-6 col-ml-12">
    <div class="row">        <!-- basic form start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body"><h4 class="header-title">Basic form</h4>
                    <form action="" method="post">
                        <div class="form-group"><label>Category Name</label>
                            <input type="text" class="form-control" id="TenTL" name="TenTL" placeholder="Enter Category Name">
                        </div>
                        <div class="form-group"><label>Hide(0)/Show(1)</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="AnHien" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="customRadio1">Show</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="AnHien" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="customRadio2">Hide</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ThuTu" class="col-form-label"><b>Order</b></label>
                            <input class="form-control number" type="number" name="ThuTu" id="example-number-input">
                        </div>
                        <input type="submit" name="add" id="add" class="btn btn-primary mt-4 pr-4 pl-4" value="Add">
                    </form>
                </div>
            </div>
        </div>        <!-- basic form end -->
    </div>
</div>