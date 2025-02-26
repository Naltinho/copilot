// Função para alternar o menu em dispositivos móveis
function toggleMenu() {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('active');
}

// Função para rolar até o formulário de cadastro
function scrollToForm() {
  document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });
}
// Função para mover o carrossel
let currentIndex = 0;

function moveCarousel(direction) {
  const items = document.querySelectorAll('.carousel-item');
  const totalItems = items.length;

  currentIndex = (currentIndex + direction + totalItems) % totalItems;

  // Atualiza o carrossel movendo os itens
  const container = document.querySelector('.carousel-container');
  container.style.transform = `translateX(-${currentIndex * 270}px)`; // 270px é a largura do item + espaço entre os itens
}
// Função para exibir o formulário de login ou registro
function showForm(type) {
  document.getElementById('overlay').style.display = 'flex';

  if (type === 'login') {
    document.getElementById('login-form-container').style.display = 'block';
    document.getElementById('register-form-container').style.display = 'none';
  } else if (type === 'register') {
    document.getElementById('register-form-container').style.display = 'block';
    document.getElementById('login-form-container').style.display = 'none';
  }
}

// Função para fechar o overlay e os formulários
function closeForm() {
  document.getElementById('overlay').style.display = 'none';
}
