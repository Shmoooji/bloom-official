<template>
    <b-col class="side-nav">

            <b-nav vertical>
                <b-nav-item href="/analytics" class="navitem">Reports and Summary</b-nav-item>
                <b-nav-item href="/graphs">Graphs</b-nav-item>

            </b-nav>

</b-col>
</template>
<script >

export default {
    name: "AnalyticsSideBar",
    mounted() {
        console.log("Analytics Side Bar Nav mounted.");
    },
};
</script>

<style scoped>
.side-nav {
  background-color: #fff;
  height: 102vh;
  width: 10vw;
}

</style>
