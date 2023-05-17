<template>
    <div class="container flex-container">
            <div class="flex-items">
                <div class="analytics-navbar">
                <ul>
                    <li><a class="logo"><b>BLOOM</b></a></li>
                    <li><a href="#home" class="border-left">Home</a></li>
                    <li><a href="#customer" class="border-left">Customer</a></li>
                    <li><a href="#product" class="border-left">Product</a></li>
                    <li><a href="#marketingautomation" class="border-left">Marketing Automation</a></li>
                    <li><a href="#analytics" class="active border-left">Analytics</a></li>
                </ul>
                </div>
            </div>
            </div>
</template>
<script>
export default {
    name: "AnalyticsNav",
    mounted() {
        console.log("Analytics Nav mounted.");
    },
};
</script>
<style>

            .analytics-navbar li{
            float: left;
            }
            ul{
                list-style-type: none;
            }


            .analytics-navbar a {
                display: block;
                padding-left: 1vw;
                padding-right: 1vw;
                text-decoration: none;
                color: black;
                transition: 0.3s;
                margin-top: 2vh;
                font-size: 1vw;
            }

            .border-left:hover{
                background-color: #b3b3b3;
            }
            .border-left{
                border-left: 1px solid black;
            }


            .analytics-navbar{
                background-color: rgb(255,255,255);
                width: 98vw;
                height: 7vh;                
                text-align:center;
                vertical-align:center;
                border-bottom: 1px solid black;
            }

            .active {
                background-color: #b3b3b3;
            }

            .logo{
                font-size: 1vw;
                margin-right: 2.5vw;
            }


        </style>