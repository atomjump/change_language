# change_language

__WARNING: this project has now moved to https://src.atomjump.com/atomjump/change_language.git__

A plugin for AtomJump Messaging Server to allow changes of the default language interactively

## Requirements

AtomJump Messaging Server >= 0.5.9


## Installation

Find the server at https://src.atomjump.com/atomjump/loop-server. Download and install.

Download the .zip file or git clone the repository into the directory messaging-server/plugins/change_language

Copy a given choice of language options file from this plugin's language/[lang]/messages.json to the server's config/messages.json.

Add "change_language" into the "plugins" array of the server's config/config.json file to activate.


## Future enhancements

There are two .js files that need to be editted also for some language text. We would ideally write over these with a script.



