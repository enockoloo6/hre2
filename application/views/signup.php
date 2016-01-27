<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HRE | Sign up</title>
    <link href="<?php echo(base_url()); ?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">    
    <link href="<?php echo(base_url()); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>assets/css/style.css" rel="stylesheet">

</head>
<!-- header -->
<body>
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">


        <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <!-- <img alt="image" class="img image" src="<?php //echo(base_url()); ?>assets/img/a1.jpg" /> -->
                            <img alt="image" class="img-circle" src="<?php echo(base_url()); ?>assets/img/a1.jpg" />

                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> 
                            <span class="text-muted text-xs block">Logged in as: </span>
                            <span class="block m-t-xs"> <strong class="font-bold"><?php //echo($this->session->userdata('names')); ?>David Williams</strong></span>
                            </span> </a>
                    </div>
                    <div class="logo-element">
                        HRE
                    </div>
                </li>

            <li>
                <a href="<?php echo(base_url()); ?>"><i class="fa fa-th-large"></i> <span class="nav-label" style="font-size:16px">Home</span> </a>

            </li>

            <li>
                <a href="<?php echo(base_url()); ?>index.php/landing"><i class="fa fa-star"></i> <span class="nav-label" style="font-size:16px">Landing Page</span> </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label" style="font-size:16px" >Reports</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/central_mos">Ngong</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/facility_mos">Jogoo</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/facility_mos">Mombasa</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/facility_mos">Waiyaki</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/facility_mos">Thika</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>reports/facility_mos">Langata</a></li>
                </ul>
            </li>

            <li>
            <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label" style="font-size:16px">Settings</span><span
                        class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">

                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>funding_agency">Profile</a></li>
                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>supply_chain">New</a></li>
                   
                           
                  </ul>
            </li>

        </ul>

    </div>
</nav>

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Housing Recommendation Engine</span>
                </li>
<!-- notificaiton -->



<!-- end of the notification -->


                <li>
                        <a href="<?php echo base_url(); ?>login/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>

<!-- header -->


       <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Sign up</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Signup</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="" class="btn btn-primary">Create an account</a>
            </div>
        </div>
    </div>


        <div class="wrapper wrapper-content animated fadeInRight">
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Create and account</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                    

                            <form id="form" action="#" class="wizard-big">
                                <h1>Account</h1>
                                <fieldset>
                                    <h3>Account Information</h3>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Username *</label>
                                                <input id="userName" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Password *</label>
                                                <input id="password" name="password" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Profile</h1>
                                <fieldset>
                                    <h3>Profile Information</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First name *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Last name *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>Address *</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Warning</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>You did it Man :-)</h2>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
<!-- footer and the bottom includes -->
            <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> HRE &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php echo(base_url()); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo(base_url()); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

</body>

</html>
