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

/***/ "./scripts/app.js":
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

eval("var _Users_kritsada_Sites_thevisual_wp_content_themes_tvs_sage_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache;\n__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Users_kritsada_Sites_thevisual_wp_content_themes_tvs_sage_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(\"../node_modules/react-refresh/runtime.js\");\n/* harmony import */ var _roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(\"../node_modules/@roots/sage/lib/client/dom-ready.js\");\n/* harmony import */ var swiper_bundle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(\"../node_modules/swiper/swiper-bundle.mjs\");\n/* harmony import */ var swiper_css_bundle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(\"../node_modules/swiper/swiper-bundle.css\");\n/* harmony import */ var animate_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(\"../node_modules/animate.css/animate.css\");\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(\"../node_modules/gsap/index.js\");\n/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(\"../node_modules/gsap/ScrollTrigger.js\");\n/* provided dependency */ var __react_refresh_utils__ = __webpack_require__(\"../node_modules/@pmmmwh/react-refresh-webpack-plugin/lib/runtime/RefreshUtils.js\");\n\n__webpack_require__.$Refresh$.runtime = /*#__PURE__*/ (_Users_kritsada_Sites_thevisual_wp_content_themes_tvs_sage_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache || (_Users_kritsada_Sites_thevisual_wp_content_themes_tvs_sage_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache = __webpack_require__.t(_Users_kritsada_Sites_thevisual_wp_content_themes_tvs_sage_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0__, 2)));\n\n\n// import Swiper JS\n\n// import Swiper and modules styles\n\n\n\n\n/**\n * Application entrypoint\n */ (0,_roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_1__[\"default\"])(async ()=>{\n    gsap__WEBPACK_IMPORTED_MODULE_5__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_6__.ScrollTrigger);\n    gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_6__.ScrollTrigger.create({\n        trigger: '#headline',\n        start: \"top top\",\n        onToggle: (self)=>console.log(\"toggled, isActive:\", self.isActive)\n    });\n    // Homepage Slider\n    const homepage_top_slider = document.getElementById('home_slider');\n    const home_slider_thumbs = document.getElementById('home_slider_thumbs');\n    const home_thumbnails = new swiper_bundle__WEBPACK_IMPORTED_MODULE_2__[\"default\"](home_slider_thumbs, {\n        slidesPerView: 4,\n        spaceBetween: 5,\n        loop: true,\n        watchSlidesProgress: true\n    });\n    const home_slider = new swiper_bundle__WEBPACK_IMPORTED_MODULE_2__[\"default\"](homepage_top_slider, {\n        slidesPerView: 1,\n        loop: true,\n        speed: 800,\n        //modules: [Navigation, Pagination],\n        navigation: {\n            nextEl: '.home-slide-btn.swiper-button-next',\n            prevEl: '.home-slide-btn.swiper-button-prev'\n        },\n        thumbs: {\n            swiper: home_thumbnails\n        }\n    });\n});\n/**\n * @see {@link https://webpack.js.org/api/hot-module-replacement/}\n */ if (true) __webpack_module__.hot.accept(console.error);\n\n\nvar $ReactRefreshModuleId$ = __webpack_require__.$Refresh$.moduleId;\nvar $ReactRefreshCurrentExports$ = __react_refresh_utils__.getModuleExports(\n\t$ReactRefreshModuleId$\n);\n\nfunction $ReactRefreshModuleRuntime$(exports) {\n\tif (true) {\n\t\tvar errorOverlay;\n\t\tif (true) {\n\t\t\terrorOverlay = false;\n\t\t}\n\t\tvar testMode;\n\t\tif (typeof __react_refresh_test__ !== 'undefined') {\n\t\t\ttestMode = __react_refresh_test__;\n\t\t}\n\t\treturn __react_refresh_utils__.executeRuntime(\n\t\t\texports,\n\t\t\t$ReactRefreshModuleId$,\n\t\t\t__webpack_module__.hot,\n\t\t\terrorOverlay,\n\t\t\ttestMode\n\t\t);\n\t}\n}\n\nif (typeof Promise !== 'undefined' && $ReactRefreshCurrentExports$ instanceof Promise) {\n\t$ReactRefreshCurrentExports$.then($ReactRefreshModuleRuntime$);\n} else {\n\t$ReactRefreshModuleRuntime$($ReactRefreshCurrentExports$);\n}\n\n//# sourceURL=webpack://@roots/bud/sage/./scripts/app.js?");

/***/ })

});