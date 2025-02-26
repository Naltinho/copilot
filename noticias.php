<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - AulaFacil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="noticias.css">
    <style type="text/css">
        /* Estilos Gerais */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
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
    max-width: 1200px;
    margin: 0 auto;
}

.logo h1 {
    color: #fff;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin: 0 15px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.buttons {
    display: flex;
    gap: 15px;
}

.login-btn, .register-btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    border: none;
}

.login-btn {
    background-color: #3498db;
    color: white;
}

.register-btn {
    background-color: #e74c3c;
    color: white;
}

/* Breaking News Banner */
.breaking-news {
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.breaking-label {
    font-weight: bold;
    margin-right: 15px;
}

/* Main Article */
.main-article {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.main-article h1 {
    font-size: 2em;
    color: #2c3e50;
    margin-bottom: 20px;
}

.article-meta {
    color: #7f8c8d;
    margin-bottom: 20px;
    display: flex;
    gap: 20px;
}

.article-content {
    font-size: 1.1em;
    line-height: 1.8;
}

.article-content h2 {
    color: #2c3e50;
    margin: 25px 0 15px;
}

.article-content ul {
    margin-left: 20px;
    margin-bottom: 20px;
}

/* Timeline */
.timeline {
    margin: 30px 0;
}

.timeline-item {
    padding: 20px;
    border-left: 3px solid #3498db;
    margin-bottom: 20px;
    background-color: #f8f9fa;
}

.timeline-item h3 {
    color: #2c3e50;
    margin-bottom: 10px;
}

/* Related News Sidebar */
.related-news {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.related-news h2 {
    color: #2c3e50;
    margin-bottom: 20px;
}

.news-card {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.news-card img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
}

.news-info h3 {
    font-size: 1em;
    color: #2c3e50;
    margin-bottom: 5px;
}

.news-info p {
    font-size: 0.9em;
    color: #7f8c8d;
    margin-bottom: 5px;
}

.news-info span {
    font-size: 0.8em;
    color: #95a5a6;
}

/* Responsividade */
@media (max-width: 768px) {
    .container {
        grid-template-columns: 1fr;
    }

    .nav-links {
        display: none;
    }

    .buttons {
        display: none;
    }

    .news-card {
        flex-direction: column;
    }

    .news-card img {
        width: 100%;
        height: 200px;
    }
} 
    </style>
</head>
<body>
    <!-- Cabeçalho -->
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


    <!-- Breaking News Banner -->
    <div class="breaking-news">
        <span class="breaking-label">Breaking News:</span>
        <span class="news-text">Fique por dentro das últimas notícias sobre educação e oportunidades de trabalho.</span>
    </div>

    <!-- Main Content -->
    <main class="container">
        <!-- Featured News -->
        <section class="featured-news">
            <article class="main-article">
                <h1>Processo de Candidatura de Professores domiciliares</h1>
                <div class="article-meta">
                    <span class="date">Publicado em: 05 Março 2024</span>
                    <span class="category">Categoria: Vagas</span>
                </div>
                <div class="article-content">
                    <p>A Direção Municipal da Educação do Soyo "DMES" vem, por este meio, tornar público que estão abertas as candidaturas para professores domiciliares no Soyo, referente ao ano académico 2024/2025.</p>

                    <h2>Requisitos:</h2>
                    <ul>
                        <li>Ser técnico médio no mínimo</li>
                        <li>Possuir agregação pedagógica ou experiência profissional</li>
                        <li>Domínio da língua portuguesa</li>
                        <li>Ter nacionalidade angolana</li>
                    </ul>

                    <h2>Documentos necessários:</h2>
                    <ul>
                        <li>Uma foto tipo passe</li>
                        <li>Fotocópia do bilhete de identidade</li>
                        <li>Certificado de habilitações literárias com notas discriminadas do II Ciclo do Ensino Secundário</li>
                        <li>CV</li>
                        <li>Outras certicações</li>
                    </ul>

                    <h2>Fases do Processo de Candidatura</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h3>1ª fase: Apresentação das candidaturas</h3>
                            <p>De 08 a 31 de Outubro 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>2ª fase: Verificação e análise documental</h3>
                            <p>De 01 a 31 de Outubro de 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>3ª fase: Pré-selecção</h3>
                            <p>De 01 a 08 de Novembro 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>4ª fase: Publicação dos resultados pré-seleccionados</h3>
                            <p>12 de Novembro de 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>5ª fase: Realização das entrevistas</h3>
                            <p>A partir de 23 de Dezembro de 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>6ª fase: Assinatura do contrato de BEI</h3>
                            <p>De 18 de Novembro a 18 Dezembro de 2024</p>
                        </div>
                        <div class="timeline-item">
                            <h3>7ª fase: Publicação dos resultados finais</h3>
                            <p>12 de Novembro de 2024</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Related News Sidebar -->
        <aside class="related-news">
            <h2>Notícias Relacionadas</h2>
            <div class="news-card">
                <img src="imagens/pexels-photo-5212324.jpeg" alt="Educação">
                <div class="news-info">
                    <h3>Novas Oportunidades na Educação</h3>
                    <p>Confira as últimas vagas disponíveis para professores...</p>
                    <span>15 Minutos atrás</span>
                </div>
            </div>
            <div class="news-card">
                <img src="imagens/pexels-photo-5905709.jpeg" alt="Professores">
                <div class="news-info">
                    <h3>Programa de Formação Continuada</h3>
                    <p>Professores terão acesso a novos cursos de capacitação...</p>
                    <span>30 Minutos atrás</span>
                </div>
            </div>
        </aside>
    </main>
</body>
</html> 