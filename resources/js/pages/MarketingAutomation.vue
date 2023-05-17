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
    font-weight: 600;
    height: 2.1rem;
    width: 2.1rem;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 50%;
    padding: 0;
    transform: translate(-50%, -50%);
    background-color: #86A760;
    color: #3F4F34;
  }
  .marketing-page {
    margin-top: 10rem;
  }
  .sendbutton {
    border-radius: 50%;}
  .container {
    color: rgb(54, 54, 54);
    font-size: x-large;
    font-weight: 500;
    padding: 2rem;
    background-color: #86A760;
    border-radius: 20px;
    min-width: 80%;
    height: 30rem;
  }

  .email-subject {
    background-color: #86A760;
    border-color: #86A760;
  }

  .email-subject:active {
    border-color: #3F4F34;
    transition: 10s;
  }

  .display-6 {
    padding: 5px;
    border-radius: 20px;
    color: #C88512;
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  hr{
    border-width: 2px;
    border-color: rgb(0, 0, 0);
  }
  /* Media queries */
@media screen and (max-width: 768px) {
  .marketing-page {
    margin-top: 5rem;
  }

  .container {
    min-width: 90%;
    height: 70vh;
  }
}

@media screen and (max-width: 576px) {
  .marketing-page {
    margin-top: 3rem;
  }

  .container {
    min-width: 100%;
    height: 80vh;
  }
}
</style>
