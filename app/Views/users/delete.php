<?=$this->extend('layout/main')?>

<?=$this->section('content')?>

<div class="container">
    <h3 class="mt-5">Are you sure you want to delete this user?</h3>

    <form action="<?=base_url()?>user/delete/<?=$users->user_id?>" method="post">
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$users->first_name?>">
    </div>
    <div class="mb-3">
      <label for="middle_name" class="form-label">Middle Name</label>
      <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=$users->middle_name?>">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="<?=$users->last_name?>">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="text" class="form-control" id="age" name="age" value="<?=$users->age?>">
      <div class="mb-3">
      <label for="gender_id" class="form-label">Gender</label>
      <input type="text" class="form-control" id="gender_id" name="gender_id" value="<?=$users->gender_id?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?=$users->email?>">
  </div>
  <button type="submit" class="btn btn-danger">Delete</button>
  <a href="<?=base_url()?>/" class="btn btn-primary">Go Back</a>
  </form>

</div>

<?=$this->endSection('content')?>