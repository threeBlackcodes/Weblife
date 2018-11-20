var Quiz = angular.module("QuizApp", []);
var data1;

function show(){
    console.log("teste");
}


Quiz.controller('QuizController', function ($scope, $http) {
    $scope.perguntas = [];
    $scope.question = 0;
    $scope.end = false;
    $scope.exatas = 0;
    $scope.humanas = 0;


    $scope.terminar = function(){
        if($scope.exatas > $scope.humanas){
           return "Exatas" 
        }
        else{
            return "Humanas"
        }
    }
    $scope.call = function(){
        $http({method: 'get', url: "index1.html"}).then(function(response){
            $("#container").html(response.data);
         })
    }
    $scope.user = [];
    $scope.next = function (resposta) {
        console.log(resposta.tipo)
        if ($scope.question < $scope.perguntas.length - 1) {
            if(resposta.tipo == "exatas"){
                $scope.exatas += resposta.ponto;
            }else if(resposta.tipo == "humanas"){
                $scope.humanas += resposta.ponto;
            }
            $scope.question++;
        }else{
            if(resposta.tipo == "exatas"){
                $scope.exatas += resposta.ponto;
            }else if(resposta.tipo == "humanas"){
                $scope.humanas += resposta.ponto;
            }
            $scope.end = true;
                
        }
        
    };

    add = function(resposta){
        $scope.user.push({question: $scope.alternativas[$scope.question].pergunta, resposta:resposta});
    }

    $http({ method: 'GET', url: "Data/perguntas.json" }).
        then(function (response) {
            $scope.perguntas = response.data.perguntas;

        }, function (response) {
            $scope.data = response.data || 'Request failed';
            $scope.status = response.status;
        });
   
});