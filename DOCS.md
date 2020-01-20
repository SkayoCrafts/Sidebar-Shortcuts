# Sidebar Shortcuts Documentation

## Requirements

#### Craft CMS

Sidebar Shortcuts requires Craft CMS 3.0 or greater.

#### PHP

Sidebar Shortcuts requires PHP 7.0 or greater.

## Installation

You can install Sidebar Shortcuts via the Craft Plugin Store, or through Composer.

#### Craft Plugin Store

To install **Sidebar Shortcuts**, navigate to the *Plugin Store* section of your Craft control panel, search for `Sidebar Shortcuts`, and click the *Install* button.

#### Composer

You can also add the package to your project using Composer.

Open your terminal and go to your Craft project:

    cd /path/to/project
 
Then tell Composer to load the plugin:

    composer require skayocrafts/sidebar-shortcuts

Then tell Craft to install the plugin:

    ./craft install/plugin sidebar-shortcuts

## Usage

You can find the plugin settings in the Control Panel, at *Settings* → *Sidebar Shortcuts*.  
Once there, you'll find a table where you can add your shortcuts.  
Just enter the label on the left and the link on the right.  
After configuration, you will find your shortcuts at the bottom of the sidebar!  
Just click on them to use them.

## Configuration File

Create a `sidebar-shortcuts.php` file under your `/config` directory with the following options available to you. You can also use multi-environment options to change these per environment.

```php
<?php

return [
    '*' => [
        'enabled' => true,
        'shortcuts' => [
            [
                'label' => 'Cage Appearance',
                'link'  => 'cage/settings/appearance'
            ],
            [
                'label' => 'Google Search',
                'link'  => 'https://google.com'
            ]
        ]
    ],
    'production' => [
        'enabled' => false
    ],
];
```

#### Configuration options

- `enabled` - Whether this plugin should be enabled or not. Useful in multi-environment scenarios.
- `shortcuts` - An array with the shortcuts, structured like this: 
   ```
   [
       [
           'label' => '...',
           'link'  => '...'
       ],
       [
           'label' => '...',
           'link'  => '...'
       ]
   ]
   ```

#### Multi-site configuration

The above will set the values globally, for all sites. These global values will override each setting for each site, so they'll always be the same. If you want to set these values per-site, do not include them at the top level. For example:

```php
<?php

return [
    '*' => [
        // Don't do this for multi-site specific settings
        'enabled' => true,
        'shortcuts' => [
            [
                'label' => 'About Page',
                'link'  => '/about'
            ]
        ],

        // Instead, do this:
        'siteSettings' => [
            'siteHandle' => [
                'enabled' => true,
                'shortcuts' => [
                    [
                            'label' => 'About page',
                            'link'  => '/en/about'
                    ]
                ]
            ],
            'anotherSiteHandle' => [
                'enabled' => true,
                'shortcuts' => [
                    [
                        'label' => 'About Page',
                        'link'  => '/de/about'
                    ]
                ]
            ],
        ]
    ],
];
```

If you keep the top level `enabled`, `shortcuts`, etc settings, they'll override your settings for each site.