<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidaturas - Plataforma de Professores</title>
  <link rel="stylesheet" href="candidaturas.css">
  <script type="text/javascript" src="script.js"></script>
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

  <!-- Seção de Candidaturas -->
  <section class="candidaturas">
    <div class="container">
      <h2>Requisitos para Candidatura de Professores</h2>
      <p class="requisitos">Para se candidatar como professor em nossa plataforma, você deve atender aos seguintes requisitos:</p>
      <ul>
        <li>Ser técnico médio no mínimo</li>
        <li>Domínio da língua portuguesa</li>
        <li>Ser residente no muncipio do Soyo</li>
        <li>Possuir agregação pedagógica ou experiência de ensino</li>
        
        

                      
      <button class="apply-btn" onclick="openModal()">Candidate-se</button>
    </div>
  </section>

  <!-- Modal de Candidatura -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Formulário de Candidatura</h2>
      <form id="application-form">
        <div class="form-group">
          <label for="name">Nome Completo:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Telefone:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="bio">Breve Biografia:</label>
          <textarea id="bio" name="bio" rows="4" required></textarea>
        </div>
     
        
        
       
        <div class="form-group">
          <label for="documents">Documentação (Anexos):</label>
          <input type="file" id="documents" name="documents" multiple>
        </div>
        <button type="submit" class="submit-btn">Enviar Candidatura</button>
      </form>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }
  </script>

</body>
</html> 