let xCarros = [710, 710, 710, 710, 710, 710]
let yCarros = [55, 125, 190, 270, 335, 400]
let velCarros = [2.5, 3.5, 4.5, 5, 3, 2]
let wCarros = 60
let hCarros = 40

function mostraCarro() {
    for (let i = 0; i < imagensCarros.length; i++) {
        image(imagensCarros[i], xCarros[i], yCarros[i], wCarros, hCarros);
    }
}

function movimentaCarro() {
    for (let i = 0; i < imagensCarros.length; i++) {
        xCarros[i] -= velCarros[i]
    }
}

function  resetCarro() {
    for(let i = 0; i < imagensCarros.length; i++) {
        if (passouATela(xCarros[i])) {
            xCarros[i] = 710
        }
    }
}

function passouATela(xCarro) {
    return xCarro < -100
}