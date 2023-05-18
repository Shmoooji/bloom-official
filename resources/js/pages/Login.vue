<template>
    <b-container class="bv-example-row">
        <b-row class="register-content">            
            <b-col cols="4" class="column1">
                <div>
                    <img src="/img/bloom_logo.png" class="logo_log">
                </div>
            </b-col>
            <b-col cols="8" class="column2">
                <div>
                    <h1 class="text-center">Login</h1>
                    <form method="post" autocomplete="off">
                        <input type="hidden" name="_token" :value="csrf" />
                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" v-model="email" required />

                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" v-model="password" required />

                        <button type="submit" @click="login()" class="loginbtn">Login</button>
                    </form>
                    <span>Don't have an account? <a href="/register" class="register-link">Click Here</a></span>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                email: "",
                password: ""
        };
    },
    methods: {
        login() {
            axios.post('/login/authentication', {
                email: this.email,
                password: this.password
            })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                })
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

.logo_log {
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

input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #3f4f34;
}

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

.register-link, .register-link:hover, .register-link:focus {
    color: #C88512;

}

label {
    color: #3f4f34;
}

</style>