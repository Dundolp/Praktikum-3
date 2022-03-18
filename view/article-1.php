<?php 
require_once '../layout/header.php'
?>

<div class="d-flex flex-column justify-content-center mt-5">
  <h1 class="text-center mb-5">Masukkan Tugas Anda</h1>
  <form class="col-5 mx-auto">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label text-end">Tugas</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="date" class="col-4 col-form-label text-end">Deadline</label> 
    <div class="col-8">
      <input id="date" name="deadline" type="date" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row mt-3">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>

  <?php 
require_once '../layout/footer.php'
?>