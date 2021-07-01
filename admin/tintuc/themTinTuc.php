<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
            	<div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                        	<h4 class="header-title">Article Adder</h4>
							<form action="tintuc/upload.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="ThuTu" class="col-form-label"><b>Order</b></label>
                                    <input class="form-control number" type="number" name="ThuTu" id="example-number-input">
                                </div>
							  	<div class="form-group">
							    	<label for="Title"><b>Title</b></label>
							    	<input type="text" class="form-control" id="Title" name="Title" placeholder="Enter Title Here">
							  	</div>
							  	<div class="form-group">
							    	<label for="TomTat"><b>Summary</b></label>
							    	<textarea class="form-control" id="TomTat" name="TomTat" rows="10"></textarea>
							  	</div>
							  	<div class="form-group">
							    	<label for="editor"><b>Content</b></label>
							    	<textarea class="form-control" id="editor" name="editor" rows="10"></textarea>
							  	</div>
                                <div class="form-group">
                                    <label for="urlHinh"><b>Url_Image</b></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control btn btn-dark" type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div>
							  	<div class="form-group">
								    <label class="col-form-label" for="TenTL" id="TenTL"><b>Category Belong</b></label>
								    <select class="custom-select" name="TenTL" id="TenTL">
								      <option value="" selected disabled hidden>Choose here</option>
									  	<?php 
									  		$theloai = DanhSachTheLoai();
									  		while ($row = mysqli_fetch_array($theloai)) {
									  	?>
									  	<option value="<?php echo $row["idTL"] ?>"><?php echo $row["TenTL"]?></option>
									  	<?php
									  		}
									  	?>
								    </select>
							  	</div>
								<div class="form-group">
							    	<label for="Author"><b>Author</b></label>
							    	<input type="text" class="form-control" id="Author" name="Author" placeholder="Enter Author">
							  	</div>
							  	<input type="submit" name="add" id="add" class="btn btn-primary mt-4 pr-4 pl-4" value="Add">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>