class Formulario extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        let shadowRoot = this.attachShadow({mode:'open'});
        const t = document.querySelector('#form');
        const instance =t.content.cloneNode(true);
        shadowRoot.appendChild(instance);
    }
}
window.customElements.define('boton-formulario',Formulario)