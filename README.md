# rcube-quota-notify
Roundcube plugin that displays a warning when user is close to using their quota and an error when the mailbox is full.

## Installation instructions
 1. move to your roundcube-installation/plugins directory
 2. git clone https://github.com/RadioStudent/rcube-quota-notify quota_notify
 3. fix the warnings in quota_notify/quota_notify.php. This should be made configurable.
 
If the user is over 99% quota, they get an error message that stays on the screen until closed.
If the user is only over 90% quota, they get a less obtrusive warning.

