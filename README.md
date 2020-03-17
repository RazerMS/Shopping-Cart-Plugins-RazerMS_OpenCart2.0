Razer Merchant Services OpenCart Plugin v2.0
==============================
![opencart](https://user-images.githubusercontent.com/38641542/74417583-ebadb900-4e81-11ea-94b4-249009025b48.jpg)  

![image](https://user-images.githubusercontent.com/19460508/76842730-aeb85600-6875-11ea-8738-cd64a68541f1.png)  

![image](https://user-images.githubusercontent.com/19460508/76842745-b546cd80-6875-11ea-93ab-673405c5bc21.png)  

![image](https://user-images.githubusercontent.com/19460508/76842757-baa41800-6875-11ea-804f-887d5f8f89da.png)


Razer Merchant Services Plugin for OpenCart Shopping Cart develop by Razer Merchant Services technical team.

Supported version
-----------------
New Update

- Opencart Seamless Plugin

- OpenCart version 2.x

Notes
-----
Razer Merchant Services is not responsible for any problems that might arise from the use of this module. 
Use at your own risk. Please backup any critical data before proceeding. For any query or 
assistance, please email support-sa@razer.com

System Requirements
--------------------
PHP (at least 5.2) <br>
Curl

Installations
-------------
1. Download from [dist](https://github.com/RazerMS/OpenCart2.0_Plugin/tree/master/dist) folder or clone this repository. Copy all the file and paste it at your opencart root directory.  
`<OpenCart_DIR>/admin/*`  
`<OpenCart_DIR>/catalog/*`

2. Login to OpenCart administration, click on extension menu and click on Payments submenu.

3. You will see list of payment method available on your OpenCart. Click on [Install] link for Razer Merchant Services to install this module into your online store.  

4. After you’ve successfully install this module, you need to click on [Edit] link for Razer Merchant Services option to configure this payment module in your OpenCart online store.

5. Fill in your Razer Merchant Services Merchant ID & Razer Merchant Services Verify/Secret Key into the respective fields.

6. Log in your merchant account at https://portal.merchant.razer.com. Click Transactions > Settings > Endpoint setting.

7. Fill in return URL and Callback URL with your shopping cart URL.

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
