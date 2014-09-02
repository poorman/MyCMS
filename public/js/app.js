var app = angular.module('mycms',['truncate']);

var baseURL = '/MyCMS';

app.factory('Posts', function($http) {

    return {
        getPosts        : function() {
            return $http.get(baseURL+'/posts');
        },
        getPostById     : function(id) {
            return $http.get(baseURL+"/posts/post/"+id);
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

app.controller('PostCtrl',['$scope', '$stateParams',
    function($scope,$stateParams) {
        $scope.postId = $stateParams.postId;
        $scope.hello = "Post "+$scope.postId;

}]);
