<template>
    <div>
        <navbarAlt></navbarAlt>
    </div>
  
    <b-container fluid="sm" class="works-content">
        <b-row>
            <h1 class="text-color">Contact Us Page</h1>
        </b-row>

  
        <b-row class="footer-bottom">
                <footerT></footerT>
        </b-row>
    </b-container>
</template>

<script>
import navbarAlt from "../components/navbarAlt.vue";
import footerT from "../components/footer.vue";
export default {
    name: "ContactUs",
    components: {
        navbarAlt,
        footerT,
    },
    mounted() {
        console.log("Works mounted.");
    },
};
</script>

<style>
    body {
        height: 100vh;
        font-family: 'Nunito', sans-serif;
    } 

    .works-content {
        min-width: 100%; 
    }

    .text-color {
        color: #4d4114;
    }

    .footer-bottom{
        position: absolute;
        width: 100%;
        bottom: 0;
    }
</style>
