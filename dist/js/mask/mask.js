System.register([], function (exports_1, context_1) {
    "use strict";
    var Mask;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [],
        execute: function () {
            Mask = /** @class */ (function () {
                function Mask() {
                    Mask.defaultMasks();
                }
                Mask.defaultMasks = function () {
                    $('.phone').mask('(00) 0000-0000');
                    $('.cell-phone').mask('(00) 0 0000-0000');
                };
                return Mask;
            }());
            exports_1("Mask", Mask);
        }
    };
});
