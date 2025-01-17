<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(function() {
        /* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
        /* For cell text alignment */
        $("table td:first-child, table th:first-child").addClass("first");
        /* For removing the last border */
        $("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">
.myButton {
    -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    box-shadow:inset 0px 1px 0px 0px #ffffff;
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
    background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
    background-color:#ededed;
    -moz-border-radius:13px;
    -webkit-border-radius:13px;
    border-radius:13px;
    border:1px solid #dcdcdc;
    display:inline-block;
    color:#615861;
    font-family:arial;
    font-size:13px;
    font-weight:bold;
    padding:6px 12px;
    text-decoration:none;
    text-shadow:1px 1px 5px #ffffff;
}.myButton:hover {
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
    background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
    background-color:#dfdfdf;
}.myButton:active {
    position:relative;
    top:1px;
}
.spo{
    color: #EFA400;
}
.offer{
    color: #FF6005;
}
.popular{
    color: #053FFF;
}
.recommended{
    color: #008000;
}


/*!
 * CSS3 Google Buttons
 *
 * Heavily inspired by css3-github-buttons, Twitter Bootstrap, and
 * of course, Google. I don't claim ownership over any of this.
 *
 * Constructed by Tim O'Donnell (http://github.com/todc)
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}
audio, canvas, video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}
audio:not([controls]) {
  display: none;
}
html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
a:hover, a:active {
  outline: 0;
}
sub, sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  max-width: 100%;
  height: auto;
  border: 0;
  -ms-interpolation-mode: bicubic;
}
button,
input,
select,
textarea {
  margin: 0;
  font-size: 100%;
  /*vertical-align: middle;*/

}
button, input {
  *overflow: visible;
  line-height: normal;
}
button::-moz-focus-inner, input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button {
  -webkit-appearance: none;
}
textarea {
  overflow: auto;
  vertical-align: top;
}
[class^="icon-"] {
  display: inline-block;
  margin-top: -2px;
  width: 14px;
  height: 14px;
  vertical-align: top;
  background-image: url(<?php echo plugins_url("wereviews/images/glyphicons-halflings.png"); ?>);
  background-position: 14px 14px;
  background-repeat: no-repeat;
  *margin-right: .3em;
}
[class^="icon-"]:last-child {
  *margin-left: 0;
}
.icon-white {
  background-image: url(<?php echo plugins_url("wereviews/images/glyphicons-halflings-white.png"); ?>);
}
.disabled > [class^="icon-"], .disabled2 > [class^="icon-"] {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.icon-glass {
  background-position: 0      0;
}
.icon-music {
  background-position: -24px 0;
}
.icon-search {
  background-position: -48px 0;
}
.icon-envelope {
  background-position: -72px 0;
}
.icon-heart {
  background-position: -96px 0;
}
.icon-star {
  background-position: -120px 0;
}
.icon-star-empty {
  background-position: -144px 0;
}
.icon-user {
  background-position: -168px 0;
}
.icon-film {
  background-position: -192px 0;
}
.icon-th-large {
  background-position: -216px 0;
}
.icon-th {
  background-position: -240px 0;
}
.icon-th-list {
  background-position: -264px 0;
}
.icon-ok {
  background-position: -288px 0;
}
.icon-remove {
  background-position: -312px 0;
}
.icon-zoom-in {
  background-position: -336px 0;
}
.icon-zoom-out {
  background-position: -360px 0;
}
.icon-off {
  background-position: -384px 0;
}
.icon-signal {
  background-position: -408px 0;
}
.icon-cog {
  background-position: -432px 0;
}
.icon-trash {
  background-position: -456px 0;
}
.icon-home {
  background-position: 0 -24px;
}
.icon-file {
  background-position: -24px -24px;
}
.icon-time {
  background-position: -48px -24px;
}
.icon-road {
  background-position: -72px -24px;
}
.icon-download-alt {
  background-position: -96px -24px;
}
.icon-download {
  background-position: -120px -24px;
}
.icon-upload {
  background-position: -144px -24px;
}
.icon-inbox {
  background-position: -168px -24px;
}
.icon-play-circle {
  background-position: -192px -24px;
}
.icon-repeat {
  background-position: -216px -24px;
}
.icon-refresh {
  background-position: -240px -24px;
}
.icon-list-alt {
  background-position: -264px -24px;
}
.icon-lock {
  background-position: -287px -24px;
}
.icon-flag {
  background-position: -312px -24px;
}
.icon-headphones {
  background-position: -336px -24px;
}
.icon-volume-off {
  background-position: -360px -24px;
}
.icon-volume-down {
  background-position: -384px -24px;
}
.icon-volume-up {
  background-position: -408px -24px;
}
.icon-qrcode {
  background-position: -432px -24px;
}
.icon-barcode {
  background-position: -456px -24px;
}
.icon-tag {
  background-position: 0 -48px;
}
.icon-tags {
  background-position: -25px -48px;
}
.icon-book {
  background-position: -48px -48px;
}
.icon-bookmark {
  background-position: -72px -48px;
}
.icon-print {
  background-position: -96px -48px;
}
.icon-camera {
  background-position: -120px -48px;
}
.icon-font {
  background-position: -144px -48px;
}
.icon-bold {
  background-position: -167px -48px;
}
.icon-italic {
  background-position: -192px -48px;
}
.icon-text-height {
  background-position: -216px -48px;
}
.icon-text-width {
  background-position: -240px -48px;
}
.icon-align-left {
  background-position: -264px -48px;
}
.icon-align-center {
  background-position: -288px -48px;
}
.icon-align-right {
  background-position: -312px -48px;
}
.icon-align-justify {
  background-position: -336px -48px;
}
.icon-list {
  background-position: -360px -48px;
}
.icon-indent-left {
  background-position: -384px -48px;
}
.icon-indent-right {
  background-position: -408px -48px;
}
.icon-facetime-video {
  background-position: -432px -48px;
}
.icon-picture {
  background-position: -456px -48px;
}
.icon-pencil {
  background-position: 0 -72px;
}
.icon-map-marker {
  background-position: -24px -72px;
}
.icon-adjust {
  background-position: -48px -72px;
}
.icon-tint {
  background-position: -72px -72px;
}
.icon-edit {
  background-position: -96px -72px;
}
.icon-share {
  background-position: -120px -72px;
}
.icon-check {
  background-position: -144px -72px;
}
.icon-move {
  background-position: -168px -72px;
}
.icon-step-backward {
  background-position: -192px -72px;
}
.icon-fast-backward {
  background-position: -216px -72px;
}
.icon-backward {
  background-position: -240px -72px;
}
.icon-play {
  background-position: -264px -72px;
}
.icon-pause {
  background-position: -288px -72px;
}
.icon-stop {
  background-position: -312px -72px;
}
.icon-forward {
  background-position: -336px -72px;
}
.icon-fast-forward {
  background-position: -360px -72px;
}
.icon-step-forward {
  background-position: -384px -72px;
}
.icon-eject {
  background-position: -408px -72px;
}
.icon-chevron-left {
  background-position: -432px -72px;
}
.icon-chevron-right {
  background-position: -456px -72px;
}
.icon-plus-sign {
  background-position: 0 -96px;
}
.icon-minus-sign {
  background-position: -24px -96px;
}
.icon-remove-sign {
  background-position: -48px -96px;
}
.icon-ok-sign {
  background-position: -72px -96px;
}
.icon-question-sign {
  background-position: -96px -96px;
}
.icon-info-sign {
  background-position: -120px -96px;
}
.icon-screenshot {
  background-position: -144px -96px;
}
.icon-remove-circle {
  background-position: -168px -96px;
}
.icon-ok-circle {
  background-position: -192px -96px;
}
.icon-ban-circle {
  background-position: -216px -96px;
}
.icon-arrow-left {
  background-position: -240px -96px;
}
.icon-arrow-right {
  background-position: -264px -96px;
}
.icon-arrow-up {
  background-position: -289px -96px;
}
.icon-arrow-down {
  background-position: -312px -96px;
}
.icon-share-alt {
  background-position: -336px -96px;
}
.icon-resize-full {
  background-position: -360px -96px;
}
.icon-resize-small {
  background-position: -384px -96px;
}
.icon-plus {
  background-position: -408px -96px;
}
.icon-minus {
  background-position: -433px -96px;
}
.icon-asterisk {
  background-position: -456px -96px;
}
.icon-exclamation-sign {
  background-position: 0 -120px;
}
.icon-gift {
  background-position: -24px -120px;
}
.icon-leaf {
  background-position: -48px -120px;
}
.icon-fire {
  background-position: -72px -120px;
}
.icon-eye-open {
  background-position: -96px -120px;
}
.icon-eye-close {
  background-position: -120px -120px;
}
.icon-warning-sign {
  background-position: -144px -120px;
}
.icon-plane {
  background-position: -168px -120px;
}
.icon-calendar {
  background-position: -192px -120px;
}
.icon-random {
  background-position: -216px -120px;
}
.icon-comment {
  background-position: -240px -120px;
}
.icon-magnet {
  background-position: -264px -120px;
}
.icon-chevron-up {
  background-position: -288px -120px;
}
.icon-chevron-down {
  background-position: -313px -119px;
}
.icon-retweet {
  background-position: -336px -120px;
}
.icon-shopping-cart {
  background-position: -360px -120px;
}
.icon-folder-close {
  background-position: -384px -120px;
}
.icon-folder-open {
  background-position: -408px -120px;
}
.icon-resize-vertical {
  background-position: -432px -119px;
}
.icon-resize-horizontal {
  background-position: -456px -118px;
}
[class^="xs-icon-"] {
  display: inline-block;
  width: 12px;
  height: 12px;
  margin-top: 1px;
  vertical-align: text-top;
  background-image: url(<?php echo plugins_url("wereviews/images/xs-icons.png"); ?>);
  background-position: 12px 12px;
  background-repeat: no-repeat;
  *margin-right: .3em;
}
[class^="xs-icon-"]:last-child {
  *margin-left: 0;
}
.xs-icon-bw {
  background-position: -36px 0;
}
.xs-icon-fw {
  background-position: -20px 0;
}
.dropdown {
  position: relative;
}
.dropdown-toggle {
  *margin-bottom: -3px;
}
.dropdown-toggle:active, .open .dropdown-toggle {
  outline: 0;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  text-indent: -99999px;
  *text-indent: 0;
  vertical-align: top;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid black;
  opacity: 0.5;
  filter: alpha(opacity=50);
  content: "\2193";
}
.dropdown .caret {
  margin-top: 8px;
  margin-left: 2px;
}
.dropdown:hover .caret, .open.dropdown .caret {
  opacity: 1;
  filter: alpha(opacity=100);
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  float: left;
  display: none;
  min-width: 150px;
  max-width: 150px;
  padding: 0 0 6px 0;
  margin: 0 0 0;
  list-style: none;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  font-size: 13px;
}
.dropdown-menu.bottom-up {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
.dropdown-menu .divider {
  border-top: 1px solid #ebebeb;
  margin-top: 9px;
  margin-bottom: 10px;
  padding: 0;
  cursor: default;
  /*    height: 1px;
    margin: 5px 1px;
    overflow: hidden;
    background-color: #e5e5e5;
    border-bottom: 1px solid white;

    // IE7 needs a set width since we gave a height. Restricting just
    // to IE7 to keep the 1px left/right space in other browsers.
    // It is unclear where IE is getting the extra space that we need
    // to negative-margin away, but so it goes.
    *width: 100%;
    *margin: -5px 0 5px;*/

}
.dropdown-menu a {
  position: relative;
  padding: 6px 0 6px 30px;
  color: #333;
  text-decoration: none;
  display: block;
  clear: both;
  font-weight: normal;
  line-height: 18px;
  white-space: nowrap;
}
.dropdown-menu a [class^="icon-"] {
  position: absolute;
  left: 7px;
  top: 9px;
}
.dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
  text-decoration: none;
  background-color: #eee;
}
.dropdown.open {
  *z-index: 1000;
}
.dropdown.open .dropdown-toggle {
  color: #08c;
  background: #ccc;
  background: rgba(0, 0, 0, 0.3);
}
.dropdown.open .dropdown-menu {
  display: block;
}
.g-button {
  position: relative;
  display: inline-block;
  overflow: visible;
  margin: 0;
  padding: 8px 12px;
  cursor: pointer;
  outline: none;
  border: 1px solid #dcdcdc;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  background-color: #f3f3f3;
  background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
  background-image: -ms-linear-gradient(top, #f5f5f5, #f1f1f1);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f1f1f1));
  background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
  background-image: -o-linear-gradient(top, #f5f5f5, #f1f1f1);
  background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#f1f1f1', GradientType=0);
  -webkit-background-clip: padding;
  -moz-background-clip: padding;
  background-clip: padding;
  /* IE hacks */

  zoom: 1;
  z-index: 1;
  *display: inline;
  font: bold 12px Helvetica, Arial, sans-serif;
  line-height: 12px;
  color: #444444;
  min-width: 42px;
  text-align: center;
  text-shadow: 0 1px 0 #fff;
  text-decoration: none;
  white-space: nowrap;
}
.g-button:hover,
.g-button:focus,
.g-button:active,
.g-button.active {
  color: #333;
  text-decoration: none;
  border-color: #c6c6c6;
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
  background-image: -ms-linear-gradient(top, #f8f8f8, #f1f1f1);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f8f8f8), to(#f1f1f1));
  background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
  background-image: -o-linear-gradient(top, #f8f8f8, #f1f1f1);
  background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#f1f1f1', GradientType=0);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  z-index: 100;
  outline: none;
}
.g-button:active, .g-button.active {
  background-color: #f4f4f4;
  background-image: -moz-linear-gradient(top, #f6f6f6, #f1f1f1);
  background-image: -ms-linear-gradient(top, #f6f6f6, #f1f1f1);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f1f1f1));
  background-image: -webkit-linear-gradient(top, #f6f6f6, #f1f1f1);
  background-image: -o-linear-gradient(top, #f6f6f6, #f1f1f1);
  background-image: linear-gradient(top, #f6f6f6, #f1f1f1);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#f1f1f1', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.g-button:focus {
  /* Blue border on button focus. */

  border-color: #4D90FE;
}
.g-button.checked {
  color: #333;
  text-shadow: none;
  border: 1px solid #ccc;
  background-color: #e8e8e8;
  background-image: -moz-linear-gradient(top, #eeeeee, #e0e0e0);
  background-image: -ms-linear-gradient(top, #eeeeee, #e0e0e0);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#eeeeee), to(#e0e0e0));
  background-image: -webkit-linear-gradient(top, #eeeeee, #e0e0e0);
  background-image: -o-linear-gradient(top, #eeeeee, #e0e0e0);
  background-image: linear-gradient(top, #eeeeee, #e0e0e0);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#e0e0e0', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
/* overrides extra padding on button elements in Firefox */
.g-button::-moz-focus-inner {
  padding: 0;
  border: 0;
}
/* ..................................................................... Red */
.g-button.red {
  color: white;
  text-shadow: 0 1px rgba(0, 0, 0, 0.1);
  border: 1px solid #C6322A;
  background-color: #d84a38;
  background-image: -moz-linear-gradient(top, #dd4b39, #d14836);
  background-image: -ms-linear-gradient(top, #dd4b39, #d14836);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#dd4b39), to(#d14836));
  background-image: -webkit-linear-gradient(top, #dd4b39, #d14836);
  background-image: -o-linear-gradient(top, #dd4b39, #d14836);
  background-image: linear-gradient(top, #dd4b39, #d14836);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dd4b39', endColorstr='#d14836', GradientType=0);
}
.g-button.red:hover, .g-button.red:focus, .g-button.red:active {
  border: 1px solid #AF301F;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  background-color: #d34332;
  background-image: -moz-linear-gradient(top, #dd4b39, #c53727);
  background-image: -ms-linear-gradient(top, #dd4b39, #c53727);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#dd4b39), to(#c53727));
  background-image: -webkit-linear-gradient(top, #dd4b39, #c53727);
  background-image: -o-linear-gradient(top, #dd4b39, #c53727);
  background-image: linear-gradient(top, #dd4b39, #c53727);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dd4b39', endColorstr='#c53727', GradientType=0);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.g-button.red:active, .g-button.red.active {
  background-color: #cb3d2d;
  background-image: -moz-linear-gradient(top, #dd4b39, #b0281a);
  background-image: -ms-linear-gradient(top, #dd4b39, #b0281a);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#dd4b39), to(#b0281a));
  background-image: -webkit-linear-gradient(top, #dd4b39, #b0281a);
  background-image: -o-linear-gradient(top, #dd4b39, #b0281a);
  background-image: linear-gradient(top, #dd4b39, #b0281a);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dd4b39', endColorstr='#b0281a', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
}
/* .................................................................... Blue */
.g-button.blue {
  color: white !important;
  text-shadow: 0 1px rgba(0, 0, 0, 0.1);
  border: 1px solid #3079ED;
  background-color: #4b8cf7;
  background-image: -moz-linear-gradient(top, #4d90fe, #4787ed);
  background-image: -ms-linear-gradient(top, #4d90fe, #4787ed);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4d90fe), to(#4787ed));
  background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
  background-image: -o-linear-gradient(top, #4d90fe, #4787ed);
  background-image: linear-gradient(top, #4d90fe, #4787ed);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d90fe', endColorstr='#4787ed', GradientType=0);
}
.g-button.blue:hover, .g-button.blue:focus, .g-button.blue:active {
  border: 1px solid #2F5BB7;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  background-color: #4387f5;
  background-image: -moz-linear-gradient(top, #4d90fe, #357ae8);
  background-image: -ms-linear-gradient(top, #4d90fe, #357ae8);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4d90fe), to(#357ae8));
  background-image: -webkit-linear-gradient(top, #4d90fe, #357ae8);
  background-image: -o-linear-gradient(top, #4d90fe, #357ae8);
  background-image: linear-gradient(top, #4d90fe, #357ae8);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d90fe', endColorstr='#357ae8', GradientType=0);
}
.g-button.blue:active, .g-button.blue.active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
}
/* ................................................................... Green */
.g-button.green {
  color: white;
  text-shadow: 0 1px rgba(0, 0, 0, 0.1);
  border: 1px solid #359947;
  background-color: #35aa47;
  background-image: -moz-linear-gradient(top, #35aa47, #35aa47);
  background-image: -ms-linear-gradient(top, #35aa47, #35aa47);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#35aa47), to(#35aa47));
  background-image: -webkit-linear-gradient(top, #35aa47, #35aa47);
  background-image: -o-linear-gradient(top, #35aa47, #35aa47);
  background-image: linear-gradient(top, #35aa47, #35aa47);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#35aa47', endColorstr='#35aa47', GradientType=0);
}
.g-button.green:hover, .g-button.green:focus, .g-button.green:active {
  border: 1px solid #508c36;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  background-color: #2ba142;
  background-image: -moz-linear-gradient(top, #35aa47, #1d943b);
  background-image: -ms-linear-gradient(top, #35aa47, #1d943b);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#35aa47), to(#1d943b));
  background-image: -webkit-linear-gradient(top, #35aa47, #1d943b);
  background-image: -o-linear-gradient(top, #35aa47, #1d943b);
  background-image: linear-gradient(top, #35aa47, #1d943b);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#35aa47', endColorstr='#1d943b', GradientType=0);
}
.g-button.green:active, .g-button.green.active {
  background-color: #239c3b;
  background-image: -moz-linear-gradient(top, #35aa47, #088728);
  background-image: -ms-linear-gradient(top, #35aa47, #088728);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#35aa47), to(#088728));
  background-image: -webkit-linear-gradient(top, #35aa47, #088728);
  background-image: -o-linear-gradient(top, #35aa47, #088728);
  background-image: linear-gradient(top, #35aa47, #088728);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#35aa47', endColorstr='#088728', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
}
/* .............................................................. Minibutton */
.sm {
  font-size: 11px;
}
.mini {
  height: 13px;
  font-size: 11px;
  font-weight: bold;
  line-height: 13px;
  padding: 4px 10px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}
/* ................................................................ Disabled */
.g-button.disabled {
  color: #B8B8B8;
  border: 1px solid rgba(0, 0, 0, 0.05);
  background: white;
  cursor: default;
}
.g-button.disabled:hover, .g-button.disabled:active {
  color: #b8b8b8;
  text-shadow: none;
  background: white;
  border: 1px solid rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.g-button.disabled2 {
  color: #b8b8b8;
  cursor: default;
  border: 1px solid #dcdcdc;
}
.g-button.disabled2:hover {
  border: 1px solid #dcdcdc;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
/* ................................................................ Dropdown */
.g-button.dropdown-toggle {
  min-width: 5px;
  height: 12px;
  padding: 8px;
}
.g-button .caret {
  margin-left: 0;
  margin-top: 4px;
}
.g-button:hover .caret {
  opacity: 1;
}
/* .................................................................... Misc */
.g-button.no-text {
  min-width: 14px;
}
.g-button.xs-no-text {
  height: 9px;
  width: 18px;
  font-size: 10px;
  font-weight: bold;
  line-height: 10px;
  padding: 4px 2px;
  min-width: 5px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}
.g-button-group {
  position: relative;
  display: inline-block;
  list-style: none;
  padding: 0;
  margin: 0;
  /* IE hacks */

  zoom: 1;
  *display: inline;
}
.g-button + .g-button,
.g-button + .g-button-group,
.g-button-group + .g-button,
.g-button-group + .g-button-group {
  margin-left: 15px;
}
.g-button-group .g-button {
  position: relative;
  float: left;
  margin-left: -1px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.g-button-group .g-button:first-child {
  margin-left: 0;
  -webkit-border-top-left-radius: 2px;
  -moz-border-radius-topleft: 2px;
  border-top-left-radius: 2px;
  -webkit-border-bottom-left-radius: 2px;
  -moz-border-radius-bottomleft: 2px;
  border-bottom-left-radius: 2px;
}
.g-button-group .g-button:last-child, .g-button-group .dropdown-toggle {
  -webkit-border-top-right-radius: 2px;
  -moz-border-radius-topright: 2px;
  border-top-right-radius: 2px;
  -webkit-border-bottom-right-radius: 2px;
  -moz-border-radius-bottomright: 2px;
  border-bottom-right-radius: 2px;
}
/* -------------------------------------------------------- BUTTON CONTAINER */
/* For mixing buttons and button groups, e.g., in a navigation bar */
.g-button-container .g-button, .g-button-container .g-button-group {
  vertical-align: top;
}
.g-button-group.open {
  *z-index: 1000;
}
.g-button-group.open .dropdown-menu {
  display: block;
  margin-top: 1px;
}
.g-button-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15);
}
.dropdown-menu li{
    text-align: left;
}
 
</style>

<?php
$data="";
if(!$param['show'])$perpage=1000;
else
$perpage=$param['show'];
$listtable='<table id="review" width="100%">';
$review_list=get_posts("post_type=reviews&posts_per_page=".$perpage);
//print_r($review_list); 
     $listtable.="<tr><th><strong>Review Title</strong></th><th><strong>Rating</strong></th><th><strong>Visit</strong></th></tr>";  
    foreach($review_list as $value){
        $meta_details="";$review_rating="";
        $meta_details=get_post_meta($value->ID, 'review_details',true);
        $review_rating=get_post_meta($value->ID, 'review_rating',true);
        //print_r($meta_details);
        //review rating table
         //echo $meta_details['description'];
         
        $review_table="";
        /*if($review_rating){
            $review_table="<table width='100%'>";
            $review_table.="<tr><th>Feature Name</th><th>Rating</th></tr>";
            for($i=0;$i<count($review_rating['rating']);$i++){
                $rating="";
                $rating=rating_star($review_rating['rating'][$i]);
                
                $review_table.="<tr><td>".$review_rating['concept'][$i]."</td><td>".$rating."</td></tr>";
            }
            $review_table.="</table>"; 
        }*/
         
          
      $listtable.="<tr><td><a href='".get_permalink($value->ID)."'><b>{$value->post_title}</b></a><br/><i class='spo {$meta_details[ribbon]}'>".$meta_details['title']."</i> &nbsp;</td><td>".rating_star($meta_details['rating'])."</td><td valign='top'><div class='g-button-group'><a href='".$meta_details['affiliate_link']."' class='g-button blue'>Visit Website</a><a class='g-button blue dropdown-toggle' data-toggle='dropdown' href='#'><span class='caret'></span></a><ul class='dropdown-menu'><li><a href='".$meta_details['affiliate_link']."'><i class='icon-ok'></i>Visit Website</a></li><li><a href='".get_permalink($value->ID)."'><i class='icon-arrow-right'></i>Full Review</a></li></ul></div></td></tr>"; 
    }  
         
 
$listtable.='</table>';
$data=$listtable;
?>