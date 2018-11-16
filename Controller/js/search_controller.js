var search = angular.module("Search",[]);

search.controller("Searchcontroller", function($scope,$http){
    $scope.data;
    var get1 = $http({ method: 'GET', url: "./Data/data.json" }).
    then(function (response) {
        $scope.data = JSON.parse(response.data);


    });
});