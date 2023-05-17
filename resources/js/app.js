/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from "vue";
import "bootstrap-icons/font/bootstrap-icons.css";
// import "bootstrap-icons/font/bootstrap-icons.css";
import { BootstrapVue3 } from "bootstrap-vue-3";
import "bootstrap-vue-3/dist/bootstrap-vue-3.css";
import "bootstrap/dist/css/bootstrap.css";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
import NavBar from "./components/NavBar.vue";
import PaymentComponent from "./components/PaymentComponent.vue";
import analyticsReports from "./pages/analyticsReports.vue";
import analyticsGraphs from "./pages/analyticsGraphs.vue";
import AnalyticsTypeDealGraph from "./components/analyticsTypeDealGraph.vue";
import analyticsPieSales from "./components/analyticsPieSales.vue";
import analyticsSideBar from "./components/analyticsSideBar.vue";
import analyticsStageDealRatio from "./components/analyticsStageDealRatio.vue";
import contacts from "./components/contacts.vue";
import about from "./pages/About.vue";
import works from "./pages/Works.vue";
import subscription from "./pages/Subscription.vue";
import contactUs from "./pages/ContactUs.vue";
import marketingAutomation from "./pages/MarketingAutomation.vue";
import customerService from "./pages/CustomerService.vue";
import index from "./pages/Index.vue";
import campaigns from "./components/campaigns.vue";
import sales from "./pages/Sales.vue";
import welcome from "./pages/Welcome.vue";
import login from "./pages/Login.vue";
import register from "./pages/Register.vue"


const app = createApp({});

app.component("marketing-automation-component", marketingAutomation)
    .component("campaigns-component", campaigns)
    .component("navbar-component", NavBar)
    .component("sales-component", sales)
    .component("welcome-component", welcome)
    .component("about-component", about)
    .component("works-component", works)
    .component("subscription-component", subscription)
    .component("contact-us-component", contactUs)
    .component("payment-component", PaymentComponent)
    .component("analytics-sidebar", analyticsSideBar)
    .component("analytics-reports-component", analyticsReports)
    .component("analytics-sidebar-component", analyticsSideBar)
    .component("customer-service-component", customerService)
    .component("analytics-graphs-component", analyticsGraphs)
    .component("analytics-type-deal-graphs-component", AnalyticsTypeDealGraph)
    .component("analytics-stage-deals-graphs-component",analyticsStageDealRatio)
    .component("analytics-pie-sales-component", analyticsPieSales)
    .component("index-page", index)
    .component("login-page", login)
    .component("register-page", register)
    .component("contacts-component", contacts)
    .use(BootstrapVue3)
    .mount("#app");