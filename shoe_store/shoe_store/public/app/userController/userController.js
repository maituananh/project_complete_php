app.controller('userController', function ($scope, $http, API) {

    // add new user
    $scope.add_user = function () {
        console.log('add_user');
        var data = $.param($scope.register);
        var url = API + 'addUser';
        $http({
            url: url,
            method: 'POST',
            data: data,
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        }).then(function (response) {
            console.log(response);
            location.reload();
            alert('create account successfully');
        })
    }

    // check login user
    $scope.submitLogin = function () {
        var url = API + 'Check_User';
        var data = $.param($scope.login); // lấy dữ liệu từ ng-model có tên login
        $http({
            url: url,
            method: 'POST',
            data: data,
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function (show) {
                console.log(show.data);
                if (show.data == 0) {
                    alert('bạn nhập sai tài khoảng hoặc mật khẩu');
                } else {
                    alert('Đăng nhập thành công');
                    location.reload();
                }
            });
    }

    $scope.listusers = function () {
        $http.get(API + 'getAllUsers').then(function (response) {
            $scope.User = response.data;
        });
    }

    $scope.deleteUser = function (id) {
        var url = API + 'admin/delete_User/' + id;
        console.log(url);
        console.log(id);
        $http.get(url).then(function (show) {
            if (show.data) {
                alert('xóa thành công');
                location.reload();
            } else {
                alert('lỗi');
            }
        })
    }
});
