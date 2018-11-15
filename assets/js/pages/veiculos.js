$(document).ready(function () {
    var pessoa = $('input[name=tipoVeiculo]:checked').val();
    console.log('Carro');

    $(".tipoVeiculo").change(function () { //use change event
        if (this.value === "carro") { //check value if it is domicilio
            console.log('Carro');

        } else if (this.value === "moto") {
            console.log('Moto');

        } else {
            console.log('Caminhao');
        }

    });
});