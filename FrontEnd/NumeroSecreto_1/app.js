alert('Boas Vindas ao jogo do número secreto');
let numeroMaximo = 100; 
let numeroSecreto = parseInt(Math.random() * numeroMaximo + 1);
console.log(numeroSecreto)

//let nome = prompt('Digite seu nome');
//console.log('O nome do(a) jogador(a) é ' + nome)

let chute;
let tentativas = 1;
//console.log('Resultado da comparação', chute == numeroSecreto)

while (chute != numeroSecreto) {
    chute = prompt(`Digite um numero entre 1 e ${numeroMaximo}`);
    // se chute for igual ao número secreto
    if (chute == numeroSecreto ) {
        break;
    } else {
        if (chute > numeroSecreto) {
            alert(`O número secreto é menor que ${chute}`);
        } else {
            alert(`O número secreto é maior que ${chute}`);
        }
        tentativas++ // tentativas = tentativas + 1
    }
}

let palavraTentativa = tentativas > 1 ? 'tentativas' : 'tentativa'
alert(`Parabéns! Você descobriu o número secreto: ${numeroSecreto} com ${tentativas} ${palavraTentativa}.`);

// if (tentativas > 1) {
//     alert(`Parabéns ${nome}! Você descobriu o número secreto: ${numeroSecreto} com ${tentativas} tentativas.`);
// } else {
//     alert(`Parabéns ${nome}! Você descobriu o número secreto: ${numeroSecreto} com ${tentativas} tentativa.`);

// }
