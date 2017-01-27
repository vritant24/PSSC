<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
        type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/main.css" type="text/css">
    <title>PSSC</title>
  </head>
  <body>

    <nav>
      <!-- <div class="container grey darken-4"> -->
      <div class="nav-wrapper">
        <a href="/PSSC/index.php" class="brand-logo">Purdue Science Student Council</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">menu</i>
        </a>
        <ul id="nav-buttons" class="right hide-on-med-and-down yellow darken-2">
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="./index.php">Home</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>><a href="./about.php">About</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'the_council.php') echo 'class="active"' ?>><a href="the_council.php">The Council</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'calendar.php') echo 'class="active"' ?>><a href="./calendar.php">Calendar</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'aaply.php') echo 'class="active"' ?>><a href="./apply.php">Apply</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'outstanding-teacher-award.php') echo 'class="active"' ?>><a href="./outstanding-teacher-award.php">Outstanding Teacher Award</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>><a href="./contact.php">Contact</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="./index.php">Home</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>><a href="./about.php">About</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'the_council.php') echo 'class="active"' ?>><a href="the_council.php">The Council</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'calendar.php') echo 'class="active"' ?>><a href="./calendar.php">Calendar</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'aaply.php') echo 'class="active"' ?>><a href="./apply.php">Apply</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'outstanding-teacher-award.php') echo 'class="active"' ?>><a href="./outstanding-teacher-award.php">Outstanding Teacher Award</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>><a href="./contact.php">Contact</a></li>
        </ul>
      </div>
    <!-- </div> -->
    </nav>
