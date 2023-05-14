<template>
    <b-div>
        <div class="row">
            <div v-for="campaign in campaigns" :key="campaign.id" class="col-md-6 my-3">
            <b-card class="px-3 py-3 c-card"> <h2><strong>{{ campaign.name }}</strong></h2>
            <b-card-text class="my-5 c-text">{{ campaign.desc }}</b-card-text>
            <b-button href="#" class="c-button">Subscribe</b-button>
            </b-card>
        </div>
        </div>
    </b-div>

</template>

<script>

	export default {

        name: "CampaignCard",

    	data(){
    		return {
                campaigns: [
                    {id: 1, name: "Basic", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."},
                    {id: 2, name: "Pro", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."},
                    {id: 3, name: "Exclusive", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."},
                    {id: 4, name: "VIP", desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."},
                ]
    		}
    	},
    };
</script>
