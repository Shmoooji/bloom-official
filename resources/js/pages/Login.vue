<template>
    <div class="container">
        <h2>Login</h2>
        <form method="post" @submit="login" style="border: 1px solid #ccc">
            <!-- <input type="hidden" name="_token" :value="csrf" /> -->
            <label for="email"><b>Email Address</b></label>
            <input type="email" name="email" v-nmodel="email" required />

            <label for="password"><b>Password</b></label>
            <input
                type="password"
                name="password"
                v-model="password"
                min="8"
                required
            />
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
            <button type="submit" class="loginbtn">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            // csrf: document
            //     .querySelector('meta[name="csrf-token"]')
            //     .getAttribute("content"),
            email: "",
            password: "",
            errors: [],
        };
    },
    methhods: {
        login() {
            axios
                .post("/login", {
                    email: this.email,
                    password: this.password,
                })
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                    this.errors.push(error.response.data.message);
                });
        },
    },
};
</script>

<style scoped>
body {
    background-color: #3f4f34;
}
.row {
    display: flex;
}
.column1 {
    flex: 50%;
    background-color: #3f4f34;
    text-align: center;
    margin-top: 30%;
    float: left;
}
h1 {
    color: #c88512;
    font-family: "Lucida Console", monospace;
    font-size: 32;
    padding: 170px 0;
}
h2 {
    text-align: center;
}
.column2 {
    background-color: #86a760;
    flex: 50%;
    float: right;
    margin-top: 20%;
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
    background-color: #86a760;
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
