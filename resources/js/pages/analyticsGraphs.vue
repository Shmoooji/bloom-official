
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

</style>



<template>

    <div class="analytics-graphs">
        <div>
            <nav-bar></nav-bar>
        </div>
        <b-row>
            <b-col><analytics-side-bar></analytics-side-bar></b-col>
                
            <b-col>
                <div class="content-main">
        <div class="head-title">
            <h1>Tabluar Data</h1>
            <h4>(dummy data)</h4>
        </div>
        <table class="content-table">
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
                    <td></td>
                    <td>(Arranged in Descending order)</td>
                    <td>(Arranged by Count)</td>
                    <td>(Arranged by Average Rating)</td>
                </tr>
                <tr class="table-row">
                    <td>Campaign 1</td>
                    <td>Php 15,000</td>
                    <td>Adverts</td>
                    <td>4.0</td>
                </tr>
                <tr class="table-row" >
                    <td>Campaign 2</td>
                    <td>Php 12,050</td>
                    <td>Emails & Sponsors</td>
                    <td>3.8</td>
                </tr>
                <tr class="table-row">
                    <td>Campaign 3</td>
                    <td>Php 11,100</td>
                    <td>Others</td>
                    <td>3.7</td>
                </tr>

            </tbody>
        </table>
    </div>
            </b-col>
        </b-row>
            
   
</div>
</template>
<script>

export default {
    components: {AnalyticsSideBar, NavBar},
    name: "Analytics Graphs",
    mounted() {
        console.log("Analytics Graphs Shown in the Screen");
    },
};

import AnalyticsSideBar from '../components/analyticsSideBar.vue';
import NavBar from '../components/NavBar.vue';
</script>


