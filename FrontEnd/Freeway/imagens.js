let imagemDaEstrada;
let imagemDoAtor;
let imagemDoCarro;
let imagemDoCarro2;
let imagemDoCarro3;

//sons
let somTrila;
let somColisao;
let somPonto;

function preload() {
    imagemDaEstrada = loadImage("./material/estrada.png");
    imagemDoAtor = loadImage("./material/ator-1.png");
    imagemDoCarro = loadImage("./material/carro-1.png");
    imagemDoCarro2 = loadImage("./material/carro-2.png");
    imagemDoCarro3 = loadImage("./material/carro-3.png");
    somTrila = loadSound("./material/sons/trilha.mp3")
    somColisao = loadSound("./material/sons/colidiu.mp3")
    somPonto = loadSound("./material/sons/pontos.wav")
    imagensCarros = [imagemDoCarro, imagemDoCarro2, imagemDoCarro3, imagemDoCarro, imagemDoCarro2, imagemDoCarro3]

}