<template>
  <h1>Preferred Payment Method</h1>
  <b-card class="barGraph">
  <Pie :data = "chartData" :options="chartOptions"/>
  </b-card>
  
</template>

<style>
.barGraph{
  background-color: #86A760;
  width: 50vw;
}

h1{
  color: #908d6a;
  color :#cb9f52
}
</style>



<script>
import { Bar } from 'vue-chartjs'
import { Pie } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement } from 'chart.js'
import { BIconUmbrella } from 'bootstrap-vue'
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement)

 

export default {
  name: 'AnalyticsBarSales',
  components: { Bar, Pie },
  props:{
    data:{
        type: Object,
        default: ()=>[]
    }
  },
  data() {
    return {
      chartData: {
        labels: ['PayMaya', 'GCash', 'PayPal'],
        minBarLength: 10,
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        datasets: [{
          label: 'Sales',
          data: [this.data.PayMaya || 0, this.data.GCash || 0, this.data.PayPal]
        }],
      },
      chartOptions: {
        responsive: true,
        plugins: {
          legend: {
            labels: {
              color: '#000000'
            }
          }
        },
        backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
      ],
        borderColor: '#000000',
        borderWidth: 1,
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              fontColor: 'black'
            },
            gridLines: {
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }],
          xAxes: [{
            ticks: {
              fontColor: 'black'
            },
            gridLines: {
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }]
        },
        maintainAspectRatio: false,
            }
          }
  },
  mounted(){
  
    console.log("BarGraph Mounted");
    console.log(this.data)
    
  }
}
</script>