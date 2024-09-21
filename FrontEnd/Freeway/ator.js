let xAtor = 200;
let yAtor = 460;
let velAtor = 1.5
let colisao = false

let points = 0

function mostraAtor() {
    image(imagemDoAtor, xAtor, yAtor, 35, 35);
}

function movimentaAtor() {
    if (keyIsDown(UP_ARROW)) {
        yAtor -= velAtor
    } else if (keyIsDown(DOWN_ARROW)) {
        if(podeSeMover()) {
            yAtor += velAtor
        }
    }
}

function verificaColisao() {
    for (let i = 0; i < imagensCarros.length; i++) {
        colisao = collideRectCircle(xCarros[i], yCarros[i], wCarros, hCarros, xAtor, yAtor, 15)

        if (colisao) {
            resetAtor();
            somColisao.play()
            if (pontosMaiorQueZero()) {
                points -= 1;
            }
        }
    }
}

function resetAtor() {
    yAtor = 460;
}

function pontos() {
    textAlign(CENTER)
    textSize(25)
    fill(color(255, 240, 60))
    text(points, width / 5, 32)
}

function marcaPonto() {
    if (yAtor < 10) {
        points += 1
        resetAtor()
        somPonto.play()
    }
}

function pontosMaiorQueZero() {
    return points > 0   
}

function podeSeMover() {
    return yAtor < 460
}