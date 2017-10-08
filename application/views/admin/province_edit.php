<?php
$datetoday = date("Y/m/d");
?>

<h3><?= $title ?></h3><hr/>
<form action="<?php echo base_url()."admin/province/add_edit"; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" class="form-control" value="<?php echo isset($data['id'])?$data['id']:"";?>" id="id" name="id"/>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Postal Code</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo isset($data['postal_code'])?$data['postal_code']:"";?>" id="postal_code" name="postal_code" placeholder="Postal Code">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Khmer Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo isset($data['title_khmer'])?$data['title_khmer']:"";?>" id="title_khmer" name="title_khmer" placeholder="Khmer title">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Englist Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo isset($data['title_english'])?$data['title_english']:"";?>" id="title_english" name="title_english" placeholder="English title">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Thumbnail</label>
      <div class="col-sm-10">
        <!-- <button class="btn btn-success" ng-click="addImageModal()">Add Image</button> -->
      <input type="file" accept="image/*" class="form-control" onchange="loadFile(event)" id="thumbnail"  name="thumbnail"/>

<img id="output" width="320" heihgt="320" src="<?=base_url()?>assets/images/<?php echo isset($data['thumbnail'])?$data['thumbnail']:"";?>"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Description Khmer</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description_khmer" name="description_khmer" rows="5" placeholder="Description Khmer"><?php echo isset($data['description_khmer'])?$data['description_khmer']:"";?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Description English</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description_english" name="description_english" rows="5" placeholder="Description English"><?php echo isset($data['description_english'])?$data['description_english']:"";?></textarea>
      </div>
    </div>
    <button type="submit" name="save" class="btn btn-info pull-right">Public</button>
</form>

