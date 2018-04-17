<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Cart Information </h4>
    </div>
    <div class="panel-body">
        <div class="row" style="padding : 10px;">

            <table class="table table-striped table-dark table-responsive" cellpadding="6" cellspacing="1" border="0" >
                <thead >
                <tr>
                    <th class="col" style="text-align: center;">Product</th>
                    <th class="col" style="text-align: center;">Qty</th>
                    <th class="col" style="text-align: center;">Price</th>
                </tr>
                </thead>
                <tbody>

                <tr>

                    <td> Game 0 </td>
                    <td style="text-align: right;"> 30 </td>
                    <td class="right" style="text-align: right;"> 100 &dollar;</td>
                </tr>
                <tr>

                    <td> Game 1 </td>
                    <td style="text-align: right;"> 3 </td>
                    <td class="right" style="text-align: right;"> 20 &dollar;</td>
                </tr>
                <tr >

                    <td> Game 2 </td>
                    <td style="text-align: right;"> 2 </td>
                    <td class="right" style="text-align: right;"> 100 &dollar;</td>
                </tr>
                <tr>

                    <td>  Game 3  </td>
                    <td style="text-align: right;"> 1 </td>
                    <td class="right" style="text-align: right;"> 30 &dollar;</td>
                </tr>
                <tr>

                    <td> Game 4 </td>
                    <td style="text-align: right;"> 20 </td>
                    <td class="right" style="text-align: right;"> 50 &dollar;</td>
                </tr>


                <tr>
                    <td  colspan="3" class="cart-subtotal">SubTotal : 230 &dollar;</td>

                </tr>
                <tr>
                    <td  colspan="3" class="cart-shipping">Shipping : 230 &dollar;</td>

                </tr>
                <tr>
                    <td colspan="3" class="cart-total">Total : 230 &dollar;</td>

                </tr>
                </tbody>

            </table>



        </div>
        <div class="row" style="padding : 10px;">
            <div class="form-group">

                <h3>Shipping Info</h3>
            </div>
            <div class="form-group">
                <form method="post" action="cart/update" role="form">
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
                </form>
            </div>
        </div>
    </div>

</div>