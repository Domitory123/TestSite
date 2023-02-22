/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== \"undefined\" && o[Symbol.iterator] || o[\"@@iterator\"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === \"number\") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it[\"return\"] != null) it[\"return\"](); } finally { if (didErr) throw err; } } }; }\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n// require('./bootstrap');\n\n/* Устанавливаем стартовый индекс слайда по умолчанию: */\nvar slideIndex = 1;\n/* Вызываем функцию, которая реализована ниже: */\nshowSlides(slideIndex);\n\n/* Увеличиваем индекс на 1 — показываем следующий слайд: */\nfunction nextSlide() {\n  console.log(\"123123\");\n  showSlides(slideIndex += 1);\n}\n\n/* Уменьшаем индекс на 1 — показываем предыдущий слайд: */\nfunction previousSlide() {\n  showSlides(slideIndex -= 1);\n}\n\n/* Устанавливаем текущий слайд: */\nfunction currentSlide(n) {\n  showSlides(slideIndex = n);\n}\n\n/* Функция перелистывания: */\nfunction showSlides(n) {\n  /* Обращаемся к элементам с названием класса \"item\", то есть к картинкам: */\n  var slides = document.getElementsByClassName(\"item\");\n\n  /* Проверяем количество слайдов: */\n  if (n > slides.length) {\n    slideIndex = 1;\n  }\n  if (n < 1) {\n    slideIndex = slides.length;\n  }\n\n  /* Проходим по каждому слайду в цикле for: */\n  var _iterator = _createForOfIteratorHelper(slides),\n    _step;\n  try {\n    for (_iterator.s(); !(_step = _iterator.n()).done;) {\n      var slide = _step.value;\n      slide.style.display = \"none\";\n    }\n    /* Делаем элемент блочным: */\n  } catch (err) {\n    _iterator.e(err);\n  } finally {\n    _iterator.f();\n  }\n  slides[slideIndex - 1].style.display = \"block\";\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJzbGlkZUluZGV4Iiwic2hvd1NsaWRlcyIsIm5leHRTbGlkZSIsImNvbnNvbGUiLCJsb2ciLCJwcmV2aW91c1NsaWRlIiwiY3VycmVudFNsaWRlIiwibiIsInNsaWRlcyIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImxlbmd0aCIsInNsaWRlIiwic3R5bGUiLCJkaXNwbGF5Il0sInNvdXJjZXMiOlsid2VicGFjazovL2V4YW1wbGUtYXBwLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIHJlcXVpcmUoJy4vYm9vdHN0cmFwJyk7XG5cbiAvKiDQo9GB0YLQsNC90LDQstC70LjQstCw0LXQvCDRgdGC0LDRgNGC0L7QstGL0Lkg0LjQvdC00LXQutGBINGB0LvQsNC50LTQsCDQv9C+INGD0LzQvtC70YfQsNC90LjRjjogKi9cbmxldCBzbGlkZUluZGV4ID0gMTtcbi8qINCS0YvQt9GL0LLQsNC10Lwg0YTRg9C90LrRhtC40Y4sINC60L7RgtC+0YDQsNGPINGA0LXQsNC70LjQt9C+0LLQsNC90LAg0L3QuNC20LU6ICovXG5zaG93U2xpZGVzKHNsaWRlSW5kZXgpO1xuXG4vKiDQo9Cy0LXQu9C40YfQuNCy0LDQtdC8INC40L3QtNC10LrRgSDQvdCwIDEg4oCUINC/0L7QutCw0LfRi9Cy0LDQtdC8INGB0LvQtdC00YPRjtGJ0LjQuSDRgdC70LDQudC0OiAqL1xuZnVuY3Rpb24gbmV4dFNsaWRlKCkge1xuICAgXG4gICAgY29uc29sZS5sb2coXCIxMjMxMjNcIilcbiAgICBzaG93U2xpZGVzKHNsaWRlSW5kZXggKz0gMSk7XG59XG5cbi8qINCj0LzQtdC90YzRiNCw0LXQvCDQuNC90LTQtdC60YEg0L3QsCAxIOKAlCDQv9C+0LrQsNC30YvQstCw0LXQvCDQv9GA0LXQtNGL0LTRg9GJ0LjQuSDRgdC70LDQudC0OiAqL1xuZnVuY3Rpb24gcHJldmlvdXNTbGlkZSgpIHtcbiAgICBzaG93U2xpZGVzKHNsaWRlSW5kZXggLT0gMSk7ICBcbn1cblxuLyog0KPRgdGC0LDQvdCw0LLQu9C40LLQsNC10Lwg0YLQtdC60YPRidC40Lkg0YHQu9Cw0LnQtDogKi9cbmZ1bmN0aW9uIGN1cnJlbnRTbGlkZShuKSB7XG4gICAgc2hvd1NsaWRlcyhzbGlkZUluZGV4ID0gbik7XG59XG5cbi8qINCk0YPQvdC60YbQuNGPINC/0LXRgNC10LvQuNGB0YLRi9Cy0LDQvdC40Y86ICovXG5mdW5jdGlvbiBzaG93U2xpZGVzKG4pIHtcbiAgICAvKiDQntCx0YDQsNGJ0LDQtdC80YHRjyDQuiDRjdC70LXQvNC10L3RgtCw0Lwg0YEg0L3QsNC30LLQsNC90LjQtdC8INC60LvQsNGB0YHQsCBcIml0ZW1cIiwg0YLQviDQtdGB0YLRjCDQuiDQutCw0YDRgtC40L3QutCw0Lw6ICovXG4gICAgbGV0IHNsaWRlcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJpdGVtXCIpO1xuICAgIFxuICAgIC8qINCf0YDQvtCy0LXRgNGP0LXQvCDQutC+0LvQuNGH0LXRgdGC0LLQviDRgdC70LDQudC00L7QsjogKi9cbiAgICBpZiAobiA+IHNsaWRlcy5sZW5ndGgpIHtcbiAgICAgIHNsaWRlSW5kZXggPSAxXG4gICAgfVxuICAgIGlmIChuIDwgMSkge1xuICAgICAgICBzbGlkZUluZGV4ID0gc2xpZGVzLmxlbmd0aFxuICAgIH1cbiAgXG4gICAgLyog0J/RgNC+0YXQvtC00LjQvCDQv9C+INC60LDQttC00L7QvNGDINGB0LvQsNC50LTRgyDQsiDRhtC40LrQu9C1IGZvcjogKi9cbiAgICBmb3IgKGxldCBzbGlkZSBvZiBzbGlkZXMpIHtcbiAgICAgICAgc2xpZGUuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgIH1cbiAgICAvKiDQlNC10LvQsNC10Lwg0Y3Qu9C10LzQtdC90YIg0LHQu9C+0YfQvdGL0Lw6ICovXG4gICAgc2xpZGVzW3NsaWRlSW5kZXggLSAxXS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiOyAgICBcblxuXG4gIH1cblxuXG5cblxuXG4gXG4iXSwibWFwcGluZ3MiOiI7OztBQUFBOztBQUVDO0FBQ0QsSUFBSUEsVUFBVSxHQUFHLENBQUM7QUFDbEI7QUFDQUMsVUFBVSxDQUFDRCxVQUFVLENBQUM7O0FBRXRCO0FBQ0EsU0FBU0UsU0FBUyxHQUFHO0VBRWpCQyxPQUFPLENBQUNDLEdBQUcsQ0FBQyxRQUFRLENBQUM7RUFDckJILFVBQVUsQ0FBQ0QsVUFBVSxJQUFJLENBQUMsQ0FBQztBQUMvQjs7QUFFQTtBQUNBLFNBQVNLLGFBQWEsR0FBRztFQUNyQkosVUFBVSxDQUFDRCxVQUFVLElBQUksQ0FBQyxDQUFDO0FBQy9COztBQUVBO0FBQ0EsU0FBU00sWUFBWSxDQUFDQyxDQUFDLEVBQUU7RUFDckJOLFVBQVUsQ0FBQ0QsVUFBVSxHQUFHTyxDQUFDLENBQUM7QUFDOUI7O0FBRUE7QUFDQSxTQUFTTixVQUFVLENBQUNNLENBQUMsRUFBRTtFQUNuQjtFQUNBLElBQUlDLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxzQkFBc0IsQ0FBQyxNQUFNLENBQUM7O0VBRXBEO0VBQ0EsSUFBSUgsQ0FBQyxHQUFHQyxNQUFNLENBQUNHLE1BQU0sRUFBRTtJQUNyQlgsVUFBVSxHQUFHLENBQUM7RUFDaEI7RUFDQSxJQUFJTyxDQUFDLEdBQUcsQ0FBQyxFQUFFO0lBQ1BQLFVBQVUsR0FBR1EsTUFBTSxDQUFDRyxNQUFNO0VBQzlCOztFQUVBO0VBQUEsMkNBQ2tCSCxNQUFNO0lBQUE7RUFBQTtJQUF4QixvREFBMEI7TUFBQSxJQUFqQkksS0FBSztNQUNWQSxLQUFLLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE1BQU07SUFDaEM7SUFDQTtFQUFBO0lBQUE7RUFBQTtJQUFBO0VBQUE7RUFDQU4sTUFBTSxDQUFDUixVQUFVLEdBQUcsQ0FBQyxDQUFDLENBQUNhLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE9BQU87QUFHaEQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Nzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9leGFtcGxlLWFwcC8uL3Jlc291cmNlcy9zY3NzL2FwcC5zY3NzP2YyMTQiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/scss/app.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkexample_app"] = self["webpackChunkexample_app"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;