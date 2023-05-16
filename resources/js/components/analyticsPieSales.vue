<template>
  <div>
  <h2>Preferred Payment Method</h2>
  <h5>A pie chart where it shows the frequency of each payment method used.</h5>
  <b-card class="pieGraph">
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
.pieGraph{
  background-color: #86A760;

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
import { Bar } from 'vue-chartjs'
import { Pie } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement } from 'chart.js'
import { BIconUmbrella } from 'bootstrap-vue'
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, PieController, ArcElement)

 

export default {
  name: 'AnalyticsPieSales',
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
        maintainAspectRatio: false,
            }
          }
  },
  mounted(){
    console.log("Pie Sales Graph Mounted");
    //console.log(this.data)
    
  }
}
</script>