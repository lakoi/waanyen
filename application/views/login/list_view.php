
<?php if($this->session->userdata('Status')=="HIGH_ADMIN" || $this->session->userdata('Status')=="ADMIN_FONT"):?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/slide';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
            slide
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-4" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/about';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
          about
          </a>
        </div>
        <div class="col-sm-4" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/news';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
          news
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/centre';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
            centre
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/product';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
            product
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/join';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
            join
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="padding:0px; height:300px; display:table; border:1px solid #000;">
          <a href="<?php echo base_url().'backs/footer';?>" class="home-hover" style="font-size:82px; text-align:center; display:table-cell; vertical-align:middle; height:300px;">
            footer
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif;?>

<?php if($this->session->userdata('Status')=="USER")
{
  echo "You are USER";
}?>
