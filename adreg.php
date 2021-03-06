<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="date/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
     <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    

</head>

<body style="background-color: #ffffff">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <a class="navbar-brand" href="#">Visitors Log Automation</a>
        </div>
    </nav>

    <div class="row">
        <form action="admin_data.php" method="post" enctype="multipart/form-data">
            <div class="col-lg-8 col-lg-offset-1" style="margin-top: 10px;" >

                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registration</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-4">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter First Name</label>
                                <input type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control input-lg" id="aname" name="aname"  placeholder="Text here" required="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter User Name</label>
                                <input type="text" onkeypress="return onlyAlphabets(event,this);"  class="form-control input-lg" id="auname" name="auname"  placeholder="Text here" required="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter password</label>
                                <input type="password" name="password" class="form-control input-lg " required="required" placeholder="Your password code">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter Email Id</label>
                                <input type="text"class="form-control input-lg" id="aemail" name="aemail"  placeholder="Text here" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter Date of Birth</label>
                                <input type="text" class="form-control input-lg" id="dob" name="dob"  placeholder="Text here" required="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group has-success">
                                <label class="control-label" >Enter Mobile Number</label>
                                <input type="text" onkeypress="return isNumberKey(event,this);" class="form-control input-lg" id="amno" name="amno"  placeholder="Text here" required="">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary" value="Save">
                        <a  href="admin.php" class="btn btn-lg btn-warning pull-right">login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="date/moment-with-locales.js"></script>
<script src="date/bootstrap-datetimepicker.js"></script>
<!-- FUNCTION CALL -->
<script type="text/javascript">
    /*date*/
    $('#dob').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'DD-MM-YYYY'
    });
</script>
</body>

</html>
