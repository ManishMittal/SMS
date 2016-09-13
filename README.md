Supported OpenCart Versions:
================
2.x versions

Demo <a href=http://opencart.ostwork.com/opencart2.1/admin/index.php?route=module/sms>Back End</a> demo/demo

SMS Integration for opencart is a well thought out and excellently made module that allows to integrate India.ibulksms and MySMS Matra API to send SMS, when a customer register on your site then the customer gets SMS, when a customer create an order then he/she gets a SMS and when Administrator change order history then Customer gets SMS.  

Features of SMS Integration extension
- Set MysmsMantra or India.ibulksms in one module
- Sned SMS at Registration of customer to gets username and password on Mobile
- Send SMS to Customer when create a order
- Send SMS to Customer when order of history is changed
- VQMOD base, No need to change in core files.

Support:
==============
In case of any query or support please email at sales@opensourcetechnologies.com

Installation Instructions


1. Copy folder upload to root path
2. Copy and paste files to your opencart directory
3. Add as many modules as you like!
4. Run path/vqmod/install to install VQMOD (if it is not installed before ) 
5. Go to http://india.ibulksms.com/ or http://www.mysmsmantra.com/ to create a account and gets username, password and sender id.
6. Need to Approve template of message for transactional SMS, if not then we can't send SMS on DND numbers.

Notes :Please replace %%% or ### to %s in SMS template. For example
dear %%%%% thanks for registering.your user name %%%% your password %%%%
Template to be set is : dear %s thanks for registering.your user name %s your password %s. 

If you have permission problem *

Login to admin panel > Go to system > User > User groups  >  Click on edit of top administrator > then select all to access permission and modify permission.

It will work fine now.
 
Enjoy ! 
