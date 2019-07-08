import {Slick} from "../slick/slick.js";
import {Breadcrumb} from "../layout/breadcrumb.js";
import {Mask} from "../mask/mask.js";

export class Bootstrap {
    static init() {
        Bootstrap.register();
    }

    static register() {
        new Slick();
        new Breadcrumb();
        new Mask();
    }
}
