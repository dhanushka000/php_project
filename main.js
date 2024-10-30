let navbar = document.querySelector('.navbar');
let searchForm = document.querySelector('.example');
let cartItem = document.querySelector('.cart-items-container');

// Menu button toggle
document.querySelector('#menu-btn').onclick = () => {
  navbar.classList.toggle('active');
  searchForm.classList.remove('active');  // Ensure only navbar is active
  cartItem.classList.remove('active');
}

// Search button toggle
document.querySelector('#search-btn').onclick = () => {
  searchForm.classList.toggle('active');
  navbar.classList.remove('active');  // Close navbar if open
  cartItem.classList.remove('active');  // Close cart if open
}

// Cart button toggle
document.querySelector('#cart-btn').onclick = () => {
  cartItem.classList.toggle('active');
  navbar.classList.remove('active');  // Close navbar if open
  searchForm.classList.remove('active');  // Close search if open
}

// Close all dropdowns on scroll
window.onscroll = () => {
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
  cartItem.classList.remove('active');
}
