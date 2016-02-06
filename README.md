## Quantitative Food Safety
*Burden and Risk Assessment of Foodborne Pathogens with R*

### About this 

This is the GitHub repository for http://qmra.cbra.be, a website dedicated to quantitative methods in food safety.

### Website architecture

The website architecture aims to provide a quick and efficient way of compiling and publishing R tutorials written in Rmarkdown. The overall design is based on Hadley Wickham's r-pkgs.

The current workflow is as follows:
  1. Edit Rmarkdown in RStudio
  2. Compile to html
  3. Synchronize GitHub

The architecture consists of five components.

#### index.php

Website container. Hosted on external php-enabled server. Uses `readfile()` to include GitHub files.

#### nav.html

Simple HTML list. Used for topright menu and homepage.

#### GitHub repo

Hosts `.rmd` files and compiled `.html` files.

#### Rmarkdown output

Adapted output function, `bd::html_body`. Available via `bd` package. Only body, but with code highlighting. Removes `div`.

#### preamble.R

Settings for `knitr` used in all `.rmd` files. Avoids the need to edit all `.rmd` files if I change my mind.
