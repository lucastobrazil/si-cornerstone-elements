# Custom Cornerstone Elements
A Wordpress Plugin that registers new custom elements for Cornerstone editor

This is a work in progress by me, and also my first Open Source project :)  Big thanks to the team at X Theme Users (http://xthemeusers.com) for support. Please comment / PR as you like :)

Built from examples given in:
https://community.theme.co/kb/cornerstone-introduction/

# What are Elements?
When working with the X Theme WP Template, we use the "Cornerstone" plugin for page editing. Instead of writing actual markup, Cornerstone uses UI components called "Elements". It comes with heaps of built in ones that we should try our best to use. But if we did need to make our own, we do it via this repo.

# Installation
First time use -> This needs to get installed via Wordpress plugins (Appearance > Plugins > Add New). Zip the root directory of this repo and upload it. This basically 'registers' the plugin and connects it with Cornerstone.

While in Development (and adding new elements) -> You can FTP in to the server and replace in the `wp-content/plugins/custom-cornerstone-elements` directory the base php file (`custom-cornerstone-elements.php`) that should re-register your new components. You will obviously need to upload the folder of the new components too into the `includes` folder

# Usage
Now when you use the Cornerstone Editor, under "Elements" your new elements will be visible
