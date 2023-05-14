<template>
    <div class="campaign-page">
        <div>
            <navbar-component></navbar-component>
        </div>
        <b-container>
            <b-row class="my-5">
                <b-col></b-col>
                <b-col cols="8">
                    <h1 class="c-heading">Choose a Campaign that's</h1>
                    <h1 class="c-heading">perfect for your Business</h1>
                </b-col>
                <b-col></b-col>
            </b-row>
            <b-row>
                <b-col></b-col>
                <b-col cols="8">
                    <campaign-card-component></campaign-card-component>
                </b-col>
                <b-col></b-col>
            </b-row>
        </b-container>
        <div>
            <footer-component></footer-component>
        </div>
    </div>

</template>

<script>

	export default {

        name: "Campaigns",
    };

</script>

<style>
    .c-heading {
        color: #C88512;
    }

    .campaign-page {
        background-color: #3F4F34;
    }

    .c-card {
        background-color: #86A760;
        color: #3F4F34;
        border: black;
    }

    .c-button {
        background-color: #4D4114;
        border: none;
        color: white;
    }
</style>
