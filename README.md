seekingmichigan.org-tempWPsearch
================================

added and modified files that should be used with the shiny-child theme.

these files go inside the shiny-child theme folder

header.php replaces the current file.

I needed to modify the header to add the Advanced Search and to allow it to expand.  The search will not appear on the home page - I was getting style conflicts there with the slider.

NOTE:  these files contain some local paths.  I wasn't sure what the final structure would be, so they will need to be updated.  Look at the CSS and js links in the head of the header file.  Also, I'm pulling some css images from contentDM and you might want to change these to local for speed.  If add collections isn't working, then the path being called via ajax in cdm_for_wp.js needs to be updated.