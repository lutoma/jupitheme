\o/ scss with compass
=====================

How-To install
--------------
1. Install [ruby](http://www.ruby-lang.org/)
2. `gem install sass compass`
3. ???
4. profit!

How-To build
------------
Just a simple `scss --style compressed --compass style.scss style.css` inside `css/` and you're done!

… almost. Because the Internet Explorer is a peace of fuck, you have to run `scss --style compressed --compass ie.scss ie.css`, again in `css/`, too.