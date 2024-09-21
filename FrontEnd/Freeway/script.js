function setup() {
    createCanvas(700, 500);
    somTrila.loop()
}
  
function draw() {
    background(imagemDaEstrada);
    mostraAtor();
    mostraCarro();
    movimentaCarro();
    movimentaAtor();
    resetCarro();
    verificaColisao();
    pontos();
    marcaPonto();
}