
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
  position: absolute;
  top: 45%;
  left: 55%;
  transform: translate(-50%, -50%);
  border: solid 2px #4b4237;
  border-radius: 20px;
  padding: 20px;
  padding-bottom: 40px;
  min-width: 1300px;
  max-width: 80%;
  width: auto;
  box-sizing: border-box;
  font-size: 16px;
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 18px;
  width: 100%;
  table-layout: fixed;
  font-weight: bold;
  margin: auto;
}

/* Adjustments for smaller screens */
@media only screen and (max-width: 1200px) {
  .content-main {
    top: 45%;
    left: 55%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    padding: 10px;
    padding-bottom: 20px;
    min-width:80%;
    max-width: 600px;
    font-size: 14px;
  }

  .content-table {
    margin: 10px 0;
    font-size: 16px;
  }
}

/* Adjustments for even smaller screens */
@media only screen and (max-width: 480px) {
  .content-main {
    top: 60%;
    left:60%;
    transform: translate(-50%, -50%);
    border-radius: 5px;
    padding: 5px;
    padding-bottom: 10px;
    min-width: 80%;
    max-width: 80%;
    font-size: 12px;
  }

  .content-table {
    margin: 5px 0;
    font-size: 14px;
  }
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

.sidenav{
    width: 10%;
}

</style>



<template>

    <div class="analytics-graphs">
        <div>
            <navbar-component></navbar-component>
        </div>
        <b-row>
            <analytics-side-bar></analytics-side-bar>
            <b-col cols="7">
                
            <!--<b-table striped hover v-for="data in analytics_data" :key="data.id">></b-table>-->
            <!--<b-table striped hover :data="analytics_data" :key="data.id"></b-table>-->
            <b-table striped hover :data="items" ></b-table>


                <analytics-bar-sales></analytics-bar-sales>
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>
import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import navBar from "../components/NavBar.vue";
import analyticsBarSales from "../components/analyticsBarSales.vue"; 
import { afterMain } from '@popperjs/core';
import { onMounted } from 'vue';


export default {
    components: {AnalyticsSideBar, navBar, analyticsBarSales},
    props:{
        
    },
    name: "Analytics Graphs",
    data() {
        return {
            analytics_data: [],
            items: [
          { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { age: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
        }
    },
    beforeMount(){
        //this.get_campaign_payments();
    },
    methods:{
         get_campaign_payments(){
            axios.get('graphs').then(response=>{
                this.analytics_data = response.data;
                console.log(response.data);
                console.log("DATA SUCCESS!!");
               //this.analytics_data.push(response.data);
            }).catch(error=>{
                console.log(error.data);
            })
        }
    },
    mounted(){
        this.get_campaign_payments();
    }
    
};


</script>


