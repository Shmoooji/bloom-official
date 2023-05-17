<template>
    <b-container fluid="sm" class="text-center welcome-container bv-example-row">
            <b-row class="landing-page-content">
                <b-row class="inner-row">
                    <h1>Welcome to Bloom</h1>
                    <br>
                    <p>It is a customer relationship management software. It could help businesses manage customer interactions
                        and improve customer satisfaction. May it be software, tools, and resources for your business. Beneficial
                        for early staged businesses which could attract customers and simplify business processes so owners could 
                        focus on the objectives of the business which is to increase the sales and revenue. That's Bloom.
                    </p>
                    <br>
                    <b-button class="landing-page-btn" href="/index">Get Started</b-button>
                </b-row>
            </b-row>
            <b-row class="footer">
                <footerT></footerT>
            </b-row>  
    </b-container>
</template>

<script>
import footerT from "../components/footer.vue";
    export default {
        name: "Welcome",
        mounted() {
            console.log("Welcome mounted.");
        },
        components: {
            footerT,
        },
    };
</script>

<style>
    body {
        height: 100vh;
        font-family: 'Nunito', sans-serif;
        overflow: scroll;
        overflow-x: hidden;
    }

    .welcome-container {
        background-image: url('/img/landing_page_bg.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: #3F4F34;
        min-width: 100%; 
        height: 100vh; 
        display: flex;
        flex-direction: column;
    }
    
    .landing-page-content {
        display: flex;
        flex-grow: 1;
        align-items: center;
        justify-content: center;
    }

    .landing-page-content p {
        font-size: 16px;  
        color: #86A760;          
    }

    @font-face {
        font-family: StreuselKuchen-Regular;
        src: url('/fonts/StreuselKuchen-Regular.otf');
    }
    
    .landing-page-content h1 { 
        font-family: StreuselKuchen-Regular;
        font-size: 80px;
        color: #C88512;          
    }

    .inner-row {
        max-width: 600px; /* Set the desired width of the inner row */
        margin: 0 auto; /* Center the inner row horizontally */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .landing-page-btn {
        width: 173px;
        border-radius: 11px;
        font-size: 20px;
        background-color: #86A760;
        border: none;
        color: #4D4114;
        margin-bottom: 40px;
    }

    .landing-page-btn:hover, .landing-page-btn:active, .landing-page-btn:focus{
        background-color: #739053 !important;
        color: #4D4114 !important;
    }
</style>


