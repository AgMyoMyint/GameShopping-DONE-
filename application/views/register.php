<div class="panel panel-default panel-list">

    <div class="panel-heading panel-heading-dark">
        <h4 class=""> Create an Account </h4>
    </div>
    <div class="panel-body">
        <?php echo validation_errors('<div class="alert alert-danger"> !!!  ',' </div>'); ?>
        <form method="post" action="<?php echo base_url();?>users/register" role="form">
            <div class="form-group">
                <label> First Name* </label>
                <input  name="fname" type="text" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label> Last Name* </label>
                <input name="lname"  type="text" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label> Email Address* </label>
                <input  name="email" type="email" class="form-control" placeholder="Enter Email Address">
            </div>
            <div class="form-group">
                <label> Choose Username* </label>
                <input name="username"  type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label> Password* </label>
                <input name="password"  type="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label> Confirm Password* </label>
                <input name="password2" type="password" class="form-control" placeholder="Enter Password Again">
            </div>
            <div class="form-group">
                <input name="submit" type="submit" value="Create An Account" class="btn btn-primary">
            </div>
        </form>
    </div>


</div>
