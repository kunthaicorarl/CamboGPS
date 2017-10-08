      <?php if($this->session->flashdata("message")){?>
        <div class="alert alert-success alert-dismissible"  role="alert">      
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $this->session->flashdata("message")?>
        </div>
      <?php } ?>

<a href="<?php echo base_url();?>admin/link/edit" class="btn btn-success pull-right"><span class="fa fa-plus"></span></a>
<h3><?= $title ?></h3>
<hr/>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>File</th>
      <th>Date</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($getdata as $result) : ?>
    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['title']; ?></td>
      <td><?php echo $result['size']; echo $result['type'] ?></td>
      <td><?php echo $result['date']; ?></td>
      <td class="pull-right">
          <a class="btn btn-primary btn-sm" target="_blank" href="<?php echo base_url();?>slink/detail/<?php echo $result['id']; ?>"><span class="fa fa-eye"></a>
          <a class="btn btn-info btn-sm" target="_blank" href="#">
            <span class="fa fa-edit">
          </a>
          <a onclick="return confirm('Are you sure to delete this post.');" href="<?php echo base_url();?>admin/link/delete/<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">
            <span class="fa fa-trash">
          </a>
      </td>
    </tr>
  <?php endforeach; ?>  
  </tbody>
</table>
