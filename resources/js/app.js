/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
import { createApp } from "vue";
import { BootstrapVue3 } from "bootstrap-vue-3";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue-3/dist/bootstrap-vue-3.css";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
import marketingAutomation from "./components/MarketingAutomation.vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import campaigns from "./components/campaigns.vue";
import sales from "./pages/sales.vue";
import welcome from "./pages/welcome.vue";

const app = createApp({});
app.component("marketing-automation-component", marketingAutomation)
    .component("example-component", ExampleComponent)
    .component("campaigns-component", campaigns)
    .component("sales-component", sales)
    .component("welcome-component", welcome)
    .use(BootstrapVue3)
    .mount("#app");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

// app.mount("#app");
// app.mount("#campaigns");
// app.mount("#marketingAutomation");
// app.mount("#sales");
