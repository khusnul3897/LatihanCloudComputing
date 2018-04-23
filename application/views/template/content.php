<?php 
    $this->load->view('template/header');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
<?php

    $this->load->view($content);
?>
</div>
</div>
</div>

<?php 
    $this->load->view('template/footer');
?>