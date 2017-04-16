<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Notebook service</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/android-desktop.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!-- <link rel="canonical" href="http://www.example.com/"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/details.css">
</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>

        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h1 class="mdl-card__title-text">Ноутбук сервіс</h1>
        </div>

        <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>

        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="/" class="mdl-layout__tab <?php echo $overviewPage;?>">Огляд</a>
          <a href="/contacts/" class="mdl-layout__tab <?php echo $contactPage;?>">Контакти</a>
        <!-- <a href="#" class="mdl-layout__tab <?php //echo $detailsPage;?>">Details</a> -->
        <!-- <a href="/admin/" class="mdl-layout__tab">Admin</a> -->
        <!-- <a href="/user/register/" class="mdl-layout__tab">Register</a> -->
        <?php if (User::isGuest()): ?>
          <a href="/user/login/" class="mdl-layout__tab">Ввійти</a>
        <?php else: ?>
          <div class="mdl-layout-spacer"></div>
          <a href="/cabinet/" class="mdl-layout__tab <?php echo $cabinetPage;?>"><?php echo $_SESSION['user_name'] ?></a>
          <a href="/user/logout/" class="mdl-layout__tab">Вийти</a>
        <?php endif; ?>
        <!-- <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add"> -->
          <!-- <i class="material-icons" role="presentation">add</i> -->
          <!-- <span class="visuallyhidden">Add</span> -->
        <!-- </button> -->
      </div>
    </header>
