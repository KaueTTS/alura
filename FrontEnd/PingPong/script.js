// Raquete
let xRaquete = 5;
let yRaquete = 150;
let wRaquete = 10;
let hRaquete = 90;

// Raquete Oponente
let xOpRaquete = 585;
let yOpRaquete = 150;
let velyOponente = 5;

// Bolinha
let xBolinha = 300;
let yBolinha = 200;
let diametro = 20;
let raio = diametro / 2

// Velocidade
let velxBolinha = 7;
let velyBolinha = 7;

// Placar
let pontos = 0;
let opPontos = 0;

// Sons
let raquetada
let ponto
let trilha

let colidiu = false;
let chanceDeErrar = 0;

function preload() {
    trilha = loadSound("./Pong - Sons/trilha.mp3")
    ponto = loadSound("./Pong - Sons/ponto.mp3")
    raquetada = loadSound("./Pong - Sons/raquetada.mp3")
}

function setup() {
    createCanvas(600, 400);
    trilha.loop()
}

function draw() {
    background(0);
    bolinha();
    movimentaBolinha();
    raquete(xRaquete, yRaquete);
    raquete(xOpRaquete, yOpRaquete);
    movimentaRaquete();
    movimentaRaquete2();
    //movimentaRaqueteOponente()
    colisaoBorda();
    colisaoRaquete(xRaquete, yRaquete)
    colisaoRaquete(xOpRaquete, yOpRaquete)
    placar();
    marcarPontos()
    bolinhaNaoFicaPresa()
}

function bolinha() {
    circle(xBolinha, yBolinha, diametro)
}

function movimentaBolinha() {
    xBolinha += velxBolinha
    yBolinha += velyBolinha
}

function raquete(x,y) {
    rect(x, y, wRaquete, hRaquete)
}

function movimentaRaquete() {
    if(keyIsDown(UP_ARROW)) {
        yRaquete -= 10
    }
    if(keyIsDown(DOWN_ARROW)) {
        yRaquete += 10
    }

    yRaquete = constrain(yRaquete, 0, 310)
}

function movimentaRaquete2() {
    if(keyIsDown(87)) {
        yOpRaquete -= 10
    }
    if(keyIsDown(83)) {
        yOpRaquete += 10
    }

    yOpRaquete = constrain(yOpRaquete, 0, 310)
}

function movimentaRaqueteOponente() {
    velyOponente = yBolinha - yOpRaquete - wRaquete / 2 - 40;
    yOpRaquete += velyOponente + chanceDeErrar;
    calculaChanceDeErrar();

    yOpRaquete = constrain(yOpRaquete, 0, 310)
}

function calculaChanceDeErrar() {
    if (opPontos >= pontos) {
      chanceDeErrar += 1
      if (chanceDeErrar >= 39){
      chanceDeErrar = 50
      }
    } else {
      chanceDeErrar -= 1
      if (chanceDeErrar <= 35){
      chanceDeErrar = 30
      }
    }
  }

function colisaoBorda() {
    if (xBolinha + raio > width || xBolinha - raio < 0) {
        velxBolinha *= -1;
        ponto.play()
    }
    if (yBolinha + raio > height || yBolinha - raio < 0) {
        velyBolinha *= -1;
    }
}

function colisaoRaquete(x, y) {
    colidiu = collideRectCircle(x, y, wRaquete, hRaquete, xBolinha, yBolinha, raio)
    if (colidiu) {
        velxBolinha *= -1
        raquetada.play()
    }
}

function placar() {
    stroke(255)
    textAlign(CENTER)
    textSize(20)
    fill(color(255, 140, 0))
    rect(130, 5, 40, 25)
    fill(255)
    text(pontos, 150, 25)
    fill(color(255, 140, 0))
    rect(430, 5, 40, 25)
    fill(255)
    text(opPontos, 450, 25)
}

function marcarPontos() {
    if (xBolinha > 590) {
        pontos += 1
    }
    if (xBolinha < 10) {
        opPontos += 1
    }
}

function bolinhaNaoFicaPresa(){
    if (xBolinha - raio < 0){
        xBolinha = 30
    }
    if (xBolinha - raio > 590) {
        xBolinha = 570
    }
}
