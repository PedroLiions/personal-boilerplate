class NavController {

    // For NavScroll
    nav = document.querySelector('.navigation-main');
    main = $('main');
    classes = ['animated', 'fixed-top', 'nav-fixed', 'fadeInDown'];
    logo1 = $('.logo-1');
    logo2 = $('.logo-2');
    navHeight = this.nav.clientHeight;

    navigationMain = document.querySelector('.navigation-main');

    // For navToggle open/close Mobile
    button = document.querySelector('.nav-toggle');
    navHeader = $('.nav-menu');

    self = this;

    constructor() {
        this._listnerButton();
        // this._listnerEventScroll();
    }


    /*
    * For Display navbar after scroll - Mobile | Desktop
    * */
    _listnerEventScroll = () => {

        let self = this;

        window.addEventListener('scroll', () => {
            if (window.scrollY > self.nav.clientHeight)
                return self._setFixedNav();

            return self._removeFixedNav();
        });
    };


    _setFixedNav = () => {
        this._setCssInBody(this.navHeight);

        this._invertLogo('inverte');

        this.classes.forEach((classe) => this.nav.classList.add(classe));
    };

    _removeFixedNav = () => {
        this._setCssInBody(20, 0);

        this._invertLogo('reverte');

        this.classes.forEach((classe) => this.nav.classList.remove(classe));
    };

    _setCssInBody = (height, bgPosition = height) => {
        return this.main.css({
            'padding-top': `${height}px`,
            'background-position-y': `${bgPosition}px`
        });
    };

    _invertLogo = (flag) => {
        if (flag === 'inverte') {
            this.logo1.addClass('d-none');
            this.logo2.removeClass('d-none');
        } else if (flag === 'reverte') {
            this.logo2.addClass('d-none');
            this.logo1.removeClass('d-none');
        }
    };

    /*
    * For navbar toggle only in Mobile
    * */

    _listnerButton = () => {
        let self = this;

        this.button.addEventListener('click', () => {
            if (self.button.dataset.navOpen === 'false') { // open nav menu
                self._openMenuNav();
                // this flag add in button
                self.button.dataset.navOpen = 'true';
            } else { // close nav menu
                self._closeMenuNav();

                self.button.dataset.navOpen = 'false';
            }
        });
    };

    _openMenuNav = () => {
        // this.navigationMain.classList.remove('closed');
        this.navigationMain.classList.add('opened');
    };

    _closeMenuNav = () => {
        this.navigationMain.classList.remove('opened');
        // this.navigationMain.classList.add('closed');
    };
}

new NavController();