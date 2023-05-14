<style>
.content-body {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.content-body analytics-sidebar {
    display: flex;
    justify-content: left;
}
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
                <tr class="table-row"></tr>
                <tr class="table-row"></tr>
                <tr class="table-row" ></tr>
                <tr class="table-row"></tr>

            </tbody>
</table>
</div>
                
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import $ from "jquery";


export default {
    name: "Analytics Reports",
    components: {
        AnalyticsSideBar, 
        navBar
    },
    data() {
        return {}
    },
    mounted() {
        console.log("Analytics Graphs Shown in the Screen");
        axios.get('/analytics/fetch_campaign_list')
        .then(function(response) {
            console.log(response.data);
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
    }
    
};

</script>


