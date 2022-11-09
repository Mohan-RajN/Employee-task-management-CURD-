<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    input[type=password],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>
  <h1>Signup Form</h1>
  <div><?php echo validation_errors() ?></div>
  <div class="container">
    <form method="post" action="<?= base_url('user/submit') ?>">
      <div class="row">
        <div class="col-25">
          <label for="fname">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="name" placeholder="Your Name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="email" placeholder="Your Email">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="number">Number</label>
        </div>
        <div class="col-75">
          <input type="text" id="number" name="number" placeholder="Your Number">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="address">Address</label>
        </div>
        <div class="col-75">
          <input type="text" id="address" name="address" placeholder="Your Address">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="role_id">Role Id</label>
        </div>
        <div class="col-75">
          <select name="role_id" id="role_id">
          <option value="3">Employee</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="text">Is Active status</label>
        </div>
        <div class="col-75">
          <input type="radio" id="is_active_status" name="is_active_status" value="1">
          <label for="Active">Active</label><br>
          <input type="radio" id="is_active_status" name="is_active_status" value="0">
          <label for="InActive">InActive</label><br>

        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Your Password">
        </div>
      </div>

      <div class="row">
        <input type="submit" value="Submit">
      </div>
      <div class="row">
        <a href="<?= base_url('user/login') ?>">Ready to Login </a>
      </div>
    </form>
  </div>

</body>

</html>