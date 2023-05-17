<template>

    <b-div>
        <div class="row">
            <div v-for="campaign in campaigns" :key="campaign.id" class="col-md-6 my-3">
            <b-card class="px-3 py-3 c-card"> <h2><strong>{{ campaign.type }}</strong></h2>
            <b-card-text class="my-5 c-text">{{ campaign.description }}</b-card-text>
            <b-button @click="sendCampaign(campaign)"  class="c-button" >Subscribe</b-button>
            </b-card>
        </div>
        </div>
    </b-div>
</template>

<script>

	export default {

        name: "CampaignCard",

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
            },

             sendCampaign(campaign) {
                const myObj = {id: campaign.id, type: campaign.type, price: campaign.price};

                localStorage.setItem('myObj', JSON.stringify(myObj));

                console.log(myObj);

                window.location.href = '/payment';
            }

        }
    };

</script>
