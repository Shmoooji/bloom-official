<template>
    <div class="index-page">
        <navbarAlt></navbarAlt>
        <!-- Image section -->
        <section class="image-section">
            <div>
                <div class="hero-image">
                    <div class="hero-text">
                        <h1>Welcome to Bloom</h1>
                        <p>Your Personal Business Companion</p>
                        <a href="/campaigns">
                            <button class="btn btn-primary">
                                Time to Bloom
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview section -->
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-3">Bloom</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin sollicitudin, est quis porta consequat, sem nisi
                        pulvinar lorem, at ornare lorem eros id sapien. Ut enim
                        lacus, egestas eu egestas et, auctor eget libero. Aenean
                        elementum massa vitae risus convallis, ac posuere libero
                        pharetra. Sed et augue nec ex imperdiet sodales. Aenean
                        euismod, odio eget aliquam pretium, nisl lectus posuere
                        metus, et condimentum quam nibh nec leo. Quisque et urna
                        velit. Maecenas est arcu, dapibus ut risus in, posuere
                        tempus arcu
                    </p>
                </div>
                <div class="col-md-6">
                    <img
                        src="img/sunflower.jpg"
                        alt="Image"
                        class="img-fluid"
                        style="object-fit: cover"
                    />
                </div>
            </div>
        </div>
        <!-- Works section -->
        <section id="works" class="bg-light">
            <div class="container py-5">
                <h2 class="text-center mb-5">Our Works</h2>
                <div class="d-flex justify-content-center">
                    <div class="gallery-container">
                        <div class="gallery-wrapper">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 1"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 1</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 2"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 2</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 3"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 3</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 4"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 4</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 5"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 5</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <img
                                        class="card-img-top"
                                        src="img/sunflower.jpg"
                                        alt="work 6"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Work 6</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer section -->
        <footer class="text-center">
            <footerT></footerT>
        </footer>
    </div>
</template>
<script>
import navbarAlt from "../components/navbarAlt.vue";
import footerT from "../components/footer.vue";

export default {
    name: "Index",
    components: {
        navbarAlt,
        footerT,
    },
};
</script>
<style scoped>
div {
    font-family: "Jost", sans-serif !important;
}
.gallery-container {
    width: 100%;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch;
}
.gallery-wrapper {
    display: flex;
    flex-wrap: nowrap;
}
.hero-image {
    position: relative;
    height: 400px;
    background-image: url("/img/sunflower.jpg");
    background-size: cover;
}
.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
}
</style>
