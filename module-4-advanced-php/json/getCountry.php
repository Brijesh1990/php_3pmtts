<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>get webservices a country list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="w-50 mx-auto mt-5 p-5">
      <form>
        <div class="form-group mt-5">
            <label class="fs-3">Web services get all country List</label>
            <br><br>

          <select
            name="country"
            placeholder="select country"
            class="form-control"
          >
            <option value="">-select country-</option>
           <?php 
            $url="https://country.io/names.json";
            $data=file_get_contents($url,true);
            $country=json_decode($data,true);
            foreach($country as $row)
            {
           ?>
            <option value="<?php echo $row;?>"><?php echo $row;?></option>

            <?php
        }
            ?>
          </select>
        </div>
      </form>
    </div>
  </body>
</html>
