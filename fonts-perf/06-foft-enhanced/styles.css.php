@font-face {
    font-family: "Source Sans Pro";
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    src: url("../fonts/woff2/SourceSansPro-Light.woff2") format("woff2"),
         url("../fonts/woff/SourceSansPro-Light.woff") format("woff"),
         url("../fonts/ttf/SourceSansPro-Light.ttf") format("truetype");
}

body {
  font-family: "Lucida Grande", "Lucida Sans Unicode", sans-serif;
  font-weight: 300;
  font-size: 1em;
}

h1, h2, strong {
  font-weight: 600;
}

.fonts-loaded body {
  font-family: "Source Sans Pro", "Lucida Grande", "Lucida Sans Unicode", sans-serif;
}

.fallback, .fallback * {
  font-family: "Lucida Grande", "Lucida Sans Unicode", sans-serif !important;
}
