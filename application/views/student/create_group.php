<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->

<head>
    <!-- Okp config -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load style.css file, which store in css folder -->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style.css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Latest compiled JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='utf-8'>
    <script>
        $(function() {
            $('#ui_main').load('<?= base_url('Controller/ui_main') ?>');
            $('#ui_footer').load('<?= base_url('Controller/ui_footer') ?>');
            $('#ui_tab').load('<?= base_url('Controller/ui_tabstd') ?>');
        })
    </script>
    <style media="screen">
        label {
            font-size: 20px;
        }

        .size {
            height: 970px;
            border-width: 20px;
            border-color: orange;
        }
    </style>
    <title>Index</title>
</head>
<!--############################################## Header ###########################################################################-->
<header>
    <div id='ui_main'></div>
</header>
<!--############################################## Body ###########################################################################-->

<body>
    <div class="container-fluid text-center">
        <div class="row">
            <!-- Bar -->
            <div class="col-sm-2 well w3-white">
                <div id='ui_tab'></div>
            </div>
            <!-- End Bar -->
            <div class="col-sm-10 well text-left size">
                <div style="background-color: orange; padding: 10px">
                    <h2>สร้างกลุ่ม</h2>
                </div>
                <!-- Body -->


















                <form action="<?= base_url('Controller/register') ?>" method='post'>
                    <input type='text' name='name_project' value='' placeholder='name_project'>
                    <input type='text' name='info_project' value='' placeholder='info_project'>

                    <input type='text' name='student_student_id_1' value='' placeholder='student_student_id_1'>
                    <input type='text' name='student_student_id_2' value='' placeholder='student_student_id_2'>
                    <input type='text' name='student_student_id_3' value='' placeholder='student_student_id_3'>

                    <button name='submit' value='create_group'>Register</button>
                </form>
























                <!-- End Body -->
            </div>
        </div>
    </div>
</body>
<!--#### Footer ####-->

<footer>
    <div id='ui_footer'></div>
</footer>
<!--### End #-->

</html>

<!-- ==================== Insert Picture ==================== -->