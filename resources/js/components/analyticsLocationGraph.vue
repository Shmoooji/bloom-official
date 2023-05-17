<template>
    <div>
    <h2>Location Frequency Graph</h2>
    <h5>This shows the country where the campaign is paid from.</h5>
    <b-card class="LocationGraph">
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
  .LocationGraph{
    background-color: #86A760;
    width: 40vw;
    height: 60vh;
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
    name: 'AnalyticsLocationGraph',
    components: {Pie},
    data() {
      return {
        chartData: {
          labels: [],
          datasets: [{
            label: 'Count',
            data: [],
            backgroundColor: []
          }],
        },
        chartOptions: {
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Location Frequency Graph'
      },

        },
        
        colors: [
  'rgb(46, 204, 113)',
  'rgb(52, 152, 219)',
  'rgb(149, 165, 166)',
  'rgb(155, 89, 182)',
  'rgb(241, 196, 15)',
  'rgb(230, 126, 34)',
  'rgb(231, 76, 60)',
  'rgb(52, 73, 94)'
]
        }
    },
    mounted(){
        axios.get("/graphs/getCampaignLocations").then((response) => {
            let locations = response.data;
            this.chartData.labels = locations.map(location => String(location.bill_country));
            this.chartData.datasets[0].data = locations.map(location => Number(location.count));
            this.chartData.datasets[0].backgroundColor = this.colors;
            
            /*This is for debugging*/
            //console.log(this.chartData.labels);
            //console.log(this.chartData.labels);
            //console.log(this.chartData.datasets[0].data);
            //console.log(this.backgroundColor);

      }).catch((error) => {
        console.error(error);
    });
        console.log("Mounted Location Graphs");
}
  }
  </script>