System.register(["../slick/slick.js"], function (exports_1, context_1) {
    "use strict";
    var slick_js_1, Bootstrap;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [
            function (slick_js_1_1) {
                slick_js_1 = slick_js_1_1;
            }
        ],
        execute: function () {
            Bootstrap = /** @class */ (function () {
                function Bootstrap() {
                }
                Bootstrap.init = function () {
                    Bootstrap.register();
                };
                Bootstrap.register = function () {
                    new slick_js_1.Slick();
                };
                return Bootstrap;
            }());
            exports_1("Bootstrap", Bootstrap);
        }
    };
});
