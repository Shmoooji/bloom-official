<template>
    <b-container fluid="sm" class="text-center welcome-container bv-example-row">
             <b-row class="landing-page-content">
                <b-row class="inner-row">
                    <h1>Welcome to Bloom</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Proin sollicitudin, est quis porta consequat, sem nisi 
                        pulvinar lorem, at ornare lorem eros id sapien. Ut enim lacus, egestas eu egest as et, auctor eget libero. Aenean 
                        elementum massa vitae risus c onvallis, ac posuere libero pharetra. Sed et augue nec ex imperdiet sodales. Aenean 
                        euismod, odio eget aliquam pretium, nisl lectus posuere metus, et condimentum qu am nibh nec leo. Quisque et urna 
                        velit. Maecenas est arcu dapibus ut risus in, posuere tempus arcu</p>
                    <br>
                    <b-button class="landing-page-btn">GET STARTED</b-button>
                </b-row>
            </b-row>
            <b-row class="footer">
                <div class="links">
                    <a href="#">Privacy Policy</a> 
                    <span> | </span>
                    <a href="#">Safe Guarding Statement</a> 
                    <span> | </span>
                    <a href="/about">About</a>
                    <span> | </span>
                    <a href="/contactUs">Contact Us</a>
                </div>

                <p id="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin, est quis porta consequat, sem nisi 
                    pulvinar lorem, at ornare lorem eros id sapien. Ut enim lacus, egestas eu egestas et, auctor eget libero. 
                    Quisque et urna velit. Maecenas est arcu, dapibus ut risus in, posuere tempus arcu.</p>
            </b-row>  
    </b-container>
</template>

<script>
    export default {
        name: "Welcome",
        mounted() {
            console.log("Welcome mounted.");
        },
    };
</script>

<style>
    body {
        height: 100vh;
        font-family: 'Nunito', sans-serif;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: scroll;
        overflow-x: hidden;
    }

    .welcome-container {
        min-width: 100%; 
        height: 100vh; 
        display: flex;
        flex-direction: column;
    }

    .footer {
        background-color: #D9D9D9;
        bottom: 0;
        padding: 10px;
        flex:none;
        font-size: 16px;  
    }

    .footer a, .footer a:hover, .footer span {
        color: #7B7777;
        text-decoration: none;
        font-weight: bold;
    }
    
    .landing-page-content {
        display: flex;
        flex-grow: 1;
        align-items: center;
        justify-content: center;
    }

    .landing-page-content p {
        font-size: 16px;            
    }

    .inner-row {
        max-width: 1000px; /* Set the desired width of the inner row */
        margin: 0 auto; /* Center the inner row horizontally */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .landing-page-btn {
        width: 173px;
        border-radius: 11px;
        font-size: 20px;
        background-color: #9F9F9F;
        border: none;
        color: black;
    }

    .landing-page-btn:hover {
        color: black;
    }
</style>


