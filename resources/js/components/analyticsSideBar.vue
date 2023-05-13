<template>
    <b-col cols="1" class="side-nav">
    
            <b-nav vertical>
                <b-nav-item active >Reports</b-nav-item>
                <b-nav-item href="/graphs">Graphs</b-nav-item>
                <b-nav-item>Summary</b-nav-item>
            </b-nav>

</b-col>
</template>
<script>

export default {
    name: "AnalyticsSideBar",
    mounted() {
        console.log("Analytics Side Bar Nav mounted.");
    },
};
</script>

<style>
.side-nav{
    color:black;
    background-color: rgba(var(--bs-light-rgb));
    height: 93vh;
    padding-right: 110px;
}



</style>
