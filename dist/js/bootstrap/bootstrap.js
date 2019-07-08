System.register(["../slick/slick.js", "../layout/breadcrumb.js", "../mask/mask.js"], function (exports_1, context_1) {
    "use strict";
    var slick_js_1, breadcrumb_js_1, mask_js_1, Bootstrap;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [
            function (slick_js_1_1) {
                slick_js_1 = slick_js_1_1;
            },
            function (breadcrumb_js_1_1) {
                breadcrumb_js_1 = breadcrumb_js_1_1;
            },
            function (mask_js_1_1) {
                mask_js_1 = mask_js_1_1;
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
                    new breadcrumb_js_1.Breadcrumb();
                    new mask_js_1.Mask();
                };
                return Bootstrap;
            }());
            exports_1("Bootstrap", Bootstrap);
        }
    };
});
