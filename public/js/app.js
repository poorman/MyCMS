var app = angular.module('mycms',[]);

var baseURL = '/MyCMS';

app.factory('Posts', function($http) {

    return {
        getPosts        : function() {
            return $http.get(baseURL+'/posts');
        }
    }
});


app.controller('MainCtrl',['$scope', 'Posts',
    function($scope,Posts) {
        $scope.hello = "Hello, Phalcon!";

        Posts.getPosts().success(function(data) {
            $scope.posts = data;
            console.log($scope.posts);
        });

}]);