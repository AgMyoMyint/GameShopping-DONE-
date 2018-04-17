
<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Latest Release </h4>
    </div>

    <div class="panel-body">
        <?php    if($this->session->flashdata('registered')) :  ?>
            <div class="alert alert-success">
                <?php    echo $this->session->flashdata('registered');  ?>
            </div>

        <?php endif; ?>
        <?php    if($this->session->flashdata('loginfailed')) :  ?>
            <div class="alert alert-danger">
                <?php    echo $this->session->flashdata('loginfailed');  ?>
            </div>

        <?php endif; ?>
        <?php foreach ($products as $product)  : ?>


            <div class="col-md-3 game text-center">
                <form method="post" action="<?php echo base_url(); ?>cart/add/<?php echo $product->id; ?>">
                    <div class="game-price">
                        <?php echo $product->price; ?> &dollar;
                    </div>
                    <a href="<?php echo base_url(); ?>products/details/<?php echo $product->id; ?>">
                        <img class=""  src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" >
                    </a>
                    <div class="game-title">
                        <?php echo $product->title; ?>
                    </div>
                    <div class="form-group">
                        QTY : <input class="qty" type="number" name="qty" value="0" >
                    </div>
                    <input type="hidden" name="item_number" value="<?php echo $product->id; ?>">
                    <input type="hidden" name="price" value="<?php echo $product->price; ?>">
                    <input type="hidden" name="title" value="<?php echo $product->title; ?>">
                    <div class="game-add">
                        <button class="btn btn-primary" type="submit"> + Add to Cart </button>
                    </div>
                </form>
            </div>


        <?php endforeach;  ?>


    </div>
</div>