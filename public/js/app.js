var app = angular.module('mycms',[]);

app.controller('MainCtrl',['$scope',
    function($scope) {
        $scope.hello = "Hello Phalcon";

}]);