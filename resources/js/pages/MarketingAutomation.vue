<template>
    <div class="marketing-page">
        <div>
            <NavBar />
        </div>

        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Subject"
                    />
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"
                        placeholder="Say something convincing!"
                    ></textarea>
                </div>
            </form>
            <button
                type="button"
                class="btn btn-secondary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                Send
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Marketing Automation
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>

                        <div class="modal-body">Marketing emails sent!</div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBar from "../components/NavBar.vue";
export default {
    name: "MarketingAutomation",
    components: {
        NavBar,
    },
};
</script>

<style scoped>
.sendbutton {
    border-radius: 50%;
}
</style>
