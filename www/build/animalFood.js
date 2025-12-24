(self["webpackChunk"] = self["webpackChunk"] || []).push([["animalFood"],{

/***/ "./assets/js/animalFood.js":
/*!*********************************!*\
  !*** ./assets/js/animalFood.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
__webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
document.addEventListener('DOMContentLoaded', function () {
  var breedSelect = document.getElementById('breed-select');
  var animalSelect = document.getElementById('animal-select');
  if (breedSelect && animalSelect) {
    breedSelect.addEventListener('change', function () {
      var breedId = this.value;

      // Vider les options actuelles
      animalSelect.innerHTML = '<option value="">-- Sélectionner un animal --</option>';
      if (breedId) {
        fetch('/animals/by-breed/' + breedId).then(function (response) {
          return response.json();
        }).then(function (data) {
          data.forEach(function (animal) {
            var option = document.createElement('option');
            option.value = animal.id;
            option.textContent = animal.name;
            animalSelect.appendChild(option);
          });
        })["catch"](function (err) {
          return console.error('Erreur AJAX:', err);
        });
      }
    });
  }
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_fun-0cb7b1"], () => (__webpack_exec__("./assets/js/animalFood.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYW5pbWFsRm9vZC5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7QUFBQUEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFZO0VBQ3RELElBQU1DLFdBQVcsR0FBR0YsUUFBUSxDQUFDRyxjQUFjLENBQUMsY0FBYyxDQUFDO0VBQzNELElBQU1DLFlBQVksR0FBR0osUUFBUSxDQUFDRyxjQUFjLENBQUMsZUFBZSxDQUFDO0VBRTdELElBQUlELFdBQVcsSUFBSUUsWUFBWSxFQUFFO0lBQzdCRixXQUFXLENBQUNELGdCQUFnQixDQUFDLFFBQVEsRUFBRSxZQUFZO01BQy9DLElBQUlJLE9BQU8sR0FBRyxJQUFJLENBQUNDLEtBQUs7O01BRXhCO01BQ0FGLFlBQVksQ0FBQ0csU0FBUyxHQUFHLHdEQUF3RDtNQUVqRixJQUFJRixPQUFPLEVBQUU7UUFDVEcsS0FBSyxDQUFDLG9CQUFvQixHQUFHSCxPQUFPLENBQUMsQ0FDaENJLElBQUksQ0FBQyxVQUFBQyxRQUFRO1VBQUEsT0FBSUEsUUFBUSxDQUFDQyxJQUFJLENBQUMsQ0FBQztRQUFBLEVBQUMsQ0FDakNGLElBQUksQ0FBQyxVQUFBRyxJQUFJLEVBQUk7VUFDVkEsSUFBSSxDQUFDQyxPQUFPLENBQUMsVUFBVUMsTUFBTSxFQUFFO1lBQzNCLElBQUlDLE1BQU0sR0FBR2YsUUFBUSxDQUFDZ0IsYUFBYSxDQUFDLFFBQVEsQ0FBQztZQUM3Q0QsTUFBTSxDQUFDVCxLQUFLLEdBQUdRLE1BQU0sQ0FBQ0csRUFBRTtZQUN4QkYsTUFBTSxDQUFDRyxXQUFXLEdBQUdKLE1BQU0sQ0FBQ0ssSUFBSTtZQUNoQ2YsWUFBWSxDQUFDZ0IsV0FBVyxDQUFDTCxNQUFNLENBQUM7VUFDcEMsQ0FBQyxDQUFDO1FBQ04sQ0FBQyxDQUFDLFNBQ0ksQ0FBQyxVQUFBTSxHQUFHO1VBQUEsT0FBSUMsT0FBTyxDQUFDQyxLQUFLLENBQUMsY0FBYyxFQUFFRixHQUFHLENBQUM7UUFBQSxFQUFDO01BQ3pEO0lBQ0osQ0FBQyxDQUFDO0VBQ047QUFDSixDQUFDLENBQUMsQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9qcy9hbmltYWxGb29kLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgY29uc3QgYnJlZWRTZWxlY3QgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnJlZWQtc2VsZWN0Jyk7XG4gICAgY29uc3QgYW5pbWFsU2VsZWN0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FuaW1hbC1zZWxlY3QnKTtcblxuICAgIGlmIChicmVlZFNlbGVjdCAmJiBhbmltYWxTZWxlY3QpIHtcbiAgICAgICAgYnJlZWRTZWxlY3QuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgbGV0IGJyZWVkSWQgPSB0aGlzLnZhbHVlO1xuXG4gICAgICAgICAgICAvLyBWaWRlciBsZXMgb3B0aW9ucyBhY3R1ZWxsZXNcbiAgICAgICAgICAgIGFuaW1hbFNlbGVjdC5pbm5lckhUTUwgPSAnPG9wdGlvbiB2YWx1ZT1cIlwiPi0tIFPDqWxlY3Rpb25uZXIgdW4gYW5pbWFsIC0tPC9vcHRpb24+JztcblxuICAgICAgICAgICAgaWYgKGJyZWVkSWQpIHtcbiAgICAgICAgICAgICAgICBmZXRjaCgnL2FuaW1hbHMvYnktYnJlZWQvJyArIGJyZWVkSWQpXG4gICAgICAgICAgICAgICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHJlc3BvbnNlLmpzb24oKSlcbiAgICAgICAgICAgICAgICAgICAgLnRoZW4oZGF0YSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhLmZvckVhY2goZnVuY3Rpb24gKGFuaW1hbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBvcHRpb24gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdvcHRpb24nKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb24udmFsdWUgPSBhbmltYWwuaWQ7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9uLnRleHRDb250ZW50ID0gYW5pbWFsLm5hbWU7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYW5pbWFsU2VsZWN0LmFwcGVuZENoaWxkKG9wdGlvbik7XG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgLmNhdGNoKGVyciA9PiBjb25zb2xlLmVycm9yKCdFcnJldXIgQUpBWDonLCBlcnIpKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxufSk7Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImJyZWVkU2VsZWN0IiwiZ2V0RWxlbWVudEJ5SWQiLCJhbmltYWxTZWxlY3QiLCJicmVlZElkIiwidmFsdWUiLCJpbm5lckhUTUwiLCJmZXRjaCIsInRoZW4iLCJyZXNwb25zZSIsImpzb24iLCJkYXRhIiwiZm9yRWFjaCIsImFuaW1hbCIsIm9wdGlvbiIsImNyZWF0ZUVsZW1lbnQiLCJpZCIsInRleHRDb250ZW50IiwibmFtZSIsImFwcGVuZENoaWxkIiwiZXJyIiwiY29uc29sZSIsImVycm9yIl0sInNvdXJjZVJvb3QiOiIifQ==