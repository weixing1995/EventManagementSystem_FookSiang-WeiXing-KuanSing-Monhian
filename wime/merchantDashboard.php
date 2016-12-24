<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">

    <meta content="" name="keywords">

    <title>

      WI-ME II

    </title><!--pageMeta-->

    <!-- Loading Bootstrap -->

    <link href=

    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"

    rel="stylesheet">

    <link href=

    "https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel=

    "stylesheet"><!-- Favicons -->

    <!--     <link href="images/favicons/favicon.png" rel="icon">

    <link href="images/favicons/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="images/favicons/apple-touch-icon-72x72.png" rel=

    "apple-touch-icon" sizes="72x72">

    <link href="images/favicons/apple-touch-icon-114x114.png" rel=

    "apple-touch-icon" sizes="114x114"> -->



    <style type="text/css">

        .mfp-title a{

            color: #00BFFF;

        }

    </style>

  </head>

  <body>

    <!--PRELOADER-->



    <div id="preloader">

      <div class="loading-data">

      </div>

    </div>

    <?php 

              require 'connect.php';

              ?>

    <div id="wrap">

      <!-- NAVIGATION LOGIN FULL -->

      <!-- INTRO SLIDER -->

      <!-- SHEDULE BLOCK -->

      <!-- CONTENT COLLAPSE BLOCK -->

      <!-- COUNTER 4 COL BLOCK -->

      <!-- PORTFOLIO GRID APP BLOCK -->

      <!-- DOWNLOAD HALF APP IMAGE BLOCK -->

      <!-- FOOTER CENTER -->

      <!-- GOTO BLOCK -->

      <!-- NAVIGATION LOGIN FULL -->



      <nav class="navbar bg-color1 dark-bg navbar-fixed-top" style=

      "background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); box-shadow: none;">

        <div class="container-fluid">

          <a class="navbar-brand goto" href="#"><img alt="Your logo" height=

          "25" src="images/uploads/css.png" style=

          "width: 60px; height: 50px; border-radius: 0px; border-color: rgb(0, 192, 255); border-style: none; border-width: 1px;"></a>

          <button class=

          "round-toggle navbar-toggle menu-collapse-btn collapsed" data-target=

          ".navMenuCollapse" data-toggle="collapse"><span class=

          "icon-bar"></span> <span class="icon-bar"></span> <span class=

          "icon-bar"></span></button>

          <div class="collapse navbar-collapse navMenuCollapse">

            <div class="login-panel" style="text-align:right;">

              <a style="margin: 0;

    border-radius: 0;

    font-size: 14px;

    padding: 0 20px;

    line-height: 58px;" class="btn btn-success" href="login.html"><i class=

              "icon icon-key"></i> Login</a> <a style="margin: 0;

    border-radius: 0;

    font-size: 14px;

    padding: 0 20px;

    line-height: 58px;" class="btn btn-primary" href=

              "login.html"><i class="icon icon-user"></i> Register</a>

            </div>

          </div>

        </div>

      </nav>

      <!-- INTRO SLIDER -->



      <div class="container" style="padding-top:50px;">

        <h1>

          <?php echo $_COOKIE["user"]; ?>

        </h1>

        <h3>

          Scanned QR Code

        </h3>



        <table cellspacing="0" class="table table-striped table-bordered" id=

        "example" width="100%">

          <thead>

            <tr>

              <th>

                Student Name

              </th>

              <th>

                Student Contact

              </th>

              <th>

                Student Course

              </th>

              <th>

                Student ID

              </th>

            </tr>

          </thead>



          <tfoot>

            <tr>

              <th>

                Student Name

              </th>

              <th>

                Student Contact

              </th>

              <th>

                Student Course

              </th>

              <th>

                Student ID

              </th>

            </tr>

          </tfoot>



          <tbody>



            <?php 

              $user = $_COOKIE["user"];

              $sql = "SELECT * FROM sponsor_member sm left join member m on sm.member_id = m.member_id left join sponsor s on sm.sponsor_id = s.sponsor_id

              where s.sponsor_name = '$user'

              ";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                  // output data of each row

                  while($row = $result->fetch_assoc()) { ?>

            <tr>

              <td><?php echo $row['member_name'] ?></td>

              <td><?php echo $row['member_contact'] ?></td>

              <td><?php echo $row['member_course'] ?></td>

              <td><?php echo $row['member_studentID'] ?></td>

            </tr>

            <?php

                  }

              } else {

                  echo "0 results";

              }



            ?>

            

          </tbody>

        </table>





        <!-- <div>

          <button class="btn btn-primary" type="button" onclick="exportPhp();">Export</button>

        </div> -->

      </div>



      <footer class="text-center bg-color3" id="footer-center" style="margin-top:30px;">

        <div class="container">

          <p class="editContent">

            &copy; 2016<br>

          </p>



          <p>

            Developed by <strong>Lai Fook Siang</strong><br>

            Contact Email: <strong><a href="mailto:leolai728@live.com" target=

            "_top">leolai728@live.com</a></strong><br>

            View my profile on Linkedln:<strong><a href=

            "https://my.linkedin.com/in/fook-siang-lai-999391107">https://my.linkedin.com/in/fook-siang-lai-999391107</a></strong>

          </p>



          <p>

          </p>

        </div>

      </footer>

      <!-- GOTO BLOCK -->

    </div>

    <!-- /#wrap -->

    <!-- JavaScript -->

    <script src="https://code.jquery.com/jquery-1.12.3.js">

    </script> 

    <script src="scripts/bootstrap.min.js">

    </script> 

    

    <script src=

    "https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">

    </script> 

    <script src=

    "https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js">

    </script> 

    <script type="text/javascript">

    $(document).ready(function() {

    $('#example').DataTable();

    } );

    

    </script>

    <script type="text/javascript">

      function exportPhp(){

        $.ajax({

            type: "GET",

            url: "export.php",

            dataType: 'text',

            async: false,

            success: function(data) {

              console.log(data);

             }

         });

        return 0;

      }

    </script>

  </body>

</html>