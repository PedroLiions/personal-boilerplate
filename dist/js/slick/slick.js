System.register([], function (exports_1, context_1) {
    "use strict";
    var __assign = (this && this.__assign) || function () {
        __assign = Object.assign || function(t) {
            for (var s, i = 1, n = arguments.length; i < n; i++) {
                s = arguments[i];
                for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                    t[p] = s[p];
            }
            return t;
        };
        return __assign.apply(this, arguments);
    };
    var Slick;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [],
        execute: function () {
            Slick = /** @class */ (function () {
                function Slick() {
                    this.breakpoint = 1199;
                    this.defaultOptions = {
                        dots: true,
                        arrows: false,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        responsive: [
                            {
                                breakpoint: this.breakpoint,
                                settings: {
                                    centerMode: true,
                                    slidesToShow: 4,
                                    dots: false
                                }
                            }
                        ]
                    };
                    this.slickWhyKaprice();
                    this.slickSecurityForCars();
                    this.slickSecurityForYou();
                    this.slickForCompany();
                }
                /*
                * Slick Por que Kaprice - Home
                * */
                Slick.prototype.slickWhyKaprice = function () {
                    var WhyKapriceOptions = __assign({}, this.defaultOptions);
                    $('.why-kaprice-row').slick(WhyKapriceOptions);
                };
                /*
                * Slick Seguro para carros opções
                * */
                Slick.prototype.slickSecurityForCars = function () {
                    var securityForCars = __assign({}, this.defaultOptions, { rows: 2, responsive: [
                            {
                                breakpoint: this.breakpoint,
                                settings: {
                                    slidesToShow: 5,
                                    rows: 2,
                                    dots: false
                                }
                            }
                        ] });
                    $('.security-container-wrapper').slick(securityForCars);
                };
                Slick.prototype.slickSecurityForYou = function () {
                    var securityForYouOptions = __assign({}, this.defaultOptions, { rows: 1, responsive: [
                            {
                                breakpoint: this.breakpoint,
                                settings: {
                                    slidesToShow: 5,
                                    rows: 1,
                                    dots: false
                                }
                            }
                        ] });
                    $('.security-for-you-wrapper-group-slick').slick(securityForYouOptions);
                };
                /*
                * Slick for company
                * */
                Slick.prototype.slickForCompany = function () {
                    var securityForYouOptions = __assign({}, this.defaultOptions, { rows: 1, responsive: [
                            {
                                breakpoint: this.breakpoint,
                                settings: {
                                    slidesToShow: 6,
                                    rows: 1,
                                    dots: false
                                }
                            }
                        ] });
                    $('.security-for-company-wrapper-group-slick').slick(securityForYouOptions);
                };
                return Slick;
            }());
            exports_1("Slick", Slick);
        }
    };
});
