<?php include("partials/header.html") ?>
<main class="valign-wrapper">
  <div class="container">
  <div id="contact-container" class="section white">
    <!-- <div class="container"> -->
    <h2 class="header black-text">Contact</h2>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="full_name" type="text" class="validate">
              <label for="first_name">Full Name</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s6">
                <input id="email" type="email" class="validate">
                <label for="email" data-error="please enter an email" data-success="">Email</label>
              </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Message</label>
            </div>
          </div>
        </form>
      <!-- </div> -->
    </div>
  </div>
  </div>
</main>
<?php include("partials/footer.html") ?>
