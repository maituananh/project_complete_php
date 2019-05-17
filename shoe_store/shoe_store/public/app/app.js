
// dùng xuất ra dữ liệu angularjs
var app = angular.module('my-app', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
}).constant('API', 'http://localhost/shoe_store/public/');



