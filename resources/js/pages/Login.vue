<template>
    <div class="container">
        <form
            action="/register"
            method="post"
            @submit="checkForm"
            style="border: 1px solid #ccc"
        >
            <input type="hidden" name="_token" :value="csrf" />
            <label for="fname"><b>First Name</b></label>
            <input type="text" name="fname" v-model="fname" required />

            <label for="lname"><b>Last Name</b></label>
            <input type="text" name="lname" v-model="lname" required />

            <label for="email"><b>Email Address</b></label>
            <input type="email" name="email" v-model="email" required />

            <label for="company"><b>Name of Company</b></label>
            <input type="text" name="company" v-model="company" required />

            <label for="password"><b>Password</b></label>
            <input
                type="password"
                name="password"
                v-model="password"
                required
            />

            <label for="confirmpassword"><b>Confirm Password</b></label>
            <input
                type="password"
                name="confirmpassword"
                v-model="confirmpassword"
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
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </p>

            <button type="submit" class="signupbtn">Sign Up</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),

            fname: "",
            lname: "",
            email: "",
            company: "",
            password: "",
            confirmpassword: "",
            checked: false,
            errors: [],
        };
    },
    methods: {
        checkForm: function (e) {
            if (this.name && this.age) {
                return true;
            }

            this.errors = [];

            if (!this.name) {
                this.errors.push("Name required.");
            }
            if (!this.age) {
                this.errors.push("Age required.");
            }

            e.preventDefault();
        },
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
