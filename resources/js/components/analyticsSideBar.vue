<template>
    <b-col cols="1" class="side-nav">
    
            <b-nav vertical>
                <b-nav-item href="/analytics">Reports and Summary</b-nav-item>
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

<style>
.side-nav{
    background-color: #fff;
    height: 93vh;
    padding-right: 110px;
}

::v-deep .navitem{
    color:#ffffff !important;
}


</style>
