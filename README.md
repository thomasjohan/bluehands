# Webnerds Wordpress Boilerplate

## Bedrock, Sage and Trellis
This is a Wordpress boilerplate by [Webnerds](webnerds.se). The boilerplate is build upon [Bedrock](https://github.com/roots/bedrock) and the theme (located in web/app/themes/wn-boilerplate-theme) is build upon [Foundation for Sage](https://github.com/fredericpfisterer/Foundation-for-Sage). Whatever documentation is missing here can be found on these packages specific corresponding README pages. This boilerplate is meant to be used with [Trellis](https://github.com/roots/trellis). Bedrock, Sage and Trellis are great packages (especially together) developed by [Roots.io](https://roots.io/). 

We're trying to keep the Bedrock part of the boiler plate up to date with the current release of Bedrock. However we do not try to maintain version with Sage (since we've diverted severely).

## Requirements
- php >= 5.6
- [Composer](https://getcomposer.org/)
- [Npm](https://www.npmjs.com/)
- [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro) - We can provide a license for our developers.

## Usage limitations
This theme is only meant for developers working for Webnerds and should not be used for other projects.

## Setup
Follow these steps closely to avoid confusions. **Notice:** this setup is for when you want to use this boilerplate for a new site. If you want to develop the boilerplate you should skip step 3 and 4.

1. Clone repo into ``./[project-name]``
2. Open the directory ``cd ./[project-name]``.
3. Run ``rm -rf .git``. This might require ``sudo``. This removes the theme git repo, since you'll create a new repo for your project. 
4. Run ``git init`` to create a new repo.
5. Run ``composer update``. Notice: you will need access to our Advanced custom fields PRO repo to not run into problems when you run this command.
6. Rename the theme folder (app/themes/wn-boilerplate-theme) to something more suiting. And update app/themes/wn-boilerplate-theme/style.css to match the folder name. 
7. Open the theme folder and run ``npm install`` and ``bower install``. 
8. Run ``gulp``.
9. Setup your development environment via Trellis or preferred tool.

## Useful commands during development
In theme folder:
- All ``bower`` commands are available.
- ``gulp`` compiles theme files (css, js etc) to /dist folder.
- ``gulp watch`` watches all theme files and updates any changed files.

In root folder:
- All ``composer`` commands are available.

## Directory Structure

```
├── config
│   └── environments
├── composer.json - composer file (control plugins etc)
├── vendor
└── web
  ├── app
  │   ├── languages - Translation files
  │   ├── mu-plugins - See Sage documentation
  │   ├── plugins - Plugins (install via wpackagist.org).
  │   ├── themes
  │   │   └── wn-boilerplate-theme
  │   │   ├── bower.json - Bower file
  │   │   ├── gulpfile.js - Gulp file
  │   │   ├── style.css - WP "theme information"
  │   │   ├── assets
  │   │   │    ├── fonts
  │   │   │    ├── images
  │   │   │    ├── scripts 
  │   │   │    │   ├── functions - we try to divide js into functions
  │   │   │    │   └─── main.js - call functions here
  │   │   │    └── styles
  │   │   │         ├── common - General css as mixins, tyopgraphy etc
  │   │   │         │   └── _variables.scss - Foundations variable override
  │   │   │         ├── components - Forms buttons etc
  │   │   │         ├── layouts - Specific layouts often for one page template
  │   │   │         └── main.scss
  │   │   ├── bower_components
  │   │   ├── dist
  │   │   ├── lang
  │   │   ├── lib
  │   │   │   ├── acf
  │   │   │   │   └── Advanced custom fields setup
  │   │   │   ├── advanced-custom-fields.php - AFC main file
  │   │   │   ├── assets.php 
  │   │   │   ├── customizer.php
  │   │   │   ├── extras.php
  │   │   │   ├── helpers.php - WN helper functions
  │   │   │   ├── setup.php - Theme setup, supports, menus etc.
  │   │   │   ├── shortcodes.php - All WN specific shortcodes
  │   │   │   ├── titles.php
  │   │   │   └── wrapper.php
  │   │   ├── node_modules
  │   │   ├── page_templates
  │   │   └── templates/
  │   │        ├── flexible-content.php - Main flexible content file
  │   │        └── flexible_content
  │   │            └── Flexible content templates
  │   ├── upgrade
  │   └── uploads
  └── wp
```   

## Common Actions

### Install Plugins
Plugins are installed and managed with composer. Packages are found using [wpackagist](https://wpackagist.org/). To add a package:
1. Find package at [wpackagist](https://wpackagist.org/).
2. Copy line into ``/composer.json``.
3. Run ``composer update``.

### Advanced Custom Fields PRO
Custom fields are controlled via [ACF](https://www.advancedcustomfields.com/). The documentation on the website is easy to understand and use. It's useful for developers to use the Wordpress backend tool to generate "field groups". However fields shall be exported as php and added to lib/acf folder (see Directory Structure above). 

**Why?**
- This ensures that custom fields are controlled by version control (git) instead of the database.
- This enables translation via the ``__()`` syntax.
- This let us create more advanced structures with more Dry code. If we are reusing a field in multiple field groups for example. 

### Translation
All static text shall be in English and wrapped with ``__('static text','webnerds')`` or ``_e('static text','webnerds')``. As you understand the name space is "webnerds".

### Add sass
When you add a sass file make sure you put it in the right directory, also don't forget to include the new file in ``main.scss``. All files that are not ``main.scss`` should start with a ``_`` (to make them not be compiled into their own file).

### Add js
When adding new functionality with js we add a new file to the ``scripts/functions`` folder. We then call the function in the right place in ``scripts/main.js``. This is to keep the ``main.js`` file clean and easy to edit. 

All files in ``scripts/functions`` are automatically added to the main.js file when we compile with gulp. 

## Improve this Theme
In order to improve this boilerplate we pay as a freelance developer extra for writing reusable code that adds or improves features in this repo. Contact us about your idea and pricing.



