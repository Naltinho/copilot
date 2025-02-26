<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style type="text/css">
        :root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --success-color: #2ecc71;
    --warning-color: #f1c40f;
    --danger-color: #e74c3c;
    --text-color: #2c3e50;
    --bg-color: #f5f6fa;
    --sidebar-width: 280px;
}

/* Layout Principal */
.admin-container {
    display: grid;
    grid-template-columns: var(--sidebar-width) 1fr;
    min-height: 100vh;
    background-color: var(--bg-color);
}

/* Sidebar */
.admin-sidebar {
    background: var(--primary-color);
    color: white;
    padding: 2rem;
    position: fixed;
    height: 100vh;
    width: var(--sidebar-width);
    overflow-y: auto;
}

.admin-logo {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    margin-bottom: 2rem;
}

.admin-logo img {
    width: 40px;
    height: 40px;
}

.admin-logo span {
    font-size: 1.5rem;
    font-weight: 600;
}

/* Menu de Navegação */
.admin-nav {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.nav-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.nav-item:hover {
    background: rgba(255,255,255,0.1);
}

.nav-item.active {
    background: var(--secondary-color);
}

.nav-item i {
    font-size: 1.2rem;
}

/* Área Principal */
.admin-main {
    margin-left: var(--sidebar-width);
    padding: 2rem;
}

/* Header */
.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    background: white;
    padding: 1rem 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.header-search {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: var(--bg-color);
    padding: 0.5rem 1rem;
    border-radius: 8px;
    width: 300px;
}

.header-search input {
    border: none;
    background: none;
    outline: none;
    width: 100%;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

/* Cards de Estatísticas */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
    justify-items: center; /* Centraliza os itens dentro do grid */
}

.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    text-align: center; /* Centraliza o texto dentro do card */
}
/* Tabelas */
.admin-table {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
}

.admin-table table {
    width: 100%;
    border-collapse: collapse;
}

.admin-table th {
    background: #f8f9fa;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
}

.admin-table td {
    padding: 1rem;
    border-top: 1px solid #eee;
}

/* Modais */
.admin-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.modal-content {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    width: 500px;
    max-width: 90%;
}

/* Formulários */
.admin-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-group label {
    font-weight: 500;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
}

/* Botões */
.admin-btn {
    padding: 0.8rem 1.5rem;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary {
    background: var(--secondary-color);
    color: white;
}

.btn-danger {
    background: var(--danger-color);
    color: white;
}

/* Responsividade */
@media (max-width: 1024px) {
    .admin-container {
        grid-template-columns: 1fr;
    }

    .admin-sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    .admin-sidebar.active {
        transform: translateX(0);
    }

    .admin-main {
        margin-left: 0;
    }
} 
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="admin-logo">
                <img src="../assets/logo.png" alt="Logo">
                <span>Aula facil Admin</span>
            </div>

            <nav class="admin-nav">
                <div class="nav-item active">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </div>
               
                <div class="nav-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Professores</span>
                </div>
                <div class="nav-item">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Alunos</span>
                </div>
                <div class="nav-item">
                    <i class="fas fa-book"></i>
                    <span>Disciplinas</span>
                </div>
                <div class="nav-item">
                    <i class="fas fa-calendar"></i>
                    <span>Agendamentos</span>
                </div>
                <div class="nav-item">
                    <i class="fas fa-chart-bar"></i>
                    <span>Relatórios</span>
                </div>
                <div class="nav-item">
                    <i class="fas fa-cog"></i>
                    <span>Configurações</span>
                </div>
            </nav>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="admin-main">
+''            <header class="admin-header">
                <div class="header-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Pesquisar...">
                </div>

                <div class="header-actions">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <img src="../assets/avatar.png" alt="Avatar">
                        <span>Admin</span>
                    </div>
                </div>
            </header>

           <!-- Cards de Estatísticas -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon" style="background: rgba(52, 152, 219, 0.1); color: #3498db;">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="stat-number">1,234</div>
        <div class="stat-label">Usuários Ativos</div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon" style="background: rgba(46, 204, 113, 0.1); color: #2ecc71;">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
        <div class="stat-number">856</div>
        <div class="stat-label">Aulas Realizadas</div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon" style="background: rgba(241, 196, 15, 0.1); color: #f1c40f;">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="stat-number">R$ 45,678</div>
        <div class="stat-label">Receita Mensal</div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon" style="background: rgba(231, 76, 60, 0.1); color: #e74c3c;">
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="stat-number">4.8</div>
        <div class="stat-label">Avaliação Média</div>
    </div>
</div>
    <script src="../js/admin-dashboard.js"></script>
</body>
</html> 