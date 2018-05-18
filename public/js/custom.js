/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 47);
/******/ })
/************************************************************************/
/******/ ({

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(48);


/***/ }),

/***/ 48:
/***/ (function(module, exports) {



new Vue({
    el: '#meals-list',
    data: {
        menus: [],
        items: [],
        menu_days: [],
        name_days: [],
        current_day: 0,
        current_menu: 0
    },
    created: function created() {
        var _this = this;

        axios.get('/menu/start-menu-json').then(function (response) {
            _this.menus = response.data.list_menus;
            _this.items = response.data.list_meals;
            _this.menu_days = response.data.list_menu_days;
            _this.name_days = response.data.list_days_names;
            _this.current_menu = response.data.current_menu;
            _this.current_day = response.data.current_day;
        });
    },

    methods: {
        clickBtn: function clickBtn(e) {
            var _this2 = this;

            var menu_id = e.target.attributes[0].nodeValue;
            var day_id = e.target.attributes[1].nodeValue;

            axios.get('/menu/meals-list-json/' + menu_id + '/' + day_id).then(function (response) {
                _this2.items = response.data;
            });

            /*--- add class active to button ---*/
            var current_active = document.querySelector(".day-button .active");
            current_active.classList.remove("active");
            e.target.classList.add("active");
            /*----------------------------------*/
        },
        clickMenuBtn: function clickMenuBtn(e) {
            var _this3 = this;

            var menu_id = e.target.attributes[0].nodeValue;

            axios.get('/menu/select-menu-json/' + menu_id).then(function (response) {
                _this3.menus = response.data.list_menus;
                _this3.items = response.data.list_meals;
                _this3.menu_days = response.data.list_menu_days;
                _this3.name_days = response.data.list_days_names;
                _this3.current_menu = response.data.current_menu;
                _this3.current_day = response.data.current_day;
            });

            var current_active_day = document.querySelector(".day-button .active");
            current_active_day.classList.remove("active");
            var new_active_day = document.querySelector('.day-button [attr-day="' + this.current_day + '"]');
            new_active_day.classList.add("active");

            /*--- add class active to button ---*/
            var current_active_menu = document.querySelector(".menu .active");
            current_active_menu.classList.remove("active");
            e.target.classList.add("active");
            /*----------------------------------*/
        }
    }
});

/***/ })

/******/ });