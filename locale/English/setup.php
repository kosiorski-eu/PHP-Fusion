<?php
$locale['setup_title'] = "PHP-Fusion Core 9 Edition Setup";
$locale['sub-title'] = "PHP-Fusion Core 9 Edition Setup";
$locale['welcome_title'] = 'Welcome to PHP-Fusion 9.00 Installation<';
$locale['welcome_desc'] = "The installer guide will guide you through the steps required to install PHP-Fusion CMS on your server. Should you need further assistance, please check our <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208'>Online Installation Documentation</a>.";
$locale['terms'] = " I have read and agreed to the PHP-Fusion <a href='https://php-fusion.co.uk/license/'>terms and conditions use</a>.";
$locale['error_000'] = "In order to use PHP-Fusion, you need to check and agree to the terms of PHP-Fusion</a>.";
$locale['os_version'] = '9.0';
$locale['xml_lang'] = "en";
$locale['charset'] = "iso-8859-1";
// Index
$locale['step1'] = "Step 1: Introduction";
$locale['step2'] = "Step 2: File and Folder Diagnostics";
$locale['step3'] = "Step 3: Database Settings";
$locale['step4'] = "Step 4: Config / Database Setup";
$locale['step5'] = "Step 5: Configure Core System";
$locale['step6'] = "Step 6: Primary Admin Details";
$locale['final'] = "Step 7: Final Settings";
// Buttons
$locale['006'] = "Finish Cofiguration";
$locale['007'] = "Next";
$locale['008'] = "Try Again";
$locale['009'] = "Finish";
// Step 1
$locale['010'] = "Please select the required locale (language):";
$locale['011'] = "Download more locales from <a href='https://www.php-fusion.co.uk/downloads.php#langpacks'><strong>PHP-Fusion Official Support Site</strong></a>";
$locale['1001'] = 'Welcome to PHP-Fusion 9.00 Recovery Mode.';
$locale['1002'] = 'We have detected that there is an existing system installed.<br/><br/>Please choose any of the following to proceed.';
$locale['1003'] = 'Clean Installation';
$locale['1004'] = 'You can uninstall and clean your database and start a clean installation again.';
$locale['1005'] = 'PLEASE BACKUP YOUR CONFIG.PHP. IT WILL BE REMOVED FROM THE SYSTEM DURING UNINSTALL.';
$locale['1006'] = 'Uninstall and Start Again';
$locale['1007'] = 'Core System Installer';
$locale['1008'] = 'Change core system configurations.';
$locale['1009'] = 'Go to System Installer';
$locale['1010'] = 'Change Primary Account Details';
$locale['1011'] = 'Change System Super Administrator details without need to recover password or transfer SA account ownership to another person.';
$locale['1012'] = 'Change Super Admin Details';
$locale['1013'] = 'Rebuild .htaccess';
$locale['1014'] = 'Discard current file and replace with a standard version of the .htaccess file';
$locale['1015'] = 'Build file';
// Step 2
$locale['2001'] = 'Passed';
$locale['2002'] = 'Failed';
$locale['2003'] = 'In order for setup to continue, the following files/folders must be marked as <span class="label label-success">writable</span> and should any tests fail, please chmod it to 755 or 777';
$locale['2004'] = 'Write permissions check passed, click Next to continue.';
$locale['2005'] = 'Write permissions check failed, please CHMOD files/folders marked Failed.';
$locale['2006'] = 'Refresh';
$locale['2007'] = 'File Structure Diagnostics';

// Step 3 - Access criteria
$locale['3001'] = 'Database Settings and Server Paths';
$locale['3002'] = 'Please enter your MySQL database access settings.';
$locale['031'] = "Database Hostname:";
$locale['032'] = "Database Username:";
$locale['033'] = "Database Password:";
$locale['034'] = "Database Name:";
$locale['035'] = "Table Prefix:";
$locale['036'] = "Cookie Prefix:";
$locale['037'] = "Enable PDO?";
$locale['038'] = "PDO seems to not be available";
$locale['039'] = "No";
$locale['039b'] = "Yes";
$locale['039c'] = "Select languages to use:";
// Step 4 - Database Setup
$locale['4001'] = "Database connection established.";
$locale['4002'] = "Config file successfully written.";
$locale['4003'] = "Database tables created.";
$locale['4004'] = "Error:";
$locale['4005'] = "Unable to connect with MySQL.";
$locale['4006'] = "Please ensure your MySQL username and password are correct.";
$locale['4007'] = "Unable to write config file.";
$locale['4008'] = "Please ensure config.php is writable.";
$locale['4009'] = "Unable to create database tables.";
$locale['049'] = "Please specify your database name.";
$locale['050'] = "Unable to connect with MySQL database.";
$locale['051'] = "The specified MySQL database does not exist.";
$locale['052'] = "Table prefix error.";
$locale['053'] = "The specified table prefix is already in use.";
$locale['054'] = "Could not write or delete MySQL tables.";
$locale['055'] = "Please make sure your MySQL user has read, write and delete permission for the selected database.";
$locale['056'] = "Empty fields.";
$locale['057'] = "Please make sure you have filled out all the MySQL connection fields.";
// Step 5
$locale['5001'] = "Please configure your core system.";
$locale['5002'] = "IMPORTANT: Please back up your data if any before proceed. Removing a System will permanently erase all existing records.";
$locale['5003'] = "Core System Ready.";
$locale['5004'] = "Your website is now fully configured.<br/><br/>If you have not setup your Super Admin account yet, please proceed to the next step, otherwise, you can remove the installer.";
// Step 6 - Super Admin login
$locale['6001'] = "Primary Super Admin Account";
$locale['6002'] = "Configure your Super Administrator account details.";
$locale['6003'] = "Change Primary Super Admin Account";
$locale['6004'] = "We have detected an existing Super Administrator Account. If you need to change details of this account, please type in new particulars to update the system with a new Super Administrator Account. ";
$locale['061'] = "Username:";
$locale['062'] = "Login Password:";
$locale['063'] = "Repeat Login password:";
$locale['064'] = "Admin Password:";
$locale['065'] = "Repeat Admin password:";
$locale['066'] = "Email address:";
// Step 6 - User details validation
$locale['070'] = "User name contains invalid characters.";
$locale['070b'] = "User name field can not be left empty.";
$locale['071'] = "Your two login passwords do not match.";
$locale['072'] = "Invalid login password, please use alpha numeric characters only.<br />Password must be a minimum of 8 characters long.";
$locale['072b'] = "Login password fields can not be left empty";
$locale['073'] = "Your two admin passwords do not match.";
$locale['074'] = "Your user password and admin password must be different.";
$locale['075'] = "Invalid admin password, please use alpha numeric characters only.<br />Password must be a minimum of 8 characters long.";
$locale['075b'] = "Admin password fields can not be left empty.";
$locale['076'] = "Your email address does not appear to be valid.";
$locale['076b'] = "Email field can not be left empty.";
$locale['077'] = "Your user settings are not correct:";
// Step 6 - Admin Panels
$locale['080'] = "Administrators";
$locale['081'] = "Article Categories";
$locale['082'] = "Articles";
$locale['083'] = "Banners";
$locale['084'] = "BB Codes";
$locale['085'] = "Blacklist";
$locale['086'] = "Comments";
$locale['087'] = "Custom Pages";
$locale['088'] = "Database Backup";
$locale['089'] = "Download Categories";
$locale['090'] = "Downloads";
$locale['091'] = "FAQs";
$locale['092'] = "Forums";
$locale['093'] = "Images";
$locale['094'] = "Infusions";
$locale['095'] = "Infusion Panels";
$locale['096'] = "Members";
$locale['097'] = "News Categories";
$locale['098'] = "News";
$locale['099'] = "Panels";
$locale['100'] = "Photo Albums";
$locale['101'] = "PHP Info";
$locale['102'] = "Polls";
$locale['103'] = "";
$locale['104'] = "Site Links";
$locale['105'] = "Smileys";
$locale['106'] = "Submissions";
$locale['107'] = "Upgrade";
$locale['108'] = "User Groups";
$locale['109'] = "Web Link Categories";
$locale['110'] = "Web Links";
$locale['111'] = "Main";
$locale['112'] = "Time and Date";
$locale['113'] = "Forum";
$locale['114'] = "Registration";
$locale['115'] = "Photo Gallery";
$locale['116'] = "Miscellaneous";
$locale['117'] = "Private Message";
$locale['118'] = "User Fields";
$locale['119'] = "Forum Ranks";
$locale['120'] = "User Field Categories";
$locale['121'] = "News";
$locale['122'] = "User Management";
$locale['123'] = "Downloads";
$locale['124'] = "Items per Page";
$locale['125'] = "Security";
$locale['126'] = "News Settings";
$locale['127'] = "Downloads Settings";
$locale['128'] = "Admin Password Reset";
$locale['129'] = "Error Log";
$locale['129a'] = "User Log";
$locale['129b'] = "robots.txt";
$locale['129c'] = "Language Settings";
$locale['129d'] = "Permalinks";
$locale['129f'] = "eShop";

$locale['130a'] = "Blog Categories";
$locale['130b'] = "Blog";
//Multilanguage table rights
$locale['MLT001'] = "Articles";
$locale['MLT002'] = "Custom Pages";
$locale['MLT003'] = "Downloads";
$locale['MLT004'] = "FAQs";
$locale['MLT005'] = "Forums";
$locale['MLT006'] = "News";
$locale['MLT007'] = "Photogallery";
$locale['MLT008'] = "Polls";
$locale['MLT009'] = "Email Templates";
$locale['MLT010'] = "Weblinks";
$locale['MLT011'] = "Sitelinks";
$locale['MLT012'] = "Panels";
$locale['MLT013'] = "Forum Ranks";
$locale['MLT014'] = "Blog";
// Step 6 - Navigation Links
$locale['130'] = "Home";
$locale['131'] = "Articles";
$locale['132'] = "Downloads";
$locale['133'] = "FAQ";
$locale['134'] = "Discussion Forum";
$locale['135'] = "Contact Me";
$locale['136'] = "News Categories";
$locale['137'] = "Web Links";
$locale['138'] = "Photo Gallery";
$locale['139'] = "Search";
$locale['140'] = "Submit Link";
$locale['141'] = "Submit News";
$locale['142'] = "Submit Article";
$locale['143'] = "Submit Photo";
$locale['144'] = "Submit Download";
// Stage 6 - Panels
$locale['160'] = "Navigation";
$locale['161'] = "Online Users";
$locale['162'] = "Forum Threads";
$locale['163'] = "Latest Articles";
$locale['164'] = "Welcome Message";
$locale['165'] = "Forum Threads List";
$locale['166'] = "User Info";
$locale['167'] = "Members Poll";
$locale['168'] = "";
// Stage 6 - News Categories
$locale['180'] = "Bugs";
$locale['181'] = "Downloads";
$locale['182'] = "Games";
$locale['183'] = "Graphics";
$locale['184'] = "Hardware";
$locale['185'] = "Journal";
$locale['186'] = "Members";
$locale['187'] = "Mods";
$locale['188'] = "Movies";
$locale['189'] = "Network";
$locale['190'] = "News";
$locale['191'] = "PHP-Fusion";
$locale['192'] = "Security";
$locale['193'] = "Software";
$locale['194'] = "Themes";
$locale['195'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['200'] = "Super Admin";
$locale['201'] = "Admin";
$locale['202'] = "Moderator";
$locale['203'] = "Newbie";
$locale['204'] = "Junior Member";
$locale['205'] = "Member";
$locale['206'] = "Senior Member";
$locale['207'] = "Veteran Member";
$locale['208'] = "Fusioneer";
// Stage 6 - Sample Smileys
$locale['210'] = "Smile";
$locale['211'] = "Wink";
$locale['212'] = "Sad";
$locale['213'] = "Frown";
$locale['214'] = "Shock";
$locale['215'] = "Pfft";
$locale['216'] = "Cool";
$locale['217'] = "Grin";
$locale['218'] = "Angry";
// Stage 6 - User Field Categories
$locale['220'] = "Contact Information";
$locale['221'] = "Miscellaneous Information";
$locale['222'] = "Options";
$locale['223'] = "Statistics";
$locale['224'] = "Privacy";
// Welcome message
$locale['230'] = "Welcome to your site";
// Final message
$locale['7001'] = "Setup is Complete";
$locale['7002'] = "PHP-Fusion 9.00 is now ready for use. Click Finish to rewrite your config_temp.php file to config.php<br/>";
$locale['7003'] = "<strong>Note: After you enter your site you should delete the entire /install folder and chmod your config.php back to 0644 for security reasons.</strong>";
$locale['7004'] = "Thank you for choosing PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['shortdate'] = "%d.%m.%y";
$locale['longdate'] = "%B %d %Y %H:%M:%S";
$locale['forumdate'] = "%d-%m-%Y %H:%M";
$locale['newsdate'] = "%B %d %Y";
$locale['subheaderdate'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['T001'] = "Email Templates";
$locale['T101'] = "Notification on new PM";
$locale['T102'] = "You have a new private message from [USER] waiting at [SITENAME]";
$locale['T103'] = "Hello [RECEIVER],\r\nYou have received a new Private Message titled [SUBJECT] from [USER] at [SITENAME]. You can read your private message at [SITEURL]messages.php\r\n\r\nMessage: [MESSAGE]\r\n\r\nYou can disable email notification through the options panel of the Private Message page if you no longer wish to be notified of new messages.\r\n\r\nRegards,\r\n[SENDER].";
$locale['T201'] = "Notification on new forum posts";
$locale['T202'] = "Thread Reply Notification - [SUBJECT]";
$locale['T203'] = "Hello [RECEIVER],\r\n\r\nA reply has been posted in the forum thread \'[SUBJECT]\' which you are tracking at [SITENAME]. You can use the following link to view the reply:\r\n\r\n[THREAD_URL]\r\n\r\nIf you no longer wish to watch this thread you can click the \'Stop tracking this thread\' link located at the top of the thread.\r\n\r\nRegards,\r\n[SENDER].";
$locale['T301'] = "Contact form";
$locale['T302'] = "[SUBJECT]";
$locale['T303'] = "[MESSAGE]";
// Language Admin
$locale['L001'] = "Multi Language";

// Official Supported System List
$locale['articles']['title'] = "Articles";
$locale['articles']['description'] = "A Standard Documentation System.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "A Standard Blogging System.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "A Standard Downloads System.";
$locale['eshop']['title'] = "E-Shop";
$locale['eshop']['description'] = "An Electronic Commerce System.";
$locale['faqs']['title'] = "Frequent Asked Questions";
$locale['faqs']['description'] = "A Knowledgebase FAQ System.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "A Bulletin Board Forum System.";
$locale['news']['title'] = "News";
$locale['news']['description'] = "A News Publishing System.";
$locale['photos']['title'] = "Photo";
$locale['photos']['description'] = "A Photo Gallery Publishing System.";
$locale['polls']['title'] = "Polls";
$locale['polls']['description'] = "A Poll and User Voting System.";
$locale['weblinks']['title'] = "Weblinks";
$locale['weblinks']['description'] = "A Web Directory System.";
$locale['install'] = "Install Core";
?>