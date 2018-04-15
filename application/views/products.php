<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Latest Release </h4>
    </div>

    <div class="panel-body">

        <?php foreach ($products as $product)  : ?>


                <div class="col-md-3 game text-center">
                    <div class="game-price">
                        <?php echo $product->price; ?> &dollar;
                    </div>
                    <a href="product.html">
                        <img class=""  src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" >
                    </a>
                    <div class="game-title">
                        <?php echo $product->title; ?>
                    </div>
                    <div class="game-add">
                        <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                    </div>
                </div>


        <?php endforeach;  ?>


  <!--      <div class="row">
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" >
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" >
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" >
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center game">
                <div class="game-price">
                    49 &dollar;
                </div>
                <a href="product.html">
                    <img class="" src="images/uncharted4.jpg" width="100%">
                </a>
                <div class="game-title">
                    Uncharted 4
                </div>
                <div class="game-add">
                    <button class="btn btn-primary" type="submit"> + Add to Cart</button>
                </div>
            </div>
        </div>

        -->
    </div>
</div>