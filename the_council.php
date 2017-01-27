<?php include("partials/header.php") ?>
<main class="white">
  <div class="container center-align">
    <h1>The Council</h1>
    <p class="flow-text">
      In our effort to serve the College of Science here at Purdue University,
      we have segregated the responsibilities of the council among our members through committees
    </p>
  </div>
  <div class="container hide-on-small-only">
  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Executive Board</h7></div>
      <div class="collapsible-body center-align brown lighten-5">
        <?php include("members/xcomm.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown white-text valign-wrapper"><h7>Campus Outreach</h7></div>
      <div class="collapsible-body center-align brown lighten-5">
        <?php include("members/campus.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Community Outreach</h7></div>
      <div class="collapsible-body center-align brown lighten-5">
        <?php include("members/community.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown white-text valign-wrapper"><h7>Fundraising and Publicity</h7></div>
      <div class="collapsible-body center-align brown lighten-5">
        <?php include("members/publicity.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Network and Career Outreach</h7></div>
      <div class="collapsible-body center-align brown lighten-5">
        <?php include("members/nco.html") ?>
      </div>
    </li>
  </ul>

  </div>


  <div class="mobile hide-on-med-and-up">

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Executive Board</h7></div>
      <div class="collapsible-body">
        <?php include("members/xcomm.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Campus Outreach</h7></div>
      <div class="collapsible-body">
        <?php include("members/campus.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Community Outreach</h7></div>
      <div class="collapsible-body">
        <?php include("members/community.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Publicity and Fundraising</h7></div>
      <div class="collapsible-body">
        <?php include("members/publicity.html") ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header brown darken-1 white-text valign-wrapper"><h7>Network and Career Outreach</h7></div>
      <div class="collapsible-body">
        <?php include("members/nco.html") ?>
      </div>
    </li>
  </ul>

  </div>
</main>


<?php include("partials/footer.html") ?>
