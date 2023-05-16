<template>
    <div class="menu-nav">
        <ul>
            <li>
                <a href="inbox.php">
                    <p>Inbox</p>
                </a>
            </li>
            <br />
            <li>
                <a href="unread.php">
                    <p>Unread</p>
                </a>
            </li>
            <li>
                <a href="unread.php">
                    <p>Important</p>
                </a>
            </li>
            <li>
                <a href="unread.php">
                    <p>Sent</p>
                </a>
            </li>
            <li>
                <a href="unread.php">
                    <p>Trash</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-menu">
        <a href="email.php" style="display: inline-block; margin-right: 200px"
            ><h1>Email</h1></a
        >
        <a
            href="livechat.php"
            style="display: inline-block; margin-right: 200px"
            ><h1>Live Chat</h1></a
        >
        <a href="tickets.php" style="display: inline-block"><h1>Tickets</h1></a>
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
    width: 20%;
    height: 100%;
    background-color: rgb(165, 165, 165);
    color: white;
    font-family: "Meera Inimai", sans-serif;
}
.main-menu {
    position: absolute;
    left: 40%;
    top: 40%;
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
