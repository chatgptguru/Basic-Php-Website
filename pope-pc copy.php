<?php

require_once 'auth_require.php';
$_SESSION['pages'] = 'pope-pc';

?>

<!DOCTYPE html>
<html lang="en">
<title>EvaluationStud.io</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="StyleSheet.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif
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
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-indigo w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-indigo" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="/survey/pope-pc.php#pope" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">POPE-PC</a>
      <a href="/home/home.php" class="w3-bar-item w3-button w3-padding-large w3-white w3-right">Log Out</a>
      <a href="/login/userhub.php" class="w3-bar-item w3-button w3-padding-large w3-white w3-right">Return to Surveys</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="/survey/survey.php#mot" class="w3-bar-item w3-button w3-padding-large">POPE-PC</a>
      <a href="/home/home.php" class="w3-bar-item w3-button w3-padding-large w3-right">Log Out</a>
      <a href="/login/userhub.php" class="w3-bar-item w3-button w3-padding-large w3-right">Return to Surveys</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-indigo w3-center" style="padding:40px 16px 0px 16px">
    <h1 class="w3-margin w3-jumbo">Evaluation Stud.io</h1>
    <p class="w3-xlarge">Quality Improvement and Surveying Suite</p>

  </header>

  <!-- ================== NEW CODE ========== -->

  <body>
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
              <i class="fa fa-comments w3-padding-64 w3-text-indigo w3-margin-right"></i>
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

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $questions = array(
        "created_at" => time(),
        "UID" => $_GET['company_id'],
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
      $servername = "localhost";
      $username = "admin";
      $password = "4324";
      $dbname = "master_list";

      foreach ($_POST as $key => $value) {
        if (array_key_exists($key, $_POST)) {
          $questions[$key] = $value;
        }
      }

      //Catch failed connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $columns = implode(", ", array_keys($questions));
      $values  =  "'" . implode("', '", array_values($questions)) . "'";
      $sql = "INSERT INTO POPEPC ($columns) VALUES ($values)";
      $surv = "UPDATE users SET survey2_comp = 1 WHERE username = '" . $_SESSION['usrdat']['username'] . "'";

      if ($conn->query($sql) === TRUE) {
        if ($conn->query($surv) === TRUE) {
          $conn->close();
        }
        echo ("<meta http-equiv=\"refresh\" content=\"0; url = http://52.60.220.197/login/userhub.php\" />");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
      }
    }
    ?>
  </body>
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>To provide feedback, click <a href="feedback/formpage.html" target="_blank">here</a></p>
  </footer>

  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>



</html>