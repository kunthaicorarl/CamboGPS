<?php $this->load->view('header');?>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
        <div class="list-group">
        <a href="#" class="list-group-item active">
          Menu for Admin
        </a>
        <a href="<?php echo base_url();?>admin/province" class="list-group-item list-group-item-action">Province</a>
        <a href="<?php echo base_url();?>admin/link" class="list-group-item list-group-item-action">Link Download</a>
        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
      </div>    
    </div>
    <div class="col-lg-9">
        <?php 
            echo $page_content;
        ?>      
    </div>
  </div>
</div>

<?php $this->load->view('footer');?>
