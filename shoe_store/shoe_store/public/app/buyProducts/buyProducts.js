app.controller('buyProductsController', function ($scope, $http, API) {

    $scope.buyProducts = function (id, name, price) {
        console.log(id + name + price);
        var url = API + "buyProduct";
        data = [
                    id, 
                    name,
                    price
                ];
        $http({
            url: url,
            method: 'POST',
            data: data,
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function (show) {
                if(show.data) {
                    alert('mua thành công');
                }else {
                    alert('mua thất bại');
                }
            });
    }
});