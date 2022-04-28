window.onload = () => {
    const formulario = document.getElementsByTagName("form")[0];
    formulario.onsubmit = (evento) => {
        evento.preventDefault();
        const formdata = new FormData(formulario);
        fetch("ajax.php", {
            "body": formdata,
            "method": formulario.getAttribute("method")
        }).then((resposta) => {
            resposta.text();
        }).then((texto) => {
            console.log(texto);
        });
    };
};