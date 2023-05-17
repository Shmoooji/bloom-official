<template>
    <div class="menu-nav">
        <ul>
            <li>
                <a href="#">
                    <p>Inbox</p>
                </a>
            </li>
            <br />
            <li>
                <a href="#">
                    <p>Unread</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>Important</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>Sent</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>Trash</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-menu">
        <a href="#" class="menu-item">
            <div class="menu-item-box">
                <img :src="'/images/email-icon.png'" alt="Email" class="menu-icon">

                <p class="menu-item-text">Email</p>
            </div>
        </a>
        <a href="#" class="menu-item">
            <div class="menu-item-box">
                <img :src="'/images/livechat-icon.png'" alt="Live Chat" class="menu-icon">

                <p class="menu-item-text">Live Chat</p>
            </div>
        </a>
        <a href="#" class="menu-item">
            <div class="menu-item-box">
                <img :src="'/images/tickets-icon.png'" alt="Tickets" class="menu-icon">

                <p class="menu-item-text">Tickets</p>
            </div>
        </a>
    </div>
</template>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Meera+Inimai&family=Nunito+Sans&family=Space+Grotesk:wght@700&display=swap");

/* 
font-family: 'Meera Inimai', sans-serif;
font-family: 'Nunito Sans', sans-serif;
font-family: 'Space Grotesk', sans-serif; 
*/

* {
    margin: 0;
    padding: 0;
}

html,
body {
    height: 100%;
    min-height: 100%;
}

body {
    font-family: "Nunito Sans", sans-serif;
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
}

a {
    color: rgb(0, 0, 0);
    text-decoration: none;
}

a:hover {
    color: #ffffff;
}

ul {
    list-style: none;
    padding: 25px 30px;
    margin: 0;
}

/*------------------------------------------------*/
/*-------------------- Header --------------------*/
/*------------------------------------------------*/
header {
    height: 50px;
    background-color: rgba(223, 223, 223, 0.8);
    display: flex;
    padding: 0 30px;
}

.header-logo a {
    height: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
}

.header-logo a:hover {
    color: white;
}

.header-logo a img {
    height: 83%;
    padding-right: 10px;
}

.header-logo a p {
    font-size: 18px;
    text-align: center;
    margin: auto 0;
    line-height: 100%;
}

.header-nav {
    width: 100%;
    font-family: "Meera Inimai", sans-serif;
    font-size: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding-left: 30px;
}

.header-space {
    padding-right: 30px;
}

/*------------------------------------------------*/
/*-------------------- Body ----------------------*/
/*------------------------------------------------*/

.menu-nav {
    position: absolute;
    width: 20%;
    height: 100%;
    background: #8A8A8A;
    color: white;
    font-family: "Meera Inimai", sans-serif;
}

.main-menu {
    position: absolute;
    left: 40%;
    top: 40%;
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.menu-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    text-decoration: none;
    color: black;
    margin: 30px;
}

.menu-item-box {
    width: 150px;
    height: 150px;
    background-color: #D9D9D9;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
}

.menu-icon {
    position: center;
    max-width: 40%;
    max-height: 40%;
}

.menu-item-text {
    color: black;
    font-weight: 400;
    font-size: 20px;
    line-height: 29px;
}

a {
    display: inline-block;
    text-align: center;
    margin: 10px;
    text-decoration: none;
    color: black;
    margin-right: 100px;
}

img {
    width: 150px;
    height: 150px;
}

#menu p {
    margin-top: 10px;
}
</style>
