**This project has not been updated, and the base plugin created does not use best practices in some areas.** 

## Synopsis

Uses Gulp to generate a starter WordPress plugin

## Code Example

1. Clone this repo

git clone https://github.com/mikejhale/starter-plugin`

2. Install Gulp and required plugins 

```
npm install --save-dev gulp gulp-sass jshint gulp-jshint gulp-concat gulp-uglify gulp-rename gulp-wp-pot gulp-sort gulp-token-replace
```

3. Change these settings in the settings.json file for your plugin.

```
{
  "plugin":{
    "name":             "Plugin Name",
    "esc_name":         "Escaped Plugin Name",
    "tagline":          "What your plugin does in under 150 words",
    "uri":              "http://www.yourpluginurl.com",
    "desc":             "Short description of your plugin",
    "author":           "your name",
    "author_uri":       "http://www.yoururl.com/",
    "tags":             "",
    "slug":             "plugin_slug",
    "function_slug":    "plugin_prefix",
    "constant_prefix":  "PLUGIN_PREFIX",
    "version":          "1.0.0",
    "requires_version": "4.0.0",
    "tested_version":   "4.5.2",
    "stable_tag":       "1.0.0",
    "package":          "My_Plugin",
    "menu_title":       "Plugin Admin Menu Title",
    "menu_icon":        "Plugin icon",
    "dev":              "path/to/test/folder"
  }
}
```

4.  Run `gulp` to generate your starter plugin.
