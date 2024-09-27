<?php 
if(isset($_SESSION['success'])) : ?>


<div class="modal" tabindex="-1" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Authentification Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?= $_SESSION['success'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php unset($_SESSION['success']);
endif; ?>

<?php 
if(isset($_SESSION['error'])) : ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?= $_SESSION['error'] ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION['error']);
endif; ?>