function login() {
    var Email = document.getElementById("Email").value;
    var Password = document.getElementById("Password").value;

    let user = {
        "Email": Email,
        "Password": Password

    }
    fetch('http://localhost/RealEstate/view/links.php/user/login', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(user)
    })
        .then(response => response.json())
        .then(data => {
            console.log(data)
            if (data.msg === 'Login bem-sucedido') {
                // Armazene os dados no localStorage
                localStorage.setItem('user', JSON.stringify(data.user));
                localStorage.setItem('item', JSON.stringify(data.item));

                // Redirecione para a nova página
                window.location.href = 'Propriedade.php';
                // Redirecionar para a página de sucesso
            } else {
                alert('Credenciais inválidas'); // Mostrar mensagem de erro
            }
        })
        .catch(error => console.error('Erro', error));
}