System.register(["../environment.js"], function (exports_1, context_1) {
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
    var environment_js_1, Slick;
    var __moduleName = context_1 && context_1.id;
    return {
        setters: [
            function (environment_js_1_1) {
                environment_js_1 = environment_js_1_1;
            }
        ],
        execute: function () {
            Slick = /** @class */ (function () {
                function Slick() {
                    this.breakpoint = 1199;
                    this.breakpointXL = 1399;
                    this.bpts = environment_js_1.environment.breakpoints;
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
                    this.slickInserurs();
                    this.slickDepoiments();
                    this.slickInsuranceOptions();
                    this.slickDifferentialKaprice();
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
                                    dots: false
                                }
                            },
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
                /* Seguradoras */
                Slick.prototype.slickInserurs = function () {
                    var slickInserurs = __assign({}, this.defaultOptions, { rows: 1, adaptiveHeight: true, centerPadding: '0', prevArrow: $('.prev'), nextArrow: $('.next'), responsive: [
                            {
                                breakpoint: this.bpts.lg,
                                settings: {
                                    slidesToShow: 4,
                                    rows: 1,
                                    dots: false,
                                    adaptiveHeight: true,
                                    arrows: true,
                                    infinite: true,
                                },
                            },
                            {
                                breakpoint: this.bpts.xl,
                                settings: {
                                    slidesToShow: 5,
                                    dots: false,
                                }
                            },
                            {
                                breakpoint: this.bpts.x2,
                                settings: {
                                    slidesToShow: 6,
                                    dots: false,
                                }
                            },
                        ] });
                    $('.inserurs-wrapper-group-slick').slick(slickInserurs);
                };
                /* Slick Depoimentos */
                Slick.prototype.slickDepoiments = function () {
                    var _this = this;
                    var slickDepoiments = __assign({}, this.defaultOptions, { centerMode: false, slidesToShow: 1 });
                    if (window.innerWidth <= this.breakpoint) {
                        $('.depoiment-container-slick').slick(slickDepoiments);
                    }
                    else {
                        window.addEventListener('resize', function () {
                            if (window.innerWidth <= _this.breakpoint) {
                                $('.depoiment-container-slick').slick(slickDepoiments);
                            }
                            else {
                                $('.depoiment-container-slick').slick('unslick');
                            }
                        });
                    }
                };
                //   Template page auto
                Slick.prototype.slickInsuranceOptions = function () {
                    var insurenceOptions = __assign({}, this.defaultOptions, { rows: 1, centerMode: false, slidesToShow: 1, slidesToScroll: 1, responsive: [
                            {
                                breakpoint: 1199,
                                settings: {
                                    rows: 1,
                                    slidesToShow: 5,
                                    slidesToScroll: 1,
                                    dots: false,
                                    centerMode: false,
                                }
                            }
                        ] });
                    $('.tp-auto-insurance-slick').slick(insurenceOptions);
                };
                //   Diferenciais kaprice
                Slick.prototype.slickDifferentialKaprice = function () {
                    var differentialKaprice = __assign({}, this.defaultOptions, { centerMode: false, slidesToShow: 1, rows: 1, slidesToScroll: 1, responsive: [
                            {
                                breakpoint: this.bpts.lg,
                                settings: {
                                    rows: 1,
                                    centerMode: false,
                                    slidesToShow: 4,
                                    dots: false
                                }
                            }
                        ] });
                    $('.differential-kaprice-wrapper-slick').slick(differentialKaprice);
                };
                return Slick;
            }());
            exports_1("Slick", Slick);
        }
    };
});
