//Estrutura
let titulo = document.querySelector('h1')
let instrucoes = document.querySelector('#instrucoes')
let aviso = document.querySelector('#aviso')
let pontos = 0
let placar = 0

//Audio
let acerto = document.querySelector('#acerto')
let erro = document.querySelector('#erro')
let final  = document.querySelector('#final')

//Pergunta
let img      = document.querySelector('#tela')
let numQuestao = document.querySelector('#numQuestao')
let pergunta = document.querySelector('#pergunta')

//Alternativas
let a = document.querySelector('#a')
let b = document.querySelector('#b')
let c = document.querySelector('#c')

//article class questoes
let articleImagem   = document.querySelector('.imagem')
let articleQuestoes = document.querySelector('.questoes')
let articleOpcao    = document.querySelector('.opcao')
let articleOpc      = document.querySelector('.opc')
articleOpcao.style.display = 'none'
articleOpc.style.display   = 'none'

//ol li com alternativas
let alternativas = document.querySelector('#alternativas')

const q0 = {

    numQuestao   : 0,
    pergunta     : "Pergunta",
    alternativaA : "Alternativa A",
    alternativaB : "Alternativa B",
    alternativaC : "Alternativa C",
    correta      : "0",
}

const q1 = {

    numQuestao   : 1,
    pergunta     : "O que causa o aquecimento global:",
    alternativaA : "Efeito Estufa",
    alternativaB : "Dióxido de carbono",
    alternativaC : "Gás nitrogênio",
    correta      : "Dióxido de carbono",
}

const q2 = {

    numQuestao   : 2,
    pergunta     : "Quando se iniciou o aquecimento global:",
    alternativaA : "Antes de 1900",
    alternativaB : "Inicio de 1940",
    alternativaC : "Em meados de 1970",
    correta      : "Antes de 1900",
}

const q3 = {

    numQuestao   : 3,
    pergunta     : "Qual ação contribui para diminuir o CO2:",
    alternativaA : "Andar a pé",
    alternativaB : "O reflorestamento",
    alternativaC : "Utilizar o carro",
    correta      : "O reflorestamento",
}

const q4 = {

    numQuestao   : 4,
    pergunta     : "Uma atitude sustentável seria:",
    alternativaA : "Reduzir consumo de todas as carnes",
    alternativaB : "Reduzir consumo de peixes",
    alternativaC : "Reduzir consumo de carne bovina",
    correta      : "Reduzir consumo de carne bovina",
}

const q5 = {

    numQuestao   : 5,
    pergunta     : "No dia a dia, precisamos:",
    alternativaA : "Reutilizar lixo orgânico",
    alternativaB : "Separar o lixo para reciclagem",
    alternativaC : "Comprar produtos com selo greenwashing",
    correta      : "Separar o lixo para reciclagem",
}

const q6 = {

    numQuestao   : 6,
    pergunta     : "A média mensal de árvores que devemos plantar é de:",
    alternativaA : "6 árvores",
    alternativaB : "15 árvores",
    alternativaC : "23 árvores",
    correta      : "6 árvores",
}

const q7 = {

    numQuestao   : 7,
    pergunta     : "Uma forma das empresas diminuirem a emissão:",
    alternativaA : "Multas com valores altos",
    alternativaB : "Conscientização anual",
    alternativaC : "Benefícios fiscais aos que não poluem",
    correta      : "Benefícios fiscais aos que não poluem",
}

const q8 = {

    numQuestao   : 8,
    pergunta     : "Quanto tempo temos para reverter o aquecimento global:",
    alternativaA : "5 anos",
    alternativaB : "12 anos",
    alternativaC : "18 anos",
    correta      : "12 anos",
}

const imagens = ['Images/Urso.jpg', 'Images/Urso.jpg', 'Images/Tema.jpg', 'Images/Arvores.jpg', 
'Images/Peixe.jpg', 'Images/Animal.jpg', 'Images/Muda.jpg', 'Images/Galho.jpg', 'Images/Monte.jpg']
const questoes = [q0, q1, q2, q3, q4, q5, q6, q7, q8]

let numero = document.querySelector('#numero')
let total  = document.querySelector('#total')

numero.textContent = q1.numQuestao

let totalDeQuestoes = (questoes.length)-1
console.log("Total de questões " + totalDeQuestoes)
total.textContent = totalDeQuestoes

//Montar primeira questão
numQuestao.textContent = q1.numQuestao
pergunta.textContent   = q1.pergunta
a.textContent = q1.alternativaA
b.textContent = q1.alternativaB
c.textContent = q1.alternativaC

//Configurar value da questão
a.setAttribute('value','1A')
b.setAttribute('value','1B')
c.setAttribute('value', '1C')

//Montar as proximas
function proximaQuestao(nQuestao){
    img.setAttribute('src', imagens[nQuestao]), 
    numero.textContent = nQuestao
    numQuestao.textContent = questoes[nQuestao].numQuestao
    pergunta.textContent   = questoes[nQuestao].pergunta
    a.textContent = questoes[nQuestao].alternativaA
    b.textContent = questoes[nQuestao].alternativaB
    c.textContent = questoes[nQuestao].alternativaC
    a.setAttribute('value', nQuestao+'A')
    b.setAttribute('value', nQuestao+'B')
    c.setAttribute('value', nQuestao+'C')
}

alternativas.addEventListener('dblclick',() => {
    pontos -= 10 //Caso haja mais de um click
    if(numQuestao.value == 10 && pontos == 90) {pontos = 80}
})

function bloquearAlternativas(){
    a.classList.add('bloqueado')
    b.classList.add('bloqueado')
    c.classList.add('bloqueado')
}

function desbloquearAlternativas(){
    a.classList.remove('bloqueado')
    b.classList.remove('bloqueado')
    c.classList.remove('bloqueado')
}


function verificar(nQuestao, resposta){
    let numeroDaQuestao = nQuestao.value
    console.log("Questão " + numeroDaQuestao)

    let respostaEscolhida = resposta.textContent
    console.log("RespU " + respostaEscolhida)

    let certa = questoes[numeroDaQuestao].correta
    console.log("RespC " + certa)

    if(respostaEscolhida == certa){
        aviso.textContent = "Você acertou "
        acerto.play()
        pontos += 10
        if(nQuestao.value == 1 && pontos == 20) {pontos == 10}
    }else{
        aviso.textContent = "Você errou "
        erro.play()
    }

    //Atualizar placar
    placar = pontos
    instrucoes.textContent = "Pontos " + placar

    //Bloquear escolhas
    bloquearAlternativas()

    setTimeout(function(){
        proxima = numeroDaQuestao+1

        if(proxima > totalDeQuestoes){
            console.log('Fim de jogo!')
            fimDoJogo()
        }else{
            proximaQuestao(proxima)
        }
    }, 180)
    desbloquearAlternativas()
}

function fimDoJogo(){
    final.play()
    instrucoes.textContent = "Fim de Jogo!"
    numQuestao.textContent = ""
    img.setAttribute('src', 'Images/Fim.gif')

    let pont = ''
    pontos == 0 ? pont = 'ponto' : pont = 'pontos'

    //aviso.textContent =  pontos
    //var db = openDatabase("127.0.0.1", "root", "pi_2semestre", "");

    //function salvar_pontos(){
        //var pontos_quiz = document.getElementsByName('pontos').value;
        //db.transaction(function(guardar){
            //guardar.executeSql("INSERT INTO Pontuacao (pontuacao_quiz) values (?)", [pontos]);
        //})
    //}

    //salvar_pontos()
    $somar = pontos;

    pergunta.textContent = "Parabéns! Você conseguiu  " + pontos + " " + pont
    aviso.textContent = "Parabéns! Você conseguiu " + pontos + " " + pont

    a.textContent = ""
    b.textContent = ""
    c.textContent = ""

    a.setAttribute('value', '0')
    b.setAttribute('value', '0')
    c.setAttribute('value', '0')


    //Esconder article
    articleQuestoes.style.display = 'none'
    articleOpcao.style.display = 'block'
    articleOpc.style.display   = 'block'

    //setTimeout(function(){
        ///pontos = 0 //Zerar placar
        //location.reload();
        //location.replace("Arquivo_desejado.html")
        ///instrucoes.classList.remove('placar')
        //Reiniciar quiz
        ///articleQuestoes.style.display = 'block'
        ///proximaQuestao(1)
        ///instrucoes.textContent = 'Leia atentamente e escolha sua resposta'
    //}, 5000)
}