<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <NavBar />
                    <div class="card-header">App Component</div>
                    <div class="card-body">
                        <h1>Curtney Gwapo</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import NavBar from "./components/NavBar";
</script>

<!-- <script>
import NavBar from "./components/NavBar.vue";
export default {
    name: "App",
    components: {
        NavBar,
    },
    mounted() {
        console.log("Component mounted.");
    },
    compatConfig: { MODE: 3 },
};
</script> -->
