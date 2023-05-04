<template>
  <div class="marketing-page">
      <div>
        <Navbar />
      </div>
      <div>
      <label for="exampleFormControlInput1" class="display-6">
        Automated Email</label>
    </div>
    <!--FORM!!!-->
  <div class="container">
    <form name="myForm" onsubmit="return validateForm()" method="post" required >
      <div class="form-group">
      <input type="text" class="email-subject form-control" id="exampleFormControlInput1" placeholder="Subject:">
  </div>
  <hr>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Say something convincing!"></textarea>
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
  <button type="submit" value="Submit" onsubmit="validateForm()" class="btn btn-secondary close-button" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
</template>
<script>
  import Navbar from "../components/navbar.vue"
  

  export default {
    components: {
      Navbar
    }
  }

  function validateForm(){
  var x = document.forms["myForm"]["email"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
}
</script>

<style scoped>
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
    top: 50%;
    left: 50%;
    padding: 0;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
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
    padding: 1.5rem;
    background-color: rgb(219, 219, 219);
  border-radius: 20px;
  }
  .email-subject{
    background-color: rgb(219, 219, 219);
    border-color: rgb(219, 219, 219);
    
  }
  .email-subject:active{
    border-color: black;
    transition: 10s;
  }
  .display-6{
    padding: 5px;
    border-radius: 20px;
    color: rgb(0, 0, 0);
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