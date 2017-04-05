<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TaxBox | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php echo $this->Html->css(['/bootstrap/css/bootstrap.min.css', '/dist/css/AdminLTE.min.css', '/dist/css/skins/_all-skins.min.css', '/dist/css/skins/_all-skins.min.css', '/plugins/iCheck/flat/blue.css', '/plugins/morris/morris.css', '/plugins/jvectormap/jquery-jvectormap-1.2.2.css', '/plugins/datepicker/datepicker3.css', '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css']); ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">

 <?= $this->fetch('content') ?>

 
<?php echo $this->Html->script(['/plugins/jQuery/jquery-2.2.3.min.js', '/bootstrap/js/bootstrap.min.js']); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<?php //echo $this->Html->script(['/plugins/morris/morris.min.js', '/plugins/sparkline/jquery.sparkline.min.js', '/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', '/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', '/plugins/knob/jquery.knob.js', '/plugins/daterangepicker/daterangepicker.js', '/plugins/datepicker/bootstrap-datepicker.js', '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', '/plugins/slimScroll/jquery.slimscroll.min.js' , '/plugins/fastclick/fastclick.js', '/dist/js/app.min.js', '/dist/js/pages/dashboard.js', '/dist/js/demo.js']); ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
