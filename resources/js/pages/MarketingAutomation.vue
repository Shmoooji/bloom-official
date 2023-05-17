<template>
  <body>
  <div class="marketing-page">
    <div>
      <label for="exampleFormControlInput1" class="display-6">
        Automated Email</label>
    </div>
    <!--FORM!!!-->
  <div class="container">
    <form name="myForm" onsubmit="return validateForm()" method="post" required >
      <div class="form-group">
      <input type="text" v-model="emailTitle" class="email-subject form-control" id="exampleFormControlInput1" placeholder="Subject:">
  </div>
  <hr>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea v-model="emailBody" class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Say something convincing!"></textarea>
  </div>
  </form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            Automated Marketing
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        Marketing emails sent!
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

</div>
  </div>

  <!--BUTTON -->
  <button type="submit" value="Submit" onsubmit="validateForm()" @click="sendEmails" class="btn btn-secondary close-button" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
</body>
</template>
<script>
  //import Navbar from "../components/navbar.vue"
  import axios from 'axios';

//js for actual email sending
  export default {
  data() {
    return {
      emailTitle: "",
      emailBody: "",
      contacts: []
    };
  },
  mounted() {
    this.fetchContacts();
  },
  methods: {
    fetchContacts() {
      // EMAIL ENDPOINT HERE PLS CHRISTIANNNNNN THANJKS
      axios.get('YOUR_API_ENDPOINT/contacts')
        .then(response => {
          this.contacts = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    sendEmails() {
      // Loop each contact and send email
      this.contacts.forEach(contact => {
        this.sendEmail(contact.email, this.emailTitle, this.emailBody);
      });
    },
    sendEmail(email, title, body) {
      // Code to send email to the specified email address
      // IMPLEMENTATION FOR SENDING EMAILS TBH IDK THISSS!!
      console.log(`Sending email to ${email}`);
      console.log(`Title: ${title}`);
      console.log(`Body: ${body}`);
    }
  }
};

function validateForm(){
  var x = document.forms["myForm"]["email"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
}

</script>

<style scoped>
body {
  background-color: #3F4F34;
}
h1{
  color: #C88512;
}
  .close-button {
    margin-top: 2rem;
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
  .container{
    color: rgb(54, 54, 54);
    font-size: x-large;
    font-weight: 500;
    padding: 2rem;
    background-color: #86A760;
    border-radius: 20px;
    min-width: 80%;
    height: 45vh;
  }
  .email-subject{
    background-color: #86A760;
    border-color: #86A760;
  }
  .email-subject:active{
    border-color: #3F4F34;
    transition: 10s;
    
  }
  .display-6{
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


</style>
