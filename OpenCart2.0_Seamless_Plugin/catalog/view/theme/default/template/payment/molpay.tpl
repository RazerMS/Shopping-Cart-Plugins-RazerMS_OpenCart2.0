<form action="<?php echo $action; ?>" method="post" id="payment">

  <input type="hidden" name="amount" value="<?php echo $amount; ?>" />
  <input type="hidden" name="orderid" value="<?php echo $orderid; ?>" />
  <input type="hidden" name="bill_name" value="<?php echo $bill_name; ?>" />
  <input type="hidden" name="bill_email" value="<?php echo $bill_email; ?>" />
  <input type="hidden" name="bill_mobile" value="<?php echo $bill_mobile; ?>" />
  <input type="hidden" name="country" value="<?php echo $country; ?>" />
  <input type="hidden" name="currency" value="<?php echo $currency;?>" />
  <input type="hidden" name="vcode" value="<?php echo $vcode?>">
  <input type="hidden" name="returnurl" value="<?php echo $returnurl; ?>" />

  <input type="hidden" name="bill_desc" value="<?php echo implode("\n",$prod_desc);?>" />
</form>
<script src="https://www.onlinepayment.com.my/MOLPay/API/seamless/latest/js/MOLPay_seamless.deco.js"></script>
<div class="text-center">
    <h3><u>Pay via</u><img src="admin/view/image/payment/molpay-logo.jpg">:</h3>
	<br/>
	
	<?php foreach($channel_list as $key=>$val): ?>
	
		<?php if($val == 1): ?>
			<button class="btn btn-default" type="button" id="myPay" data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="<?php echo $key; ?>" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>" data-mpsreturnurl="<?php echo $returnurl; ?>"><img src="admin/view/image/payment/op-<?php echo $key; ?>.png" width="120px" height="60px" alt="<?php echo $key; ?>"/></button>
		<?php endif; ?>

	<?php endforeach; ?>

</div>
