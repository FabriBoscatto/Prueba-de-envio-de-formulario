function agregarNumero(){
    const div_numero = document.querySelector('#div_numero');
    const nuevo_div = document.createElement('div');
    
    nuevo_div.innerHTML = div_numero.innerHTML;
    const div_container = document.querySelector('#container');

    div_container.append(nuevo_div);
}