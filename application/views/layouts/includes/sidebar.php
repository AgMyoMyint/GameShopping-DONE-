
<div class="block">
    <form method="post" action="cart/update" role="form">
        <div class="row">
            <table class="table table-responsive" cellpadding="6" cellspacing="1" style="width:100%;">
                <thead >
                <tr>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Description</th>
                    <th class="text-center" >Price</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                <?php if ($this->cart->contents()) : ?>
                <?php foreach($this->cart->contents() as $items) : ?>
                    <input type="hidden"  name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>">
                    <tr>
                        <td class="" style="width: 20%;">
                            <input class="qty text-center" style="width: 100%;" type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" >
                        </td>
                        <td class=""  style="width: 50%;">  <?php echo $items['name']; ?> </td>
                        <td class="right" style="text-align: right;width: 30%;">
                            <?php echo $this->cart->format_number($items['price']*$items['qty']); ?> &dollar;
                        </td>
                    </tr>

                    <?php $i++; ?>
                <?php endforeach; ?>

                <?php else : ?>
                    <tr >
                        <td colspan="3"> <em>There is no item in the cart</em></td>
                    </tr>

                <?php endif; ?>

                <tr>
                    <td class="right"></td>
                    <td><strong> Total </strong></td>
                    <td class="right" style="text-align: right;"> <strong> <?php echo $this->cart->format_number($this->cart->total()); ?>  &dollar; </strong></td>
                </tr>

                </tbody>

            </table>
        </div>


        <div class="row text-center">
            <div class="cart-button col-md-6 col-sm-6 col-xs-6"> <input type="submit" class="btn btn-primary" value="Update Cart"> </div>
            <div class="cart-button col-md-6 col-sm-6 col-xs-6"> <a href="<?php echo base_url(); ?>cart" class="btn btn-primary">Go to Cart</a></div>

        </div>
    </form>

</div>


<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Categories </h4>
    </div>
    <div class="list-group">
        <a href="<?php echo base_url(); ?>" class="list-group-item active"> All <!--<span class="badge pull-right">14</span>--> </a>
        <?php foreach (get_categories_h() as $category) : ?>
            <a href="<?php echo base_url(); ?>products/category/<?php echo $category->id; ?>"
               class="list-group-item">
                <?php echo $category->name; ?>

            </a>
        <?php endforeach; ?>


    </div>
</div>

<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Most Popular </h4>
    </div>
    <div class="list-group">
        <?php foreach (get_popular_h() as $popular) : ?>
            <a href="<?php echo base_url(); ?>products/details/<?php echo $popular->id; ?>" class="list-group-item "><?php echo $popular->title; ?>  </a>
        <?php endforeach; ?>




    </div>
</div>


