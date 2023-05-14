
<style>

h3 {
    text-align: center;
}

.head-title {
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.head-title h1 {
    margin: 0 auto 0 auto;
    text-align: center;
    flex-grow: 1;
}
.head-title h4 {
    text-align: center;
    flex-grow: 1;
    color: white;
}

.content-main {
  border: solid 2px #4b4237;
  border-radius: 20px;
  min-width: 1300px;
  max-width: 80%;
  width: auto;
  box-sizing: border-box;
  font-size: 16px;
  padding: 25px;
}

.content-table {
  border-collapse: collapse;
  margin: 25px;
  font-size: 18px;
  width: 100%;
  table-layout: fixed;
  font-weight: bold;
  margin: auto;
}



.content-table thead tr {
    background-color: #b3b3b3;
    color: #4b4237;
    text-align: center;
    border-radius: 100px;
    border: solid 1px #736b60;
}


.content-table th,
td {
    padding: 12px 15px;
    text-align: center;
}

/* Inactive row hover */
.content-table tbody tr:hover {
    background-color: rgba(94, 80, 80, 0.05);
    cursor:not-allowed;
}

/* Active row hover */
.content-table tbody tr:hover td {
    background-color: rgba(77, 70, 70, 0.1);
}



div {
    font-family: "Jost", sans-serif !important;
}

.navbar{
    width: 100vw;
}

</style>



<template>

    <div class="analytics-graphs container">
    
        <div>
            <navbar-component></navbar-component>
        </div>
        <b-row>
        
            <b-col><analytics-side-bar></analytics-side-bar></b-col>
                
            <b-col cols="8" style="margin-top: 50px;">
                <div class="content-main">
        <div class="head-title">
            <h1>Tabluar Data</h1>
            <h4>(dummy data)</h4>
        </div>
        <table id="datatable" class="content-table" style="padding: 25px;">
            <thead>
                <tr>
                    <th>Campaigns</th>
                    <th>Sales for Campaigns</th>
                    <th>Sources</th>
                    <th>Customer satisfaction</th>
                </tr>
            </thead>

            <tbody>
                <tr class="table-row">
                </tr>
                <tr class="table-row">
                </tr>
                <tr class="table-row" >
                </tr>
                <tr class="table-row">
                </tr>

                <analytics-bar-sales :data="data"></analytics-bar-sales>
                
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import analyticsBarSales from "../components/analyticsBarSales.vue"; 
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import $ from "jquery";


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
    mounted() {
        console.log("Analytics Graphs Shown in the Screen");
        axios.get('/graph/fetch_campaign_list')
        .then(function(response) {
            $('#datatable').DataTable({
                data: response.data,
                columns: [
                    { title: 'Campaigns', data: 'id' },
                    { title: 'Sales for Campaigns', data: 'amount' },
                    { title: 'Sources', data: 'amount' },
                    { title: 'Customer Satisfaction', data: 'amount' },
                ]
            });
        });
    },
    mounted(){
        //this.get_campaign_payments();
        //console.log(this.data);
    }
    
};

</script>


