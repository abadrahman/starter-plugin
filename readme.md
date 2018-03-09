#WordPress Plugin Boilerplate Generator

## Synopsis

Uses Gulp to generate a starter WordPress plugin boilerplate.

## Code Example

1. Clone this repo

git clone https://github.com/mikejhale/starter-plugin`

2. Install Gulp and required plugins 

```
npm install
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

***

# Starter Plugin source
The `src` directory contains a slightly modified copy of the WordPress Plugin Boilerplate where the loader class is removed 


# Credits

The WordPress Plugin Boilerplate was started in 2011 by [Tom McFarlin](http://twitter.com/tommcfarlin/) and has since included a number of great contributions. In March of 2015 the project was handed over by Tom to Devin Vinson.

The current version of the Boilerplate was developed in conjunction with [Josh Eaton](https://twitter.com/jjeaton), [Ulrich Pogson](https://twitter.com/grapplerulrich), and [Brad Vincent](https://twitter.com/themergency).

The homepage is based on a design as provided by [HTML5Up](http://html5up.net), the Boilerplate logo was designed by Rob McCaskill of [BungaWeb](http://bungaweb.com), and the site `favicon` was created by [Mickey Kay](https://twitter.com/McGuive7).

## Documentation, FAQs, and More

If you’re interested in writing any documentation or creating tutorials please [let me know](http://devinvinson.com/contact/) .
