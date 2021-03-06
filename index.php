<!DOCTYPE html>
<html id="ng-app" data-the-app="ProjectModule">

<head>
    <meta charset="utf-8">
    <title>July Dec 15</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="commons/scss/main.css">
</head>

<body>
    <header class="">
        <nav>

            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">Demo angular implementation</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class=""></a></li>
                </ul>


                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#" class=""></a></li>
                </ul>

            </div>
        </nav>
    </header>
    <div class="container">
        <div ui-view="toptabs" class="toptabs"></div>
        <div ui-view="" class=""></div>
    </div>

    <script src="commons/js/require.js" data-main="commons/js/main"></script>
</body>

</html>
