<template>
    <div class="footer text-center">
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
    </div>
</template>

<style scoped>
    .footer {
        background-color: #86A760;
        padding: 10px;
        font-size: 16px;
    }

    .footer a, .footer a:hover, .footer span {
        color: #4D4114;
        text-decoration: none;
        font-weight: bold;
    }

    .footer p {
        color: #4D4114;
    }
</style>

<script>
export default {
    name: "footerT",
};
</script>
