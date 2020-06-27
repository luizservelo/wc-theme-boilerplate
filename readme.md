# Simple WC Theme Boilerplate

## About 
Simple Theme Boilerplate for WorkControl is an initiative to automate and expedite the start of a new WorkControl theme.
Now, feel free to use this structure as you wish and I will be happy to receive feedback.
Let's code!

## DevTools
1. Git
2. Node

## File Structure
<pre>
📦wc-theme-boilerplate
    ┣ 📂inc
    ┃ ┗ header.php
    ┃ ┗ footer.php
    ┣ 📂images
    ┃ ┗ 📜favicon.png
    ┗ 📂scss
    ┃ ┗ 📜style.scss
    ┣ 📂wc_css
    ┃ ┗ 📜style.css
    ┣ 📂wc_js
    ┃ ┗ 📜scripts.js
    ┣ 📜404.php
    ┣ 📜amp.php
    ┣ 📜artigo.php
    ┣ 📜artigos.php
    ┣ 📜cat-name.php
    ┣ 📜index.php
    ┣ 📜package.json
    ┣ 📜page-name.php
    ┣ 📜pagina.php
    ┣ 📜pesquisa.php
    ┗ 📜readme.md
</pre>

## Paste or Clone this project to your themes WorkControl folder
<pre>git clone https://github.com/luizservelo/wc-theme-boilerplate</pre>
OR
<pre>git clone https://github.com/luizservelo/wc-theme-boilerplate theme-name</pre>
With this second option, change <pre>THEME = "wc-theme-boilerplate";</pre> to "theme-name" in /wc_js/scripts.js

## Using SASS
1. Install Node.js
2. Run this command from your terminal at theme root. <pre>npm install</pre>
3. Then, run... <pre>npm run watch-css</pre>

Now just edit the *scss/style.scss* file and it will compile your minified styles in *wc_css/style.css*