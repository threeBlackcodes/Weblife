

function QuizCon(){} 

QuizCon.prototype.RequireData = function(URL, Parameter = "", callback = function(data){}){
    var DATA;

    function set(info){
        DATA = info;
    }
    if(Parameter != ""){ Parameter = "?"+Parameter}
    $.ajax({url: URL+Parameter, success: function(data){
        callback(data);
       
    }});
    console.log(DATA);
    return DATA;
}

QuizCon.prototype.nomedafuncao = function(){
     //codiogo
}

QCon = new QuizCon();