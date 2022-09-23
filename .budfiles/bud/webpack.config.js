module.exports = {
  "entry": {
    "app": {
      "import": [
        "@scripts/app",
        "@styles/app"
      ]
    },
    "editor": {
      "import": [
        "@scripts/editor",
        "@styles/editor"
      ]
    }
  },
  "bail": true,
  "cache": {
    "name": "bud.production",
    "type": "filesystem",
    "version": "0lfdiwdglbeej_tzn6_acb9rb0g_",
    "cacheDirectory": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.budfiles/cache/webpack",
    "managedPaths": [
      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
    ],
    "buildDependencies": {
      "bud": [
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/package.json",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.editorconfig",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/bud.config.mjs",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/composer.json",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/jsconfig.json",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/package-lock.json",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/tailwind.config.js",
        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/theme.json"
      ]
    }
  },
  "context": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor",
  "experiments": {
    "buildHttp": {
      "allowedUris": [
        null,
        "https://gist.githubusercontent.com/",
        "https://raw.githubusercontent.com/",
        "https://unpkg.com/",
        "https://cdn.skypack.dev/"
      ],
      "cacheLocation": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.budfiles/bud/modules",
      "frozen": false,
      "lockfileLocation": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.budfiles/bud/bud.lock",
      "upgrade": true
    }
  },
  "externalsType": "var",
  "infrastructureLogging": {
    "level": "none"
  },
  "mode": "production",
  "module": {
    "rules": [
      {
        "test": {},
        "exclude": [
          {}
        ],
        "parser": {
          "requireEnsure": false
        }
      },
      {
        "oneOf": [
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/mini-css-extract-plugin/dist/loader.js",
                "options": {
                  "publicPath": "/app/themes/fanvestor/public/"
                }
              },
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "importLoaders": 1,
                  "modules": false,
                  "sourceMap": false
                }
              },
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-loader/dist/cjs.js",
                "options": {
                  "sourceMap": true,
                  "postcssOptions": {
                    "plugins": [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-import/index.js",
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/tailwindcss/nesting/index.js",
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/tailwindcss/lib/index.js",
                      [
                        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-preset-env/dist/index.cjs",
                        {
                          "stage": 1,
                          "features": {
                            "focus-within-pseudo-class": false
                          }
                        }
                      ]
                    ]
                  }
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/mini-css-extract-plugin/dist/loader.js",
                "options": {
                  "publicPath": "/app/themes/fanvestor/public/"
                }
              },
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "esModule": true,
                  "importLoaders": 1,
                  "localIdentName": "[name]__[local]___[hash:base64:5]",
                  "modules": true,
                  "sourceMap": false
                }
              },
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-loader/dist/cjs.js",
                "options": {
                  "sourceMap": true,
                  "postcssOptions": {
                    "plugins": [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-import/index.js",
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/tailwindcss/nesting/index.js",
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/tailwindcss/lib/index.js",
                      [
                        "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/postcss-preset-env/dist/index.cjs",
                        {
                          "stage": 1,
                          "features": {
                            "focus-within-pseudo-class": false
                          }
                        }
                      ]
                    ]
                  }
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/csv-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "type": "asset",
            "generator": {
              "filename": "fonts/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/html-loader/dist/cjs.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/babel-loader/lib/index.js",
                "options": {
                  "cacheDirectory": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.budfiles/cache/babel",
                  "presets": [
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/preset-env/lib/index.js"
                    ],
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/preset-react/lib/index.js"
                    ]
                  ],
                  "plugins": [
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/plugin-transform-runtime/lib/index.js",
                      {
                        "helpers": false
                      }
                    ],
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/plugin-proposal-object-rest-spread/lib/index.js"
                    ],
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/plugin-syntax-dynamic-import/lib/index.js"
                    ],
                    [
                      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/@babel/plugin-proposal-class-properties/lib/index.js"
                    ]
                  ],
                  "env": {
                    "development": {
                      "compact": false
                    }
                  },
                  "root": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/xml-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor"
            ],
            "exclude": [
              "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules"
            ],
            "use": [
              {
                "loader": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/node_modules/yml-loader/index.js"
              }
            ]
          }
        ]
      }
    ],
    "unsafeCache": false
  },
  "name": "bud",
  "node": false,
  "output": {
    "assetModuleFilename": "[name].[contenthash:6][ext]",
    "chunkFilename": "js/dynamic/[id].js",
    "filename": "js/[name].[contenthash:6].js",
    "path": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/public",
    "publicPath": "/app/themes/fanvestor/public/"
  },
  "optimization": {
    "emitOnErrors": false,
    "minimize": true,
    "minimizer": [
      "...",
      {
        "options": {
          "test": {},
          "parallel": true,
          "minimizer": {
            "options": {
              "preset": [
                "default",
                {
                  "discardComments": {
                    "removeAll": true
                  }
                }
              ]
            }
          }
        }
      },
      {
        "options": {
          "test": {},
          "extractComments": false,
          "parallel": true,
          "include": {},
          "exclude": {},
          "minimizer": {
            "options": {
              "compress": false,
              "mangle": {
                "safari10": true
              },
              "output": {
                "comments": false,
                "ascii_only": true,
                "preamble": "/**\n  * Minified by @roots/bud\n  */"
              }
            }
          }
        }
      }
    ],
    "runtimeChunk": "single",
    "splitChunks": {
      "chunks": "all",
      "automaticNameDelimiter": "/",
      "minSize": 0,
      "cacheGroups": {
        "vendor": {
          "idHint": "vendor",
          "filename": "js/bundle/vendor/[name].js",
          "test": {},
          "priority": -20
        }
      }
    }
  },
  "parallelism": 110,
  "performance": {
    "hints": false
  },
  "recordsPath": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/.budfiles/bud/modules.json",
  "stats": {
    "preset": "errors-warnings"
  },
  "target": "browserslist:/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/package.json",
  "plugins": [
    {
      "dangerouslyAllowCleanPatternsOutsideProject": false,
      "dry": false,
      "verbose": false,
      "cleanStaleWebpackAssets": true,
      "protectWebpackAssets": true,
      "cleanAfterEveryBuildPatterns": [],
      "cleanOnceBeforeBuildPatterns": [
        "**/*"
      ],
      "currentAssets": [],
      "initialClean": false,
      "outputPath": ""
    },
    {
      "patterns": [
        {
          "from": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources/images",
          "to": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/public/images/[path][name].[contenthash:6][ext]",
          "context": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources",
          "noErrorOnMissing": true,
          "toType": "template"
        }
      ],
      "options": {}
    },
    {
      "options": {
        "assetHookStage": null,
        "basePath": "",
        "fileName": "manifest.json",
        "filter": null,
        "map": null,
        "publicPath": "",
        "removeKeyHash": {},
        "sort": null,
        "transformExtensions": {},
        "useEntryKeys": false,
        "useLegacyEmit": false,
        "writeToFileEmit": true
      }
    },
    {
      "_sortedModulesCache": {},
      "options": {
        "filename": "css/[name].[contenthash:6].css",
        "ignoreOrder": false,
        "runtime": true,
        "chunkFilename": "css/[name].[contenthash:6].css"
      },
      "runtimeOptions": {
        "linkType": "text/css"
      }
    },
    {
      "options": {
        "enabled": true,
        "verbose": false,
        "extensions": {},
        "ignore": [],
        "remove": {}
      },
      "enabled": true,
      "verbose": false
    },
    {
      "options": {
        "emitHtml": false,
        "publicPath": ""
      },
      "plugin": {
        "name": "EntrypointsManifestPlugin",
        "stage": null
      },
      "name": "entrypoints.json"
    },
    {
      "name": "WordPressExternalsWebpackPlugin",
      "stage": null,
      "externals": {
        "type": "window"
      }
    },
    {
      "plugin": {
        "name": "WordPressDependenciesWebpackPlugin",
        "stage": null
      },
      "manifest": {},
      "usedDependencies": {},
      "fileName": "wordpress.json"
    },
    {
      "plugin": {
        "name": "MergedManifestPlugin"
      },
      "file": "entrypoints.json",
      "entrypointsName": "entrypoints.json",
      "wordpressName": "wordpress.json"
    },
    {
      "resourceRegExp": {}
    },
    {
      "resourceRegExp": {}
    },
    {
      "resourceRegExp": {}
    },
    {
      "resourceRegExp": {}
    }
  ],
  "resolve": {
    "alias": {
      "@src": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources",
      "@dist": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/public",
      "@fonts": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources/fonts",
      "@images": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources/images",
      "@scripts": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources/scripts",
      "@styles": "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources/styles"
    },
    "extensions": [
      ".mjs",
      ".cjs",
      ".js",
      ".jsx",
      ".css",
      ".json",
      ".wasm",
      ".yml",
      ".toml"
    ],
    "modules": [
      "/mnt/a/xampp/htdocs/fanvestor-wp/wp-content/themes/fanvestor/resources",
      "node_modules"
    ]
  }
}