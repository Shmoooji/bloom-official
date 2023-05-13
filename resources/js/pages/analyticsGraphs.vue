
<style>

</style>



<template>

    <div class="analytics-graphs">
        <div>
            <navbar-component></navbar-component>
        </div>
        <b-row>
            <analytics-side-bar></analytics-side-bar>
            <b-col cols="7">


                <analytics-bar-sales :data="data"></analytics-bar-sales>
                
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import analyticsBarSales from "../components/analyticsBarSales.vue"; 


export default {
    name: "Analytics Graphs",
    components: {AnalyticsSideBar, navBar, analyticsBarSales},
    props:{
        data: null  
    },
    data() {
        return {
        }
    },
    beforeMount(){
        //this.get_campaign_payments();
    },
    mounted(){
        //this.get_campaign_payments();
        //console.log(this.data);
    }
    
};


</script>


