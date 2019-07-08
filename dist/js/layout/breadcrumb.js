System.register([], function (exports_1, context_1) {
    "use strict";
    var Breadcrumb;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [],
        execute: function () {
            Breadcrumb = /** @class */ (function () {
                function Breadcrumb() {
                    this.breadcrumb = $('.breadcrumb-map');
                    this.breakpoint = 1199;
                    this.init();
                }
                Breadcrumb.prototype.init = function () {
                    var _this = this;
                    if (document.documentElement.clientWidth > this.breakpoint)
                        this.calcPosition();
                    else
                        this.setOriginal();
                    this.resize(function () {
                        if (document.documentElement.clientWidth > _this.breakpoint)
                            return _this.calcPosition();
                        else
                            _this.setOriginal();
                    });
                };
                Breadcrumb.prototype.resize = function (callback) {
                    window.addEventListener('resize', function () { return callback(); });
                };
                Breadcrumb.prototype.calcPosition = function () {
                    this.breadcrumb.css({
                        'margin-left': "-" + this.breadcrumb.offset().left + "px",
                        'padding-left': this.breadcrumb.offset().left + "px"
                    });
                };
                Breadcrumb.prototype.setOriginal = function () {
                    this.breadcrumb.css({
                        'margin-left': "-15px",
                        'padding-left': 0
                    });
                };
                return Breadcrumb;
            }());
            exports_1("Breadcrumb", Breadcrumb);
        }
    };
});
