<template>
  <div>
    <b-table striped hover :items="items" :fields = "fields"></b-table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: null,
        fields: ['id', 'USERNAME']
      }
    },
    methods:{
      get_accounts(){
        axios.get('/get_accounts').then(response=>{
          console.log(response.data);
          this.items = response.data;
        }).catch(error=>{
          console.log(error.data);
        })
      }
    },
    beforeMount(){
      this.get_accounts();
    }
  }
</script>