<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Game Info </h4>
    </div>
    <div class="panel-body">
        <form method="post" action="cart/update" role="form">
            <div class="row">
                <form class="" method="post" action="<?php echo base_url(); ?>cart/add/<?php echo $product->id; ?>">
                <div class="col-md-4 game text-center">

                    <div class="form-group">
                        <a href="">
                            <img class="" src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" style="width: 100%; height: 100%;">
                        </a>
                    </div>
                    <div class="form-group game-price">
                        <?php echo $product->price; ?> &dollar;
                    </div>
                    <div class="form-group ">
                        QTY : <input class="qty" type="number" name="" value="1" >
                    </div>

                    <div class="form-group game-add">
                        <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                    </div>

                </div>
                <div class="col-md-8 game">

                    <div class="form-group game-title" style="background: none;">
                        <h3>  <?php echo $product->title; ?> </h3>
                    </div>
                    <div class="form-group  game-description">
                        <?php echo $product->description; ?>
                    </div>

                </div>
                    <input type="hidden" name="item_number" value="<?php echo $product->id; ?>">
                    <input type="hidden" name="price" value="<?php echo $product->price; ?>">
                    <input type="hidden" name="title" value="<?php echo $product->title; ?>">
                </form>
            </div>
        </form>
    </div>


</div>