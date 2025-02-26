<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Disciplinas</title>
  <link rel="stylesheet" href="servicos.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
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

/* Seção de Introdução ao Curso */
.course-intro {
  background-color: #2980b9;
  color: white;
  padding: 50px 0;
  text-align: center;
}

.course-intro h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

.course-intro p {
  font-size: 18px;
}

.course-intro .course-image img {
  width: 100%;
  max-width: 300px;
  margin-top: 20px;
}

/* Seção de Conteúdo do Curso */
.course-content {
   
  max-width:100%;
   
  background-color: #fff;
  padding: 30px 10px;
  text-align: center;
}

.course-content{

    max-width:100%;
  margin: 0 auto;
  padding: 0 15px;
}

.course-content h3 {
  font-size: 32px;
  margin-bottom:10px;
  color: #2c3e50;
}
/* ===== [CORREÇÕES] Container Principal ===== */
.content-list-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

/* ===== [CORREÇÕES] Itens Individuais ===== */
.content-list {
  flex: 1 1 calc(33.33% - 20px); /* 3 colunas */
  min-width: 250px;
  max-width: 300px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
  overflow: hidden; /* Adicionado para imagens */
}

.content-list:hover {
  transform: translateY(-5px);
}

/* ===== [CORREÇÃO] Conteúdo Interno ===== */
.content-item {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: inherit; /* Mantém a cor padrão do texto */
}

/* ===== [NOVO] Responsividade ===== */
@media (max-width: 992px) {
  .content-list {
    flex: 1 1 calc(50% - 20px); /* 2 colunas em tablets */
  }
}

@media (max-width: 576px) {
  .content-list {
    flex: 1 1 100%; /* 1 coluna em mobile */
  }
}
.content-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.content-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-bottom: 3px solid #e74c3c;
}

.content-item h4 {
  color: #2c3e50;
  font-size: 24px;
  margin: 20px 0;
  padding: 0 15px;
}

.content-item p {
  font-size: 16px;
  color: #7f8c8d;
  padding: 0 20px 25px;
  line-height: 1.5;
  margin: 0;
  flex-grow: 1;
}

/* Estiliza a barra de rolagem */
.content-list::-webkit-scrollbar {
  height: 8px;
}

.content-list::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

.content-list::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 4px;
}

.content-list::-webkit-scrollbar-thumb:hover {
  background: #555;
}

/* Seção de Benefícios */
.course-benefits {
  background-color: #ecf0f1;
  padding: 50px 20px;
  text-align: center;
}

.course-benefits h3 {
  font-size: 32px;
  margin-bottom: 30px;
}

.benefits {
  display: flex;
  justify-content: space-around;
}

.benefit {
  background-color: white;
  padding: 30px;
  border-radius: 10px;
  width: 250px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.benefit img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  margin-bottom: 15px;
}

.benefit h4 {
  font-size: 24px;
  color: #e74c3c;
}

.benefit p {
  font-size: 16px;
  color: #7f8c8d;
}

/* Seção de Depoimentos */
.course-testimonials {
  background-color: #fff;
  padding: 50px 20px;
  text-align: center;
}

.course-testimonials h3 {
  font-size: 32px;
  margin-bottom: 30px;
}

.carousel {
  display: flex;
  justify-content: center;
  gap: 30px;
}

.carousel-item {
  background-color: #ecf0f1;
  padding: 20px;
  border-radius: 10px;
  width: 250px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.carousel-item img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 15px;
}

.carousel-item p {
  font-size: 16px;
  color: #7f8c8d;
}

.carousel-item h4 {
  font-size: 18px;
  color: #e74c3c;
}

/* Seção de Inscrição */
.course-enroll {
  background-color: #2ecc71;
  color: white;
  padding: 50px 20px;
  text-align: center;
}

.course-enroll h3 {
  font-size: 36px;
  margin-bottom: 20px;
}

.course-enroll p {
  font-size: 18px;
  margin-bottom: 30px;
}

.enroll-btn {
  background-color: #e74c3c;
  padding: 15px 40px;
  font-size: 18px;
  border: none;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}

.enroll-btn:hover {
  background-color: #c0392b;
}

</style>

</head>
<body>

  <!-- Cabeçalho -->
  <header>
    <nav>
      <div class="logo">
        <img src="imagens/logo.jpg" alt="Logo" class="logo-img">
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
     <button class="login-btn" onclick="showForm('login')">Login</button>
  <button class="register-btn" onclick="showForm('register')">Registrar</button>
    </div>
    <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
    </nav>
  </header>

  <!-- Seção de Introdução ao Curso -->
  <section class="course-intro">
    <div class="container">
      <h2>Disciplinas disponiveis</h2>
      <p>O ensino domiciliar não é apenas uma alternativa , mas uma oportunidade de personalizar a educação.</p>
      <div class="course-image">
        <img src="daughter.jpg" alt="Imagem do Curso">
      </div>
    </div>
  </section>

 <!-- Seção de Conteúdo das disciplinas -->
<section class="course-content">
  <div class="content-list-container">
    <!-- Item 1 - Inglês -->
    <div class="content-list">
      <a href="professores-galeria.html" class="content-item">
        <img src="imagens/pexels-ivan-samkov-5676740.jpg" alt="Informática" class="content-img">
        <h4>Lingua Inglesa</h4>
        <p>Do básico ao avançado.</p>
      </a>
    </div>

    <!-- Item 2 - Matemática -->
    <div class="content-list">
      <a href="professores-galeria.html" class="content-item">
        <img src="imagens/pexels-max-fischer-5212359.jpg" alt="Matemática" class="content-img">
        <h4>Matemática</h4>
        <p>Do básico ao avançado.</p>
      </a>
    </div>

    <!-- Item 3 - Física -->
    <div class="content-list">
      <a href="professores-galeria.html" class="content-item" onclick="showForm('register')>
        <img src="imagens/pexels-karolina-grabowska-6256136.jpg" alt="Física" class="content-img">
        <h4>Física</h4>
        <p>Do básico ao avançado.</p>
      </a>
    </div>

    <!-- Item 4 - Química -->
    <div class="content-list">
      <a href="professores-galeria.html" class="content-item">
        <img src="imagens/pexels-photo-256302.jpeg" alt="Química" class="content-img">
        <h4>Química</h4>
        <p>Do básico ao avançado.</p>
      </a>
    </div>

    <!-- Item 5 - Informática -->
    <div class="content-list">
      <a href="professores-galeria.html" class="content-item">
        <img src="imagens/pexels-photo-256303.jpeg" alt="Informática" class="content-img">
        <h4>Informática</h4>
        <p>Construa seu próprio portfólio e desenvolva projetos reais.</p>
      </a>
    </div>
  </div>
</section>

  <!-- Seção de Benefícios -->
  <section class="course-benefits">
    <div class="container">
      <h3>Benefícios da aula domiciliar</h3>
      <div class="benefits">
        <div class="benefit">
          <img src="imagens/training.png" alt="Benefício 1">
          <h4>Aulas Personalizadas</h4>
          <p>Aprenda no seu ritmo, com o conteúdo adaptado às suas necessidades.</p>
        </div>
        <div class="benefit">
          <img src="imagens/paper.png" alt="Benefício 2">
          <h4>Material Completo</h4>
          <p>Conteúdo completo e atualizado, sempre disponível para você.</p>
        </div>
        <div class="benefit">
          <img src="imagens/video-education.png" alt="Benefício 3">
          <h4>Acompanhamento académico</h4>
          <p>Com orientação e apoio, todo o aluno é capaz de alcançar o seu potencial.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Seção de Depoimentos -->
  <section class="course-testimonials">
    <div class="container">
      <h3>Depoimentos de Alunos</h3>
      <div class="carousel">
        <div class="carousel-item">
          <img src="imagens/pexels-photo-3777943.jpeg" alt="Aluno 1">
          <p>"Esse curso me ajudou a iniciar minha carreira na tecnologia. A abordagem prática foi essencial para o meu aprendizado!"</p>
          <h4>Lucas Silva</h4>
        </div>
        <div class="carousel-item">
          <img src="imagens/pexels-photo-3777946.jpeg" alt="Aluno 2">
          <p>"O melhor curso que já fiz! Aprendi desde os conceitos básicos até a criação de projetos reais."</p>
          <h4>Maria Oliveira</h4>
        </div>
        <div class="carousel-item">
          <img src="imagens/pexels-photo-3777943.jpeg" alt="Aluno 3">
          <p>"Instrutores excelentes e conteúdo super atual. Me sinto preparado para trabalhar como desenvolvedor web!"</p>
          <h4>Carlos Souza</h4>
        </div>
      </div>
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




  <!-- Botão de Inscrição -->
  <section class="course-enroll">
    <div class="container">
      <h3>Pronto para começar?</h3>
      <p>Inscreva-se agora e comece sua jornada no saber!</p>
      <button class="register-btn" onclick="showForm('register')">Inscreva-se Agora</button>
    </div>
  </section>

</body>
</html>
