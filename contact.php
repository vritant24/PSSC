<?php include("partials/header.html") ?>
<main class="valign-wrapper">
  <div class="container">
  <div id="contact-container" class="section white">
    <!-- <div class="container"> -->
    <h2 class="header black-text">Contact</h2>
      <div class="row">
        <form class="col s12" method="POST" action="contact_submit.php">
          <div class="row">
            <div class="input-field col s6">
              <input id="full_name" type="text" name="fullName" class="validate">
              <label for="first_name"> Your Full Name</label>
            </div>
              <div class="input-field col s6">
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
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      <!-- </div> -->
    </div>
  </div>
  </div>
</main>
<?php include("partials/footer.html") ?>
