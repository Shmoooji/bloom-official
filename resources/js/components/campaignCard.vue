<template>

    <b-div>
        <div class="row">
            <div v-for="campaign in campaigns" :key="campaign.id" class="col-md-6 my-3">
            <b-card class="px-3 py-3 c-card"> <h2><strong>{{ campaign.type }}</strong></h2>
            <b-card-text class="my-5 c-text">{{ campaign.description }}</b-card-text>
            <b-button href="/payment"  class="c-button" >Subscribe</b-button>
            </b-card>
        </div>
        </div>
    </b-div>
</template>

<script>

	export default {

        name: "CampaignCard",

    	// data(){
    	// 	return {
        //         campaigns: [
        //             {id: 1, name: "Basic", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", price: 4.99},
        //             {id: 2, name: "Pro", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", price: 19.99},
        //             {id: 3, name: "Exclusive", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", price: 49.99},
        //             {id: 4, name: "VIP", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", price: 99.99},
        //         ]
    	// 	}
    	// },

        data() {
            return {

                campaigns: []

            };
        },

        beforeMount() {
            this.fetchCampaigns();
        },

        methods: {
            fetchCampaigns() {
                axios.get('/get_campaigns')
                .then(response => {
                    this.campaigns = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
            }
        }
    };

</script>
