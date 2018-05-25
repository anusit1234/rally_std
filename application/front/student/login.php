<!DOCTYPE html>
<!--
Template Name: Maxisonix
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>ยินดีต้อนรับ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" background="images/demo/backgrounds/bms.png" width="1024" height="768">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div> 

  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p><font color="#FFFFFF">ยินดีต้อนรับ</font></p>
            <h4 class="heading"><font color="#FFFFFF">โปรดกรอกรหัสนักเรียน</font></h4>
            <!-- <p>Neque vel mattis metus blandit dapibus</p> -->
            <footer>
              <form class="group" role="form" action="<?php echo $baseUrl; ?>/front/student/form_login/1" method="post">
                <fieldset>
                  <legend>Newsletter:</legend>
                  <input type="number" value="" placeholder="รหัสรักเรียน&hellip;" id="std_id" name="std_id">
                  <button class="fa fa-sign-in" type="submit" title="Submit"><em>Submit</em></button>
                </fieldset>
              </form>
            </footer>
          </article>
        </li>

      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>