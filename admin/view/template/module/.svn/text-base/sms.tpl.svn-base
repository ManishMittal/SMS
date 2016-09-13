<!--
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
* */
-->
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-sms" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-sms" class="form-horizontal">
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_provider ?></label>
            <div class="col-sm-10">
              <select name="sms_status" id="input-status" class="form-control">
                <?php if ($sms_provider) { ?>
                <option value="1" selected="selected"><?php echo $text_mysmsmantra; ?></option>
                <option value="0"><?php echo $text_ibulksms; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_mysmsmantra; ?></option>
                <option value="0" selected="selected"><?php echo $text_ibulksms; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>	
		  <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-username"><?php echo $entry_username; ?></label>
            <div class="col-sm-10">
              <input type="text" name="sms_username" value="<?php echo $sms_username; ?>" placeholder="<?php echo $entry_username; ?>" id="input-username" class="form-control" />
              <?php if ($error_sms_username) { ?>
              <div class="text-danger"><?php echo $error_sms_username; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-sender-id"><?php echo $entry_sender_id; ?></label>
            <div class="col-sm-10">
              <input type="text" name="sms_sender_id" value="<?php echo $sms_sender_id; ?>" placeholder="<?php echo $entry_sender_id; ?>" id="input-sender-id" class="form-control" />
              <?php if ($error_sms_sender_id) { ?>
              <div class="text-danger"><?php echo $error_sms_sender_id; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password"><?php echo $entry_password; ?></label>
            <div class="col-sm-10">
		  	  <input type="text" name="sms_password" value="<?php echo $sms_password;?>" class="form-control" placeholder="<?php echo $entry_password; ?>" id="input-password"/>
		      <?php if ($error_sms_password) { ?>
              <div class="text-danger"><?php echo $error_sms_password; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-order-template"><?php echo $entry_order_template; ?></label>
            <div class="col-sm-10">
			  <input type="text" name="sms_order_template" value="<?php echo $sms_order_template;?>" class="form-control" placeholder="Dear %s Thank you for shopping at example.com! We would like to inform that your order %s is %s" id="input-order-template"/>
			  <?php if ($error_sms_order_template) { ?>
              <div class="text-danger"><?php echo $error_sms_order_template; ?></div>
              <?php } ?>
             </div>
          </div>
           <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-register-template"><?php echo $entry_register_template; ?></label>
            <div class="col-sm-10">
			  <input type="text" name="sms_register_template" value="<?php echo $sms_register_template;?>" class="form-control" placeholder="Dear %s Welcome to example.com, use the following details when prompted to login, Username: %s Password: %s" id="input-order-template"/>
			  <?php if ($error_sms_register_template) { ?>
              <div class="text-danger"><?php echo $error_sms_register_template; ?></div>
              <?php } ?>
             </div>
          </div>
           <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-delivery_template"><?php echo $entry_delivery_template; ?></label>
            <div class="col-sm-10">
			  <input type="text" name="sms_delivery_template" value="<?php echo $sms_delivery_template;?>" class="form-control" placeholder="Dear %s Thank you for shopping at example.com! We would like to inform that your order %s has been %s" id="input-delivery-template"/>
			  <?php if ($error_sms_delivery_template) { ?>
              <div class="text-danger"><?php echo $error_sms_delivery_template; ?></div>
              <?php } ?>
             </div>
          </div>					
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="sms_status" id="input-status" class="form-control">
                <?php if ($sms_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-sm-10"><strong>Note : Please replace %%% or ### to %s in SMS template. For example <br>dear  %%%%%  thanks for registering.your user name  %%%%  your password %%%% <br> Template to be set is :  dear  %s  thanks for registering.your user name  %s  your password %s.</strong></div>
         </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
