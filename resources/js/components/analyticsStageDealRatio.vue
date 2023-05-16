<template>
    <div>
    <h2>Stage Deal Ratio</h2>
    <h5>This shows the ratio of deals.</h5>
    <b-card class="StageDealRatio">
    <Pie :data = "chartData" v-if="chartData.datasets[0].data.length > 0" :options="chartOptions"/>
        <template v-else>
      <div class="d-flex justify-content-center mb-3">
      <b-spinner variant="primary" label="Text Centered"></b-spinner>
      </div>
      <div class="d-flex justify-content-center mb-3">
      <p>NO DATA! Nothing to show for now.</p>
    </div>
      </template>
    </b-card>
    </div>
    
  </template>
  
  <style scoped>
  .StageDealRatio{
    background-color: #86A760;
    width: 40vw;
  }
  
  h2{
    color: #908d6a;
    color :#cb9f52
  }
  h5{
    color: #86A760;
  }
  </style>
  
  
  
  <script>

  import { Pie } from 'vue-chartjs'
  import "bootstrap/dist/css/bootstrap.min.css";
  import axios from "axios"
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement } from 'chart.js'
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement )
  
   
  
  export default {
    name: 'AnalyticsStageDealRatio',
    components: {Pie},
    data() {
      return {
        chartData: {
          labels: [],
          datasets: [{
            
            label: 'Percentage(%)',
            data: [],
            backgroundColor: []
          }],
        },
    chartOptions: {
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Stage Deals Ratio'
      },
    },
        
        colors: [
          'rgb(46, 204, 113)',
          'rgb(52, 152, 219)',
          'rgb(149, 165, 166)'
        ]
      }
    },
    mounted(){
        axios.get("/graphs/getStageDealRatio").then((response) => {
            let res = response.data;
            this.chartData.labels = res.labels
            this.chartData.datasets[0].data = res.data
            this.chartData.datasets[0].backgroundColor = this.colors;
            /*This is for debugging*/
            //console.log(res);
            //console.log(this.chartData.labels);
            //console.log(this.chartData.labels);
            //console.log(this.chartData.datasets[0].data);
            //console.log(this.backgroundColor);

      }).catch((error) => {
        console.error(error);
    });
        console.log("Mounted Stage Deals Ratio");
}
  }
  </script>