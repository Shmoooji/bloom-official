<template>
    <div class="side-nav">
        <ul>
            <li>
                <a href="#report" class=""
                    ><span style="font-size: 3vh">&larrb;</span> Report</a
                >
            </li>
            <br /><br />
            <li><a href="#graphs" class="">Graphs</a></li>
            <li><a href="#summary" class="">Summary</a></li>
        </ul>
    </div>
    <div class="content">
        <analytics-content-reports></analytics-content-reports>
    </div>
</template>
<script>
import AnalyticsContentReports from "./analyticsContentReports.vue";
import analyticsNav from "./analyticsNav.vue";

export default {
    components: { analyticsNav, AnalyticsContentReports },
    name: "AnalyticsSideBar",
    mounted() {
        console.log("Analytics Side Bar Nav mounted.");
    },
};
</script>

<style>
.navbar li {
    float: left;
}
ul {
    list-style-type: none;
}

.side-nav {
    background-color: #b3b3b3;
    border-top: 1px solid black;
    border-right: 1px solid black;
    width: 10vw;
    height: 95vh;
    float: left;
    margin-top: -83vh;
}
.container {
    width: 100%;
}
.flex-items {
    /*border: 1px solid red;*/
    height: 90vh;
}

.side-nav ul {
    list-style-type: none;
}

.side-nav a {
    text-decoration: none;
    color: black;
    transition: 0.4s;
    font-size: 1vw;
}
.side-nav li {
    margin-top: 2vh;
}
.side-nav a:hover {
    text-decoration: none;
    color: black;
    background-color: white;
}
.content {
    width: 87.6vw;
    margin-left: 10vw;
    padding-left: 5px;
    padding-top: 3px;
    height: 100%;
    justify-content: center;
    margin-top: -83vh;
    text-align: center;
    height: 94vh;
    /*border: 1px solid black;*/
}
</style>
