/* global console */
(function () {
    "use strict";

        requirejs.onError = function (err) { window.console.log("RequireJS error:", err); };
        require.config({
            baseUrl: "",
            waitSeconds: 40,
            paths: {
                modernizr: "commons/js/modernizr.min",
                jquery: "commons/js/jquery.min",
                angular: "commons/js/angular.min",
                uiRouter: "commons/js/angular-ui-router.min",
                app: "commons/js/app-bundle"
            },
            shim: {
                jquery: { exports: "$", deps: [] },
                angular: { exports: "angular", deps: ["jquery", "modernizr"] },
                uiRouter: { exports: "ui-router", deps: ["angular"] },
                app: ["angular", "uiRouter"]
            }
        });

        require(["app"], function () {
            var root = angular.element(document.getElementById("ng-app"));

            angular.bootstrap(document, [root.data("the-app")]);
        });





})();
