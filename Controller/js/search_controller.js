var search = angular.module("Search",[]);

search.controller("Searchcontroller", function($scope,$http){
    $scope.data = [];
    $scope.count;
    var get1 = $http({ method: 'GET', url: "./Data/data.json" }).
    then(function (response) {
        $scope.data = response.data.inst;
        $scope.count = $scope.data.length;

    });
});