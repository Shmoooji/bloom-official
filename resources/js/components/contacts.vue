<template>
    <div class="contacts-page">
        <div>
            <nav-bar></nav-bar>
        </div>
        <div class="contacts-container">
            <h1>CONTACTS</h1>
            <div class="table-container">
                <!-- <div class="add-button-container">
        <b-button variant="success" class="add-button" @click="addContact">+</b-button> -->
            </div>
            <b-table
                class="table-curve table"
                striped
                hover
                :items="paginatedContacts"
                :fields="fields"
            />
            <div class="button-container">
                <b-button
                    class="previous-button"
                    @click="previousPage"
                    :disabled="currentPage === 1"
                    >Previous</b-button
                >
                <b-button
                    class="next-button"
                    @click="nextPage"
                    :disabled="currentPage === totalPages"
                    >Next</b-button
                >
            </div>
        </div>
    </div>
</template>

<style>
/* .add-button-container {
position: absolute;
top: 0;
right: 0;
margin: 20px;
} */

.contacts-page {
    background-color: #fff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contacts-container {
    max-width: 1800px;
    margin: 60px auto 40px auto;
    padding: 90px;
    text-align: center;
    flex-grow: 1;
    background-color: #f2f2f2;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
}

.table-container {
    margin-top: 30px;
}

.table-curve {
    border-radius: 10px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.table thead th {
    background-color: #4caf50;
    text-align: center;
    color: #fff;
    vertical-align: middle;
    font-weight: bold;
    white-space: nowrap;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody tr:hover {
    background-color: #e6e6e6;
}

.table tbody td {
    border-bottom: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.button-container {
    margin-top: 20px;
}

.previous-button {
    margin-right: 10px;
    background-color: #f44336;
    color: #fff;
    border: none;
}

.next-button {
    margin-left: 10px;
    background-color: #2196f3;
    color: #fff;
    border: none;
}

.previous-button:hover,
.next-button:hover {
    opacity: 0.8;
}

h1 {
    color: #4caf50;
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
}
</style>

<script>
import navBar from "./navbar.vue";

export default {
    components: {
        navBar,
    },
    data() {
        return {
            contacts: [
                {
                    name: "Vic Parojinog",
                    created: "2022-01-01",
                    email: "vic@example.com",
                    company: "Company A",
                    status: "Active",
                    lastActivity: "2022-04-01",
                },
                {
                    name: "Ivan Leopoldo",
                    created: "2022-02-15",
                    email: "ivan@example.com",
                    company: "Company B",
                    status: "Inactive",
                    lastActivity: "2022-05-15",
                },
                {
                    name: "Isa Adriatico",
                    created: "2022-03-20",
                    email: "isa@example.com",
                    company: "Company C",
                    status: "Active",
                    lastActivity: "2022-06-20",
                },
                {
                    name: "Aubrey Graham",
                    created: "2022-04-25",
                    email: "aubrey@example.com",
                    company: "Company D",
                    status: "Inactive",
                    lastActivity: "2022-07-25",
                },
                {
                    name: "Hitagi Senjougahara",
                    created: "2022-06-01",
                    email: "hitagi@example.com",
                    company: "Company E",
                    status: "Active",
                    lastActivity: "2022-09-01",
                },
                {
                    name: "Light Yagami",
                    created: "2022-07-15",
                    email: "light@example.com",
                    company: "Company F",
                    status: "Inactive",
                    lastActivity: "2022-10-15",
                },
                {
                    name: "Satoru Gojo",
                    created: "2022-08-20",
                    email: "satoru@example.com",
                    company: "Company G",
                    status: "Active",
                    lastActivity: "2022-11-20",
                },
                {
                    name: "Momo Stan",
                    created: "2022-09-25",
                    email: "momo@example.com",
                    company: "Company H",
                    status: "Inactive",
                    lastActivity: "2022-12-25",
                },
                {
                    name: "Tzuyu Twice",
                    created: "2022-11-01",
                    email: "tzuyu@example.com",
                    company: "Company I",
                    status: "Active",
                    lastActivity: "2023-02-01",
                },
                {
                    name: "Nayeon Once",
                    created: "2022-12-15",
                    email: "nayeon@example.com",
                    company: "Company J",
                    status: "Inactive",
                    lastActivity: "2023-03-15",
                },
                {
                    name: "Marshall Mathers",
                    created: "2023-01-20",
                    email: "marshall@example.com",
                    company: "Company K",
                    status: "Active",
                    lastActivity: "2023-03-15",
                },
            ],
            currentPage: 1,
            itemsPerPage: 5,
        };
    },
    methods: {
        previousPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },
        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },
        // addContact() {
        //   const newContact = {
        //     name: '',
        //     created: '',
        //     email: '',
        //     company: '',
        //     status: '',
        //     lastActivity: ''
        //   };
        //   this.contacts.push(newContact);
        // }
    },
    computed: {
        totalItems() {
            return this.contacts.length;
        },
        totalPages() {
            return Math.ceil(this.totalItems / this.itemsPerPage);
        },
        paginatedContacts() {
            const startIndex = (this.currentPage - 1) * this.itemsPerPage;
            const endIndex = startIndex + this.itemsPerPage;
            return this.contacts.slice(startIndex, endIndex);
        },
    },
};
</script>
