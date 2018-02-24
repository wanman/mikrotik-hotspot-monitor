 MIKROTIK HOTSPOT MONITOR (MIKHMON)

Mikrotik Hotspot Monitor is a PHP web application to replace User Manager which is not supported in some RB Mikrotik type.

 ABOUT

This app uses the API port to connect to Mikrotik

API port 8728 ( routeros-api )
Make sure the API port is active and Date Hours in Mikrotik are updated according to their respective region. For Clock and Date settings can read here .

Already tested on Router OS 3.25, 5.22, 6.3+

 FEATURES

Multi platform (Windows, GNU / Linux, Android, OpenWRT)
Displays the current and active User Hotspot.
Add, edit and delete the User Profile.
There are two expired modes (Delete and Notification)
Expired mode "Delete" will delete user data that have expired.
Expired mode "Notifications" will not delete user data.
Expired Delete and Notification Mode will display an expired notification on the hotspot login page, for the expired user.
Use a hotspot3 template from Mikhmon or a hospot template that uses the same method. Hotspot login tutorial with expired can be checked in Video .
Displays a list of User Hotspots based on the User Profile.
Filter by Username, Server, and Date / Generate Code.
Delete User.
Disable / Enable User.
Show / Hide Password.
Generate Voucher.
Generate Voucher Code.
Generate User Password.
Generate Custom User Password.
Print Voucher. (A4 or F4 paper size)
Generate Voucher Code.
Generate User Password.
Generate Custom User Password.
Choice of Letters for Voucher Code and User Password [abcd, ABCD, aBcD].
Generate Voucher Code / User Password maximum of 99 to once generate, can be repeated again.
Custom Color Voucher.
Tools:
Add Remove DNS Static to block website.
Mikrotik Hotspot Log.
History.
Status, to check voucher from client side.
 USE

This application can be run using a web server with PHP.

Download web server:

Windows Web Server USBWebserver
Android Web Server PlayStore Bit Web Server (paid), allfreeapk.com Bit Web Server (free)
Install Web Server

Web Server Windows

Download USBWebserver, create webserver folder in drive D :, extract USBWebserver to that folder.
Download Mikrotik Hotspot Monitor, extract the mikhmon folder to the webserver root folder.
Run USBWebserver then open in browser http: // localhost: 8080 / mikhmon /
Web Server Android

Download Bit Web Server, install on Android.
Download Mikrotik Hotspot Monitor, extract the mikhmon folder to the Android internal memory folder www.
Run Bit Web Server then open in browser http: // localhost: 8080 / mikhmon /
Login with the admin user Mikhmon (user: admin | pass: 1234).

Customize User Profile, business name of voucher price on the setup page.

Add a User Profile to Mikrotik from Mikhmon application. After that the application is ready to generate voucher.

More complete tutorial kunungi laksa19.github.io

Logo in voucher print is placed in img folder in app folder with format (logo.png).

 Changelog

 Version 2018

Download update.zip

23-2-2018

Update User Profile expired mode Remove.
Now added a pause or grace to remove a user from Mikrotik, default is 5min. So there is an opportunity for Expired notifications when the user tries to login again.
Tutorial Create Login Hotspot with Expired notification: YouTube Laksa19
Template so with Expired hotspot3 notification
Added Letters when generated. Now there are 3 choices [abcd, ABCD, aBcD]
Addition of Show / Hide Password in user list.
Added Export / Import Setup Mikhmon. Export to Mikrotik / Import from Mikrotik.
20-2-2018

The addition of Expired Mode, to the Delete and Notification mode.

Expired mode "Delete" will delete user data that have expired.
Expired mode "Notifications" will not delete user data, but will display an expired notification on the hotspot login page for the expired user. (Use hotspot3 template from Mikhmon or tempot template using the same method).
A profile that can change the expired mode to "Delete" or "Notification" is the profile listed on the Setup page.
Profile created manually please select "No Expired" in Expired Mode column.
Manually created profiles will not be able to change the expired mode to "Delete" or "Notifications".
To re-enable the expired user simply click the Reset button in the user info, it can be accessed from the user list.
17-2-2018

Additional features of the previous generated voucher printing. Accessed through userlist. 
This feature can only be used after a generic voucher from Mikhmon build 2052. 
Reprint by date and unique code when genetare.

7-2-2018

Improved update profile.

7-2-2018

Change User Profile edit.
Added Disable / Enable user in userlist.
Added filters based on hotspot server and date generate.
4-2-2018

Improved userlist and addition of user filter button based on profile.

3-2-2018

Remove the Active and Active Users tab on the Dashboard page.
Added capital to the user's active mass check, with the click / tap of the active user.
Remove userlist folder (streamline application)
Improved Dahsboard page.
Added capital for user info on the userlist page.
1-2-2018

Repair OTA Update.
Support for RouterOS v3.25 and v5.22.
26-1-2018

Repair OTA Update. Note full permissions on the flder root web server.
Added filter in userlist.
23-1-2018

Repair the remove active user on the dashboard page.
Change update mode to OTA update.
22-1-2018

Eliminate the password line on the status page (check voucher details).

21-1-2018

Added column X to remove user, user acive, profile, and dns in static dns.

20-1-2018

Changes check Mikhmon update and performance improvements.
Added MAC Address and Login By fields on the dashboard page.
Repair active checks on dashboard and status pages.
Added the Mikrotik reboot button on the setup page.
19-1-2018

Fixed setup page (duration of second column). After the update click Save in the setup area.

14-1-2018

Repair voucher printing. (No vouchers are truncated to the next page).

13-1-2018

Repair Generate Voucher (Added option panajang Username). For Voucher Code 2x Username length.
Setup Voucher Note changes to DNS NAME. (Adjust DNS Name on the Setup page).
Repair Print Voucher.
Added QR Code in Voucher Print
10-1-2018

Fix for support logged by mac. After Mikhmon update, please update user profile from Mikhmon.

9-1-2018

Change the user profile form. Rate limit Upload / Downlod into manual input. Aiming to make it more flexible to make rate limit.
Hotspot Log Change. Now showing the latest top-rated logs.
1-7-2018

Added Byte Out on the Dashboard page.
Added 5 User Profile.
Addition of Duration and Quota respectively 5.
Quota Remaining Addition in the status and logout of the hotspot template.
5-1-2018

Added update notification.
Fixed status page.
Drop support mikhmon-standalone.
4-1-2018

Repair voucher printing (fix voucher details and logo addition).

1-1-2018

Repair status page for voucher check.

29-12-2017

Full using RouterOS API (Does not require SSH connection anymore).
Improvements in the resulting voucher. (custom number of vouchers 1-99 to generate once).
Repair in voucher print.
Repair Setup.
Improved dashboard page.
Fixed status page (for voucher lifetime check)
 Version 2017

16-12-2017

The addition of 5 profiles, a total of 10 profiles that can be used for various wifi hotspot packages.
The addition of hotspot server columns in each form generate vouchers, it is possible to create vouchers or hotspot users with hotspot server restrictions. So vouchers can only be used in certain hotspot servers. Note: Adjust the name of the Mikrotik hotspot server on the michmon setup page.
Improved desktop appearance, now made wider for desktop viewing and customizing the screen when used on Android.
Dashboard page changes, the voucher table header now uses the profile name, aiming to make it easier for the admin to recognize the rest of the voucher.
29-11-2017

Repair the setup form, confirm it when reset config.

28-11-2017

Added Hotspot Log form.
Added History Remove User form, to track deleted users.
26-11-2017

Update the voucher color settings to keep the previous settings.
Adding prints on each form generates 1 voucher.
21-11-2017

Drop operator and repair resetconfig.
Add Remove DNS Static to block website.
10-11-2017

Added input user password manual input. (Changes in mikhmon: index.php, genkv.php, genkvs.php, genupm.php, genvoucher.php, genvouchers.php, profileadd.php, profilerm.php, profileset.php, vcolorconf.php).

09-11-2017

Changes to the menu structure.

07-11-2017

Repair hotspot tamplate. Explanation section USE points 6.

05-11-2017

Added status page for customer's voucher voucher check. (Changes in status: index.php, api.php).

04-11-2017

The addition of ganerate feature voucher code, so customer only enter login code only to login. (Changes in mikhmon: index.php, new file: genkv.php, genkvs.php, kvouchers.php, printkvs.php).
Upload a hotspot template to support login using voucher code.
28-10-2017

Fixed in setup.php file.
The addition of Mikrotik clock, to know whether the clock in Mikrotik is appropriate. (Change: index.php).
10-10-2017

Adding form to color settings in voucher print (Changes: printv.php, genvouchers.php, vcolorconf.php, vcolors.php).

09-10-2017

Repair Setup (change: index.php, setup.php).

07-10-2017

Added an option to auto reload the index page (change: index.php).
Repair and addition of application setup (change: config.php, login.php, setup.php, conntest.php, resetconfig.php).
06-10-2017

Adding user permissions: 1. Administrator, 2. Operator.

05-10-2017

Added setup.php to make it easy to edit config.php file
Added login page.
Some other adjustments.
04-10-2017

Config.php adjustment
Adjustment of index.php
Added User Lists, now to 5
Simplifying Profile Creation
Add feature to generate voucher
Limit Uptime
Limit Bytes Out
Adjustment of voucher printing
03-10-2017

First upload.
