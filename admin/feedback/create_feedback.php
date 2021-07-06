
<div class="main-content-inner" id="review-section">
    <div class="row">
    	<div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">FeedBack Adder</h4>
                    <form action="feedback/upload.php" method="post" enctype="multipart/form-data">
                        <label for="image"> Upload your image here</label>
                        <div class="row">
                            <input id="ckfinder-input-1" class="form-control col-lg-6" type="text" name="urlImage">
						    <button type="button" id="ckfinder-popup-1" class="btn btn-success col-lg-1">Browse Server</button>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit" name="upload-image" id="upload-image">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>
<script type="text/javascript">
    var button1 = document.getElementById('ckfinder-popup-1');
		button1.onclick = function() {
			selectFileWithCKFinder( 'ckfinder-input-1' );
		};
		function selectFileWithCKFinder( elementId ) {
			CKFinder.popup( {
				chooseFiles: true,
				width: 800,
				height: 600,
				onInit: function( finder ) {
					finder.on( 'files:choose', function( evt ) {
						var file = evt.data.files.first();
						var output = document.getElementById( elementId );
						output.value = file.getUrl();
					} );

					finder.on( 'file:choose:resizedImage', function( evt ) {
						var output = document.getElementById( elementId );
						output.value = evt.data.resizedUrl;
					} );
				}
			} );
		}
</script>