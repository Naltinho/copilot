<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Professor</title>
    <link rel="stylesheet" href="professor.css">
    <link rel="stylesheet" href="style.css">
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
    padding: 0 20px;
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

/* Perfil do Professor */
.professor-profile {
    background-color: #fff;
}

.profile-header {
    position: relative;
    height: 400px;
}

.profile-cover {
    height: 250px;
    background: linear-gradient(135deg, #3498db, #2c3e50);
}

.profile-info {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    width: 100%;
}

.profile-photo {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 5px solid #fff;
    margin-bottom: 20px;
    object-fit: cover;
}

.profile-info h1 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.disciplina {
    color: #7f8c8d;
    font-size: 1.2em;
    margin-bottom: 15px;
}

.badges {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 20px;
}

.badges span {
    background-color: #3498db;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9em;
}

/* Sobre o Professor */
.about-professor {
    padding: 50px 0;
    background-color: #f9f9f9;
}

.stats {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-top: 30px;
}

.stat-item {
    text-align: center;
}

.stat-item h3 {
    color: #e74c3c;
    font-size: 2em;
    margin-bottom: 10px;
}

/* Metodologia */
.methodology {
    padding: 50px 0;
    background-color: #fff;
}

.method-cards {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
}

.method-card {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    flex: 1;
    max-width: 300px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

/* Horários */
.schedule {
    padding: 50px 0;
    background-color: #f9f9f9;
}

.schedule-grid {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
}

.schedule-card {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.schedule-btn {
    background-color: #2ecc71;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 15px;
    cursor: pointer;
}

/* Avaliações */
.reviews {
    padding: 50px 0;
    background-color: #fff;
}

.review-cards {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
}

.review-card {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.review-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
}

.stars {
    color: #f1c40f;
    margin: 10px 0;
}

/* Contato */
.contact {
    padding: 50px 0;
    background-color: #f9f9f9;
}

.contact-content {
    display: flex;
    justify-content: space-between;
    gap: 50px;
    margin-top: 30px;
}

.contact-form {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form input,
.contact-form textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.contact-form textarea {
    height: 150px;
    resize: vertical;
}

.submit-btn {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 15px;
    border-radius: 5px;
    cursor: pointer;
}

.contact-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Responsividade */
@media (max-width: 768px) {
    .method-cards,
    .schedule-grid,
    .review-cards,
    .contact-content {
        flex-direction: column;
        align-items: center;
    }

    .method-card,
    .schedule-card,
    .review-card {
        width: 100%;
        max-width: 400px;
    }

    .stats {
        flex-wrap: wrap;
    }

    .nav-links {
        display: none;
    }

    .buttons {
        display: none;
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
            <li><a href="./aluno/dicas.html">Dicas</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="contato.html">Contactos</a></li>
          </ul>
          <div class="buttons">
       
        </nav>
      </header>

    <!-- Perfil do Professor -->
    <section class="professor-profile">
        <div class="profile-header">
            <div class="profile-cover"></div>
            <div class="profile-info">
                <img src="imagens/pexels-photo-5212324.jpeg" alt="Foto do Professor" class="profile-photo">
                <h1>Prof. João Silva</h1>
                <p class="disciplina">Professor de Matemática</p>
                <div class="badges">
                    <span>Doutor em Educação</span>
                    <span>15 anos de experiência</span>
                    <span>Especialista em Ensino</span>
                </div>
            </div>
        </div>

        <!-- Sobre o Professor -->
        <section class="about-professor">
            <div class="container">
                <h2>Sobre o Professor</h2>
                <p>Professor dedicado com mais de 15 anos de experiência no ensino de matemática. Especialista em tornar conceitos complexos acessíveis e interessantes para todos os alunos.</p>
                <div class="stats">
                    <div class="stat-item">
                        <h3>1500+</h3>
                        <p>Alunos</p>
                    </div>
                    <div class="stat-item">
                        <h3>95%</h3>
                        <p>Aprovação</p>
                    </div>
                    <div class="stat-item">
                        <h3>200+</h3>
                        <p>Aulas</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Metodologia -->
        <section class="methodology">
            <div class="container">
                <h2>Metodologia de Ensino</h2>
                <div class="method-cards">
                    <div class="method-card">
                        <i class="fas fa-brain"></i>
                        <h3>Aprendizado Ativo</h3>
                        <p>Foco em exercícios práticos e resolução de problemas reais.</p>
                    </div>
                    <div class="method-card">
                        <i class="fas fa-users"></i>
                        <h3>Atenção Individual</h3>
                        <p>Acompanhamento personalizado do progresso de cada aluno.</p>
                    </div>
                    <div class="method-card">
                        <i class="fas fa-laptop"></i>
                        <h3>Recursos Digitais</h3>
                        <p>Utilização de tecnologia e recursos interativos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Horários Disponíveis -->
        <section class="schedule">
            <div class="container">
                <h2>Horários Disponíveis</h2>
                <div class="schedule-grid">
                    <div class="schedule-card">
                        <h3>Segunda-feira</h3>
                        <p>08:00 - 10:00</p>
                        <p>14:00 - 16:00</p>
                        <button class="schedule-btn">Agendar</button>
                    </div>
                    <div class="schedule-card">
                        <h3>Quarta-feira</h3>
                        <p>10:00 - 12:00</p>
                        <p>16:00 - 18:00</p>
                        <button class="schedule-btn">Agendar</button>
                    </div>
                    <div class="schedule-card">
                        <h3>Sexta-feira</h3>
                        <p>09:00 - 11:00</p>
                        <p>15:00 - 17:00</p>
                        <button class="schedule-btn">Agendar</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avaliações -->
        <section class="reviews">
            <div class="container">
                <h2>Avaliações dos Alunos</h2>
                <div class="review-cards">
                    <div class="review-card">
                        <img src="imagens/pexels-photo-3777943.jpeg" alt="Aluno">
                        <h4>Maria Santos</h4>
                        <div class="stars">★★★★★</div>
                        <p>"Excelente professor! Metodologia clara e objetiva."</p>
                    </div>
                    <div class="review-card">
                        <img src="imagens/pexels-photo-3777946.jpeg" alt="Aluno">
                        <h4>Pedro Oliveira</h4>
                        <div class="stars">★★★★★</div>
                        <p>"Consegui entender matemática como nunca antes!"</p>
                    </div>
                    <div class="review-card">
                        <img src="imagens/pexels-photo-3777946.jpeg" alt="Aluno">
                        <h4>Ana Lima</h4>
                        <div class="stars">★★★★★</div>
                        <p>"Aulas dinâmicas e muito bem explicadas."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contato -->
        <section class="contact" id="contato">
            <div class="container">
                <h2>Entre em Contato</h2>
                <div class="contact-content">
                    <form class="contact-form">
                        <input type="text" placeholder="Nome" required>
                        <input type="email" placeholder="Email" required>
                        <textarea placeholder="Mensagem" required></textarea>
                        <button type="submit" class="submit-btn">Enviar Mensagem</button>
                    </form>
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <p>professor@aulafacil.com</p>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <p>(+244) 935 956 775</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html> 