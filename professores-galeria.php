<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Professores - Aulafacil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="professores-galeria.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style type="text/css">
        /* Estilos Gerais */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    line-height: 1.6;
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

/* Hero Section */
.hero {
    text-align: center;
    padding: 60px 20px;
    background: linear-gradient(135deg, #3498db, #2c3e50);
    color: white;
}

.hero h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
    max-width: 600px;
    margin: 0 auto;
}

/* Filtros */
.filters {
    text-align: center;
    padding: 30px 0;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.filter-btn {
    padding: 10px 20px;
    margin: 0 10px;
    border: none;
    border-radius: 25px;
    background-color: #f4f4f4;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn.active,
.filter-btn:hover {
    background-color: #3498db;
    color: white;
}

/* Galeria de Professores */
.teachers-gallery {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.teacher-card {
    perspective: 1500px;
    height: 400px;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    cursor: pointer;
}

.teacher-card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card-front {
    background-color: white;
}

.card-front img {
    width: 100%;
    height: 70%;
    object-fit: cover;
}

.card-front h3 {
    margin: 15px 0 5px;
    color: #2c3e50;
}

.card-front .subject {
    color: #7f8c8d;
}

.card-back {
    background-color: #2c3e50;
    color: white;
    transform: rotateY(180deg);
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card-back h3 {
    margin-bottom: 15px;
}

.qualification, .experience {
    margin-bottom: 15px;
}

.specialties {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin: 15px 0;
}

.specialties span {
    background-color: rgba(255,255,255,0.1);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 0.9em;
}

.social-links {
    margin: 20px 0;
}

.social-links a {
    color: white;
    margin: 0 10px;
    font-size: 1.2em;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #3498db;
}

.contact-btn {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-btn:hover {
    background-color: #2980b9;
}

/* Responsividade */
@media (max-width: 768px) {
    .nav-links, .buttons {
        display: none;
    }

    .filters {
        overflow-x: auto;
        white-space: nowrap;
        padding: 20px;
    }

    .filter-btn {
        margin-bottom: 10px;
    }

    .teachers-gallery {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
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
       
        </nav>
      </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Nossos Professores</h1>
        <p>Conheça nossa equipe de profissionais altamente qualificados</p>
    </section>

    <!-- Filtros -->
    <div class="filters">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="matematica">Matemática</button>
        <button class="filter-btn" data-filter="portugues">Português</button>
        <button class="filter-btn" data-filter="ciencias">Ciências</button>
        <button class="filter-btn" data-filter="historia">História</button>
    </div>

    <!-- Galeria de Professores -->
    <section class="teachers-gallery">
        <div class="teacher-card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="imagens/pexels-photo-5212324.jpeg" alt="Professor">
                    <h3>Prof. João Silva</h3>
                    <p class="subject">Matemática</p>
                </div>
                <div class="card-back">
                    <h3>Prof. João Silva</h3>
                    <p class="qualification">Doutor em Matemática</p>
                    <p class="experience">15 anos de experiência</p>
                    <div class="specialties">
                        <span>Cálculo</span>
                        <span>Geometria</span>
                        <span>Álgebra</span>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                    <button class="contact-btn"><a href="professor.html">Ver Perfil</a></button>
                     <button class="contact-btn"><a href="professor.html">Escolher</a></button>
                </div>
            </div>
        </div>

        <!-- Repita para mais professores -->
        <div class="teacher-card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="imagens/pexels-photo-5212325.jpeg" alt="Professora">
                    <h3>Profa. Maria Santos</h3>
                    <p class="subject">Português</p>
                </div>
                <div class="card-back">
                    <h3>Profa. Maria Santos</h3>
                    <p class="qualification">Mestre em Literatura</p>
                    <p class="experience">12 anos de experiência</p>
                    <div class="specialties">
                        <span>Gramática</span>
                        <span>Literatura</span>
                        <span>Redação</span>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                    <button class="contact-btn">Ver Perfil</button>
                    <button class="contact-btn"><a href="professor.html">Escolher</a></button>
                </div>
            </div>
        </div>

        <!-- Adicione mais cards conforme necessário -->
    </section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025 Aulafacil. Todos os direitos reservados.</p>
    </footer>
</body>
</html> 