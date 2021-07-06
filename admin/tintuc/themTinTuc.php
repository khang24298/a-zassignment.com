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
									<textarea name="editor" id="editor" rows="10" cols="80">
										This is my textarea to be replaced with CKEditor 4.
									</textarea>
							  	</div>
                                <div class="form-group">
                                    <label for="urlHinh"><b>Url_Image</b></label>
                                    <div class="input-group mb-3 col-3">
                                        <input class="form-control btn btn-dark" type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
									<br><img id="myImg" src="#">

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
<script type="text/javascript">
    window.addEventListener('load', function() {
    document.querySelector('input[name="fileToUpload"]').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('#myImg');
            img.onload = () => {
                URL.revokeObjectURL(img.src);  // no longer needed, free memory
            }

            img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
    });
    });
</script>
<script>
    tinymce.init({
      selector: '#editor',
	  plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
</script>