<?php 
	$idTin = $_GET["idTin"];	
	$row = timtin($idTin);
	$idTL = $row["idTL"];
	$tin1 = tim_tl($idTL);
	$tin = mysqli_fetch_array($tin1);
	$tl = DanhSachTheLoai_Except($idTL);
?>
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
            	<div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                        	<h4 class="header-title">Article Modifier</h4>
							<form action="tintuc/modify.php" method="post" enctype="multipart/form-data">
								<div class="input-group mb-3 number">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><b>Article</b></span>
                                    </div>
                                    <input type="number" id="idTin" name="idTin" class="form-control " value="<?php echo $idTin?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="ThuTu" class="col-form-label"><b>Order</b></label>
                                    <input class="form-control number" type="number" name="ThuTu" id="example-number-input" value="<?php echo $row['ThuTu']?>">
                                </div>
							  	<div class="form-group">
							    	<label for="Title"><b>Title</b></label>
							    	<input type="text" class="form-control" id="Title" name="Title" placeholder="Enter Title Here" value="<?php echo $row["Title"]?>">
							  	</div>
							  	<div class="form-group">
							    	<label for="TomTat"><b>Summary</b></label>
							    	<textarea class="form-control" id="TomTat" name="TomTat" rows="10"><?php echo $row["TomTat"]?></textarea>
							  	</div>
							  	<div class="form-group">
							    	<label for="editor"><b>Content</b></label>
							    	<textarea class="form-control" id="editor" name="editor" rows="10"><?php echo $row["Content"]?></textarea>
							  	</div>
                                <div class="form-group">
                                    <label for="urlHinh"><b>Url_Image</b></label>
                                    <div class="input-group mb-3">
                                        <input class="btn btn-dark" type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
									<br><img id="myImg" src="<?php echo $row['urlHinh']?>">

                                </div>
							  	<div class="form-group">
								    <label class="col-form-label" for="TenTL" id="TenTL"><b>Category Belong</b> <?php echo $tin["idTL"] ?></label>
								    <select class="custom-select" name="TenTL" id="TenTL">
								      	<option selected value="<?php echo $tin["idTL"]?>"><?php echo $tin["TenTL"]?></option>
									  	<?php
									  		while ($row1 = mysqli_fetch_array($tl)) {
									  	?>
									  	<option value="<?php echo $row1["idTL"]?>"><?php echo $row1["TenTL"]?></option>
										<?php
											}
										?>
								    </select>
							  	</div>
								<div class="form-group">
							    	<label for="Author"><b>Author</b></label>
							    	<input type="text" class="form-control" id="Author" name="Author" placeholder="Enter Author" value="<?php echo $row["Author"]?>">
							  	</div>
							  	<div class="form-group">
                                    <label for="SoLuotXem" class="col-form-label"><b>Views</b></label>
                                    <input class="form-control number" type="number" name="SoLuotXem" id="example-number-input" value="<?php echo $row["SoLuotXem"]?>">
                                </div>
							  	<input type="submit" name="modify" id="modify" class="btn btn-primary mt-4 pr-4 pl-4" value="Modify">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
    select.custom-select option:checked{
        display: none;
    }
</style>
<script type="text/javascript">
    window.addEventListener('load', function() {
    document.querySelector('input[name="fileToUpload"]').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('#myImg');
            img.onload = () => {
                URL.revokeObjectURL(img.src);  // no longer needed, free memory
            }
			$('#file').val(this.files[0].name);
            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
    });
    });
</script>