<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - Gestão e divulgação de perfis de professores domiciliar</title>
  <link rel="stylesheet" href="contato.css">
  <style type="text/css">
    /* Estilos Gerais */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

/* Cabeçalho */
header {
  background-color: #2c3e50;
  padding: 10px 0;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

nav .logo h1 {
  color: #fff;
}

nav .nav-links {
  list-style: none;
  display: flex;
}

nav .nav-links li {
  margin: 0 15px;
}

nav .nav-links a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

nav .buttons {
  display: flex;
  gap: 15px;
}

nav .login-btn, nav .register-btn {
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  border: none;
}

nav .login-btn {
  background-color: #3498db;
  color: white;
}

nav .register-btn {
  background-color: #e74c3c;
  color: white;
}

nav .login-btn:hover {
  background-color: #2980b9;
}

nav .register-btn:hover {
  background-color: #2ecc71;
}
/* Estilo para o overlay (fundo escurecido) */
.overlay {
  display: none; /* Inicialmente oculto */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8); /* Fundo escurecido */
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

/* Estilo para o formulário */
.form-container {
  background-color: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  width: 400px;
  text-align: center;
}

.form-container h2 {
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
  color: #333;
}

.form-group input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group input:focus {
  border-color: #3498db;
}

button {
  padding: 5px 5px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: #e74c3c;
  color: white;
  margin-top: 10px;
}

button:hover {
  background-color: #c0392b;
}

.close-btn {
  background-color: #3498db;
  color: white;
  margin-top: 10px;
}

.close-btn:hover {
  background-color: #2980b9;
}

/* Botões de login e registro na navegação */
nav .login-btn, nav .register-btn {
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  border: none;
}

nav .login-btn {
  background-color: #3498db;
  color: white;
}

nav .register-btn {
  background-color: #e74c3c;
  color: white;
}

nav .login-btn:hover {
  background-color: #2980b9;
}

nav .register-btn:hover {
  background-color: #2ecc71;
}

/* Seção de Contato */
.contact {
  background-color: #3498db;
  color: white;
  padding: 50px 20px;
  text-align: center;
}

.contact h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

.contact p {
  font-size: 18px;
}

.contact-form {
  margin-top: 30px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  justify-items: center;
  max-width: 900px;
  margin: 0 auto;
}

.contact-form .input-group {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.contact-form .input-group label {
  font-size: 18px;
  color: #fff;
  margin-bottom: 8px;
}

.contact-form .input-group input,
.contact-form .input-group textarea {
  padding: 8px;
  font-size: 14px;
  border: none;
  border-radius: 5px;
  margin-top: 5px;
  width: 100%;
}

.contact-form .input-group input {
  height: 35px;
}

.contact-form .input-group textarea {
  height: 100px;
}

.contact-form .submit-btn {
  background-color: #e74c3c; /* Mantém a cor vermelha do design */
  color: white;
  padding: 20px 20px; /* Aumenta o tamanho do botão */
  font-size: 16px; /* Ajusta o tamanho da fonte */
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 80%; /* Faz o botão ocupar a largura total */
  height: 100px;
  transition: background-color 0.3s ease-in-out;
}

.contact-form .submit-btn:hover {
  background-color: #c0392b; /* Tom vermelho mais escuro no hover */
}

/* Seção de Informações de Contato */
.contact-info {
  background-color: #fff;
  padding: 50px 20px;
  text-align: center;
}

.contact-info h3 {
  font-size: 32px;
  margin-bottom: 30px;
}

.contact-details {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.contact-item {
  background-color: #ecf0f1;
  padding: 20px;
  border-radius: 10px;
  width: 250px;
  margin: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-item h4 {
  font-size: 24px;
  color: #e74c3c;
}

.contact-item p {
  font-size: 16px;
  color: #7f8c8d;
}

/* Seção de Mapa */
.map {
  background-color: #ecf0f1;
  padding: 50px 20px;
  text-align: center;
}

.map h3 {
  font-size: 32px;
  margin-bottom: 20px;
}

.map iframe {
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

  </style>
</head>
<body>

  <!-- Cabeçalho -->
  <header>
    <nav>
      <div class="logo">
        <img src="imagens/logo.jpg" alt="Logo" class="logo-img" width="100" height="100">
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Início</a></li>
        <li><a href="noticias.html">Notícias</a></li>
        <li><a href="candidaturas.html">Candidaturas</a></li>
        <li><a href="resultados.html">Resultados</a></li>
        <li><a href="servicos.html">Serviços</a></li>
        <li><a href="dicas.html">Dicas</a></li>
        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="contato.html">Contactos</a></li>
      </ul>
      <div class="buttons">
        <button class="login-btn">Login</button>
        <button class="register-btn">Registrar</button>
      </div>
    </nav>
  </header>

  <!-- Seção de Contato -->
  <section class="contact">
    <div class="container">
      <h2>Entre em Contato Conosco</h2>
      <p>Tem alguma dúvida? Está interessado em nossas aulas? Fale conosco, estamos prontos para atender você!</p>

      <!-- Formulário de Contato -->
      <form class="contact-form" action="#" method="POST">
        <div class="input-group">
          <label for="name">Nome</label>
          <input type="text" id="name" name="name" placeholder="Seu nome completo" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Seu email" required>
        </div>
        <div class="input-group">
          <label for="message">Mensagem</label>
          <textarea id="message" name="message" placeholder="Sua mensagem" rows="5" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar</button>
      </form>
    </div>
  </section>
  <!-- Overlay de fundo -->
<div id="overlay" class="overlay">
  <!-- Formulário de Login -->
  <div class="form-container" id="login-form-container">
    <h2>Login</h2>
    <form id="login-form">
      <div class="form-group">
        <label for="login-email">Email:</label>
        <input type="email" id="login-email" name="login-email" required>
      </div>
      <div class="form-group">
        <label for="login-password">Senha:</label>
        <input type="password" id="login-password" name="login-password" required>
      </div>
      <button type="submit">Entrar</button>
      <button type="button" class="close-btn" onclick="closeForm()">Fechar</button>
    </form>
  </div>

  <!-- Formulário de Registro -->
  <div class="form-container" id="register-form-container">
    <h2>Registro</h2>
    <form id="register-form">
      <div class="form-group">
        <label for="register-name">Nome:</label>
        <input type="text" id="register-name" name="register-name" required>
      </div>
      <div class="form-group">
        <label for="register-email">Email:</label>
        <input type="email" id="register-email" name="register-email" required>
      </div>
      <div class="form-group">
        <label for="register-password">Senha:</label>
        <input type="password" id="register-password" name="register-password" required>
      </div>
      <div class="form-group">
        <label for="register-confirm-password">Confirmar Senha:</label>
        <input type="password" id="register-confirm-password" name="register-confirm-password" required>
      </div>
      <button type="submit">Registrar</button>
      <button type="button" class="close-btn" onclick="closeForm()">Fechar</button>
    </form>
  </div>
</div>



  <!-- Seção de Informações de Contato -->
  <section class="contact-info">
    <div class="container">
      <h3>Outras Formas de Contato</h3>
      <div class="contact-details">
        <div class="contact-item">
          <h4>Telefone</h4>
          <p>+55 11 98765-4321</p>
        </div>
        <div class="contact-item">
          <h4>Email</h4>
          <p>contato@ensinodomicilio.com.br</p>
        </div>
        <div class="contact-item">
          <h4>Redes Sociais</h4>
          <p>Facebook, Instagram, LinkedIn</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Seção de Mapa -->
  <section class="map">
    <div class="container">
      <h3>Nos Encontre</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.835693016207!2d-46.5740213!3d-23.5321406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce597def110eab%3A0x59385a906f5f75e1!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1617183767256!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

</body>
</html>
