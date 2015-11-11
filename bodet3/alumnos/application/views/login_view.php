<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Foundation 4</title>

  <link rel="stylesheet" href="common/css/normalize.css" />
  
  <link rel="stylesheet" href="common/css/foundation.css" />
  

  <script src="common/js/vendor/custom.modernizr.js"></script>

</head>
<body>
 <div class="row">
<div class="large-3 columns">
<h1><img src="http://placehold.it/400x100&text=Logo"></h1>
</div>
<div class="large-9 columns">
</div>
</div>

 <div class="row">
<div class="large-6 columns">
<?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
    <fieldset>
    <legend> Acceso </legend>
    
      <div class="large-12 columns">
      <label for="username">ID:</label>
      <br>
      <input type="text" size="10" id="ID" name="ID" placeholder="ID"/>
      </div>
      <br clear="all">
      <div class="large-12 columns">
      <label for="password">Password:</label>
      <br>
      <input type="password" size="20" id="password" name="password" placeholder="Password"/>
      <br>
      <input type="submit" value=" Login "/>
      </div>
      <br clear="all">
      </fieldset>
    </form>
 
</div>
<div class="large-6 columns">
<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
      <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur  sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum."</p>
</div>
</div>
 <footer class="row">
<div class="large-12 columns">
<hr />
<div class="row">
<div class="large-12 columns">
<p>&copy; Copyright - Normal Jaime Torres Bodet.</p>
</div>

</div>
</div>
</footer>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'common/js/vendor/zepto' : 'common/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="common/js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>