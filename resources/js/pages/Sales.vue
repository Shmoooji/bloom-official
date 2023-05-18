<template>
    <b-container class="bloom-style">
        <b-container fluid="lg" >
            <!-- Module Header -->
            <b-row>
                <div class="sales-header">
                    <h1>Sales</h1>
                </div> 
                
            </b-row>  

            <b-row align-h="start">
                <b-col lg="6" class="my-1">
                    <div>
                        <h5>
                            <b>Deal Forecast:
                            {{ d_forecast }} 
                            </b> 
                            <br/>
                            From latest two deals
                        </h5>
                    </div>
                </b-col>

                <b-col lg="3" class="my-1">
                    <b-form-group
                        label-for="filter-input"
                        label-align-sm="left"
                        label-size="m"
                        class="mb-0"
                    >
                        <b-input-group size="m">
                            <b-form-input
                                id="filter-input"
                                v-model="filter"
                                type="search"
                                placeholder="Filter Deals"
                            />

                            <b-input-group-append>
                                <b-button
                                    :disabled="!filter"
                                    @click="filter = ''"
                                    class="bloom-set fw-bold"
                                    >
                                    Clear
                                </b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form-group>
                </b-col>

                <b-col lg="3" class="my-1">
                    <b-form-group
                            v-model="sortDirection"
                            label="By"
                            label-cols-sm="2"
                            label-align-sm="right"
                            label-size="m"
                            class="mb-0 fw-bold"
                            v-slot="{ ariaDescribedby }"
                        >
                            <b-form-select
                                v-model="filterOn"
                                :options="options"
                                :aria-describedby="ariaDescribedby"
                                class="mt-0"
                                size="m"
                            />
                    </b-form-group>
                    
                </b-col>
                
            </b-row>

            <b-row class="my-2">
                <!-- Sales Table -->
                <b-table
                    id="sales-table"
                    class="bloom"
                    hover
                    :items="items"
                    :fields="fields"
                    :per-page="perPage"
                    :current-page="currentPage"
                    :filter="filter"
                    :filter-included-fields="filterOn"
                    :sort-by.sync="sortBy"
                    :sort-desc.sync="sortDesc"
                    :sort-direction="sortDirection"
                    show-empty
                    medium
                    @filtered="onFiltered"
                    sort-icon-left
                    sortable
                    responsive
                >
                    <template v-slot:cell(actions)="{ item }">
                            <b-button-group >
                                <b-button variant="link" title="Update">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffff" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </b-button>
                                <b-button variant="link" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffff" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </b-button>
                            </b-button-group>
                    </template>
                </b-table>
            </b-row>
            
            <!-- Pagination feature -->
            <b-row align-h="end" class="overflow-auto">
                <div class="mt-2 text-end">
                    <b-button
                        class="bloom-set fw-bold text">
                        + Add New Deal
                    </b-button>
                </div>
                
                <div class="mt-2">
                    <b-pagination
                        v-model="currentPage"
                        :total-rows="totalRows"
                        :per-page="perPage"
                        size="m"
                        class="my-0"
                        align="center"
                        aria-controls="sales-table"
                    />
                </div>
            </b-row>
        </b-container>
    </b-container>
</template>

<script>
    export default {
        
        name: "Sales",
        
        data() {
            return {
                d_forecast: null,
                items: [],

                fields: [
                    { key: "id", label: "Deal Name", sortable: true, class: "text-center"},
                    { key: "campaign_payment_id", label: "Campaign Name", sortable: true, class: "text-center" },
                    { key: "created_at", label: "Date Issued", sortable: true, class: "text-center"},
                    { key: "updated_at", label: "Date Updated", sortable: true, class: "text-center"},
                    { key: "closing_date", label: "Closing Date", sortable: true, class: "text-center"},
                    { key: "priority", label: "Priority", sortable: true, class: "text-center" },
                    { key: "stage_deal", label: "Deal Stage", sortable: true, class: "text-center" },
                    { key: "type_deal", label: "Deal Type", sortable: true, class: "text-center" },
                    { key: "contact", label: "Contact", sortable: true, class: "text-center" },
                    { key: "company", label: "Company", sortable: true, class: "text-center" },
                    { key: "amount", label: "Amount", sortable: true, class: "text-center"},
                    { key: "actions", label: "Actions", sortable: true, class: "text-center"},
                ],

                options: [
                    { value: null, text: "Select Attribute" },
                    { value: "Priority", text: "Priority" },
                    { value: "Deal_Stage", text: "Deal Stage" },
                    { value: "Deal_Type", text: "Deal Type" },
                ],

                totalRows: null,
                currentPage: 1,
                perPage: 5,
                pageOptions: [5, 10, 15, { value: 100, text: "Show a lot" }],
                sortBy: "",
                sortDesc: false,
                sortDirection: "asc",
                filter: null,
                filterOn: [],
            };
        },

        beforeMount() {
            this.get_deal();
            this.get_deal_forecast();
        },
    
        methods: {
            get_deal() {
                axios
                    .get("/get_deal")
                    .then((response) => {
                        console.log(response.data);
                        this.items = response.data;
                        console.log(this.items);
                        this.totalRows = Object.keys(response.data).length;
                    })
                    .catch((error) => {
                        console.log(error.data);
                    });
            },
            get_deal_forecast() {
                axios
                    .get("/get_deal_forecast")
                    .then(response => {
                        console.log(response.data);
                        this.d_forecast = response.data.toFixed(2);
                    })
                    .catch((error) => {
                        console.log(error.data);
                    });
            },
        },

        // onFiltered(filteredItems) {
        //     this.totalRows = filteredItems.length
        //     this.currentPage = 1
        // },
    };
</script>

<style scoped>
    .sales-header {
        margin-top: 50px;
        color: #C88512;
    }

    .sales-header h1{
        font-weight: bold;
    }
    .bloom-style {
        background-color: #3F4F34;
        color: #86A760;
    }

    :deep .bloom thead{
        color: #C88512;
    }

    :deep .bloom td{
        color: #86A760;
    }

    :deep .bloom tr:hover{
        background-color: #86A760;
        color: #242108;
    }

    .bloom-set{
        background-color:#86A760;
        color:#4D4114;
    }

    
</style>
