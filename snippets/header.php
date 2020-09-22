<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel='stylesheet' id='megamenu-google-fonts-css'  href='//fonts.googleapis.com/css?family=Lato%3A400%2C700&#038;ver=5.2.4' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/packages/brc_automad_theme/css/brc.css?v=37">
    <link rel="stylesheet" href="/packages/brc_automad_theme/css/site.css?v=37">

    <!-- Favicons -->
    <link rel="icon" href="/packages/brc_automad_theme/images/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon-precomposed" href="/packages/brc_automad_theme/images/favicon.png" />
    <meta name="msapplication-TileImage" content="/packages/brc_automad_theme/images/favicon.png" />

    <title>@{ sitename } / @{ title | def('404') }</title>
  </head>

  <body>
      <div id="main-wrapper">

        <header>
            <div class="container">
              <h1>Info</h1>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand fas fa-home" href="/"></a>
            <@ newPagelist { } @>
                <@ foreach in pagelist @>
                  <@ if @{ checkboxShowInNavbar } @>
                    <a class="nav-link <@ if @{ :current } @>active<@ end @>" title="@{ title }" href="@{ url }">@{ title }</a>
                <@ end @>
            <@ end @>
        </nav>

        <div id="content" class="container">
          <div class="row">
            <div class="col-lg-9">
