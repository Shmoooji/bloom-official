<template>
    <b-container fluid="sm" class="container">
        <h1>Subscription Page</h1>

        <a href="/about">About</a>
        <br>
        <a href="/works">Works</a>
        <br>
        <a href="/subscription">Subscription</a>
        <br>
        <a href="/contactUs">Contact Us</a>
    </b-container>
</template>

<script>
export default {
    name: "Subscription",
    mounted() {
        console.log("Subscription mounted.");
    },
};
</script>

<style>
    body {
        height: 100vh;
        font-family: 'Nunito', sans-serif;
    }

    .container {
        min-width: 100%; 
        height: 100vh; 
    }
</style>
