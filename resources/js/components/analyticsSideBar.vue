<template>
    <b-col cols="1" class="side-nav">
    
            <b-nav vertical>
                <b-nav-item active class="navitem">Reports</b-nav-item>
                <br>
                <b-nav-item class="navitem">Graphs</b-nav-item>
                <b-nav-item class="navitem">Summary</b-nav-item>
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
    background-color: #fff;
    height: 93vh;
}

::v-deep .navitem{
    color:#ffffff !important;
}


</style>
