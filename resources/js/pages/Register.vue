<template>
    <b-container class="bv-example-row">
        <b-row class="register-content">            
            <b-col cols="4" class="column1">
                <div>
                    <img src="/img/bloom_logo.png" class="logo_reg">
                </div>
            </b-col>
            <b-col cols="8" class="column2">
                <div>
                    <h1 class="text-center">REGISTER</h1>
                    <form action="/register" method="post" @submit="checkForm" autocomplete="off">
                        <!-- <input type="hidden" name="_token" :value="csrf" /> -->
                        <label for="f_name"><b>First Name</b></label>
                        <input type="text" name="f_name" v-model="f_name" required />

                        <label for="l_name"><b>Last Name</b></label>
                        <input type="text" name="l_name" v-model="l_name" required />

                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" v-model="email" required />

                        <label for="company_name"><b>Name of Company</b></label>
                        <input type="text" name="company_name" v-model="company_name" />

                        <label for="company_name"><b>Address</b></label>
                        <input type="text" name="address" v-model="address" />

                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" v-model="password" required />

                        <label for="password_confirmation"><b>Confirm Password</b></label>
                        <input type="password" name="password_confirmation" v-model="password_confirmation" required />

                        <label>
                            <input type="checkbox" checked="checked" v-model="checked" style="margin-bottom: 15px" />
                            By clicking here, I have read and understood the terms and
                            conditions.
                        </label>
                        <p v-if="errors.length">
                            <b>Please correct the following error(s):</b>
                        <ul>
                            <li v-for="error in errors" style="color: red">
                                <p style="color: red">
                                    {{ error }}
                                </p>
                            </li>
                        </ul>
                        </p>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </form>
                    <span>Already have an account? <a href="/login" class="login-link">Click Here</a></span>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
import { registerRuntimeCompiler } from 'vue';

export default {
    data() {
        return {
            // csrf: document
            //     .querySelector('meta[name="csrf-token"]')
            //     .getAttribute("content"),

            f_name: "",
            l_name: "",
            email: "",
            company_name: "",
            password: "",
            password_confirmation: "",
            checked: false,
            errors: [],
        };
    },
    methods: {
        checkForm: function (e) {
            if (
                this.f_name &&
                this.l_name &&
                this.email &&
                this.company_name &&
                this.password &&
                this.password_confirmation &&
                this.checked
            ) {
                return true;
            }

            this.errors = [];

            if (!this.f_name) {
                this.errors.push("First name required.");
            }
            if (!this.l_name) {
                this.errors.push("Last name required.");
            }
            if (!this.email) {
                this.errors.push("Email required.");
            } else if (!this.validEmail(this.email)) {
                this.errors.push('Valid email required.');
            }
            if (!this.company_name) {
                this.errors.push("company_name name required.");
            }
            if (!this.password) {
                this.errors.push("Password required.");
            }
            if (!this.password_confirmation) {
                this.errors.push("Confirm password required.");
            }
            if (this.password != this.password_confirmation) {
                this.errors.push("Confirm password required.");
            }
            if (!this.checked) {
                this.errors.push("Terms and conditions required.");
            }

            e.preventDefault();
            if (this.errors.length === 0) register();
        },
        register() {
            axios
                .post("/register", {
                    f_name: this.f_name,
                    l_name: this.l_name,
                    email: this.email,
                    company_name: this.company_name,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                    checked: this.checked,
                })
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

    },
};
</script>

<style>
body {
    font-family: 'Nunito', sans-serif;
    height: 100vh;
}

.register-content {
    height: 100vh;
}

.column1 div {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.column2 div {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 0 50px;
}

.container {
    max-width: 100vw;
}

.column1 {
    background-color: #3f4f34;
    background-image: url('/img/landing_page_bg.png');
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
}

.logo_reg {
    height: 350px;
    width: auto;
}

h1 {
    color:  #3f4f34;
    font-weight: bold;
}

.column2 {
    background-color: #86a760;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #3f4f34;
}

input[type="text"]:focus,
input[type="password"]:focus, input[type="email"]:focus {
    background-color: #3f4f34;
    outline: none;
}

button {
    background-color: #3f4f34;
    color: #C88512;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity: 1;
}

.login-link, .login-link:hover, .login-link:focus {
    color: #C88512;

}

label {
    color: #3f4f34;
}

</style>