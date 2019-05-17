// lấy dữ liệu kiểu json của đường dẫn
app.controller('slidesController', function ($scope, $http, API) {
    $http.get(API + 'getAllslides').then(function (response) {
        $scope.slides = response.data;
        console.log(response.data);
    });
});
