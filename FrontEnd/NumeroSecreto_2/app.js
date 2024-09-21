let listaNumerosSorteados = []
let numeroMaximo = 10
let numeroSecreto = numeroAleatorio()
let tentativas = 1

function exibirTexto(tag, texto) {
    let campo = document.querySelector(tag)
    campo.innerHTML = texto
    responsiveVoice.speak(texto, 'Brazilian Portuguese Female', {rate: 1.2})
}

function exibirMsgInicial() {
    exibirTexto('h1', 'Jogo do número secreto')
    exibirTexto('p', `Escolha um número entre 1 e ${numeroMaximo}`)
}

exibirMsgInicial()

function verificarChute() {
    let chute = document.querySelector('input').value

    if (chute == numeroSecreto) {
        exibirTexto('h1', 'Parabéns, você acertou!')
        let palavraTentativa = tentativas > 1 ? 'tentativas' : 'tentativa'
        let mensagemTentativas = `Você achou o número secreto com ${tentativas} ${palavraTentativa}`
        exibirTexto('p', mensagemTentativas)

        document.getElementById('reiniciar').removeAttribute('disabled')
    } else {
        if (chute > numeroSecreto) {
            exibirTexto('p', 'O número secreto é menor, tente novamente!')
        } else {
            exibirTexto('p', 'O número secreto é maior, tente novamente!')
        }
        tentativas++
        limparCampo()
    }
}

function numeroAleatorio() {
    let numeroEscolhido = parseInt(Math.random() * numeroMaximo + 1)
    let quantidadeElementosLista = listaNumerosSorteados.length
    if (quantidadeElementosLista == numeroMaximo) {
        listaNumerosSorteados = []
    }

    if (listaNumerosSorteados.includes(numeroEscolhido)) {
        return numeroAleatorio()
    } else {
        listaNumerosSorteados.push(numeroEscolhido)
        console.log(listaNumerosSorteados)
        return numeroEscolhido
    }
}

function limparCampo() {
    chute = document.querySelector('input')
    chute.value = ''
}

function reiniciarJogo() {
    numeroSecreto = numeroAleatorio()
    limparCampo()
    tentativas = 1
    exibirMsgInicial()
    document.getElementById('reiniciar').setAttribute('disabled', true)
}