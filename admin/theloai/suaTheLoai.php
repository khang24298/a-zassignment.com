<?php
$idTL = $_GET[ "idTL" ];
$rowtl = timTL ( $idTL );
?>
<?php
    if ( isset( $_POST[ 'modify' ] ) )
    {
        $TenTL = check_quotes ( $_POST[ 'TenTL' ] );
        $TenTL_KD = vn_to_str ( $TenTL );
        $AnHien = $_POST[ 'AnHien' ];
        $ThuTu = $_POST['ThuTu'];
        suaTheLoai ( $idTL,$TenTL,$TenTL_KD,$AnHien,$ThuTu);
        ?>
        <script>
            window.location.href="../admin/nikki_admin.php?p=theloai";
        </script>
        <?php
    }
?>
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body"><h4 class="header-title">Basic form</h4>
            <form method="post">
                <div class="form-group"><label>Category Name</label>
                    <input type="text" class="form-control" id="TenTL" name="TenTL" aria-describedby="emailHelp" placeholder="Enter Category Name" value="<?php echo $rowtl[ 'TenTL' ] ?>">
                </div>
                <div class="form-group"><label for="AnHien">Hide(0)/Show(1)</label>
                    <div class="custom-control custom-radio">
                        <input <?php if ( $rowtl[ 'AnHien' ]==1 ) echo "checked='checked'" ?> type="radio" id="customRadio1"
name="AnHien" class="custom-control-input" value="1"> <label class="custom-control-label" for="customRadio1">Show</label></div>
                    <div class="custom-control custom-radio">
                        <input <?php if ( $rowtl[ 'AnHien' ]==0 ) echo "checked='unchecked'" ?> type="radio" id="customRadio2"
name="AnHien" class="custom-control-input" value="0"> <label class="custom-control-label" for="customRadio2">Hide</label></div>
                </div>
                <div class="form-group">
                    <label for="ThuTu" class="col-form-label"><b>Order</b></label>
                    <input class="form-control number" type="number" name="ThuTu" id="example-number-input" value="<?php echo $rowtl['ThuTu']?>">
                </div>
                <input type="submit" name="modify" id="modify" class="btn btn-primary mt-4 pr-4 pl-4" value="Modify">
            </form>
        </div>
    </div>
</div>