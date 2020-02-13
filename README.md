MOLPay OpenCart Plugin v2.0
==============================
![opencart](https://user-images.githubusercontent.com/38641542/74417583-ebadb900-4e81-11ea-94b4-249009025b48.jpg)
![Screenshot for Opencart2.0 Seamless Plugin](https://cloud.githubusercontent.com/assets/6263224/5717583/333763e0-9b3e-11e4-8cbc-214294083ddf.jpg)

MOLPay Plugin for OpenCart Shopping Cart develop by MOLPay technical team.

Supported version
-----------------
New Update

- Opencart Seamless Plugin

- OpenCart version 2.x

Notes
-----
MOLPay Sdn. Bhd. is not responsible for any problems that might arise from the use of this module. 
Use at your own risk. Please backup any critical data before proceeding. For any query or 
assistance, please email support@molpay.com

System Requirements
--------------------
PHP (at least 5.2) <br>
Curl

Installations
-------------
1. Download from [dist](https://github.com/MOLPay/OpenCart2.0_Plugin/tree/master/dist) folder or clone this repository. Copy all the file and paste it at your opencart root directory.  
`<OpenCart_DIR>/admin/*`  
`<OpenCart_DIR>/catalog/*`

2. Login to OpenCart administration, click on extension menu and click on Payments submenu.

3. You will see list of payment method available on your OpenCart. Click on [Install] link for MOLPay Online Payment Gateway (Visa, MasterCard, Maybank2u, MEPS, FPX, etc) to install this module into your online store.  

4. After you’ve successfully install this module, you need to click on [Edit] link for MOLPay Payment Gateway option to configure this payment module in your OpenCart online store.

5. Fill in your MOLPay Merchant ID & MOLPay Verify Key into the respective fields.

6. Log in your merchant account at https://portal.molpay.com. Click Transaction > Transaction Settings > Endpoint setting.

7. Click on the MERCHANT PROFILE menu. Fill in return URL and Callback URL with your shopping cart URL.

``Return URL : http://xxxxxxxxxxxxxx/index.php?route=payment/molpay/return_ipn``

``Notification URL : http://xxxxxxxxxxxxxx/index.php?route=payment/molpay/notification_ipn``
  
``Callback URL : http://xxxxxxxxxxxxxx/index.php?route=payment/molpay/callback_ipn`` 

*Replace xxxxxxxxxxxxxx with your shoppingcart domain

8. Save the configuration and done.

Contribution
------------
You can contribute to this plugin by sending the pull request to this repository.

Issues
------------
Submit issue to this repository or email to our support-sa@razer.com

Support
-------
Merchant Technical Support / Customer Care : support-sa@razer.com <br>
Sales/Reseller Enquiry : sales-sa@razer.com <br>
Marketing Campaign : marketing-sa@razer.com <br>
Channel/Partner Enquiry : channel-sa@razer.com <br>
Media Contact : media-sa@razer.com <br>
R&D and Tech-related Suggestion : technical-sa@razer.com <br>
Abuse Reporting : abuse-sa@razer.com
