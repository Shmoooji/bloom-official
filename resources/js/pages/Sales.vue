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
                            ${{ d_forecast }} 
                            </b> 
                            <br/>
                            From latest two deals
                        </h5>
                    </div>
                </b-col>

                <!-- <b-col lg="3" class="my-1">
                    Filter Deals form group
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
                

                <b-col lg="3" class="my-1">
                    Filter By form group
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
                -->
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
                    stacked="md"
                    show-empty
                    medium
                    @filtered="onFiltered"
                    sort-icon-left
                >

                    <!-- Define table columns -->
                    <b-table-column v-for="field in fields" :key="field.key" :label="field.label" :sortable=field.sortable :class="field.class">
                        <!-- Use the "key" attribute to map the column with the corresponding item property -->
                        {{ items[field.key] }}
                    </b-table-column>
                
                    <template #cell(name)="row">
                        {{ row.value.first }} {{ row.value.last }}
                    </template>

                    <template #row-details="row">
                        <b-card>
                            <ul>
                                <li v-for="(value, key) in row.item" :key="key">
                                    {{ key }}: {{ value }}
                                </li>
                            </ul>
                        </b-card>
                    </template>

                </b-table>
            </b-row>
            
            <!-- Pagination feature -->
            <b-row align-h="end" class="overflow-auto">
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
