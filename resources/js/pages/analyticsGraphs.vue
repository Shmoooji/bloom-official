<style scoped>

</style>
<template>
    <div class="analytics-graphs container">
    
        <div>
            <navbar-component></navbar-component>
        </div>
        <b-row>
            <b-col cols="2"><analytics-side-bar></analytics-side-bar></b-col>

            <b-col cols="6" style="margin-top: 50px;">
                   <analytics-bar-sales :data="data"></analytics-bar-sales>
                   <analytics-location-graphs-component></analytics-location-graphs-component>
                
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import analyticsBarSales from "../components/analyticsBarSales.vue"; 
import analyticsLocationGraph from '../components/analyticsLocationGraph.vue';
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import $ from "jquery";


export default {
    name: "Analytics Graphs",
    components: {AnalyticsSideBar, navBar, analyticsBarSales, analyticsLocationGraph},
    props:{
        data: null  
    },
    data() {
        return {
        }
    },
    mounted() {
        console.log("Analytics Graphs Shown in the Screen");
    }
    
};

</script>


