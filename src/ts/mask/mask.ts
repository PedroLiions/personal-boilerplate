declare var $:any;
declare var mask:any;

export class Mask {
    constructor() {
        Mask.defaultMasks();
    }

    static defaultMasks() {
        $('.phone').mask('(00) 0000-0000');
        $('.cell-phone').mask('(00) 0 0000-0000');
    }
}
