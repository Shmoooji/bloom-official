<template>
    <div class="analytics-page">
        <div>
            <nav-bar></nav-bar>
        </div>
        <b-row>
            <b-col><analytics-side-bar></analytics-side-bar></b-col>
                
            <b-col>
                <!-- CONTENT AREA -->
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