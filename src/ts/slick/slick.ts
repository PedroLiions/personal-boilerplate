import {environment} from "../environment.js";

declare var $: any;

export class Slick {


    breakpoint = 1199;
    breakpointXL = 1399;

    bpts = environment.breakpoints;

    defaultOptions = {
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

    constructor() {
        this.slickWhyKaprice();
        this.slickSecurityForCars();
        this.slickSecurityForYou();
        this.slickForCompany();
        this.slickInserurs();
    }

    /*
    * Slick Por que Kaprice - Home
    * */
    slickWhyKaprice(): void {
        let WhyKapriceOptions = {
            ...this.defaultOptions,
        };

        $('.why-kaprice-row').slick(WhyKapriceOptions);
    }

    /*
    * Slick Seguro para carros opções
    * */
    slickSecurityForCars(): void {
        const securityForCars = {
            ...this.defaultOptions,
            rows: 1,
            responsive: [
                {
                    breakpoint: this.breakpoint,
                    settings: {
                        slidesToShow: 5,
                        rows: 2,
                        dots: false
                    }
                },
            ]
        };

        $('.security-container-wrapper').slick(securityForCars);
    }

    slickSecurityForYou() {
        const securityForYouOptions = {
            ...this.defaultOptions,
            rows: 1,
            responsive: [
                {
                    breakpoint: this.breakpoint,
                    settings: {
                        slidesToShow: 5,
                        rows: 1,
                        dots: false
                    }
                }
            ]
        };

        $('.security-for-you-wrapper-group-slick').slick(securityForYouOptions)
    }

    /*
    * Slick for company
    * */
    slickForCompany() {
        const securityForYouOptions = {
            ...this.defaultOptions,
            rows: 1,
            responsive: [
                {
                    breakpoint: this.breakpoint,
                    settings: {
                        slidesToShow: 6,
                        rows: 1,
                        dots: false
                    }
                }
            ]
        };

        $('.security-for-company-wrapper-group-slick').slick(securityForYouOptions)
    }

    /* Seguradoras */
    slickInserurs() {
        const slickInserurs = {
            ...this.defaultOptions,
            rows: 1,
            adaptiveHeight: true,
            centerPadding: '0',
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            dots: false,
            responsive: [
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
            ]
        };

        $('.inserurs-wrapper-group-slick').slick(slickInserurs);
    }
}
