
      <footer class="mdl-mega-footer">

        <div class="mdl-mega-footer--middle-section">
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Features</h1>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">Updates</a></li>
            </ul>
          </div>
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Details</h1>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">Spec</a></li>
              <li><a href="#">Tools</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">Technology</h1>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">How it works</a></li>
              <li><a href="#">Patterns</a></li>
              <li><a href="#">Usage</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Contracts</a></li>
            </ul>
          </div>
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer--heading">FAQ</h1>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">Questions</a></li>
              <li><a href="#">Answers</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="mdl-mega-footer--bottom-section">
          <div class="mdl-logo">
            More Information
          </div>
          <ul class="mdl-mega-footer--link-list">
            <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy and Terms</a></li>
          </ul>
        </div>
      </footer>
      </main>
    </div>
    <!-- <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/text-only/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a> -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->

    <script type="text/javascript">
      $(document).ready(function() {
        $(".add-to-cart").click(function() {
          var id = $(this).attr("data-id");
          $.post("/cart/addAjax/" + id, {}, function(data) {
            $("#cart-count").html(data);
          });
          return false;
        });
      });

      $(document).ready(function() {
        $(".create-comm").click(function() {
          $(".create-comm-field").hide();
          $(".edit-comm-field").hide();
          $(".removal-request").hide();
          $(this).parent().next().show();
        });
      });

      // $(document).ready(function() {
      //   $(".create-comm-confirm").click(function() {
      //     var id = $(this).attr("data-id");
      //     $.post("/comment/create/",
      //     {
      //
      //     },
      //     function(data) {
      //
      //     });
      //     $(this).parent().parent().parent().remove();
      //   });
      // });

      $(document).ready(function() {
        $(".edit-comm").click(function() {
          $(".create-comm-field").hide();
          $(".edit-comm-field").hide();
          $(".removal-request").hide();
          $(this).parent().next().show();
        });
      });

      $(document).ready(function() {
        $(".del-comm").click(function() {
          $(".create-comm-field").hide();
          $(".edit-comm-field").hide();
          $(".removal-request").hide();
          $(this).next().show();
        });
      });

      $(document).ready(function() {
        $(".removal-request-cancel").click(function() {
          $(".removal-request").hide();
        });
      });

      $(document).ready(function() {
        $(".removal-request-confirm").click(function() {
          var id = $(this).attr("data-id");
          $.post("/comment/del/" + id, {}, function(data) {
          });
          $(this).parent().parent().parent().remove();
        });
      });
    </script>

  </body>
</html>
