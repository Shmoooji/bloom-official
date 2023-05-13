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

                <!-- Define your table columns using b-table-column -->
                <b-table-column v-for="field in fields" :key="field.key" :label="field.label" :sortable="field.sortable" :class="field.class">
                    <!-- Use the "key" attribute to map the column with the corresponding item property -->
                    {{ item[field.key] }}
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

            <div class="mt-3">
                <b-pagination
                    v-model="currentPage"
                    :total-rows="totalRows"
                    :per-page="perPage"
                    :align="center"
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
            //selected: null,
            // items: null,
            //placeholder items
            

            fields: [
                { key: "id", label: "Deal Name", sortable: true },
                { key: "campaign_payment_id", label: "Deal Name", sortable: true },
                {
                    key: "created_at",
                    label: "Date Issued",
                    sortable: true,
                    class: "text-center",
                },
                {
                    key: "updated_at",
                    label: "Date Updated",
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
                { key: "stage_deal", label: "Deal Stage", sortable: true },
                { key: "type_deal", label: "Deal Type", sortable: true },
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

    mounted: function(){
        this.get_deal();
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
                    console.log(this.totalRows);
                })
                .catch((error) => {
                    console.log(error.data);
                });
        },
    },

    beforeMount() {
        this.get_deal();
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
