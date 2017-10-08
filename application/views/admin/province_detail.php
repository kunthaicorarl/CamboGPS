<?php
$datetoday = date("Y/m/d");
?>
<div class="col-md-12">
<span><?= $title ?></span>
<a href="<?php echo base_url()."admin/province"; ?>" class="pull-right btn btn-success">Back</a>
</div>
<hr/>
<form action="<?php echo base_url()."admin/province/add_edit"; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label"><img width="300" height="150" src="<?php echo base_url()?>assets/images/<?php echo isset($data['thumbnail'])?$data['thumbnail']:"empty-image.png";?>"></label>
    </div>
    <hr/>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Postal Code</label>
      <label class="col-sm-10 col-form-label">
      <?php echo isset($data['postal_code'])?$data['postal_code']:"";?>
     </label>
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Khmer Title</label>
      <label class="col-sm-10 col-form-label">
      <?php echo isset($data['title_khmer'])?$data['title_khmer']:"";?>
     </label>
  
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Englist Title</label>
      <label class="col-sm-10 col-form-label">
      <?php echo isset($data['title_english'])?$data['title_english']:"";?>
     </label>
    </div>

    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Description Khmer</label>
      <label class="col-sm-10 col-form-label">
      <?php echo isset($data['description_khmer'])?$data['description_khmer']:"";?>
     </label>
    </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Description English</label>
      <label class="col-sm-10 col-form-label">
      <?php echo isset($data['description_english'])?$data['description_english']:"";?>
     </label>
    </div>
</form>

