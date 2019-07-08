declare var $:any;

export class Breadcrumb {
    breadcrumb: any = $('.breadcrumb-map');
    breakpoint: number = 1199;

    constructor() {
        this.init();
    }

    init() {
        if (document.documentElement.clientWidth > this.breakpoint) this.calcPosition();
        else this.setOriginal();
        this.resize(() => {
            if (document.documentElement.clientWidth > this.breakpoint) return this.calcPosition();
            else this.setOriginal();
        })
    }

    resize(callback: any) {
        window.addEventListener('resize', () => callback());
    }

    calcPosition() {
        this.breadcrumb.css({
            'margin-left': `-${this.breadcrumb.offset().left}px`,
            'padding-left': `${this.breadcrumb.offset().left}px`
        });
    }

    setOriginal() {
        this.breadcrumb.css({
            'margin-left': `-15px`,
            'padding-left': 0
        });
    }

}