<?php
$datetoday = date("Y/m/d");
?>

<h3><?= $title ?></h3><hr/>
<form action="<?php echo base_url()."admin/tourism/add_edit"; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" class="form-control" value="<?php echo isset($data['id'])?$data['id']:"";?>" id="id" name="id"/>
<input type="hidden" class="form-control" value="9" id="user_id" name="user_id"/>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Provinces</label>
      <div class="col-sm-10">
       <select class="col-sm-2 col-form-label">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
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
      <input type="file" accept="image/*" class="form-control" onchange="loadFile(event)" id="thumbnail"  name="thumbnail" multiple/>
<div id="result">
</div>
<img id="output" width="320" heihgt="320" src="<?=base_url()?>assets/images/<?php echo isset($data['thumbnail'])?$data['thumbnail']:"";?>"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    for(var i=0;i<event.target.files.length;i++){
    	 var picFile = event.target;
         var div = document.createElement("div");
         div.innerHTML = “<img class='thumbnail' src='" + picFile.result + "'" +
         "title='" + picFile.name + "'/>";
         output.insertBefore(div,null);
    }
   
  };
</script>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Location</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" value="<?php echo isset($data['latitude'])?$data['latitude']:"";?>" id="latitude" name="latitude" placeholder="Latitude">
      </div>
      <div class="col-sm-5">
        <input type="text" class="form-control" value="<?php echo isset($data['longitude'])?$data['longitude']:"";?>" id="longitude" name="longitude" placeholder="Longitude">
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
    
     <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Address Khmer</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="address_khmer" name="address_khmer" rows="5" placeholder="Address Khmer"><?php echo isset($data['address_khmer'])?$data['address_khmer']:"";?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Address English</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="address_english" name="address_english" rows="5" placeholder="Address English"><?php echo isset($data['address_english'])?$data['address_english']:"";?></textarea>
      </div>
    </div>
    <button type="submit" name="save" class="btn btn-info pull-right">Public</button>
</form>

