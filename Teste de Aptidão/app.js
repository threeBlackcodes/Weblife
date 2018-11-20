function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Quando faz um trabalho em grupo, você é aquele(a) que:", ["Quer ir direito ao ponto.", "Fica analisando o trabalho antes de propor ideias","Não faz nada, deixa os outro fazerem", "Não faço trabalho em grupo"], "Não faço trabalho em grupo"),
    new Question("Você imagina se destacar profissionalmente...", ["Pela sua objetividade", " Pela sua otima capacidade", "Sempre inovando e propondo novas ideias", "Por ser bastante determinado"], "Por ser bastante determinado"),
    new Question("Você gosta mais de atividades que envolvam ", ["MAquinas, atividades corporal, plantas ou animais", "Planejamento, ordenação ou calculo","Criação, expressão ou beleza", "Pesquisa, diagnostico ou critica"], "Pesquisa, diagnostico ou critica"),
    new Question("Em uma discussão, você:", ["Procura encerrar o assunto logo", "Analisa a situação e avalia as atitudes que podem ser tomadas", "age pela emoção não pela razão", "Tenta chegar em uma soluçaõ que seja boa pra todo mundo"], "Tenta chegar em uma soluçaõ que seja boa pra todo mundo"),
    new Question("Seus amigos te descreveriam como uma pessoa...",["Realista", "Cautelosa", "Intelectual","Empatico"], "Cautelosa"),
    new Question("O emprego ideal é aquele no qual você:" ,["Pode(colocar a mão na massa)", "Possui desafios", "Aprende muito", "Contribui com a sociedade"], "Aprende muito"),
    new Question("MVC is a ____.", ["Language", "Library", "Framework", "All"], "Framework"),
    new Question("MVC is a ____.", ["Language", "Library", "Framework", "All"], "Framework"),
    new Question("MVC is a ____.", ["Language", "Library", "Framework", "All"], "Framework"),
    new Question("MVC is a ____.", ["Language", "Library", "Framework", "All"], "Framework")

];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





