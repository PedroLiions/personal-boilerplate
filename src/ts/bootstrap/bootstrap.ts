import {Slick} from "../slick/slick.js";

// import * as $ from '../../../node_modules/jquery/dist/jquery.js'
import * as jQuery from 'jquery';

export class Bootstrap {
    static init() {
        Bootstrap.register();
    }

    static register() {
        new Slick();
    }
}
