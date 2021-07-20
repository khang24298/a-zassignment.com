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
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
            	<div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                        	<h4 class="header-title">Reviews Adder</h4>
                          <form action="reviews/xuly.php" method="post">
                            <div class="form-group">
                                  <label class="switch" >
                                      <input id="btnShow" type="checkbox" name="isShow">
                                      <span class="slider round"></span>
                                  </label>

                            </div>
                            <div class="form-group">
                              <label for="name"><b>Name</b></label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name Here">
                            </div>
                            <div class="form-group">
                              <label for="email"><b>Email</b></label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Here">
                            </div>
                            <div class="form-group">
                              <label for="editor"><b>Content</b></label>
                              <textarea class="form-control" id="editor" name="content" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rating"><b>Rating</b></label>
                                <div class="txt-center">
                                  <div class="rating">
                                      <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" onclick="getRating()"/>
                                      <label for="star5" >☆</label>
                                      <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" onclick="getRating()"/>
                                      <label for="star4" >☆</label>
                                      <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" onclick="getRating()"/>
                                      <label for="star3" >☆</label>
                                      <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" onclick="getRating()"/>
                                      <label for="star2" >☆</label>
                                      <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" onclick="getRating()"/>
                                      <label for="star1" >☆</label>
                                      <div class="clear"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group float-right">
                              <button id="submitReview" name="submitReview" type="submit" class="btn btn-primary">
                                Submit
                              </button>
                            </div>
                          </form>
						            </div>
					            </div>
				        </div>
		    	  </div>
		    </div>
	    </div>
</div>

<script type="text/javascript">
  var rating;
  var isShow;
  $("#btnShow").change(function() {
        if(this.checked) {
            isShow = 1;
        }
        else{
            isShow = 0;
        }
    });
    function getRating(e){
        rating = $('input[name=star]:checked','#rating').val();
    
    }

</script>