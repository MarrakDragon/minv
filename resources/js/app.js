/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
// jquery and jquery-ui both in bootstrap

const fancytree = require("jquery.fancytree");
require("jquery.fancytree/dist/modules/jquery.fancytree.edit");
require("jquery.fancytree/dist/modules/jquery.fancytree.filter");
require("jquery.fancytree/dist/modules/jquery.fancytree.dnd");
require("jquery.fancytree/dist/modules/jquery.fancytree.dnd5");
require("jquery.fancytree/dist/modules/jquery.fancytree.gridnav");
require("jquery.fancytree/dist/modules/jquery.fancytree.multi");
require("jquery.fancytree/dist/modules/jquery.fancytree.glyph");
require("jquery.fancytree/dist/modules/jquery.fancytree.wide");
require("jquery.fancytree/dist/modules/jquery.fancytree.childcounter");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
