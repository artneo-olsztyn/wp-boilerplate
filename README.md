
# Wordpress Boilerplate

Requires Node.js 14.0.0 or later, and npm 6.14.4 or later. It is not compatible with older versions.

## Installation

Set up localWp via https://localwp.com/
- Add page (on local)
- Go to wp-content/themes/your-themes
- Paste this .zip
- Init .git / connect to remote github

```bash
  npm install
  cd my-project
```
    
## Run

```bash
  npm run start
  cd my-project
```
## Deployment
### Remember to exclude .git files/node_modules/package.json while migrating to proper FTP

To build files run

```bash
  npm run build
```
## CSS
- Entry SCSS file - src/scss/style.scss
- Dist CSS file - build/style-index.css

## JS
- Entry JS file - src/index.js
- Dist JS file - build/index.js
- 'Separate .js files' located in js/, do not forget to implement them in script IF needed.


## Related

Helpfull links:
- [@wp-scripts] https://www.npmjs.com/package/@wordpress/scripts
- [@wp-scripts] https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/



