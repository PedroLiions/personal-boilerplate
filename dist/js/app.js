System.register(["./bootstrap/bootstrap.js"], function (exports_1, context_1) {
    "use strict";
    var bootstrap_js_1;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [
            function (bootstrap_js_1_1) {
                bootstrap_js_1 = bootstrap_js_1_1;
            }
        ],
        execute: function () {
            /*
            * Init application
            * Author : Pedro Lima
            * WebSite http://plima.me
            * 3xceler
            * WebSite https://www.3xceler.com.br
            * */
            bootstrap_js_1.Bootstrap.init();
        }
    };
});
