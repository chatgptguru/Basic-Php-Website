<?php

require_once 'auth_require.php';
$_SESSION['pages'] = 'NPS';

?>

<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>Evaluation Studio.io</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <!-- begin origin -->
    <link rel="stylesheet" href="css/StyleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- end origin -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css">
    <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
          type="text/css">
    <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">


    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
    <link href="../../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="../../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="../../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico">

    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            transition: width 0.4s ease-in-out;
        }

        input[type=radio] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .radio-dark {
            background: #454857;
            padding: 4px;
            border-radius: 3px;
            box-shadow: inset 0 0 0 3px rgba(35, 33, 45, 0.3),
            0 0 0 3px rgba(185, 185, 185, 0.3);
            position: relative;
        }

        .radio-dark input {
            width: auto;
            height: 100%;
            appearance: none;
            outline: none;
            cursor: pointer;
            border-radius: 2px;
            padding: 4px 20px;
            background: #454857;
            color: #bdbdbdbd;
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            transition: all 100ms linear;
        }

        .radio-dark input:checked {
            background-image: linear-gradient(180deg, #95d891, #74bbad);
            color: #fff;
            box-shadow: 0 1px 1px #0000002e;
            text-shadow: 0 1px 0px #79485f7a;
        }

        .radio-dark input:before {
            content: attr(label);
            display: inline-block;
            text-align: center;
            width: 100%;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
        }

        label {
            font-size: 20px;
        }

        .w3-bar,
        h1,
        button {
            font-family: "Montserrat", sans-serif
        }

        .fa-database,
        .fa-comments {
            font-size: 125px
        }

        th{
          text-align: center !important;
        }
        </style>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<?php require_once 'common/header.php';?>

<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="row">
  <form action="pope-pc.php" method="post">

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="pope">
    <div class="w3-content">

      <table>
        <tr>
          <th>
            <h1>Problem-Oriented Patient Experience-Primary Care (POPE-PC) survey</h1>
          </th>
        </tr>
      </table>

      <table>
        <div class="w3-quarter w3-center">
          <i class="fa fa-comments w3-padding-64 w3-text-indigo w3-margin-right" style="font-size: 125px; font-weight: 900; font-family: 'Font Awesome 5 Free'; line-height: 1;"></i>
        </div>
        <div class="w3-threequarter w3-center">
          <tr>
            <td>
              <label for="pc1">Were you given a chance to describe your problems or concerns?:</label>
            </td>
            <td>
              <select name="pc1" id="pc1" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc2">Did staff listen to what you had to say?</label></td>
            <td>
              <select name="pc2" id="pc2" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc3">Did you get useful help for your problems or concerns?</label></td>
            <td>
              <select name="pc3" id="pc3" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc4">Did you get a chance to ask questions?</label></td>
            <td>
              <select name="pc4" id="pc4" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc5">Did you get a chance to talk about decisions and plans regarding your care?</label></td>
            <td>
              <select name="pc5" id="pc5" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc6">Did you understand the advice you received?</label></td>
            <td>
              <select name="pc6" id="pc6" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc7">Were you given enough time to discuss your problems or concerns?</label></td>
            <td>
              <select name="pc7" id="pc7" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc8">Were you treated with respect?</label></td>
            <td>
              <select name="pc8" id="pc8" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Very little</option>
                <option value="3">Somewhat</option>
                <option value="4">Yes, for the most part</option>
                <option value="5">Yes, definitely</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="pc9">Would you recommend this tool to your friends, family, or colleagues?</label></td>
            <td>
              <select name="pc9" id="pc9" required>
                <option selected="selected" value=""></option>
                <option value="1">Not at all</option>
                <option value="2">Maybe</option>
                <option value="3">Yes, definitely</option>
              </select>
            </td>
          </tr>
      </table>
    </div>
  </div>
  <div class="w3-row-padding w3-padding-64 w3-container w3-center" , id="submit">
    <button type="submit" onclick="value = 'Submit'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Submit</button>
  </div>
  </form>
</div>

<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<?php require_once 'common/footer.php';?>

<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->

<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>

<?php
    require_once 'connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $questions = array(
        "created_at" => time(),
        "UID" => $_SESSION['auth_user']["company_id"],
        "pc1" => 0,
        "pc2" => 0,
        "pc3" => 0,
        "pc4" => 0,
        "pc5" => 0,
        "pc6" => 0,
        "pc7" => 0,
        "pc8" => 0,
        "pc9" => 0
      );

      //Connection Vars
      // $servername = "localhost";
      // $username = "admin";
      // $password = "4324";
      // $dbname = "master_list";

      foreach ($_POST as $key => $value) {
        if (array_key_exists($key, $_POST)) {
          $questions[$key] = $value;
        }
      }

      //Catch failed connection
      // $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $columns = implode(", ", array_keys($questions));
      $values  =  "'" . implode("', '", array_values($questions)) . "'";
      $sql = "INSERT INTO POPEPC ($columns) VALUES ($values)";
      $surv = "UPDATE users SET survey2_comp = 1 WHERE username = '" . $_SESSION['auth_user']['username'] . "'";

      if ($conn->query($sql) === TRUE) {
        if ($conn->query($surv) === TRUE) {
          $conn->close();
        }
        echo ("<meta http-equiv=\"refresh\" content=\"0; url = pope-pc.php\" />");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
      }
    }
    ?>


<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<!--<script src="../../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>-->
<script src="../../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<!--<script src="../../assets/admin/pages/scripts/index3.js" type="text/javascript"></script>-->
<script src="../../assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>