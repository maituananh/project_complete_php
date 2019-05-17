// lấy dữ liệu kiểu json của đường dẫn
app.controller('productsController', function ($scope, $http, API) {
    $http.get(API + 'getAllProducts').then(function (response) {
        $scope.Products = response.data;
        console.log(response.data);
    });

    $scope.search = function (Search) {
        $http.get(API + 'getSearch').then(function (response) {
            console.log(Search);
            $scope.listSearch = response.data;
        });
    }
});


