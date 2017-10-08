<?php
$datetoday = date("Y/m/d");
?>


<h3>Other Link For Download</h3><hr/>
<form action="<?php echo base_url()."admin/link/add_edit"; ?>" method="post" enctype="multipart/form-data">

    <div class="form-group row">
      <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo isset($data->title)?$data->title:"";?>" id="inputTitle" name="title" placeholder="Title">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputURL" class="col-sm-2 col-form-label">File URL</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo isset($data->url)?$data->url:"";?>" id="inputURL" name="url" placeholder="URL Link">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputSize" class="col-sm-2 col-form-label">File Size</label>
      <div class="col-sm-10">
        <div class="row">
        	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">
        		<input type="text" class="form-control" id="inputSize" name="size" placeholder="File Size">
        	</div>
	        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
	        	  <select class="form-control" name="type" id="inlineFormCustomSelectPref">
				    <option value="KB">KB</option>
				    <option value="MB" selected>MB</option>
				    <option value="GB">GB</option>
				  </select>
	        </div> 
        </div>       
      </div>
    </div>
     <div class="form-group row">
      <label for="inputDate" class="col-sm-2 col-form-label">Date / Time</label>
      <div class="col-sm-10">
        <input type="text" name="date" value="<?php echo $datetoday;?>" class="form-control" id="inputDate" placeholder="Date">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputCountry" class="col-sm-2 col-form-label">Coutry</label>
      <div class="col-sm-10">
        <select class="form-control" name="country" id="inputCountry">
		  <option value="Cambodia">Cambodia</option>
		  <option selected value="Thailand">Thailand</option>
      <option value="China">China</option>
      <option value="Korea">Korea</option>
      <option value="India">India</option>
		  <option value="United States">United States</option>
		</select>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="inputDesc" name="desc" rows="5" placeholder="Description"></textarea>
      </div>
    </div>
    <button type="submit" name="save" class="btn btn-info pull-right">Public</button>
</form>

