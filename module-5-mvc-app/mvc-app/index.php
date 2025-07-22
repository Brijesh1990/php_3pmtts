<?php 
require_once("controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="w-50 mx-auto mt-5 p-5">
      <form method="post">
        <div class="form-group mt-3">
          <input
            type="text"
            name="year"
            placeholder="Enter years"
            class="form-control"
          />
        </div>

        <div class="mt-3">
          <input type="submit" name="chk" value="Submit" />
        </div>
      </form>
    </div>
  </body>
</html>
