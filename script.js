function abrirModal(Id) {
    var modal = document.querySelector('.checkgift')
    var IdProduct = document.getElementById("id")

    modal.style.display='flex'
    IdProduct.value=Id
}

function abrirModal2() {
    var modal2 = document.querySelector('.window1')
    var buttonpresent = document.querySelector ('.present')
    var formpresent = document.querySelector('.inputpresent')
    var form = document.querySelector('.form')

    modal2.style.display='flex'
    buttonpresent.style.display='none'
    formpresent.style.width='100%'
    form.style.flexDirection='column'
}

function sairModal() {
    var form = document.querySelector('.form')
    var exit = document.querySelector('.checkgift')
    var input = document.querySelector('.inputpresent')
    var window1 = document.querySelector('.window1')
    var buttonpresent = document.querySelector('.present')
    var IdProduct = document.getElementById("idProduct")

    form.style.flexDirection='row'
    exit.style.display='none'
    window1.style.display='none'
    input.value=''
    input.style.width='70%'
    buttonpresent.style.display='inline-block'
    IdProduct.value=''
}

