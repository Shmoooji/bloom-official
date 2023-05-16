<template>
    <button :class="['payment-option', paymentMethod]">
        <img
            :id="paymentMethod"
            :src="logoUrl"
            :alt="paymentMethod + ' Logo'"
        />
    </button>
</template>

<style>
.payment-container {
    display: flex;
    height: 100vh;
}
.payment-option {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.2s;
    height: 100%;
    width: 100%;
}
.payment-option:hover {
    filter: brightness(80%);
}
.GCash {
    background-color: rgb(0, 125, 254);
}
.PayMaya {
    background-color: rgb(29, 45, 99);
}
.PayPal {
    background-color: #ffffff;
}
img {
    width: 20vw;
    height: auto;
    pointer-events: none;
}
#GCash {
    width: 28vw;
}
#PayMaya {
    width: 32vw;
}
#PayPal {
    width: 24vw;
}
</style>

<script>
import gcashLogo from "@/../../public/img/gcash_logo.png";
import paymayaLogo from "@/../../public/img/paymaya_logo.png";
import paypalLogo from "@/../../public/img/paypal_logo.png";
export default {
    props: {
        paymentMethod: {
            type: String,
            required: true,
        },
    },
    computed: {
        logoUrl() {
            switch (this.paymentMethod) {
                case "GCash":
                    return gcashLogo;
                case "PayMaya":
                    return paymayaLogo;
                case "PayPal":
                    return paypalLogo;
                default:
                    return "";
            }
        },
    },
};
</script>
