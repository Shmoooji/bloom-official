<template>
    <div class="side-nav">
            <b-nav vertical class="w-25">
                <b-nav-item active >Reports</b-nav-item>
                <br>
                <b-nav-item>Graphs</b-nav-item>
                <b-nav-item>Summary</b-nav-item>
            </b-nav>
    </div>
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
    width: 10vw;
    height: 93vh;
}



</style>
