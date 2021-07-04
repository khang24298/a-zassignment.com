
<div class="main-content-inner" id="review-section">
    <div class="row">
    	<div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">FeedBack Adder</h4>
                    <form action="feedback/upload.php" method="post" enctype="multipart/form-data">
                        <label for="image"> Upload your image here</label>
                        <hr>
                        <input type="file" name="image" id="image">
                        <br><img id="myImg" src="#">
                        <br>
                        <button class="btn btn-primary" type="submit" name="upload-image" id="upload-image">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Primary table end -->
    </div>
</div>
<script type="text/javascript">
    window.addEventListener('load', function() {
    document.querySelector('input[name="image"]').addEventListener('change', function() {
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