<?php 
$mainurl="http://localhost/php-3pm-tts/module-5-mvc-app/attanedance-management-systems/";
$baseurl="http://localhost/php-3pm-tts/module-5-mvc-app/attanedance-management-systems/assets/";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Guru kripa Attendance management systems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?php echo $baseurl;?>css/style.css"
    />
    <!-- CDN js -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

    <script src="main.js"></script>
  </head>
  <body>
    <!-- guru kripa login systems -->
    <div class="w-50 mx-auto mt-5 p-5">
      <div class="row">
        <div class="col-md-5 login-img mt-5">
          <img src="<?php echo $baseurl;?>images/login.png" alt="Login Image" />
        </div>
        <div class="col-md-7">
          <h3 class="text-white">Login Form</h3>
          <form>
            <div class="form-group mt-3">
              <label for="username">Email</label>
              <input
                type="text"
                class="form-control"
                id="email"
                placeholder="Enter Email"
                class="form-control"
              />
            </div>

            <div class="form-group mt-3">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter Password"
                class="form-control"
              />
            </div>

            <div class="form-group mt-4">
              <input
                type="submit"
                id="submit"
                class="btn btn-md w-100 btn-primary bg-primary"
                value="Login"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
