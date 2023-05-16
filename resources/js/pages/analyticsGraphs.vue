<style scoped>
</style>

<template>
    <div>
            <navbar-component></navbar-component>
        <b-row>
            <b-col cols="2"><analytics-side-bar></analytics-side-bar></b-col>
                <b-col cols="10" style="padding-top: 1vh;">
                    <!-- CONTENT AREA -->
                    <b-row style="float:left;">
                        <b-col><analytics-pie-sales :data="data"></analytics-pie-sales><br>
                        <analytics-location-graphs-component></analytics-location-graphs-component>
                    </b-col>
                    </b-row>
                    <b-row >
                            <b-col>
                                <analytics-stage-deal-ratio></analytics-stage-deal-ratio>
                            </b-col>>
                    </b-row>

                
            </b-col>
            
        </b-row>

            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import analyticsPieSales from "../components/analyticsPieSales.vue"; 
import analyticsLocationGraph from '../components/analyticsLocationGraph.vue';
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import $ from "jquery";
import AnalyticsStageDealRatio from '../components/analyticsStageDealRatio.vue';


export default {
    name: "Analytics Graphs",
    components: {AnalyticsSideBar, navBar, analyticsPieSales, analyticsLocationGraph, AnalyticsStageDealRatio},
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


