<!DOCTYPE html>
<html id="ng-app" data-the-app="ProjectModule">

<head>
    <meta charset="utf-8">
    <title>Project Module</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="commons/scss/main.css">
</head>

<body>
    <header class="">
        <nav>

            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class="">Log out</a></li>
                </ul>


                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#" class="">Log out</a></li>
                </ul>

            </div>
        </nav>
    </header>
    <div class="container">
        <div ui-view=""></div>
    </div>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team working on this project.</p>


                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">

            </div>
        </div>
    </footer>
    <script src="commons/js/require.js" data-main="commons/js/main"></script>
</body>

</html>