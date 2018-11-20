var Quiz = angular.module("QuizApp", []);
var data1;

function show(){
    console.log("teste");
}


Quiz.controller('QuizController', function ($scope, $http) {
    $scope.alternativas = [];
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
        if ($scope.question < $scope.alternativas.length - 1) {
            if(resposta.tipo == "ex"){
                $scope.exatas += parseInt(resposta.ponto);
            }else if(resposta.tipo == "hum"){
                $scope.humanas += parseInt(resposta.ponto);
            }
            $scope.question++;
        }else{
            if(resposta.tipo == "ex"){
                $scope.exatas += parseInt(resposta.ponto);
            }else if(resposta.tipo == "hum"){
                $scope.humanas += parseInt(resposta.ponto);
            }
            $scope.end = true;
                
        }
        
    };

    add = function(resposta){
        $scope.user.push({question: $scope.alternativas[$scope.question].pergunta, resposta:resposta});
    }

    $http({ method: 'GET', url: "teste.php" }).
        then(function (response) {
            $scope.status = response.status;
            var perguntas = (response.data).split("@");
           
            for (var i = 0; i < (perguntas.length - 1); i++) {
                pergunta = perguntas[i].split("$")[0];
                respostas = (perguntas[i].split("$")[1]).split(",");
                respostasobj =[];
                for(var x = 0; x < respostas.length; x++){
                    var alternat  = respostas[x].split("%")[0];
                    var ponto  = respostas[x].split("%")[1];
                    var tipo  = respostas[x].split("%")[2];
                    respostasobj.push({resposta: alternat, ponto: ponto ,  tipo:tipo});
                }
                var Alter = { pergunta: pergunta, respostas: respostasobj};
                //console.log(Alter);
                $scope.alternativas.push(Alter)
            }
            //console.log(response);
        }, function (response) {
            $scope.data = response.data || 'Request failed';
            $scope.status = response.status;
        });
   
});