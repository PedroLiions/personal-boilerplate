declare var $: any;

export class Slick {

    breakpoint = 1199;

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
            rows: 2,
            responsive: [
                {
                    breakpoint: this.breakpoint,
                    settings: {
                        slidesToShow: 5,
                        rows: 2,
                        dots: false
                    }
                }
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
}
