<template>
    <div class="analytics-page">
        <b-row>
            <nav-bar></nav-bar>
            </b-row>
        <b-row>
            <analytics-side-bar></analytics-side-bar>
            <b-col  cols="12" md="auto"  >
                <!-- CONTENT AREA -->
                test
            </b-col>
        </b-row>
            
            
        
    </div>
</template>

<script>

import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import NavBar from '../components/NavBar.vue';

export default {
  components: {AnalyticsSideBar, NavBar},
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
