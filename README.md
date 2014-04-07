## Photo gallery

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

### References

Photo gallery makes use of these projects:

- https://github.com/yairEO/photobox
- https://github.com/miromannino/Justified-Gallery
- http://www.smarty.net
