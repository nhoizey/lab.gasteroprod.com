<?php
sleep(1);
header('Content-type: text/css');
?>
@font-face {
    font-family: "Source Sans Pro";
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    src: url("../fonts/woff2/SourceSansPro-Light.woff2") format("woff2"),
         url("../fonts/woff/SourceSansPro-Light.woff") format("woff"),
         url("../fonts/ttf/SourceSansPro-Light.ttf") format("truetype");
}

@font-face {
    font-family: "Source Sans Pro";
    font-weight: 300;
    font-style: italic;
    font-stretch: normal;
    src: url("../fonts/woff2/SourceSansPro-LightIt.woff2") format("woff2"),
         url("../fonts/woff/SourceSansPro-LightIt.woff") format("woff"),
         url("../fonts/ttf/SourceSansPro-LightIt.ttf") format("truetype");
}

@font-face {
    font-family: "Source Sans Pro";
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    src: url("../fonts/woff2/SourceSansPro-Semibold.woff2") format("woff2"),
         url("../fonts/woff/SourceSansPro-Semibold.woff") format("woff"),
         url("../fonts/ttf/SourceSansPro-Semibold.ttf") format("truetype");
}

@font-face {
    font-family: "Source Sans Pro";
    font-weight: 600;
    font-style: italic;
    font-stretch: normal;
    src: url("../fonts/woff2/SourceSansPro-SemiboldIt.woff2") format("woff2"),
         url("../fonts/woff/SourceSansPro-SemiboldIt.woff") format("woff"),
         url("../fonts/ttf/SourceSansPro-SemiboldIt.ttf") format("truetype");
}

body {
  font-family: "Source Sans Pro", "Lucida Grande", "Lucida Sans Unicode", sans-serif;
  font-weight: 300;
}

h1, h2, strong {
  font-weight: 600;
}

.fallback {
  font-family: "Lucida Grande", "Lucida Sans Unicode", sans-serif;
}
