<!-- LETS TALK -->
<section class="container-fluid letsTalk animatedParent animateOnce" data-sequence="500">
    <div class="container">
        <div class="row">
           <div class="col-md-12 pb-3">
              <div class="ltImageRel">
                  <h1>Lets Talk</h1>
                  <div class="ltImage">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/cover.png" class="animated fadeInUpShort img-fluid" data-id="1" />
                  </div>
              </div>
           </div>
            <div class="col-md-12 mt-5">
                <form>
                    <div class="form-row align-items-center justify-content-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput1">Name</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput1" placeholder="Name">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput2">Email Id</label>
                            <input type="email" class="form-control mb-2" id="inlineFormInput2" placeholder="Email ID">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput3">Message</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput3" placeholder="Message">
                        </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>
<style type="text/css">
.ltImage{
  position: relative;
}
  .ltImage:after{
    left: 48%;
    display: block;
    content: '';
    clear: both;
    background-image: url(/wp-content/themes/revampedpractice/images/shades.png);
    width: 81px;
    height: 23px;
    background-repeat: no-repeat;
    top: 30%;
    position: absolute;
    transition: 250ms ease-in-out all;
    transform: rotate(0deg);
    transform-origin: 0% 0%;
  }
  .ltImage:hover:after{
        transform: rotate(10deg);
    /* transform: skewY(0deg); */
      left: 48.3%;
      transform-origin: 0% 15%;
  }
</style>