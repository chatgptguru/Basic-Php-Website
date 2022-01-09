<?php
include '/login/usrdat.php';
session_start();
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
  .fa-coffee {
    font-size: 150px
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-indigo w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-indigo" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#intro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Introduction</a>
      <a href="#mot" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Motivation</a>
      <a href="#tci" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Team Climate Inventory</a>
      <a href="#burn" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Burnout</a>
      <a href="/home/home.php" class="w3-bar-item w3-button w3-padding-large w3-white w3-right">Log Out</a>
      <a href="/login/userhub.php" class="w3-bar-item w3-button w3-padding-large w3-white w3-right">Return to Surveys</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#intro" class="w3-bar-item w3-button w3-padding-large">Introduction</a>
      <a href="#mot" class="w3-bar-item w3-button w3-padding-large">Motivation</a>
      <a href="#tci" class="w3-bar-item w3-button w3-padding-large">Team Climate Inventory</a>
      <a href="#burn" class="w3-bar-item w3-button w3-padding-large">Burnout</a>
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
    <form action="burnout.php" method="post">
      <div class="w3-row-padding w3-padding-64 w3-container" , id="intro">
        <div class="w3-content">
          <div class="w3-threequarter">

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
                <td><label for="UPCC">What is your role at <?php echo $usrdat["company"] ?>:</label></td>
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

          <div class="w3-quarter w3-center">
            <i class="fa fa-database w3-padding-64 w3-text-indigo"></i>
          </div>
        </div>
      </div>

      <!-- Second Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="mot">
        <div class="w3-content">
          <div class="w3-quarter w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-indigo w3-margin-right"></i>
          </div>

          <div class="w3-threequarter">
            <table>
              <tr>
                <th>
                  <h1>Part 1) Motivation</h1>
                </th>
              </tr>
              <tr>
                <td>This section of the survey aims to evaluate self-rated motivation based on three components of motivation developed by Daniel Pink. For each question please respond using the 5-point response scale from ‘Strongly disagree’ to ‘Strongly agree’. All questions specifically pertain to work at the UPCC. This section of the survey will take approximately five minutes to complete.</td>
              </tr>
            </table>

            <table>
              <tr>
                <th>
                  <h2>Purpose</h2>
                </th>
              </tr>
            </table>

            <table>
              <tr>
                <td>
                  <label for="Mot_P1">I feel passionate about my work:</label>
                </td>
                <td>
                  <select name="Mot_P1" id="Mot_P1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_P2">A sense of purpose drives my work:</label></td>
                <td>
                  <select name="Mot_P2" id="Mot_P2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_P3">I feel that I am making a positive difference through my work:</label></td>
                <td>
                  <select name="Mot_P3" id="Mot_P3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_P4">Creating a positive impact through my work is important to me:</label></td>
                <td>
                  <select name="Mot_P4" id="Mot_P4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
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
                  <select name="Mot_A1" id="Mot_A1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_A2">The work environment permits me to follow my conscience:</label></td>
                <td>
                  <select name="Mot_A2" id="Mot_A2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_A3">The work environment facilitates flexibility:</label></td>
                <td>
                  <select name="Mot_A3" id="Mot_A3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_A4">The work environment enables me to be self-directed:</label></td>
                <td>
                  <select name="Mot_A4" id="Mot_A4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
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
                  <select name="Mot_M1" id="Mot_M1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_M2">These challenges enable me to continually improve:</label></td>
                <td>
                  <select name="Mot_M2" id="Mot_M2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_M3">I gain satisfaction from personal achievement and progress at work:</label></td>
                <td>
                  <select name="Mot_M3" id="Mot_M3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_M4">Continuous improvement enables me to be of better service to my team and my patients:</label></td>
                <td>
                  <select name="Mot_M4" id="Mot_M4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Mot_M5">The clinic space and supplies/resources enable me to provide good care:</label></td>
                <td>
                  <select name="Mot_M5" id="Mot_M5" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>


      <!-- Second Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="tci">
        <div class="w3-content">
          <div class="w3-threequarter">

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
                  <select name="TCI_V1" id="TCI_V1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_V2">I am in agreement with these objectives:</label></td>
                <td>
                  <select name="TCI_V2" id="TCI_V2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_V3">My team’s objectives are clearly understood by other members of the team:</label></td>
                <td>
                  <select name="TCI_V3" id="TCI_V3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>


              <tr>
                <td><label for="TCI_V4">My team’s objectives can be achieved:</label></td>
                <td>
                  <select name="TCI_V4" id="TCI_V4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_V5">My team’s objectives are worthwhile to the organization:</label></td>
                <td>
                  <select name="TCI_V5" id="TCI_V5" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
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
                  <select name="TCI_PS1" id="TCI_PS1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_PS2">People keep each other informed about work-related issues in the team:</label></td>
                <td>
                  <select name="TCI_PS2" id="TCI_PS2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_PS3">People feel understood and accepted by each other:</label></td>
                <td>
                  <select name="TCI_PS3" id="TCI_PS3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_PS4">There are real attempts to share information throughout the team:</label></td>
                <td>
                  <select name="TCI_PS4" id="TCI_PS4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
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
                  <select name="TCI_TO1" id="TCI_TO1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_TO2">The team critically appraises potential weaknesses in what it is doing in order to achieve the best possible outcome:</label></td>
                <td>
                  <select name="TCI_TO2" id="TCI_TO2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_TO3">Members of the team build on each other’s ideas in order to achieve the best possible outcome:</label></td>
                <td>
                  <select name="TCI_TO3" id="TCI_TO3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
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
                  <select name="TCI_IS1" id="TCI_IS1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_IS2">In this team we take the time needed to develop new ideas:</label></td>
                <td>
                  <select name="TCI_IS2" id="TCI_IS2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="TCI_IS3">People in the team cooperate in order to help develop and apply new ideas:</label></td>
                <td>
                  <select name="TCI_IS3" id="TCI_IS3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>

          <div class="w3-quarter w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-indigo w3-margin-right"></i>
          </div>
        </div>
      </div>

      <!-- Third Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" , id="burn">
        <div class="w3-content">
          <div class="w3-quarter w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-indigo w3-margin-right"></i>
          </div>
          <div class="w3-threequarter">

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
                  <select name="Burn_1" id="Burn_1" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Burn_2">Occasionally I am under stress, and I don’t always have as much energy as I once did, but I don’t feel burned out:</label></td>
                <td>
                  <select name="Burn_2" id="Burn_2" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Burn_3">I am definitely burning out and have one or more symptoms of burnout, such as physical and emotional exhaustion:</label></td>
                <td>
                  <select name="Burn_3" id="Burn_3" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Burn_4">The symptoms of burnout that I’m experiencing won’t go away. I often experience frustration at work:</label></td>
                <td>
                  <select name="Burn_4" id="Burn_4" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td><label for="Burn_5">I feel completely burned out and often wonder if I can go on. I am at the point where I may need to seek help and/or make some changes:</label></td>
                <td>
                  <select name="Burn_5" id="Burn_5" required>
                    <option selected="selected" value=""></option>
                    <option value="1">Strongly Agree</option>
                    <option value="2">Agree</option>
                    <option value="3">Neutral</option>
                    <option value="4">Disagree</option>
                    <option value="5">Strongly Disagree</option>
                  </select>
                </td>
              </tr>
            </table>

          </div>
        </div>
      </div>
      <div class="w3-row-padding w3-padding-64 w3-container w3-center" , id="submit">
        <button type="submit" onclick="value = 'Submit'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Submit</button>
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $questions = array(
        "UID" => $_GET['company_id'],
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
      $sql = "INSERT INTO Burnout ($columns) VALUES ($values)";
      $surv = "UPDATE users SET survey1_comp = 1 WHERE username = " . $_SESSION['usrdat']['username'];

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