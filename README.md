emailLogger
===============
Email logger plugin for OMP

About
-----
This plugin for OMP logs all emails sent by the system and implement methods to check the existence of an 
specific log entry. This is NOT a plugin to be used in production, it disables the system real capacity to
send emails. Also it can generate lots of unnecessary logging email data. The main objective is to be used
as a tool for functional tests to check whether or not an email was sent.

System Requirements
-------------------
Same as OMP 1.1 

Versions
------------
Works with OMP 1.1. It can easily work with the other pkp systems if method existsByAssoc is adapted. 

Installation
------------
- Copy the plugin contents in the plugins/generic folder
- Run the upgrade tool so the plugin version can be installed.

Configuration
------------
No configuration needed. 

Usage
-----
DO NOT enable this plugin via interface unless you really want to manually
test the system and then check the email logs. Don't forget to disable it later because of the effects
described in the About section.

In your functional test, inside the setUp() method, load the email logger plugin and enable it. In tearDown(),
disable. To check the log entries, see EmailLoggerPlugin::exists() and EmailLoggerPlugin::existsByAssoc() docs.

Contact/Support
---------------
Contact bruno.beghelli@gmail.com for support, bugfixes, or comments.
