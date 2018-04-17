<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Cart Information </h4>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php echo base_url(); ?>cart/process" role="form">
            <div class="row" style="padding : 10px;">

                <table class="table table-responsive" cellpadding="6" cellspacing="1" border="0" >
                    <thead >
                    <tr>
                        <th class="col" style="">Product</th>
                        <th class="col" style="">Qty</th>
                        <th class="col" style="">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php if ($this->cart->contents()) : ?>
                        <?php foreach($this->cart->contents() as $items) : ?>
                            <tr>
                                <td class=""  style="width: 70%;">  <?php echo $items['name']; ?> </td>
                                <td class="text-center" style="width: 15%;"><?php echo $items['qty']; ?> </td>

                                <td class="right" style="text-align: right;width: 15%;">  <?php echo $this->cart->format_number($items['price']*$items['qty']); ?> &dollar;</td>
                            </tr>

                            <input type="hidden" name='item_name[<?php echo $i; ?>]' value="<?php echo $items['name']; ?>">
                            <input type="hidden" name='item_code[<?php echo $i; ?>]' value="<?php echo $items['id']; ?>">
                            <input type="hidden" name='item_qty[<?php echo $i; ?>]' value="<?php echo $items['qty']; ?>">

                        <?php endforeach; ?>
                        <tr>

                            <td  colspan="2" class="cart-shipping" style="text-align: right;">Tax </td>
                            <td class="right" style="text-align: right;width: 15%;">   &dollar;</td>

                        </tr>

                        <tr>
                            <td  colspan="2" class="cart-shipping" style="text-align: right;">Shipping </td>
                            <td class="right" style="text-align: right;width: 15%;">   &dollar;</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="cart-total" style="text-align: right;">Total</td>
                            <td class="right" style="text-align: right;width: 15%;">   &dollar;</td>
                        </tr>
                    <?php else : ?>
                        <tr >
                            <td colspan="3"> <em>There is no item in the cart</em></td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>



            </div>
            <div class="row" style="padding : 10px;">
                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="form-group">
                        <h3>Shipping Info</h3>
                    </div>
                    <div class="form-group">

                        <div class="form-group">
                            <label> Address </label>
                            <input name="address" type="text" class="form-control" placeholder="Enter  Address">
                        </div>
                        <div class="form-group">
                            <label> Address 2</label>
                            <input name="address2" type="text" class="form-control" placeholder="Enter  Another Address">
                        </div>
                        <div class="form-group">
                            <label> City </label>
                            <input name="city" type="text" class="form-control" placeholder="Enter  City">
                        </div>
                        <div class="form-group">
                            <label> State </label>
                            <input name="state" type="text" class="form-control" placeholder="Enter State">
                        </div>
                        <div class="form-group">
                            <label> Zip Code </label>
                            <input name="zipcode" type="text" class="form-control" placeholder="Enter Zip Code">
                        </div>

                        <div class="form-group">
                            <input name="Checkout" type="submit" value="Check Out" class="btn btn-primary">
                        </div>

                    </div>
                <?php else : ?>
                    <div class="form-group">
                        <p> <em>You need to create an account or log in to order.</em></p>
                        <p> <em>To create an account ,  </em> <a class="btn btn-primary" href="<?php echo base_url(); ?>users/register">Create and Account</a></p>

                    </div>
                <?php endif; ?>
            </div>
        </form>
    </div>

</div>