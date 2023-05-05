<template>
    <div class="analytics-page">
        <div>
            <nav-bar></nav-bar>
            <analytics-side-bar></analytics-side-bar>
        </div>
    </div>
</template>

<script>
import AnalyticsSideBar from './analyticsSideBar.vue';

import NavBar from './NavBar.vue';

export default {
  components: { NavBar, AnalyticsSideBar },
    name: "Analytics Reports",
    mounted() {
        console.log("Analytics Reports mounted.");
    },
};
</script>

<style>

div {
    font-family: "Jost", sans-serif !important;
}

.navbar{
    width: 100vw;
}


        </style>