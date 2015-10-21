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
<script src="https://www.onlinepayment.com.my/MOLPay/API/seamless/3.0/js/MOLPay_seamless.deco.js"></script>
<div class="text-center">
    <h3><u>Pay via</u><img src="admin/view/image/payment/molpay-logo.jpg">:</h3>
	<br/>

	<?php if($visa): ?>
	<button class="btn btn-default" type="button" id="myPay" data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="credit" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-visa-master.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<?php if($mb2u): ?>
	<button class="btn btn-default" type="button" id="myPay" data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="maybank2u" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-maybank.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<?php if($cimbclicks): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="cimbclicks" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-cimb.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<?php if($hlb): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="hlb" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-hongleong.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<?php if($rhbnow): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="rhb" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-rhb.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<!--<button type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="cash-711" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>">Pay via Cash 711</button>-->

	<?php if($amonline): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="amb" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-ambank.png" width="120px" height="60px"/></button>
	<?php endif; ?>

	<!--<button type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="affinonline" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>">Pay via AffinOnline</button>-->

	<?php if($fpx): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="fpx" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-mepsfpx.png" width="120px" height="60px"/>	</button>
	<?php endif; ?>

	<?php if($pbebank): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="pbb" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-publicbank.png" width="120px" height="60px"/>	</button>
	<?php endif; ?>

	<?php if($seveneleven): ?>
	<button class="btn btn-default" type="button" id="myPay"  data-toggle="molpayseamless" data-mpsmerchantid="<?php echo $mid; ?>" data-mpsbill_desc="<?php echo implode("\n",$prod_desc);?>" data-mpsbill_mobile="<?php echo $bill_mobile; ?>" data-mpsbill_email="<?php echo $bill_email; ?>" data-mpscountry="<?php echo $country; ?>" data-mpscurrency="<?php echo $currency;?>" data-mpschannel="cash-711" data-mpsamount="<?php echo $amount; ?>" data-mpsorderid="<?php echo $orderid; ?>" data-mpsbill_name="<?php echo $bill_name; ?>" data-mpsvcode="<?php echo $vcode?>"><img src="admin/view/image/payment/op-7e.png" width="120px" height="60px"/>	</button>
	<?php endif; ?>
	
</div>
