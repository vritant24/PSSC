<?php include("partials/header.php") ?>
<main class="">
  <div class="container">
    <div class="center-align">
      <h1>Contact Us</h1>
      <br>
      <br>
    </div>
  <div id="contact-container" class="section">
    <!-- <div class="container"> -->
    <!-- <h2 class="header black-text">Contact Us</h2> -->
    <div class="center-align">
      <h3>Feel that tingling in your fingertips?</h3>
      <h4>That's the magnetic urge to <span class="red-text">Contact Us</span></h4>
      <br>
    </div>
      <div class="row">
        <!-- <div class="col s12">
          <p class="grey-text">Just fill this form and we'll get back to you soon</p>
          <br>
        </div> -->
        <form class="col s12" method="POST" action="contact_submit.php">
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="full_name" type="text" name="fullName" class="validate">
              <label for="first_name"> Your Full Name</label>
            </div>
              <div class="input-field col s12 m6">
                <input id="email" type="email" name="email" class="validate">
                <label for="email" data-error="please enter an email" data-success="">Your Email</label>
              </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
              <label for="textarea1">Your Message</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Send
            <i class="material-icons right">send</i>
          </button>
        </form>
      <!-- </div> -->
    </div>
  </div>
  </div>
</main>
<?php include("partials/footer.html") ?>
