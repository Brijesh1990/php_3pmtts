
      <!-- 
        - #OFFER
      -->
      <section class="offer" aria-label="offer">

        <div class="offer-content section" style="background-image: url('./assets/images/offer-bg.png')">
          <div class="container">

            <p class="section-subtitle">Create Account here</p>

            <h2 class="h2 section-title">Create account to get all offers </h2>

            <p class="section-text">
              Non augue egestas, commodo velit eget, vestibulum tellus. Curabitur vulputate justo elit, at elementum
              pulvinar.
              Pellentesque habitant morbi tristique.
            </p>

            <a href="#" class="btn btn-primary">Login</a>

          </div>
        </div>

        <div class="p-5 w-100">
            <!-- create register form -->

            <form class="account-form">
                <div class="form-group mt-3">
                    <input type="text" placeholder="Enter Name * " class="form-control" />
                </div>

                <div class="form-group mt-3">
                    <input type="text" placeholder="Enter Email * " class="form-control" />
                </div>

                <div class="form-group mt-3">
                    <input type="password" placeholder="Password * " class="form-control" />
                </div>

                <div class="form-group mt-3">
                    <input type="password" placeholder="Enter Confimred Password * " class="form-control" />
                </div>

                <div class="form-group mt-3">
                    <input type="text" placeholder="Enter Phone * " class="form-control" />
                    
                </div>

                <div class="form-group mt-3" style="display:flex">
                    <input type="submit" value="Register" class="btn btn-primary" />
                    <input type="reset" value="Reset" class="btn btn-danger" style="background-color:red" />
                </div>

                <div style="display:flex; max-width:100% !important">
               Already have an account ? <a href="<?php echo $mainurl;?>Login"> &nbsp; Login Here</a>  
              </div>
            </form>

        </div>

      </section>






