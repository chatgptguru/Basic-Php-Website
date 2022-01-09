   <?php

    require_once 'auth_require.php';
    $_SESSION['pages'] = 'about';

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
           .close-icon {
               float: right;
               font-size: 21px;
               font-weight: 700;
               line-height: 1;
               display: inline-block;
               margin-top: 0px;
               margin-right: 12px;
               width: 9px;
               height: 9px;
               outline: none;
               color: red;
           }

           .close-icon:hover {
               cursor: pointer;
           }

           .close-icon i {
               font-size: 25px !important;
           }

           .mt-0 {
               margin-top: 0px;
           }

           .active-well {
               border: solid 2px red;
           }

           .select-active-well {
               border-left-width: 6px;
               border-left-style: solid;
               border-left-color: green !important;
           }

           .end-texts {
               display: flex;
               justify-content: space-between;
           }

           .detail-info {
               width: 100%;
               min-width: 150px;
           }

           th,
           td {
               text-align: left;
               padding: 8px;
           }

           #taskModal::-webkit-scrollbar {
               display: none;
           }
       </style>
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
   <!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->

   <body>
       <!-- BEGIN HEADER -->
       <?php require_once('common/header.php'); ?>

       <!-- BEGIN PAGE CONTAINER -->
       <div id="Add_css" style="display: block;">
           <div class="col-sm-12 col-lg-12 col-md-12 row">
               <div class="col-sm-2 col-md-2 col-lg-2">
               </div>
               <div class="col-sm-8 col-md-8 col-lg-8" style="margin-top: 4%; margin-bottom: 4%">
                   <div class="col-sm-12 col-md-12 col-lg-12 row" style="border-style: solid; border-width: 1px; border-color: steelblue; border-radius: 5px;">
                       <div class="row" style="margin-top: 3%">
                           <div class="col-sm-8 col-md-8 col-lg-8" style="margin-left: 3%">
                               <h1 style="display: block; font-weight: bold; font-family: 'Poppins', sans-serif; font-weight: bold;">
                                   Logic Model: <span class="text-danger"><?php echo $_SESSION['auth_user']['company']; ?></span>
                               </h1>
                           </div>
                           <div>
                               <button class="btn" style="width: 8%; height: 48px; background-color: green; position: absolute; right: 0; color: white; margin-top: 2%; margin-right: 5%" id="add_button">
                                   Add
                               </button>
                           </div>
                       </div>
                       <div class="row">
                           <div style="padding-left: 3%; padding-right: 3%;">
                               <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%; margin-bottom: 2%">
                                   <label style="font-weight: bold;">No Tasks To Show</label><br>
                               </div>
                               <div class="row" align="center" style="margin-bottom: 5%">
                                   <p style="font-size: 14px; font-weight: bold">Copyright © 2021</p>
                                   <a href="#" data-nsfw-filter-status="swf" style="font-weight: bold; font-size: 16px">About</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div id="Close_css" style="display: none;">
           <!-- <div id="Close_css" style="display: none;"> -->
           <div class="col-sm-12 col-lg-12 col-md-12 row">
               <div class="col-sm-2 col-md-2 col-lg-2">
               </div>
               <div class="col-sm-8 col-md-8 col-lg-8" style="margin-top: 4%; margin-bottom: 4%">
                   <div class="col-sm-12 col-md-12 col-lg-12 row" style="border-style: solid; border-width: 1px; border-color: steelblue; border-radius: 5px;">
                       <div class="row" style="margin-top: 3%">
                           <div class="col-sm-8 col-md-8 col-lg-8" style="margin-left: 3%">
                               <h1 style="display: block; font-weight: bold; font-family: 'Poppins', sans-serif; font-weight: bold;">
                                   Logic Model: <span class="text-danger"><?php echo $_SESSION['auth_user']['company']; ?></span>
                               </h1>
                           </div>
                           <div>
                               <button class="btn" style="width: 8%; height: 48px;background-color: red; position: absolute; right: 0; color: white; margin-top: 2%; margin-right: 5%" id="close_button">
                                   Close
                               </button>
                           </div>
                       </div>
                       <div class="row">
                           <div style="padding-left: 3%; padding-right: 3%;">
                               <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%; margin-bottom: 2%">
                                   <label style="font-weight: bold;">Task</label><br>
                                   <input id="title" style="width: 100%; padding: 1%; font-size: 16px;" type="text" placeholder="Add Task" value="" />
                               </div>
                               <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%; margin-bottom: 2%">
                                   <label style="font-weight: bold;">Description</label><br>
                                   <input id="desc" style="width: 100%; padding: 1%; font-size: 16px;" type="text" placeholder="Add Description" value="" />
                               </div>
                               <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%; margin-bottom: 2%;">
                                   <div class="col-sm-4 col-md-4 col-lg-4" style="padding: 0;  margin-top: 1%;">
                                       <label style="font-size: 16px; font-weight: bold; font-family: 'Poppins', sans-serif;">Select Category</label>
                                   </div>
                                   <div class="col-sm-8 col-md-8 col-lg-8">
                                       <select id="category" style="position: absolute; right: 0; width: 100%; padding: 1%; font-size: 16px; font-size: 16px;">
                                           <option value="inputs">Input</option>
                                           <option value="actions">Action</option>
                                           <option value="outputs">Output</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%; margin-bottom: 2%;">
                                   <input type="submit" class="btn btn-block" value="Save Task" id="save" style="background: #0c0c0c; width: 100%; color: white ">
                               </div>


                               <div class="col-sm-12 col-md-12 col-lg-12 btn-group" style="margin-top: 1%; margin-bottom: 2%;">
                                   <div class="col-sm-12 col-md-12 col-lg-12 btn-group btn-group-lg" style="margin-top: 10px;">
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <select id="group" style="position: absolute; right: 0; width: 100%; padding: 1%; font-size: 16px; font-size: 16px;">
                                               <option value="inputs">Input</option>
                                               <option value="actions">Action</option>
                                               <option value="outputs">Output</option>
                                           </select>
                                       </div>
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <button class="btn btn-primary" style="width: 100%;" id="add_group">Add to Group</button>
                                       </div>
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <button class="btn btn-primary" data-toggle="modal" data-target="#create_modal" style="width: 100%;">Create New Group</button>
                                       </div>
                                   </div>

                                   <div class="col-sm-12 col-md-12 col-lg-12 btn-group btn-group-lg">
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <h3>Inputs</h3>
                                           <div id="inputs"></div>
                                       </div>
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <h3>Actions</h3>
                                           <div id="actions"></div>
                                       </div>
                                       <div class="col-sm-4 col-md-4 col-lg-4">
                                           <h3>Outputs</h3>
                                           <div id="outputs"></div>

                                       </div>
                                   </div>


                               </div>
                               <div class="row" align="center" style="margin-top: 10%; margin-bottom: 5%">
                                   <p style="font-size: 14px; font-weight: bold">Copyright © 2021</p>
                                   <a href="#" data-nsfw-filter-status="swf" style="font-weight: bold; font-size: 16px">About</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- BEGIN PRE-FOOTER -->
       <div class="page-prefooter">
           <div class="container">
               <div class="row">
                   <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                       <h2>About</h2>
                       <p>
                           Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore.
                       </p>
                   </div>
                   <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                       <h2>Subscribe Email</h2>
                       <div class="subscribe-form">
                           <form action="javascript:;">
                               <div class="input-group">
                                   <input type="text" placeholder="mail@email.com" class="form-control">
                                   <span class="input-group-btn">
                                       <button class="btn" type="submit">Submit</button>
                                   </span>
                               </div>
                           </form>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                       <h2>Follow Us On</h2>
                       <ul class="social-icons">
                           <li>
                               <a href="javascript:;" data-original-title="rss" class="rss"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                           </li>
                           <li>
                               <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                           </li>
                       </ul>
                   </div>
                   <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                       <h2>Contacts</h2>
                       <address class="margin-bottom-40">
                           Phone: 800 123 3456<br>
                           Email: <a href="mailto:info@metronic.com">info@metronic.com</a>
                       </address>
                   </div>
               </div>
           </div>
       </div>
       <!-- END PRE-FOOTER -->

       <!-- BEGIN TASK INFO MODAL  -->
       <!-- Modal -->
       <div id="taskModal" class="modal fade " role="dialog">
           <div class="modal-dialog modal-lg" style="width: 1500px;">
               <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Details</h4>
                   </div>
                   <div class="modal-body">
                       <form id="detail_post">
                           <div class="container">
                               <div style="overflow-x: auto;" id="table_parent">
                                   
                               </div>
                           </div>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-primary" id="modal_save">Save</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   </div>
                   </form>
               </div>

           </div>
       </div>
       <!-- END TASK INFO MODAL -->


       <!-- Modal -->
       <div id="create_modal" class="modal fade " role="dialog">
           <div class="modal-dialog modal-sm" style="width: 500px;">
               <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Create Group</h4>
                   </div>
                   <div class="modal-body">
                       <form id="group_submit">
                           <div class="">
                               <div class="d-flex" style="justify-content: space-evenly;">
                                   <h4 class="mr-2">Please enter a name: </h4>
                                   <input type="text" name="group_name" id="group_name" class="form-control detail-info" required />
                               </div>
                           </div>
                           <div class="modal-footer">
                               <button type="submit" class="btn btn-primary" id="modal_save">Save</button>
                               <button type="button" id="group_close" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!-- END TASK INFO MODAL -->

       <!-- BEGIN FOOTER -->

       <div class="scroll-to-top">
           <i class="icon-arrow-up"></i>
       </div>
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
       <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>

       <input type="hidden" id="el_id" />
       <input type="hidden" id="sel_group_id" />

       <script>
           jQuery(document).ready(function() {
               Metronic.init(); // init metronic core componets
               Layout.init(); // init layout
               Demo.init(); // init demo(theme settings page)
               QuickSidebar.init(); // init quick sidebar
               // Index.init(); // init index page
               // Tasks.initDashboardWidget(); // init tash dashboard widget
           });
       </script>
       <script>
           var totalData;

           function clearInput() {
               $("#title").val("");
               $("#desc").val("");
           }

           function generateElements(data) {
               inputs = data.inputs;
               actions = data.actions;
               outputs = data.outputs;
               inputsHTML = "";
               $.each(inputs, function(key, val, ) {
                   inputsHTML += `<div class="well group-${val.group_id}" data-id="${val.id}" data-group="${val.group_id}" data-cate="inputs" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="inputs">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#inputs").html(inputsHTML);

               actionsHTML = "";
               $.each(actions, function(key, val) {
                   actionsHTML += `<div class="well group-${val.group_id}"  data-id="${val.id}" data-group="${val.group_id}"  data-cate="actions" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="actions">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#actions").html(actionsHTML);

               outputsHTML = "";
               $.each(outputs, function(key, val) {
                   outputsHTML += `<div class="well group-${val.group_id}" data-id="${val.id}" data-group="${val.group_id}"  data-cate="outputs" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="outputs">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#outputs").html(outputsHTML);
           }


           function updatedElements(data, sel_id, group) {
               inputs = data.inputs;
               actions = data.actions;
               outputs = data.outputs;
               inputsHTML = "";
               $.each(inputs, function(key, val) {
                   activeEle = val.id == sel_id && "select-active-well";
                   activeGroup = val.group_id == group && "active-well";
                   inputsHTML += `<div class="well group-${val.group_id} ${activeEle} ${activeGroup}" data-id="${val.id}" data-group="${val.group_id}" data-cate="inputs" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="inputs">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#inputs").html(inputsHTML);

               actionsHTML = "";
               $.each(actions, function(key, val) {
                   activeEle = val.id == sel_id && "select-active-well";
                   activeGroup = val.group_id == group && "active-well";
                   actionsHTML += `<div class="well group-${val.group_id} ${activeEle} ${activeGroup}"  data-id="${val.id}" data-group="${val.group_id}"  data-cate="actions" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="actions">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#actions").html(actionsHTML);

               outputsHTML = "";
               $.each(outputs, function(key, val) {
                   activeEle = val.id == sel_id && "select-active-well";
                   activeGroup = val.group_id == group && "active-well";
                   outputsHTML += `<div class="well group-${val.group_id} ${activeEle} ${activeGroup}" data-id="${val.id}" data-group="${val.group_id}"  data-cate="outputs" id="ele_${val.id}">
                            <div class="close-icon del-icon" data-id="${val.id}" data-cate="outputs">
                                <i class="fa fa-close"></i>
                            </div>
                            <div>
                                <h3 class="mt-0">${val.title}</h3>
                                <h4>${val.desc}</h4>
                                <h4>${val.group_id}</h4>
                            </div>
                        </div>`
               });
               $("#outputs").html(outputsHTML);
           }

           function init_load() {
               // $.getJSON("initLoad.php", function( data ) {
               //     totalData=data;
               //     console.log('init data', data)
               //     generateElements(data);
               // });

               $.getJSON("ajax/initLoad.php", function(data) {
                   totalData = data;
                   console.log('init data', data)
                   generateElements(data);
               });
           }

           function saveJSON(postData) {
               $.ajax({
                   type: 'POST',
                   url: 'saveJSON.php',
                   data: {
                       data: postData
                   },
                   success: function(data) {
                       clearInput();
                       totalData = data;
                       init_load();
                       $("#taskModal").modal('hide')
                   },
                   error: function(e) {
                       console.log({
                           e
                       })
                   }
               });

           }

           function get_group(group = 0) {
               $.ajax({
                   type: 'get',
                   url: 'ajax/getGroup.php',
                   dataType: 'json',
                   success: function(groups) {
                       el = `<option value="0">Ungrouped</option>`;
                       groups.forEach(group => {
                           el += `<option value="${group.id}">${group.name}</option>`;
                       });
                       $("#group").html(el);
                       $("#group").val(group)
                   },
                   error: function(e) {
                       console.log({
                           e
                       })
                   }
               });
           }

           $(document).ready(function() {
               // init install
               init_load();
               get_group();

               $("#add_button").click(function() {
                   $("#Add_css").css("display", "none");
                   $("#Close_css").css("display", "block");
               });
               $("#close_button").click(function() {
                   $("#Add_css").css("display", "block");
                   $("#Close_css").css("display", "none");
               });

               // create task
               $("#save").click(function() {
                   title = $("#title").val();
                   desc = $("#desc").val();
                   category = $("#category").val();

                   // validate
                   if (!title) {
                       alert("Please Input a Task Title");
                       return;
                   }
                   if (!desc) {
                       alert("Please Input a Description");
                       return;
                   }

                   id = moment().format('YYYYMMDDHHmm');
                   newObject = {
                       "id": id,
                       "title": title,
                       "desc": desc,
                       "created_date": moment().format('YYYY-MM-DD HH:mm'),
                       "updated_date": moment().format('YYYY-MM-DD HH:mm'),
                       "category": $("#category").val(),
                       'type': 'create'
                   }
                   saveJSON(newObject);
               })


           });

           //  delete task
           $(document).on('click', '.del-icon', function() {
               id = $(this).data('id');
               cate = $(this).data('cate');
               let newData = {};
               newData['del_id'] = id;
               newData['type'] = 'delete';
               saveJSON(newData)
           })

           //active well
           $(document).on('click', '.well', function() {
               id = $(this).data('id');
               group = $(this).data('group');

               sel_group = $("#group").val();

               $("#sel_group_id").val(group);

               // if((group == sel_group) || (sel_group == 0)){
               //     $("#add_group").text('Remove from Group');
               // }else{
               //     $("#add_group").text('Add to Group');
               // }

               $("#group").val(group)

               sel_group = $("#group").val();
               if (group != sel_group) {
                   console.log('not same');
               } else {
                   console.log('same')
               }

               $("#el_id").val(id);
               $(".well").removeClass('active-well');
               $(".well").removeClass('select-active-well');
               $(this).addClass('select-active-well');
               $(`.group-${group}`).addClass('active-well');
           })

           // change group
           $(document).on('change', '#group', function() {
               group = $(this).val();
               sel_group_id = $("#sel_group_id").val();


               $(".well").removeClass('active-well');
               // $(".well").removeClass('select-active-well');
               $(`.group-${group}`).addClass('active-well');


               if ((group == 0) || sel_group_id == group) {
                   $("#add_group").text('Remove from Group');
               } else {
                   $("#add_group").text('Add to Group');
               }
           })

           // display table
           $(document).on('dblclick', '.well', function() {
               $(".well").removeClass('active-well');
               $(this).addClass('active-well');
               id = $(this).data('id')
               cate = $(this).data('cate');
               console.log({
                   totalData
               })
               data = totalData[cate].find(item => item.id == id);
               $("#table_parent").empty();
               $("#table_parent").append("<table class='table table-bordered'>"+
                    "<tr>"+
                        "<th></th>"+
                        "<th></th>"+
                        "<th style='text-align:center;cursor:pointer' onclick='addweek()' id='add_week'><i class='fa fa-plus-circle'></i></th>"+
                    "</tr>"+
                    "<tr id='tr_problem'>"+
                        "<th rowspan='7' id='main_info'>"+
                            "<h4 style='Font-weight:bold;'>Title: <span id='detail_title'></span></h4>"+
                            "<h4 style='Font-weight:bold;'>Desciption: </h4>"+
                            "<span id='detail_desc'></span>"+
                            "<h4 style='Font-weight:bold;'>Date Added: </h4>"+
                            "<span id='created_at'></span>"+
                            "<h4 style='Font-weight:bold;'>Date modificied: </h4>"+
                            "<span id='updated_at'></span>"+
                        "</th>"+
                        "<th>Problem Statement</th>"+
                    "</tr>"+
                    "<tr id='tr_goals'>"+
                        "<th>Goals</th>"+
                    "</tr>"+
                    "<tr id='tr_indicators'>"+
                        "<th>Indicators and Trends</th>"+
                    "</tr>"+
                    "<tr id='tr_assessment'>"+
                        "<th>Assessment</th>"+
                    "</tr>"+
                    "<tr id='tr_interventions'>"+
                        "<th>Interventions</th>"+
                    "</tr>"+
                    "<tr id='tr_risk'>"+
                        "<th>Risk</th>"+
                    "</tr>"+
                    "<tr id='tr_follow-up'>"+
                        "<th>Follow-up Notes</th>"+
                    "</tr>"+
                "</table>")
               console.log('data---', data);
               if(data.problem == null && data.goal == null && data.indicator == null && data.assessment == null && data.intervention == null && data.risk == null && data.follow_up == null){
                    addweek(data);
               }else{
                    var problem_array = data.problem.split(":)");
                    var goal_array    = data.goal.split(":)");
                    var indicator_array = data.indicator.split(":)");
                    var assessment_array = data.assessment.split(":)");
                    var intervention_array = data.intervention.split(":)");
                    var risk_array = data.risk.split(":)");
                    var follow_up_array = data.follow_up.split(":)");
                    for(var i = 0; i < problem_array.length; i++){
                        var mydata = {
                                problem      : problem_array[i],
                                goal         : goal_array[i],
                                indicator    : indicator_array[i],
                                assessment   : assessment_array[i],
                                intervention : intervention_array[i],
                                risk         : risk_array[i],
                                follow_up    : follow_up_array[i]
                        }
                            addweek(mydata,index = i);
                    }
               }
               
               $("#detail_id").val(id);
               $("#detail_cate").val(cate);
               $("#detail_title").text(data.title);
               $("#detail_desc").text(data.desc);
               $("#created_at").text(data.created_date);    
               $("#updated_at").text(data.updated_date);
               


               $("#taskModal").modal();
           })


           // save detail info
           $(document).on('submit', '#detail_post', function(e) {
               e.preventDefault();
               id = $("#detail_id").val();
               console.log($(".td_problem").length);
               var problem = '';
               var goal = '';
               var indicator = '';
               var assessment = '';
               var intervention = '';
               var risk = '';
               var follow_up = '';
                console.log($(".td_problem").length);
               for(var i = 0; i < $(".td_problem").length; i++ ) {
                   if(i == 0){
                        problem =  $(".td_problem").eq(i).val();
                        goal    =  $(".td_goals").eq(i).val();
                        indicator = $(".td_indicators").eq(i).val();
                        assessment = $(".td_assessment").eq(i).val();
                        intervention = $(".td_interventions").eq(i).val();
                        risk = $(".td_risk").eq(i).val();
                        follow_up = $(".td_follow-up").eq(i).val();
                   }else{
                        problem      += ":)" + $(".td_problem").eq(i).val();
                        goal         += ":)" + $(".td_goals").eq(i).val();
                        indicator    += ":)" + $(".td_indicators").eq(i).val();
                        assessment   += ":)" + $(".td_assessment").eq(i).val();
                        intervention += ":)" + $(".td_interventions").eq(i).val();
                        risk         += ":)" + $(".td_risk").eq(i).val();
                        follow_up    += ":)" + $(".td_follow-up").eq(i).val();
                   }
               }
               let item = {};
                item.type = 'update'
                item.id = id
                item.problem = problem;
                item.goal = goal;
                item.indicator = indicator;
                item.assessment = assessment;
                item.intervention = intervention;
                item.risk = risk;
                item.follow_up = follow_up;
                item.updated_date = moment().format('YYYY-MM-DD HH:mm:ss');
                saveJSON(item);
           });
           // $(document).on('change', '.detail-info', function(){
           //     property = $(this).attr('id');
           //     id=$("#detail_id").val();
           //     cate=$("#detail_cate").val();
           //     value=$(this).val();

           //     newData=totalData;
           //     item = newData[cate].find(i => i.id == id);
           //     item[property]=value;
           //     item['updated_date']=moment().format('YYYY-MM-DD HH:mm:ss');

           //     saveJSON(newData);
           // })



           $("#group_submit").submit(function(e) {
               e.preventDefault();
               group_name = $("#group_name").val();
               $.ajax({
                   type: 'POST',
                   url: 'ajax/createGroup.php',
                   data: {
                       group_name
                   },
                   success: function(data) {
                       console.log({
                           data
                       })
                       get_group();
                       $("#create_modal").modal('toggle');
                   },
                   error: function(e) {
                       console.log({
                           e
                       })
                   }
               });
           })

           $("#add_group").click(function(e) {
               e.preventDefault();
               group = $("#group").val();
               el_id = $("#el_id").val();
               sel_group_id = $("#sel_group_id").val();
               if (!el_id) {
                   alert('please select element');
                   return;
               }
               // if(sel_group_id == group){
               //     group = 0;
               // }
               $.ajax({
                   type: 'POST',
                   url: 'ajax/add_group.php',
                   dataType: 'json',
                   data: {
                       group,
                       el_id
                   },
                   success: function(data) {
                       console.log({
                           data
                       })
                       get_group(group);
                       updatedElements(data, el_id, group);
                       //    init_load();
                       //    $(`#ele_${el_id}`).addClass('select-active-well')
                       //     $(`.group-${group}`).addClass('active-well');
                       //    console.log({el_id})
                       //    console.log('asdfsdf',  $(`#ele_${el_id}`))
                   },
                   error: function(e) {
                       console.log({
                           e
                       })
                   }
               });
           })

           function addweek(data = null,index = 0) {
               
               
               $("#tr_goals").append("<td><textarea  class='form-control detail-info td_goals'  ></textarea></td>");
               $("#tr_indicators").append("<td><textarea class='form-control detail-info td_indicators'  ></textarea></td>");
               $("#tr_assessment").append("<td><textarea class='form-control detail-info td_assessment'  ></textarea></td>");
               $("#tr_interventions").append("<td><textarea class='form-control detail-info td_interventions'  ></textarea></td>");
               $("#tr_risk").append("<td><textarea class='form-control detail-info td_risk'  ></textarea></td>");
               $("#tr_follow-up").append("<td><textarea class='form-control detail-info td_follow-up'  ></textarea></td>");
               if(data != null){
                    var weekindex = index + 1;
                    $("#add_week").before("<th>"+"Week"+weekindex+"</th>");
                    $("#tr_problem").append("<td><textarea class='form-control detail-info td_problem'></textarea>" +
                    "<input type='hidden' id='detail_id' class='form-control detail-info' />" +
                    "<input type='hidden' id='detail_cate' class='form-control detail-info' /></td>");
                    $(".td_problem").eq(index).val(data.problem);
                    $(".td_goals").eq(index).val(data.goal);
                    $(".td_indicators").eq(index).val(data.indicator);
                    $(".td_assessment").eq(index).val(data.assessment);
                    $(".td_interventions").eq(index).val(data.intervention);
                    $(".td_risk").eq(index).val(data.risk);
                    $(".td_follow-up").eq(index).val(data.follow_up);
               }else{
                    $("#add_week").before("<th>Week</th>");
                    $("#tr_problem").append("<td><textarea class='form-control detail-info td_problem'></textarea>" +
                    "</td>");
               }
               document.getElementById("table_parent").scrollLeft += 180;
           }
       </script>
       <!-- END JAVASCRIPTS -->
   </body>
   <!-- END BODY -->

   </html>
   © 2021 GitHub, Inc.
   Terms
   Privacy
   Security
   Status
   Docs
   Contact GitHub
   Pricing
   API
   Training
   Blog
   About
   Loading complete