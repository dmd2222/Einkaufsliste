<?php
require_once("keyit.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Einkaufsliste</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="src/css/animations.css"/>

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="/assets/checklist.png">

    <style>
        /*noinspection CssUnusedSymbol*/
        .main-headline {
            font-size: 1.5em
        }

        .navbar-brand > img {
            display: inline;
        }

        footer {
            margin-top: 1em;
            border-top: 1px solid #e5e5e5;
            padding-top: 0.5em;
        }

        /*noinspection CssUnusedSymbol*/
        .strike {
            text-decoration: line-through;
        }
    </style>
</head>
<body ng-app="Einkaufsliste">


<!--suppress HtmlUnknownAttribute -->
<ng-include src="'src/views/navigation.tpl.html'"></ng-include>
<div class="container" ng-controller="EinkaufslisteController as Einkaufsliste">


    <div ng-controller="ListController as list">
        <div ng-view></div>
    </div>

</div>

<footer class="einkaufsliste-footer">
    <div class="container">
        <p class="text-center">
            Version 0.8.3 | <a href="http://github.com/campino2k/Einkaufsliste">GitHub</a> | by <a
                href="http://campino2k.de">Christian Jung</a>
        </p>
    </div>
</footer>

<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="lib/angular/angular.min.js"></script>
<script src="lib/angular-route/angular-route.min.js"></script>
<script src="lib/angular-animate/angular-animate.min.js"></script>
<script src="src/js/app.js"></script>
</body>
</html>
