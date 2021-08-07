
<div id="<?php echo 1; ?>"
     class="modal animated bounceIn game"
     tabindex="-1"
     role="dialog"
     aria-labelledby="'h'+<?php echo 1; ?>"
     aria-hidden="true">

  <!-- dialog -->
  <div class="modal-dialog">

    <!-- content -->
    <div class="modal-content">
      <!-- body -->
      <div class="modal-body">
      <iframe src="content/content.php" width="100%" height="100%" id="'fr' + <?php echo 1; ?>"  sandbox="allow-scripts allow-forms	 allow-same-origin" allowfullscreen></iframe>
      </div>
      <!-- body -->

      <!-- footer -->
      <div class="modal-footer">

        <button class="btn btn-danger"
                data-dismiss="modal" onclick="stopVideo('fr'+<?php echo 1; ?>)">
          Exit
        </button>
        <button class="btn btn-primary">
          Restart
        </button>
      </div>
      <!-- footer -->

    </div>
    <!-- content -->

  </div>
  <!-- dialog -->

</div>
