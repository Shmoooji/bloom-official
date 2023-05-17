<template>
    <div class="contacts-page">
        <b-input v-model="filter" placeholder="Search"></b-input>
        <div class="contacts-container">
            <b-container class="table-container">
                <b-row>
                    <b-col>
                        <h1>
                            Contacts
                        </h1>
                    </b-col>
                    <b-col cols="7">
                        <b-input-group>
                            <b-form-input size="lg" type="search" v-model="keyword" placeholder="Search"></b-form-input>
                            <b-input-group-append>
                                <b-button :disable="!keyword" @click="keyword = ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-col>
                    <b-col cols="1">
                        <b-button size="lg" variant="success" @click="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </b-button>
                    </b-col>
                
                    <b-col>
                        <b-table
                            class="table-curve table"
                            striped
                            responsive
                            :items="items"
                            :fields="fields"
                            :per-page="itemsPerPage"
                            :currentPage="currentPage"
                            :keyword="keyword"
                            show-empty
                        >
                            <template v-slot:cell(actions) = "data">
                                <b-button size="sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </b-button>
                                <b-button size="sm" variant="danger" @click="deleteRecord(data)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </b-button>
                            </template>
                        </b-table>
                        <b-pagination
                            id="customPagination"
                            v-model="currentPage"
                            :total-rows="rows"
                            :per-page="itemsPerPage"
                            align="center"
                        />
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<style scoped>
.contacts-page {
    background-color: #fff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.contacts-container {
    margin: 2vh auto 2vh auto;
    flex-grow: 1;
    padding: 3vh 3vh 7vh 3vh;
    background-color: #f2f2f2;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    width: 90%;
    border-radius: 5vh;
    border-style: hidden;
}

.table-container {
    padding-top: 3vh;
    margin-bottom: 5%;
}

.table-curve {
    border-radius: 10px;
    border: 1px solid #ccc;
}

.table thead th {
    padding-inline: 20px;
    padding-bottom: 10px;
    text-align: center;
    font-weight: bold;
    white-space: nowrap;
}

.table tbody tr:hover {
    background-color: #e6e6e6;
}

.table tbody td {
    border-bottom: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

h1 {
    font-size: 32px;
    font-weight: bold;
    padding-bottom: 20px;
}
</style>

<script>
import axios from "axios";


export default {
    data() {
        return {
            fields: [
                {
                    key: "id",
                    label: "ID",
                    sortable: true,
                    sortDirection: "desc"
                },
                {
                    key: "name",
                    label: "Name",
                    sortable: true,
                    class: "text-center",
                },
                {
                    key: "email",
                    label: "Email",
                    sortable: true,
                },
                {
                    key: 'phone',
                    label: "Phone Number",
                    sortable: true
                },
                {
                    key: 'company',
                    label: "Company",
                    sortable: true,
                },
                {
                    key: 'status',
                    label: "Status",
                    sortable: false,
                },
                {
                    key: 'last_active',
                    label: "Last Active",
                    sortable: true,
                },
                {
                    key: 'created_at',
                    label: "Created At",
                    sortable: true
                },
                {
                    key: 'updated_at',
                    label: "Updated At",
                    sortable: true
                },
                {
                    key: 'actions',
                    label: "Actions",
                    sortable: false
                }
            ],
            contacts: [],
            itemsPerPage: 15,
            currentPage: 1,
            keyword: '',
        };
    },
    mounted: function () {
        console.log("mounted");
        axios
            .get("contacts/list")
            .then((response) => {
                console.log(response.data);
                this.contacts = response.data;
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        deleteRecord(data){
            axios
                .delete(`contacts/list/${data.item.id}`)
                .then((response)=>{
                    alert(response.data);
                    window.location.reload();
                }).catch((error)=>{
                    console.log(error.response);
                    alert(error);
                })
        }
    },
    computed: {
        rows(){
            return this.contacts.length;
        },
        items(){
            return this.keyword ? this.contacts.filter(item => item.name.toLowerCase().includes(this.keyword) || item.id.toString().includes(this.keyword) || item.email.includes(this.keyword) || item.phone.includes(this.keyword) || item.status.includes(this.keyword) || item.created_at.includes(this.keyword) || item.updated_at.includes(this.keyword)) : this.contacts;
        }
    }
};
</script>
