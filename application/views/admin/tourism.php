      <?php if($this->session->flashdata("message")){?>
        <div class="alert alert-success alert-dismissible"  role="alert">      
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $this->session->flashdata("message")?>
        </div>
      <?php } ?>

<a href="<?php echo base_url();?>admin/tourism/edit" class="btn btn-success pull-right"><span class="fa fa-plus"></span></a>
<h3><?= $title ?></h3>
<hr/>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>IsActive</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($getdata as $result) : ?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td>
      <div class="row">
      <div class="col-md-2">
         <img src="<?=base_url()?>assets/images/<?=isset($result['thumbnail'])?$result['thumbnail']:"empty-image.png"?>"  width="60" height="45"/>
        </div>
        <div class="col-md-8" style="margin-left: 21px;">
        <?php echo $result['title_khmer']; ?>
      <br/><?php echo $result['title_english']; ?>
        </div>
      </div>
      </td>
      <td><?php echo $result['description_khmer']; ?>
      <br/><?php echo $result['description_english']; ?></td>
      <td><?php echo $result['status']==1?'Active':'InActive'; ?></td>
      <td class="pull-right">
          <a class="btn btn-primary btn-sm"  href="<?php echo base_url();?>admin/province/detail/<?php echo $result['id']; ?>"><span class="fa fa-eye"></a>
          <a class="btn btn-info btn-sm"  href="<?php echo base_url();?>admin/province/edit/<?php echo $result['id']; ?>">
            <span class="fa fa-edit">
          </a>
          <a onclick="return confirm('Are you sure to delete this post.');" href="<?php echo base_url();?>admin/province/delete/<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">
            <span class="fa fa-trash">
          </a>
      </td>
    </tr>
  <?php endforeach; ?>  
  </tbody>
</table>
