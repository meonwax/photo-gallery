## Photo gallery
A simple photo gallery.

### Install
- Copy all files to a directory accessible by the webserver.

- Make these three directories writable by the webserver:
  - htdocs/thumbs/
  - smarty/templates_c/
  - smarty/cache/
```
chmod g+w htdocs/thumbs/ smarty/templates_c/ smarty/cache/
chgrp http htdocs/thumbs/ smarty/templates_c/ smarty/cache/

(change http to the group your webserver is running with)
```


