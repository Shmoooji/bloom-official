<template>
    <div>
        <b-container fluid="sm">
            <b-row>
                <b-col lg="3" class="my-1">
                    <div>
                        <h1 class="display-5 fw-bold">Sales</h1>
                    </div>
                    
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
                            ></b-form-input>

                            <b-input-group-append>
                                <b-button
                                    :disabled="!filter"
                                    @click="filter = ''"
                                    >Clear</b-button
                                >
                            </b-input-group-append>
                        </b-input-group>
                    </b-form-group>
                <!-- </b-col>
                <b-col lg="3" class="my-1"> -->
                    <b-form-group
                        v-model="sortDirection"
                        label="By"
                        label-cols-sm="2"
                        label-align-sm="left"
                        label-size="m"
                        class="mb-0"
                        v-slot="{ ariaDescribedby }"
                    >
                        <b-form-select
                            v-model="filterOn"
                            :options="options"
                            :aria-describedby="ariaDescribedby"
                            class="mt-0"
                            size="m"
                            placeholder="category"
                        >
                        </b-form-select>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row class="my-4">
                <b-table
                    striped
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
                    small
                    @filtered="onFiltered"
                >
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

            <div class="mt-3">
                <b-pagination
                    v-model="currentPage"
                    :total-rows="totalRows"
                    :per-page="perPage"
                    align="center"
                    size="m"
                    class="my-0"
                ></b-pagination>
            </div>
        </b-container>
    </div>
</template>

<script>
// import { assertExpressionStatement } from "@babel/types";

export default {
    name: "Sales",
    data() {
        return {
            selected: null,
            // items: null,
            //placeholder items
            items: [
                {
                    deal_name: "deal1",
                    date_issued: "1/23/21",
                    closing_date: "3/3/21",
                    priority: "high",
                    deal_stage: "negotiations",
                    deal_type: "overstock",
                    contact: "contact1",
                    company: "comp1",
                    amount: 30000,
                },
                {
                    deal_name: "deal2",
                    date_issued: "2/23/21",
                    closing_date: "4/3/21",
                    priority: "medium",
                    deal_stage: "complete",
                    deal_type: "price bundling",
                    contact: "contact2",
                    company: "comp2",
                    amount: 13000,
                },
                {
                    deal_name: "deal3",
                    date_issued: "1/23/20",
                    closing_date: "3/3/20",
                    priority: "low",
                    deal_stage: "negotiations",
                    deal_type: "loyalty discounts",
                    contact: "contact3",
                    company: "comp3",
                    amount: 18000,
                },
                {
                    deal_name: "deal4",
                    date_issued: "3/23/21",
                    closing_date: "5/3/21",
                    priority: "low",
                    deal_stage: "negotiations",
                    deal_type: "free shipping",
                    contact: "contact4",
                    company: "comp4",
                    amount: 30000,
                },
                {
                    deal_name: "deal5",
                    date_issued: "8/23/21",
                    closing_date: "10/3/21",
                    priority: "medium",
                    deal_stage: "complete",
                    deal_type: "free shipping",
                    contact: "contact5",
                    company: "comp5",
                    amount: 150000,
                },
                {
                    deal_name: "deal6",
                    date_issued: "5/23/20",
                    closing_date: "7/3/20",
                    priority: "medium",
                    deal_stage: "negotiations",
                    deal_type: "price bundling",
                    contact: "contact6",
                    company: "comp",
                    amount: 14000,
                },
            ],

            fields: [
                { key: "deal_name", label: "Deal Name", sortable: true },
                {
                    key: "date_issued",
                    label: "Date Issued",
                    sortable: true,
                    class: "text-center",
                },
                {
                    key: "closing_date",
                    label: "Closing Date",
                    sortable: true,
                    class: "text-center",
                },
                { key: "priority", label: "Priority", sortable: true },
                { key: "deal_stage", label: "Deal Stage", sortable: true },
                { key: "deal_type", label: "Deal Type", sortable: true },
                { key: "contact", label: "Contact", sortable: true },
                { key: "company", label: "Company", sortable: true },
                {
                    key: "amount",
                    label: "Amount",
                    sortable: true,
                    class: "text-center",
                },
            ],

            options: [
                { value: null, text: "Select Attribute" },
                { value: "priority", text: "Priority" },
                { value: "deal_stage", text: "Deal Stage" },
                { value: "deal_type", text: "Deal Type" },
            ],
            totalRows: 1,
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

    mounted() {
        this.totalRows = this.items.length;
    },

    methods: {
        get_sales() {
            axios
                .get("/get_sales")
                .then((response) => {
                    console.log(response.data);
                    this.items = response.data;
                })
                .catch((error) => {
                    console.log(error.data);
                });
        },
    },

    beforeMount() {
        this.get_sales();
    },

    onFiltered(filteredItems) {
        this.totalRows = filteredItems.length;
        this.currentPage = 1;
    },
};
</script>

<style scoped>
div {
    margin-top: 50px;
}
</style>
