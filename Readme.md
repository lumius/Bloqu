#Bloqu

Bloqu is meant as  a lightweight and easy to customize blogging system.

##Features
- Delivering markdown files to the browser with a HTML template around it.
- Default disqus support integrated.

##Todo's
1. Create a customizable web interface for adding (and writing) blog posts.
2. Create a plugin system to be able to easily extend this system.
3. Add theming functionality so there's the ability to easily create themes.
3. Improve content delivery to the user. (Code optimalization)

##External dependencies
- Parsedown (https://github.com/erusev/parsedown)

##Folder contents
- app (contains all php logic)
    - pages
        - posts.php (delivers the markdown files to the browser)
    - config.ini (stores some variables)
    - config.php (logic to retrieve variables from config.ini)
    - parsedown.php (the external library)
    - posts.php (logic to retrieve the content from the markdown files)
- posts (contains all user posts)
- .htaccess (URL rewriting)
- web.config (The .htaccess file converted to web.config)

##Support
This program is shared as is. If you want some help, drop can tweet me on @CorstianBoerman. (No promises made that I'll actually help you!)