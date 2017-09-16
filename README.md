# nyaku
##### WARNING: When using 'nyaku_webembed', keep in mind this does show your webhook links to the public. We are working on a fix for this, but it may not be as user-friendly. SQL support is planned for the future.

## What is Nyaku?
Nyaku is a framework written in PHP that allows for Discord server owners to better moderate their server.

## What does it do?
Nyaku will use Webhooks and Bots to access different parts of a Discord server. Webhooks are primarily used for messages while Bots can be used to automate a variety of things. While Discord already has a lot of libraries for bot development, Nyaku makes it easier by providing an interactive task-based system that responds to certain stimulations.

## Usage
To use Nyaku, make sure you download the version that best suits your needs.

### If you need to constantly use different webhooks:
Use 'nyaku_webenter'
Make sure it is run on a webserver that has PHP and CURL installed. 
### If you have a static list of webhooks:
Use 'nyaku_webembed'
Make sure it is run on a webserver that has PHP and CURL installed.
In the file 'index.html', change the fields !![PUT WEBHOOK LINK HERE]!! and !![PUT WEBHOOK NAME HERE]!! to fit your desires.
