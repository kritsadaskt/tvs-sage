"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdate_roots_bud_sage"]("app",{

/***/ "../node_modules/@roots/bud-support/lib/css-loader/index.cjs??css!../node_modules/postcss-loader/dist/cjs.js??postcss!./styles/app.css":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(\"../node_modules/css-loader/dist/runtime/sourceMaps.js\");\n/* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(\"../node_modules/css-loader/dist/runtime/api.js\");\n/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__);\n// Imports\n\n\nvar ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default()((_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default()));\n___CSS_LOADER_EXPORT___.push([module.id, \"@import url(https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);\"]);\n// Module\n___CSS_LOADER_EXPORT___.push([module.id, \"/*\\n! tailwindcss v3.4.0 | MIT License | https://tailwindcss.com\\n*/\\n\\n/*\\n1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)\\n2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)\\n*/\\n\\n*,\\n::before,\\n::after {\\n  box-sizing: border-box; /* 1 */\\n  border-width: 0; /* 2 */\\n  border-style: solid; /* 2 */\\n  border-color: #e5e7eb; /* 2 */\\n}\\n\\n::before,\\n::after {\\n  --tw-content: '';\\n}\\n\\n/*\\n1. Use a consistent sensible line-height in all browsers.\\n2. Prevent adjustments of font size after orientation changes in iOS.\\n3. Use a more readable tab size.\\n4. Use the user's configured `sans` font-family by default.\\n5. Use the user's configured `sans` font-feature-settings by default.\\n6. Use the user's configured `sans` font-variation-settings by default.\\n7. Disable tap highlights on iOS\\n*/\\n\\nhtml,\\n:host {\\n  line-height: 1.5; /* 1 */\\n  -webkit-text-size-adjust: 100%; /* 2 */\\n  -moz-tab-size: 4; /* 3 */\\n  -o-tab-size: 4;\\n     tab-size: 4; /* 3 */\\n  font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, \\\"Apple Color Emoji\\\", \\\"Segoe UI Emoji\\\", \\\"Segoe UI Symbol\\\", \\\"Noto Color Emoji\\\"; /* 4 */\\n  font-feature-settings: normal; /* 5 */\\n  font-variation-settings: normal; /* 6 */\\n  -webkit-tap-highlight-color: transparent; /* 7 */\\n}\\n\\n/*\\n1. Remove the margin in all browsers.\\n2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.\\n*/\\n\\nbody {\\n  margin: 0; /* 1 */\\n  line-height: inherit; /* 2 */\\n}\\n\\n/*\\n1. Add the correct height in Firefox.\\n2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)\\n3. Ensure horizontal rules are visible by default.\\n*/\\n\\nhr {\\n  height: 0; /* 1 */\\n  color: inherit; /* 2 */\\n  border-top-width: 1px; /* 3 */\\n}\\n\\n/*\\nAdd the correct text decoration in Chrome, Edge, and Safari.\\n*/\\n\\nabbr:where([title]) {\\n  text-decoration: underline;\\n  -webkit-text-decoration: underline dotted;\\n          text-decoration: underline dotted;\\n}\\n\\n/*\\nRemove the default font size and weight for headings.\\n*/\\n\\nh1,\\nh2,\\nh3,\\nh4,\\nh5,\\nh6 {\\n  font-size: inherit;\\n  font-weight: inherit;\\n}\\n\\n/*\\nReset links to optimize for opt-in styling instead of opt-out.\\n*/\\n\\na {\\n  color: inherit;\\n  text-decoration: inherit;\\n}\\n\\n/*\\nAdd the correct font weight in Edge and Safari.\\n*/\\n\\nb,\\nstrong {\\n  font-weight: bolder;\\n}\\n\\n/*\\n1. Use the user's configured `mono` font-family by default.\\n2. Use the user's configured `mono` font-feature-settings by default.\\n3. Use the user's configured `mono` font-variation-settings by default.\\n4. Correct the odd `em` font sizing in all browsers.\\n*/\\n\\ncode,\\nkbd,\\nsamp,\\npre {\\n  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \\\"Liberation Mono\\\", \\\"Courier New\\\", monospace; /* 1 */\\n  font-feature-settings: normal; /* 2 */\\n  font-variation-settings: normal; /* 3 */\\n  font-size: 1em; /* 4 */\\n}\\n\\n/*\\nAdd the correct font size in all browsers.\\n*/\\n\\nsmall {\\n  font-size: 80%;\\n}\\n\\n/*\\nPrevent `sub` and `sup` elements from affecting the line height in all browsers.\\n*/\\n\\nsub,\\nsup {\\n  font-size: 75%;\\n  line-height: 0;\\n  position: relative;\\n  vertical-align: baseline;\\n}\\n\\nsub {\\n  bottom: -0.25em;\\n}\\n\\nsup {\\n  top: -0.5em;\\n}\\n\\n/*\\n1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)\\n2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)\\n3. Remove gaps between table borders by default.\\n*/\\n\\ntable {\\n  text-indent: 0; /* 1 */\\n  border-color: inherit; /* 2 */\\n  border-collapse: collapse; /* 3 */\\n}\\n\\n/*\\n1. Change the font styles in all browsers.\\n2. Remove the margin in Firefox and Safari.\\n3. Remove default padding in all browsers.\\n*/\\n\\nbutton,\\ninput,\\noptgroup,\\nselect,\\ntextarea {\\n  font-family: inherit; /* 1 */\\n  font-feature-settings: inherit; /* 1 */\\n  font-variation-settings: inherit; /* 1 */\\n  font-size: 100%; /* 1 */\\n  font-weight: inherit; /* 1 */\\n  line-height: inherit; /* 1 */\\n  color: inherit; /* 1 */\\n  margin: 0; /* 2 */\\n  padding: 0; /* 3 */\\n}\\n\\n/*\\nRemove the inheritance of text transform in Edge and Firefox.\\n*/\\n\\nbutton,\\nselect {\\n  text-transform: none;\\n}\\n\\n/*\\n1. Correct the inability to style clickable types in iOS and Safari.\\n2. Remove default button styles.\\n*/\\n\\nbutton,\\n[type='button'],\\n[type='reset'],\\n[type='submit'] {\\n  -webkit-appearance: button; /* 1 */\\n  background-color: transparent; /* 2 */\\n  background-image: none; /* 2 */\\n}\\n\\n/*\\nUse the modern Firefox focus style for all focusable elements.\\n*/\\n\\n:-moz-focusring {\\n  outline: auto;\\n}\\n\\n/*\\nRemove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)\\n*/\\n\\n:-moz-ui-invalid {\\n  box-shadow: none;\\n}\\n\\n/*\\nAdd the correct vertical alignment in Chrome and Firefox.\\n*/\\n\\nprogress {\\n  vertical-align: baseline;\\n}\\n\\n/*\\nCorrect the cursor style of increment and decrement buttons in Safari.\\n*/\\n\\n::-webkit-inner-spin-button,\\n::-webkit-outer-spin-button {\\n  height: auto;\\n}\\n\\n/*\\n1. Correct the odd appearance in Chrome and Safari.\\n2. Correct the outline style in Safari.\\n*/\\n\\n[type='search'] {\\n  -webkit-appearance: textfield; /* 1 */\\n  outline-offset: -2px; /* 2 */\\n}\\n\\n/*\\nRemove the inner padding in Chrome and Safari on macOS.\\n*/\\n\\n::-webkit-search-decoration {\\n  -webkit-appearance: none;\\n}\\n\\n/*\\n1. Correct the inability to style clickable types in iOS and Safari.\\n2. Change font properties to `inherit` in Safari.\\n*/\\n\\n::-webkit-file-upload-button {\\n  -webkit-appearance: button; /* 1 */\\n  font: inherit; /* 2 */\\n}\\n\\n/*\\nAdd the correct display in Chrome and Safari.\\n*/\\n\\nsummary {\\n  display: list-item;\\n}\\n\\n/*\\nRemoves the default spacing and border for appropriate elements.\\n*/\\n\\nblockquote,\\ndl,\\ndd,\\nh1,\\nh2,\\nh3,\\nh4,\\nh5,\\nh6,\\nhr,\\nfigure,\\np,\\npre {\\n  margin: 0;\\n}\\n\\nfieldset {\\n  margin: 0;\\n  padding: 0;\\n}\\n\\nlegend {\\n  padding: 0;\\n}\\n\\nol,\\nul,\\nmenu {\\n  list-style: none;\\n  margin: 0;\\n  padding: 0;\\n}\\n\\n/*\\nReset default styling for dialogs.\\n*/\\n\\ndialog {\\n  padding: 0;\\n}\\n\\n/*\\nPrevent resizing textareas horizontally by default.\\n*/\\n\\ntextarea {\\n  resize: vertical;\\n}\\n\\n/*\\n1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)\\n2. Set the default placeholder color to the user's configured gray 400 color.\\n*/\\n\\ninput::-moz-placeholder, textarea::-moz-placeholder {\\n  opacity: 1; /* 1 */\\n  color: #9ca3af; /* 2 */\\n}\\n\\ninput::placeholder,\\ntextarea::placeholder {\\n  opacity: 1; /* 1 */\\n  color: #9ca3af; /* 2 */\\n}\\n\\n/*\\nSet the default cursor for buttons.\\n*/\\n\\nbutton,\\n[role=\\\"button\\\"] {\\n  cursor: pointer;\\n}\\n\\n/*\\nMake sure disabled buttons don't get the pointer cursor.\\n*/\\n\\n:disabled {\\n  cursor: default;\\n}\\n\\n/*\\n1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)\\n2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)\\n   This can trigger a poorly considered lint error in some tools but is included by design.\\n*/\\n\\nimg,\\nsvg,\\nvideo,\\ncanvas,\\naudio,\\niframe,\\nembed,\\nobject {\\n  display: block; /* 1 */\\n  vertical-align: middle; /* 2 */\\n}\\n\\n/*\\nConstrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)\\n*/\\n\\nimg,\\nvideo {\\n  max-width: 100%;\\n  height: auto;\\n}\\n\\n/* Make elements with the HTML hidden attribute stay hidden by default */\\n\\n[hidden] {\\n  display: none;\\n}\\n\\nhtml {\\n    font-family: \\\"Prompt\\\", sans-serif;\\n  }\\n\\n*, ::before, ::after{\\n  --tw-border-spacing-x: 0;\\n  --tw-border-spacing-y: 0;\\n  --tw-translate-x: 0;\\n  --tw-translate-y: 0;\\n  --tw-rotate: 0;\\n  --tw-skew-x: 0;\\n  --tw-skew-y: 0;\\n  --tw-scale-x: 1;\\n  --tw-scale-y: 1;\\n  --tw-pan-x:  ;\\n  --tw-pan-y:  ;\\n  --tw-pinch-zoom:  ;\\n  --tw-scroll-snap-strictness: proximity;\\n  --tw-gradient-from-position:  ;\\n  --tw-gradient-via-position:  ;\\n  --tw-gradient-to-position:  ;\\n  --tw-ordinal:  ;\\n  --tw-slashed-zero:  ;\\n  --tw-numeric-figure:  ;\\n  --tw-numeric-spacing:  ;\\n  --tw-numeric-fraction:  ;\\n  --tw-ring-inset:  ;\\n  --tw-ring-offset-width: 0px;\\n  --tw-ring-offset-color: #fff;\\n  --tw-ring-color: rgba(59, 130, 246, 0.5);\\n  --tw-ring-offset-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-ring-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-shadow-colored: 0 0 rgba(0,0,0,0);\\n  --tw-blur:  ;\\n  --tw-brightness:  ;\\n  --tw-contrast:  ;\\n  --tw-grayscale:  ;\\n  --tw-hue-rotate:  ;\\n  --tw-invert:  ;\\n  --tw-saturate:  ;\\n  --tw-sepia:  ;\\n  --tw-drop-shadow:  ;\\n  --tw-backdrop-blur:  ;\\n  --tw-backdrop-brightness:  ;\\n  --tw-backdrop-contrast:  ;\\n  --tw-backdrop-grayscale:  ;\\n  --tw-backdrop-hue-rotate:  ;\\n  --tw-backdrop-invert:  ;\\n  --tw-backdrop-opacity:  ;\\n  --tw-backdrop-saturate:  ;\\n  --tw-backdrop-sepia:  ;\\n}\\n\\n::backdrop{\\n  --tw-border-spacing-x: 0;\\n  --tw-border-spacing-y: 0;\\n  --tw-translate-x: 0;\\n  --tw-translate-y: 0;\\n  --tw-rotate: 0;\\n  --tw-skew-x: 0;\\n  --tw-skew-y: 0;\\n  --tw-scale-x: 1;\\n  --tw-scale-y: 1;\\n  --tw-pan-x:  ;\\n  --tw-pan-y:  ;\\n  --tw-pinch-zoom:  ;\\n  --tw-scroll-snap-strictness: proximity;\\n  --tw-gradient-from-position:  ;\\n  --tw-gradient-via-position:  ;\\n  --tw-gradient-to-position:  ;\\n  --tw-ordinal:  ;\\n  --tw-slashed-zero:  ;\\n  --tw-numeric-figure:  ;\\n  --tw-numeric-spacing:  ;\\n  --tw-numeric-fraction:  ;\\n  --tw-ring-inset:  ;\\n  --tw-ring-offset-width: 0px;\\n  --tw-ring-offset-color: #fff;\\n  --tw-ring-color: rgba(59, 130, 246, 0.5);\\n  --tw-ring-offset-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-ring-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-shadow: 0 0 rgba(0,0,0,0);\\n  --tw-shadow-colored: 0 0 rgba(0,0,0,0);\\n  --tw-blur:  ;\\n  --tw-brightness:  ;\\n  --tw-contrast:  ;\\n  --tw-grayscale:  ;\\n  --tw-hue-rotate:  ;\\n  --tw-invert:  ;\\n  --tw-saturate:  ;\\n  --tw-sepia:  ;\\n  --tw-drop-shadow:  ;\\n  --tw-backdrop-blur:  ;\\n  --tw-backdrop-brightness:  ;\\n  --tw-backdrop-contrast:  ;\\n  --tw-backdrop-grayscale:  ;\\n  --tw-backdrop-hue-rotate:  ;\\n  --tw-backdrop-invert:  ;\\n  --tw-backdrop-opacity:  ;\\n  --tw-backdrop-saturate:  ;\\n  --tw-backdrop-sepia:  ;\\n}\\n\\n.container{\\n  width: 100%;\\n  margin-right: auto;\\n  margin-left: auto;\\n}\\n\\n@media (min-width: 640px){\\n\\n  .container{\\n    max-width: 640px;\\n  }\\n}\\n\\n@media (min-width: 768px){\\n\\n  .container{\\n    max-width: 768px;\\n  }\\n}\\n\\n@media (min-width: 1024px){\\n\\n  .container{\\n    max-width: 1024px;\\n  }\\n}\\n\\n@media (min-width: 1280px){\\n\\n  .container{\\n    max-width: 1280px;\\n  }\\n}\\n\\n@media (min-width: 1536px){\\n\\n  .container{\\n    max-width: 1536px;\\n  }\\n}\\n\\n.sr-only{\\n  position: absolute;\\n  width: 1px;\\n  height: 1px;\\n  padding: 0;\\n  margin: -1px;\\n  overflow: hidden;\\n  clip: rect(0, 0, 0, 0);\\n  white-space: nowrap;\\n  border-width: 0;\\n}\\n\\n.static{\\n  position: static;\\n}\\n\\n.fixed{\\n  position: fixed;\\n}\\n\\n.absolute{\\n  position: absolute;\\n}\\n\\n.relative{\\n  position: relative;\\n}\\n\\n.bottom-4{\\n  bottom: 1rem;\\n}\\n\\n.left-0{\\n  left: 0px;\\n}\\n\\n.right-0{\\n  right: 0px;\\n}\\n\\n.top-0{\\n  top: 0px;\\n}\\n\\n.z-10{\\n  z-index: 10;\\n}\\n\\n.col-span-3{\\n  grid-column: span 3 / span 3;\\n}\\n\\n.mx-auto{\\n  margin-left: auto;\\n  margin-right: auto;\\n}\\n\\n.my-4{\\n  margin-top: 1rem;\\n  margin-bottom: 1rem;\\n}\\n\\n.mb-2{\\n  margin-bottom: 0.5rem;\\n}\\n\\n.mb-3{\\n  margin-bottom: 0.75rem;\\n}\\n\\n.mb-5{\\n  margin-bottom: 1.25rem;\\n}\\n\\n.mb-52{\\n  margin-bottom: 13rem;\\n}\\n\\n.mb-6{\\n  margin-bottom: 1.5rem;\\n}\\n\\n.mb-\\\\[18px\\\\]{\\n  margin-bottom: 18px;\\n}\\n\\n.block{\\n  display: block;\\n}\\n\\n.inline-block{\\n  display: inline-block;\\n}\\n\\n.flex{\\n  display: flex;\\n}\\n\\n.grid{\\n  display: grid;\\n}\\n\\n.hidden{\\n  display: none;\\n}\\n\\n.aspect-4\\\\/3{\\n  aspect-ratio: 4 / 3;\\n}\\n\\n.aspect-\\\\[3\\\\/4\\\\]{\\n  aspect-ratio: 3/4;\\n}\\n\\n.aspect-video{\\n  aspect-ratio: 16 / 9;\\n}\\n\\n.h-\\\\[760px\\\\]{\\n  height: 760px;\\n}\\n\\n.h-full{\\n  height: 100%;\\n}\\n\\n.h-screen{\\n  height: 100vh;\\n}\\n\\n.min-h-\\\\[710px\\\\]{\\n  min-height: 710px;\\n}\\n\\n.min-h-screen{\\n  min-height: 100vh;\\n}\\n\\n.min-h-fit{\\n  min-height: -moz-fit-content;\\n  min-height: fit-content;\\n}\\n\\n.w-1\\\\/2{\\n  width: 50%;\\n}\\n\\n.w-10{\\n  width: 2.5rem;\\n}\\n\\n.w-10\\\\/12{\\n  width: 83.333333%;\\n}\\n\\n.w-2\\\\/12{\\n  width: 16.666667%;\\n}\\n\\n.w-3\\\\/5{\\n  width: 60%;\\n}\\n\\n.w-4\\\\/5{\\n  width: 80%;\\n}\\n\\n.w-\\\\[200px\\\\]{\\n  width: 200px;\\n}\\n\\n.w-\\\\[60px\\\\]{\\n  width: 60px;\\n}\\n\\n.w-full{\\n  width: 100%;\\n}\\n\\n.w-52{\\n  width: 13rem;\\n}\\n\\n.rotate-180{\\n  --tw-rotate: 180deg;\\n  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(180deg) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));\\n  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));\\n}\\n\\n.cursor-pointer{\\n  cursor: pointer;\\n}\\n\\n.grid-cols-3{\\n  grid-template-columns: repeat(3, minmax(0, 1fr));\\n}\\n\\n.flex-col{\\n  flex-direction: column;\\n}\\n\\n.items-start{\\n  align-items: flex-start;\\n}\\n\\n.items-end{\\n  align-items: flex-end;\\n}\\n\\n.items-center{\\n  align-items: center;\\n}\\n\\n.justify-end{\\n  justify-content: flex-end;\\n}\\n\\n.justify-center{\\n  justify-content: center;\\n}\\n\\n.justify-between{\\n  justify-content: space-between;\\n}\\n\\n.justify-around{\\n  justify-content: space-around;\\n}\\n\\n.gap-10{\\n  gap: 2.5rem;\\n}\\n\\n.gap-3{\\n  gap: 0.75rem;\\n}\\n\\n.gap-5{\\n  gap: 1.25rem;\\n}\\n\\n.gap-4{\\n  gap: 1rem;\\n}\\n\\n.rounded-3xl{\\n  border-radius: 1.5rem;\\n}\\n\\n.border{\\n  border-width: 1px;\\n}\\n\\n.border-b{\\n  border-bottom-width: 1px;\\n}\\n\\n.border-white{\\n  --tw-border-opacity: 1;\\n  border-color: rgba(255, 255, 255, 1);\\n  border-color: rgba(255, 255, 255, var(--tw-border-opacity));\\n}\\n\\n.border-b-white{\\n  --tw-border-opacity: 1;\\n  border-bottom-color: rgba(255, 255, 255, 1);\\n  border-bottom-color: rgba(255, 255, 255, var(--tw-border-opacity));\\n}\\n\\n.bg-black{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(0, 0, 0, 1);\\n  background-color: rgba(0, 0, 0, var(--tw-bg-opacity));\\n}\\n\\n.bg-black\\\\/60{\\n  background-color: rgba(0, 0, 0, 0.6);\\n}\\n\\n.bg-green-400{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(74, 222, 128, 1);\\n  background-color: rgba(74, 222, 128, var(--tw-bg-opacity));\\n}\\n\\n.bg-indigo-400{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(129, 140, 248, 1);\\n  background-color: rgba(129, 140, 248, var(--tw-bg-opacity));\\n}\\n\\n.bg-red-400{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(248, 113, 113, 1);\\n  background-color: rgba(248, 113, 113, var(--tw-bg-opacity));\\n}\\n\\n.bg-tvs-dark-1{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(24, 24, 24, 1);\\n  background-color: rgba(24, 24, 24, var(--tw-bg-opacity));\\n}\\n\\n.bg-tvs-orange-1{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(237, 50, 18, 1);\\n  background-color: rgba(237, 50, 18, var(--tw-bg-opacity));\\n}\\n\\n.bg-white{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(255, 255, 255, 1);\\n  background-color: rgba(255, 255, 255, var(--tw-bg-opacity));\\n}\\n\\n.bg-yellow-400{\\n  --tw-bg-opacity: 1;\\n  background-color: rgba(250, 204, 21, 1);\\n  background-color: rgba(250, 204, 21, var(--tw-bg-opacity));\\n}\\n\\n.bg-none{\\n  background-image: none;\\n}\\n\\n.bg-cover{\\n  background-size: cover;\\n}\\n\\n.bg-center{\\n  background-position: center;\\n}\\n\\n.px-2{\\n  padding-left: 0.5rem;\\n  padding-right: 0.5rem;\\n}\\n\\n.px-3{\\n  padding-left: 0.75rem;\\n  padding-right: 0.75rem;\\n}\\n\\n.py-1{\\n  padding-top: 0.25rem;\\n  padding-bottom: 0.25rem;\\n}\\n\\n.py-10{\\n  padding-top: 2.5rem;\\n  padding-bottom: 2.5rem;\\n}\\n\\n.py-12{\\n  padding-top: 3rem;\\n  padding-bottom: 3rem;\\n}\\n\\n.py-5{\\n  padding-top: 1.25rem;\\n  padding-bottom: 1.25rem;\\n}\\n\\n.pb-8{\\n  padding-bottom: 2rem;\\n}\\n\\n.pt-8{\\n  padding-top: 2rem;\\n}\\n\\n.text-center{\\n  text-align: center;\\n}\\n\\n.font-baijam{\\n  font-family: Bai Jamjuree, sans-serif;\\n}\\n\\n.text-2xl{\\n  font-size: 1.5rem;\\n  line-height: 2rem;\\n}\\n\\n.text-3xl{\\n  font-size: 1.875rem;\\n  line-height: 2.25rem;\\n}\\n\\n.text-4xl{\\n  font-size: 2.25rem;\\n  line-height: 2.5rem;\\n}\\n\\n.text-5xl{\\n  font-size: 3rem;\\n  line-height: 1;\\n}\\n\\n.text-\\\\[16px\\\\]{\\n  font-size: 16px;\\n}\\n\\n.text-\\\\[24px\\\\]{\\n  font-size: 24px;\\n}\\n\\n.text-\\\\[46px\\\\]{\\n  font-size: 46px;\\n}\\n\\n.text-xl{\\n  font-size: 1.25rem;\\n  line-height: 1.75rem;\\n}\\n\\n.font-bold{\\n  font-weight: 700;\\n}\\n\\n.font-extralight{\\n  font-weight: 200;\\n}\\n\\n.font-light{\\n  font-weight: 300;\\n}\\n\\n.font-medium{\\n  font-weight: 500;\\n}\\n\\n.font-normal{\\n  font-weight: 400;\\n}\\n\\n.font-semibold{\\n  font-weight: 600;\\n}\\n\\n.font-thin{\\n  font-weight: 100;\\n}\\n\\n.uppercase{\\n  text-transform: uppercase;\\n}\\n\\n.text-black{\\n  --tw-text-opacity: 1;\\n  color: rgba(0, 0, 0, 1);\\n  color: rgba(0, 0, 0, var(--tw-text-opacity));\\n}\\n\\n.text-green-50{\\n  --tw-text-opacity: 1;\\n  color: rgba(240, 253, 244, 1);\\n  color: rgba(240, 253, 244, var(--tw-text-opacity));\\n}\\n\\n.text-indigo-50{\\n  --tw-text-opacity: 1;\\n  color: rgba(238, 242, 255, 1);\\n  color: rgba(238, 242, 255, var(--tw-text-opacity));\\n}\\n\\n.text-red-50{\\n  --tw-text-opacity: 1;\\n  color: rgba(254, 242, 242, 1);\\n  color: rgba(254, 242, 242, var(--tw-text-opacity));\\n}\\n\\n.text-tvs-gray-1{\\n  --tw-text-opacity: 1;\\n  color: rgba(85, 85, 85, 1);\\n  color: rgba(85, 85, 85, var(--tw-text-opacity));\\n}\\n\\n.text-tvs-orange-1{\\n  --tw-text-opacity: 1;\\n  color: rgba(237, 50, 18, 1);\\n  color: rgba(237, 50, 18, var(--tw-text-opacity));\\n}\\n\\n.text-white{\\n  --tw-text-opacity: 1;\\n  color: rgba(255, 255, 255, 1);\\n  color: rgba(255, 255, 255, var(--tw-text-opacity));\\n}\\n\\n.text-yellow-50{\\n  --tw-text-opacity: 1;\\n  color: rgba(254, 252, 232, 1);\\n  color: rgba(254, 252, 232, var(--tw-text-opacity));\\n}\\n\\n.outline{\\n  outline-style: solid;\\n}\\n\\n.brightness-\\\\[0\\\\.3\\\\]{\\n  --tw-brightness: brightness(0.3);\\n  filter: var(--tw-blur) brightness(0.3) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);\\n  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);\\n}\\n\\n.delay-300{\\n  transition-delay: 300ms;\\n}\\n\\n.ease-\\\\[cubic-bezier\\\\(\\\\.02\\\\2c \\\\.47\\\\2c \\\\.58\\\\2c \\\\.98\\\\)\\\\]{\\n  transition-timing-function: cubic-bezier(.02,.47,.58,.98);\\n}\\n\\nbody.logged-in header, body.logged-in #right_sidebar {\\n    top: 32px;\\n  }\\n\\n#home_slider .main-slide {\\n    position: relative;\\n  }\\n\\n#home_slider .main-slide::before {\\n    content: '';\\n    top: 0;\\n    left: 0;\\n    width: 100%;\\n    height: 100%;\\n    position: absolute;\\n    background-color: rgba(0,0,0,0.5);\\n  }\\n\\n.after\\\\:hidden::after{\\n  content: var(--tw-content);\\n  display: none;\\n}\\n\\n.hover\\\\:text-black:hover{\\n  --tw-text-opacity: 1;\\n  color: rgba(0, 0, 0, 1);\\n  color: rgba(0, 0, 0, var(--tw-text-opacity));\\n}\\n\\n.hover\\\\:text-tvs-orange-1:hover{\\n  --tw-text-opacity: 1;\\n  color: rgba(237, 50, 18, 1);\\n  color: rgba(237, 50, 18, var(--tw-text-opacity));\\n}\\n\\n.focus\\\\:not-sr-only:focus{\\n  position: static;\\n  width: auto;\\n  height: auto;\\n  padding: 0;\\n  margin: 0;\\n  overflow: visible;\\n  clip: auto;\\n  white-space: normal;\\n}\\n\\n.\\\\[\\\\&\\\\.swiper-slide-thumb-active\\\\]\\\\:brightness-100.swiper-slide-thumb-active{\\n  --tw-brightness: brightness(1);\\n  filter: var(--tw-blur) brightness(1) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);\\n  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);\\n}\\n\\n\", \"\",{\"version\":3,\"sources\":[\"webpack://./styles/app.css\"],\"names\":[],\"mappings\":\"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\",\"sourcesContent\":[\"@import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');\\n\\n@tailwind base;\\n@tailwind components;\\n@tailwind utilities;\\n\\n@layer base {\\n  html {\\n    font-family: \\\"Prompt\\\", sans-serif;\\n  }\\n}\\n\\nbody.logged-in {\\n  header, #right_sidebar {\\n    top: 32px;\\n  }\\n}\\n\\n#home_slider {\\n  .main-slide {\\n    position: relative;\\n  }\\n  .main-slide::before {\\n    content: '';\\n    top: 0;\\n    left: 0;\\n    width: 100%;\\n    height: 100%;\\n    position: absolute;\\n    background-color: rgba(0,0,0,0.5);\\n  }\\n}\\n\\n\"],\"sourceRoot\":\"\"}]);\n// Exports\n/* harmony default export */ __webpack_exports__[\"default\"] = (___CSS_LOADER_EXPORT___);\n\n\n//# sourceURL=webpack://@roots/bud/sage/./styles/app.css?../node_modules/@roots/bud-support/lib/css-loader/index.cjs??css!../node_modules/postcss-loader/dist/cjs.js??postcss");

/***/ })

});