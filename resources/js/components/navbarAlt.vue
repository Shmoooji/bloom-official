<template>
    <div>
        <b-navbar toggleable="lg" class="navbar-alt">
            <b-navbar-brand href="/index">
                <img src="/img/bloom_logo.png" class="logo">
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse" class="toggle-btn"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item href="/about"
                        ><span class="item-color">About us</span></b-nav-item
                    >
                    <b-nav-item href="/contactUs"
                        ><span class="item-color">Contact us</span></b-nav-item
                    >
                    <b-nav-item href="/works"
                        ><span class="item-color">Our work</span></b-nav-item
                    >
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto ms-auto">
                    <b-nav-form>
                        <b-button size="sm" class="my-2 my-sm-0 navbar-btn">BLOOM</b-button>
                    </b-nav-form>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<style>
    div {
        font-family: 'Nunito', sans-serif;
    }

    .logo {
        width: auto;
        height: 50px;
        margin-right: 0 !important;
        margin-left: 15px;
        
    }

    .toggle-btn {
        margin-right: 15px;
    }

    .navbar-alt{
        background-color: #3F4F34!important;
    }

    .item-color {
        color: #86A760;
    }

    .navbar-btn {
        background-color: #86A760;
        border: none;
        color: #4D4114;
    }

    .navbar-btn:hover, .navbar-btn:active, .navbar-btn:focus{
        background-color: #739053 !important;
        color: #4D4114 !important;
    }
</style>

<script>
export default {
    name: "navbarAlt",
};
</script>
