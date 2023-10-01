# modern-wp-dev
my-wordpress-project/             # Root directory
|-- app/                          # Main application folder
|   |-- public/                   # Publicly accessible files
|   |   |-- wp-admin/             # WordPress admin core
|   |   |-- wp-content/           # Themes, plugins, and uploads
|   |   |   |-- plugins/          # Installed plugins
|   |   |   |-- themes/           # Installed themes
|   |   |   |   |-- your-theme/   # Your custom theme
|   |   |   |   |   |-- assets/   # Compiled assets (CSS, JS, images)
|   |   |   |   |   |-- dist/     # Output folder for Webpack
|   |   |   |   |   |-- inc/      # PHP includes
|   |   |   |   |   |-- src/      # Source files for front-end
|   |   |   |   |   |   |-- js/   # JavaScript files
|   |   |   |   |   |   |-- scss/ # SCSS files
|   |   |   |   |   |-- functions.php
|   |   |   |   |   |-- style.css
|   |   |   |   |   |-- index.php
|   |   |   |   |   |-- package.json       # Node.js dependencies
|   |   |   |   |   |-- webpack.config.js  # Webpack config
|   |   |   |   |   |-- composer.json      # PHP dependencies (optional)
|   |   |   |   |   |-- .gitignore         # Git ignore file (optional)
|   |   |   |-- uploads/          # Uploaded media
|   |   |-- wp-includes/          # WordPress core includes
|   |   |-- .htaccess             # Apache .htaccess file
|   |   |-- wp-config.php         # WordPress config
|   |   |-- index.php             # WordPress index file
|   |-- logs/                     # Logs (optional)
|   |-- conf/                     # Server config (optional)
|-- .git/                         # Git configuration and source directory (optional)
|-- composer.json                 # Composer dependencies file (optional)
|-- composer.lock                 # Composer lock file (optional)
|-- .gitignore                    # Global .gitignore (optional)
|-- README.md                     # Project documentation (optional)
# modern-wp-dev
# Create your custom theme directory and its subdirectories
- mkdir -p app/public/wp-content/themes/your-theme/{assets,dist,inc,src/js,src/scss}
- app/public/wp-content/themes/your-theme
- npm init -y
- npm install --save-dev webpack webpack-cli
- npm install --save-dev sass-loader sass css-loader style-loader mini-css-extract-plugin
- npm run build
````
asset bundle.js 0 bytes [emitted] [minimized] (name: main)
./src/index.js 1 bytes [built] [code generated]
webpack 5.88.2 compiled successfully in 266 ms
````

