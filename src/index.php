<?php

if(isset($_POST['rs_version'])) {

  $rs_version = $_POST['rs_version'];
  $rs_date = $_POST['rs_date'];

  $ring0_version = $_POST['ring0_version'];
  $ring0_date = $_POST['ring0_date'];

  $ring1_version = $_POST['ring1_version'];
  $ring1_date = $_POST['ring1_date'];

  $ring2_version = $_POST['ring2_version'];
  $ring2_date = $_POST['ring2_date'];

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Microsoft · Iteration Deployment Calendar Generator</title>


    

    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<!-- <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json"> -->
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <style>
      .icon-list li::before {
  display: block;
  flex-shrink: 0;
  width: 1.5em;
  height: 1.5em;
  margin-right: .5rem;
  content: "";
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23212529' viewBox='0 0 16 16'%3E%3Cpath d='M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/%3E%3C/svg%3E") no-repeat center center / 100% auto;
}

    </style>
  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" alt="" style="width:30%; padding-right:10px;"> 
      <span class="fs-4">Iteration Deployment Calendar Generator</span>
    </a>
  </header>

  <main>

    <?php if(isset($_GET['do']) && $_GET['do']=="generate") { ?>

<!-- <?php print_r($_POST) ?> -->

<table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RS</th>
      <th scope="col">Ring 0</th>
      <th scope="col">Ring 1</th>
      <th scope="col">Ring 2 <font style="color:red;">(FF)</font></th>
    </tr>
  </thead>
  <tbody>
    <tr style="color: #995c00;">
      <th scope="row">Previous Version</th>
      <td>
        <?php
          printf("%0.3f",$rs_version-0.001); echo "<br>";
          $date=date_create($rs_date);
          date_sub($date,date_interval_create_from_date_string("14 days"));
          echo date_format($date,"d-m-Y");
        ?>  
      </td>
      <td>
        <?php
          printf("%0.3f",$ring0_version-0.001); echo "<br>";
          $date=date_create($ring0_date);
          date_sub($date,date_interval_create_from_date_string("14 days"));
          echo date_format($date,"d-m-Y");
        ?>  
      </td>
      <td>
        <?php
          printf("%0.3f",$ring1_version-0.001); echo "<br>";
          $date=date_create($ring1_date);
          date_sub($date,date_interval_create_from_date_string("14 days"));
          echo date_format($date,"d-m-Y");
        ?>
      </td>
      <td>
        <?php
          printf("%0.3f",$ring2_version-0.001); echo "<br>";
          $date=date_create($ring2_date);
          date_sub($date,date_interval_create_from_date_string("14 days"));
          echo date_format($date,"d-m-Y");
        ?>
      </td>
    </tr>
    <tr style="color:green; font-weight: bold;">
      <th scope="row">Current Version</th>
      <td><?php echo $rs_version."<br>".$rs_date; ?></td>
      <td><?php echo $ring0_version."<br>".$ring0_date; ?></td>
      <td><?php echo $ring1_version."<br>".$ring1_date; ?></td>
      <td><?php echo $ring2_version."<br>".$ring2_date; ?></td>
    </tr>
    <tr style="color:blue;">
      <th scope="row">Future Version</th>
      <td>
        <?php
          printf("%0.3f",$rs_version+0.001); echo "<br>";
          $date=$rs_date;
          echo date('d-m-Y', strtotime($date. ' + 14 days'));
        ?>  
      </td>
      <td>
        <?php
          printf("%0.3f",$ring0_version+0.001); echo "<br>";
          $date=$ring0_date;
          echo date('d-m-Y', strtotime($date. ' + 14 days'));
        ?>  
      </td>
      <td>
        <?php
          printf("%0.3f",$ring1_version+0.001); echo "<br>";
          $date=$ring1_date;
          echo date('d-m-Y', strtotime($date. ' + 14 days'));
        ?>  
      </td>
      <td>
        <?php
          printf("%0.3f",$ring2_version+0.001); echo "<br>";
          $date=$ring2_date;
          echo date('d-m-Y', strtotime($date. ' + 14 days'));
        ?> 
      </td>
    </tr>
  </tbody>
</table>
<br>
<hr>
<?php } ?>
<br>
<h3>Please enter current status</h3><br>
<form method="post" action="index.php?do=generate">
  <div class="mb-3">
    <div class="row align-items-start">
      <div class="col">
        <label for="rs_version" class="form-label">RS Version</label>
        <input type="text" name="rs_version" class="form-control" id="rs_version" placeholder="Example: 0.232" value="<?php if(isset($_POST['rs_version'])) echo $_POST['rs_version']; ?>" required>
      </div>
      <div class="col">
        <label for="rs_date" class="form-label">RS Date</label>
        <input type="text" name="rs_date" class="form-control" id="rs_date" placeholder="Example: 03-07-2022" value="<?php if(isset($_POST['rs_date'])) echo $_POST['rs_date']; ?>" required>
      </div>
    </div>
  </div>

  <div class="mb-3">
    <div class="row align-items-start">
      <div class="col">
        <label for="ring0_version" class="form-label">Ring0 Version</label>
        <input type="text" name="ring0_version" class="form-control" id="ring0_version" placeholder="Example: 0.232" value="<?php if(isset($_POST['ring0_version'])) echo $_POST['ring0_version']; ?>" required>
      </div>
      <div class="col">
        <label for="ring0_date" class="form-label">Ring0 Date</label>
        <input type="text" name="ring0_date" class="form-control" id="ring0_date" placeholder="Example: 03-07-2022" value="<?php if(isset($_POST['ring0_date'])) echo $_POST['ring0_date']; ?>" required>
      </div>
    </div>
  </div>

  <div class="mb-3">
    <div class="row align-items-start">
      <div class="col">
        <label for="ring1_version" class="form-label">Ring1 Version</label>
        <input type="text" name="ring1_version" class="form-control" id="ring1_version" placeholder="Example: 0.232" value="<?php if(isset($_POST['ring1_version'])) echo $_POST['ring1_version']; ?>" required>
      </div>
      <div class="col">
        <label for="ring1_date" class="form-label">Ring1 Date</label>
        <input type="text" name="ring1_date" class="form-control" id="ring1_date" placeholder="Example: 03-07-2022" value="<?php if(isset($_POST['ring1_date'])) echo $_POST['ring1_date']; ?>" required>
      </div>
    </div>
  </div>

  <div class="mb-3">
    <div class="row align-items-start">
      <div class="col">
        <label for="ring2_version" class="form-label">Ring2 <font style="color: red; font-weight: bold;">(FF)</font> Version</label>
        <input type="text" name="ring2_version" class="form-control" id="ring2_version" placeholder="Example: 0.232" value="<?php if(isset($_POST['ring2_version'])) echo $_POST['ring2_version']; ?>" required>
      </div>
      <div class="col">
        <label for="ring2_date" class="form-label">Ring2 Date</label>
        <input type="text" name="ring2_date" class="form-control" id="ring2_date" placeholder="Example: 03-07-2022" value="<?php if(isset($_POST['ring2_date'])) echo $_POST['ring2_date']; ?>" required>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Generate Table</button>
</form>
<br>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    Created by the PI Team &middot; &copy; 2022
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>