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

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">


  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
  <link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
  <link href="../../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
  <!-- END PAGE LEVEL PLUGIN STYLES -->
  <!-- BEGIN PAGE STYLES -->
  <link href="../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css" />
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
      margin: 15px 15px;
      box-sizing: border-box;
      transition: width 0.4s ease-in-out;
    }

    .radio {
      display: flex;
      flex-direction: column;
      align-items: right;
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
      font-size: 125px;
    }

    th {
      text-align: center !important;
    }

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
  </style>
</head>

<body>
  <!-- BEGIN HEADER -->
  <?php require_once 'common/header.php'; ?>

  <!-- END HEADER -->
  <!-- BEGIN PAGE CONTAINER -->
  <div class="row">
    <form action="burnout.php" method="post">
      <div class="w3-row-padding w3-padding-64 w3-container" , id="intro">
        <div class="w3-content">


          <table>
            <tr>
              <th>
                <h1>Introduction</h1>
              </th>
            </tr>

            <tr>
              <td>
                <p>You are being invited to take part in this survey to obtain feedback regarding your perceptions and experiences related to working at the [clinic name]. Participation is completely voluntary, and all responses will be kept confidential and anonymous.</p>
                <p>You have the right to choose not to participate, or to stop participating at any time and withdraw your participation without having to provide a reason and without any consequence. You may skip any questions that make you uncomfortable or that you do not wish to answer.</p>
                <p>The sole purpose of this survey is to enable team building, quality improvement and learning functions. Only anonymous and aggregate results will be fed back to the team to enable these functions. Please note that the value of this exercise is not in the overall scores, but in the ensuing discussion around each area.</p>
                <p>The survey is composed of three sections covering themes related to: 1) motivation, 2) teamwork experience and performance, and 3) burnout. The survey could take approximately ten minutes to complete.</p>
              </td>
            </tr>
          </table>


          <table>
            <tr>
              <td><label for="UPCC">What is your role at <?php echo $_SESSION['auth_user']["company"]; ?>:</label></td>
              <td>
                <select name="UPCC" id="UPCC" value="<?php echo isset($_POST['UPCC']) ? $_POST['UPCC'] : '' ?>" required>
                  <option value=""></option>
                  <option value="Phys">Physician</option>
                  <option value="NP">Nurse Practitioner</option>
                  <option value="RN">Registered Nurse</option>
                  <option value="PCC">Patient Care Coordinator</option>
                  <option value="RT">Radiology Technologist</option>
                  <option value="MLA">Medical Lab Assistant</option>
                  <option value="MNG">Manager</option>
                  <option value="AA">Administrative Assistant</option>
                  <option value="MOA">Medical Office Assistant</option>
                  <option value="Pharm">Pharmacist</option>
                  <option value="Other">Other</option>
                </select>
              </td>
            </tr>


            <div data-show-if="UPCC=Other">
              <tr>
                <td><label for="Other_UPCC">If "Other" Please Specify</label></td>
                <td><input type="text" id="Other_UPCC" name="Other_UPCC"></td>
              </tr>
            </div>

            <tr>
              <td><label for="FTE">What is your FTE:</label></td>
              <td>
                <select name="FTE" id="FTE" required>
                  <option value=""></option>
                  <option value="FT">Full Time</option>
                  <option value="PT">Part Time</option>
                  <option value="Cas">Casual</option>
                </select>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <!-- Second Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="mot">
        <div class="w3-content">
          <table>
            <tr>
              <th>
                <h1>Part 1) Motivation</h1>
              </th>
            </tr>
            <tr>
              <td>
                <h4>This section of the survey aims to evaluate self-rated motivation based on three components of motivation developed by Daniel Pink. For each question please respond using the 5-point response scale from ‘Strongly disagree’ to ‘Strongly agree’. All questions specifically pertain to work at the UPCC. This section of the survey will take approximately five minutes to complete.</h4>
              </td>
            </tr>
          </table>

          <table>
            <th>
            <td>
              <h2>Purpose</h2>
            </td>
            <td>
              <h4>1- Strongly Agree<br>
                2- Agree<br>
                3 - Neutral<br>
                4 - Disagree<br>
                5 - Strongly Disagree</h4>
            </td>
            </th>
          </table>

          <table>
            <tr>
              <td>
                <label for="Mot_P1">I feel passionate about my work:</label>
              </td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="Mot_P1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="Mot_P1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="Mot_P1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="Mot_P1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="Mot_P1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Mot_P2">A sense of purpose drives my work:</label>
              </td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_P2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_P2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_P2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_P2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_P2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_P3">I feel that I am making a positive difference through my work:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_P3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_P3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_P3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_P3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_P3" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_P4">Creating a positive impact through my work is important to me:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_P4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_P4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_P4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_P4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_P4" value="5" /></label>
              </td>
            </tr>
          </table>

          <table>
            <tr>
              <th>
                <h2>Autonomy</h2>
              </th>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="Mot_A1">I am able to exercise discretion in my work:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="Mot_A1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="Mot_A1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="Mot_A1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="Mot_A1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="Mot_A1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_A2">The work environment permits me to follow my conscience:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_A2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_A2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_A2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_A2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_A2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_A3">The work environment facilitates flexibility:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_A3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_A3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_A3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_A3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_A3" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_A4">The work environment enables me to be self-directed:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_A4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_A4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_A4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_A4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_A4" value="5" /></label>
              </td>
            </tr>
          </table>

          <table>
            <tr>
              <th>
                <h2>Mastery</h2>
              </th>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="Mot_M1">The tasks of my job offer challenges that are within the scope of my knowledge and expertise:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="Mot_M1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="Mot_M1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="Mot_M1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="Mot_M1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="Mot_M1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_M2">These challenges enable me to continually improve:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_M2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_M2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_M2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_M2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_M2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_M3">I gain satisfaction from personal achievement and progress at work:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_M3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_M3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_M3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_M3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_M3" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_M4">Continuous improvement enables me to be of better service to my team and my patients:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_M4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_M4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_M4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_M4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_M4" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Mot_M5">The clinic space and supplies/resources enable me to provide good care:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Mot_M5" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Mot_M5" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Mot_M5" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Mot_M5" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Mot_M5" value="5" /></label>
              </td>
            </tr>
          </table>
        </div>
      </div>


      <!-- Second Grid -->
      <div class="w3-row-padding w3-padding-64 w3-container" , id="tci">
        <div class="w3-content">


          <table>
            <tr>
              <th>
                <h1>Part 2) Team Climate Inventory</h1>
              </th>
            </tr>
            <tr>
              <td>The Team Climate Inventory (TCI) is a widely used measure that gathers data on teamwork function and performance. It is used to measure shared perceptions of the organization’s policies, practices, and procedures within a team. For each question please respond using the 5-point response scale from ‘Strongly disagree’ to ‘Strongly agree’. Please consider the entire primary health care team (including medical secretaries and the clinical management) in your clinic to be part of your “team”. All questions specifically pertain to work at the UPCC. This section of the survey will take approximately five minutes to complete.</td>
            </tr>
          </table>

          <table>
            <tr>
              <th>
                <h2>Vision</h2>
              </th>
            </tr>
            <tr>
              <td class="td1">This part of the questionnaire is concerned with the vision and objectives of your team</td>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="TCI_V1">I am clear about what my team’s objectives are:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="TCI_V1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="TCI_V1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="TCI_V1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="TCI_V1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="TCI_V1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_V2">I am in agreement with these objectives:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_V2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_V2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_V2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_V2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_V2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_V3">My team’s objectives are clearly understood by other members of the team:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_V3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_V3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_V3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_V3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_V3" value="5" /></label>
              </td>
            </tr>


            <tr>
              <td><label for="TCI_V4">My team’s objectives can be achieved:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_V4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_V4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_V4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_V4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_V4" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_V5">My team’s objectives are worthwhile to the organization:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_V5" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_V5" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_V5" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_V5" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_V5" value="5" /></label>
              </td>
            </tr>
          </table>

          <table>
            <tr>
              <th>
                <h2>Participative safety</h2>
              </th>
            </tr>
            <tr>
              <td class="td1">This part of the questionnaire concerns how much participation there is in your team.</td>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="TCI_PS1">We have a “we are in it together” attitude:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="TCI_PS1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="TCI_PS1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="TCI_PS1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="TCI_PS1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="TCI_PS1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_PS2">People keep each other informed about work-related issues in the team:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_PS2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_PS2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_PS2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_PS2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_PS2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_PS3">People feel understood and accepted by each other:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_PS3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_PS3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_PS3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_PS3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_PS3" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_PS4">There are real attempts to share information throughout the team:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_PS4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_PS4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_PS4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_PS4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_PS4" value="5" /></label>
              </td>
            </tr>
          </table>

          <table>
            <tr>
              <th>
                <h2>Task orientation</h2>
              </th>
            </tr>
            <tr>
              <td class="td1">This part of the questionnaire is about how you feel the team monitors and appraises the work it does.</td>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="TCI_TO1">Team members are prepared to question the basis of what the team is doing:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="TCI_TO1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="TCI_TO1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="TCI_TO1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="TCI_TO1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="TCI_TO1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_TO2">The team critically appraises potential weaknesses in what it is doing in order to achieve the best possible outcome:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_TO2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_TO2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_TO2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_TO2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_TO2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_TO3">Members of the team build on each other’s ideas in order to achieve the best possible outcome:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_TO3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_TO3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_TO3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_TO3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_TO3" value="5" /></label>
              </td>
            </tr>
          </table>

          <table>
            <tr>
            <tr>
              <th>
                <h2>Support for innovation</h2>
              </th>
            </tr>
            <tr>
              <td class="td1">This part of the questionnaire deals with attitudes towards innovation and change in your team.</td>
            </tr>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="TCI_IS1">People in this team are always searching for fresh, new ways of looking at problems:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="TCI_IS1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="TCI_IS1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="TCI_IS1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="TCI_IS1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="TCI_IS1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_IS2">In this team we take the time needed to develop new ideas:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_IS2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_IS2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_IS2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_IS2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_IS2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="TCI_IS3">People in the team cooperate in order to help develop and apply new ideas:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="TCI_IS3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="TCI_IS3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="TCI_IS3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="TCI_IS3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="TCI_IS3" value="5" /></label>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <!-- Third Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="burn">
        <div class="w3-content">


          <table>
            <tr>
              <th>
                <h1>Part 3) Burnout</h1>
              </th>
            </tr>
            <tr>
              <td>This section of the survey aims to measure burnout in the workplace. Burnout is an occupational condition characterized by emotional exhaustion, depersonalization, and a low sense of personal accomplishment. Please indicate which of the following definitions matches your self-rated level of burnout.</td>
            </tr>
            <tr>
              <th>
                <h2>Burnout</h2>
              </th>
            </tr>
          </table>

          <table>
            <tr>
              <td><label for="Burn_1">I enjoy my work. I have no symptoms of burnout:</label></td>
              <td>
                <label for="1">1<input type="radio" class="radio" id="1" name="Burn_1" value="1" /></label>
                <label for="2">2<input type="radio" class="radio" id="2" name="Burn_1" value="2" /></label>
                <label for="3">3<input type="radio" class="radio" id="3" name="Burn_1" value="3" /></label>
                <label for="4">4<input type="radio" class="radio" id="4" name="Burn_1" value="4" /></label>
                <label for="5">5<input type="radio" class="radio" id="5" name="Burn_1" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Burn_2">Occasionally I am under stress, and I don’t always have as much energy as I once did, but I don’t feel burned out:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Burn_2" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Burn_2" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Burn_2" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Burn_2" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Burn_2" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Burn_3">I am definitely burning out and have one or more symptoms of burnout, such as physical and emotional exhaustion:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Burn_3" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Burn_3" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Burn_3" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Burn_3" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Burn_3" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Burn_4">The symptoms of burnout that I’m experiencing won’t go away. I often experience frustration at work:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Burn_4" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Burn_4" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Burn_4" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Burn_4" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Burn_4" value="5" /></label>
              </td>
            </tr>

            <tr>
              <td><label for="Burn_5">I feel completely burned out and often wonder if I can go on. I am at the point where I may need to seek help and/or make some changes:</label></td>
              <td>
                <label for="1"><input type="radio" class="radio" id="1" name="Burn_5" value="1" /></label>
                <label for="2"><input type="radio" class="radio" id="2" name="Burn_5" value="2" /></label>
                <label for="3"><input type="radio" class="radio" id="3" name="Burn_5" value="3" /></label>
                <label for="4"><input type="radio" class="radio" id="4" name="Burn_5" value="4" /></label>
                <label for="5"><input type="radio" class="radio" id="5" name="Burn_5" value="5" /></label>
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
  <?php require_once 'common/footer.php'; ?>

  <!-- END PRE-FOOTER -->
  <!-- BEGIN FOOTER -->

  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>

  <?php
  require_once 'connection.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questions = array(
      "UID" => $_SESSION['auth_user']["company_id"],
      "UPCC" => "",
      "Other_UPCC" => "",
      "FTE" => "",
      "created_at" => time(),
      "Mot_P1" => 0,
      "Mot_P2" => 0,
      "Mot_P3" => 0,
      "Mot_P4" => 0,
      "Mot_A1" => 0,
      "Mot_A2" => 0,
      "Mot_A3" => 0,
      "Mot_A4" => 0,
      "Mot_M1" => 0,
      "Mot_M2" => 0,
      "Mot_M3" => 0,
      "Mot_M4" => 0,
      "Mot_M5" => 0,
      "TCI_V1" => 0,
      "TCI_V2" => 0,
      "TCI_V3" => 0,
      "TCI_V4" => 0,
      "TCI_V5" => 0,
      "TCI_PS1" => 0,
      "TCI_PS2" => 0,
      "TCI_PS3" => 0,
      "TCI_PS4" => 0,
      "TCI_TO1" => 0,
      "TCI_TO2" => 0,
      "TCI_TO3" => 0,
      "TCI_IS1" => 0,
      "TCI_IS2" => 0,
      "TCI_IS3" => 0,
      "Burn_1" => 0,
      "Burn_2" => 0,
      "Burn_3" => 0,
      "Burn_4" => 0,
      "Burn_5" => 0
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
    $sql = "INSERT INTO Burnout ($columns) VALUES ($values)";
    $surv = "UPDATE users SET survey1_comp = 1 WHERE username = " . $_SESSION['auth_user']['username'];

    if ($conn->query($sql) === TRUE) {
      if ($conn->query($surv) === TRUE) {
        $conn->close();
      }
      echo ("<meta http-equiv=\"refresh\" content=\"0; url = burnout.php\" />");
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
  <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
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