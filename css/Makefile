SCSS ?= scss
GEM ?= gem

install:
	$(GEM) install sass compass

css:
	$(SCSS) --style compressed --compass style.scss style.css
	$(SCSS) --style compressed --compass ie.scss ie.css

dev:
	$(SCSS) --compass style.scss style.css
	$(SCSS) --compass ie.scss ie.css

clean:
	$(RM) *.css