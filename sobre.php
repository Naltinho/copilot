<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão e divulgação de perfis de professores domiciliar</title>
  <link rel="stylesheet" href="ensino.css">
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
        <button class="login-btn">Login</button>
        <button class="register-btn">Registrar</button>
      </div>
    </nav>
  </header>

  <!-- Seção de Introdução ao Gestão e divulgação de perfis de professores domiciliar -->
  <section class="intro">
    <div class="container">
      <h2>Gestão e divulgação de perfis de professores domiciliar: A Educação que Vai Até Você</h2>
      <p>O Gestão e divulgação de perfis de professores domiciliar proporciona uma experiência única e personalizada para os alunos. Com aulas particulares no conforto de casa, o aprendizado é ajustado às necessidades individuais, garantindo um ensino de qualidade e flexível.</p>
      <div class="intro-image">
        <img src="https://via.placeholder.com/800x400" alt="Gestão e divulgação de perfis de professores domiciliar">
      </div>
    </div>
  </section>

  <!-- Seção de Como Funciona -->
  <section class="how-it-works">
    <div class="container">
      <h3>Como Funciona</h3>
      <div class="steps">
        <div class="step">
          <h4>1. Escolha a disciplina</h4>
          <p>Selecione a disciplina que você deseja aprender, desde matérias escolares até habilidades profissionais.</p>
        </div>
        <div class="step">
          <h4>2. Encontre o Professor</h4>
          <p>Escolha um professor qualificado para o seu perfil e as suas necessidades de aprendizado.</p>
        </div>
        <div class="step">
          <h4>3. Aulas Personalizadas</h4>
          <p>Receba aulas personalizadas e interativas, no seu ritmo e no conforto da sua casa.</p>
        </div>
        <div class="step">
          <h4>4. Acompanhe seu Progresso</h4>
          <p>Monitore seu desempenho com o acompanhamento contínuo do seu professor e do sistema de avaliação.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Seção de Depoimentos -->
  <section class="testimonials">
    <div class="container">
      <h3>O que dizem nossos alunos</h3>
      <div class="carousel">
        <div class="testimonial-item">
          <img src="https://via.placeholder.com/100" alt="Aluno 1">
          <p>"O Gestão e divulgação de perfis de professores domiciliar me ajudou a entender melhor as matérias, com atenção individualizada e flexibilidade de horário!"</p>
          <h4>Juliana Costa</h4>
        </div>
        <div class="testimonial-item">
          <img src="https://via.placeholder.com/100" alt="Aluno 2">
          <p>"As aulas são dinâmicas e adaptadas ao meu estilo de aprendizado. Estou aprendendo muito mais do que na escola!"</p>
          <h4>André Oliveira</h4>
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



  <!-- Chamada para Ação -->
  <section class="cta">
    <div class="container">
      <h3>Quer começar suas aulas particulares?</h3>
      <p>Entre em contato conosco e descubra como podemos ajudar no seu desenvolvimento acadêmico e profissional.</p>
      <button class="cta-btn">Inscreva-se Agora</button>
    </div>
  </section>

</body>
</html>
