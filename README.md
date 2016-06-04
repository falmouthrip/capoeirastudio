# [falmouthrip](https://roots.io/sage/)

falmouthrip is a WordPress theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass, from the Sage Wordpress starter theme.

* Source: [https://github.com/falmouthrip/falmouthrip](https://github.com/falmouthrip/falmouthrip)
* Homepage: [http://www.falmouth.rip](http://www.falmouth.rip)
* Documentation: [http://www.falmouthrip.com/documentation](http://www.falmouthrip.com/documentation)

## Theme setup

Fork the [repository](https://github.com/falmouthrip/falmouthrip) from github. Clone it on your development machine. Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars. Enjoy!

## Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```
## Theme development support

Need help to get the theme up and running? Contact [Quilombola Engineering](http://quilombolaengineering.com/). [Munair Simpson](http://www.munair.com) (the proprietor of the Quilombola private enterprise) is willing to work for free for certain special causes. If you don't run a non-profit you will need to hire him via Upwork. Here is his [profile](https://www.upwork.com/freelancers/~01fd779c5275079abb).

