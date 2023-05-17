<template>
    <div class="container">
        <form
            method="post"
            @submit="checkForm"
            style="border: 1px solid #ccc"
        >
            <!-- <input type="hidden" name="_token" :value="csrf" /> -->
            <label for="f_name"><b>First Name</b></label>
            <input type="text" name="f_name" v-model="f_name" required />

            <label for="l_name"><b>Last Name</b></label>
            <input type="text" name="l_name" v-model="l_name" required />

            <label for="email"><b>Email Address</b></label>
            <input type="email" name="email" v-model="email" required />

            <label for="company_name"><b>Name of company_name</b></label>
            <input type="text" name="company_name" v-model="company_name" required />

            <label for="address"><b>Address</b></label>
            <input type="text" name="address" v-model="address" required />

            <label for="password"><b>Password</b></label>
            <input
                type="password"
                name="password"
                v-model="password"
                min="8"
                required
            />

            <label for="password_confirmation"><b>Confirm Password</b></label>
            <input
                type="password"
                name="password_confirmation"
                v-model="password_confirmation"
                min="8"
                required
            />

            <label>
                <input
                    type="checkbox"
                    checked="checked"
                    v-model="checked"
                    style="margin-bottom: 15px"
                />
                By clicking here, I have read and understood the terms and
                conditions.
            </label>
            <p v-if="errors.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors" style="color: red">
                        <p  style="color: red">
                            {{ error }}
                        </p>
                    </li>
                </ul>
            </p>

            <button type="submit" class="signupbtn">Sign Up</button>
        </form>
    </div>
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
            address: "",
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
                this.address &&
                this.password &&
                this.password_confirmation &&
                this.checked
            ) {
                this.register();
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
                this.errors.push("company name required.");
            }
            
            if (!this.address) {
                this.errors.push("address required.");
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
            // console.log("method called and executed");

            e.preventDefault();
        },
        register: function() {
            
            axios
                .post("/register", {
                    f_name: this.f_name,
                    l_name: this.l_name,
                    email: this.email,
                    company_name: this.company_name,
                    address: this.address,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                    checked: this.checked,
                })
                .then((response) => {
                    console.log(response);
                })
                .catch(error => {
                    // Handle AxiosError
                    if (error.response) {
                    // The request was made and the server responded with a status code
                    console.log('Server responded with status code:', error.response.status);
                    console.log('Response data:', error.response.data);
                    } else {
                    // The request was made but no response was received
                    console.log('Error message:', error.message);
                    this.errors.push(error.message);
                }
            });
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        
    },
};
</script>

<style scoped>
body {
    background-color: #3f4f34;
}
.column1 {
    flex: 50%;
    background-color: #3f4f34;
    text-align: center;
    margin-top: 50%;
    padding: 370px 0;
}
h1 {
    color: #c88512;
}
.column2 {
    background-color: #86a760;
    flex: 50%;
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
input[type="password"]:focus {
    background-color: #3f4f34;
    outline: none;
    width: 50%;
}

.container {
    padding: 16px;
}

button {
    background-color: #3f4f34;
    color: white;
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
</style>
