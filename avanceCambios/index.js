const btnCart = document.querySelector('.container-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart')
})

let titles = document.querySelectorAll('[contenteditable]');

for (let title of titles) {
  let observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
      title.setAttribute('data-text', mutation.target.nodeValue);
    });    
  });
  
  let config = {characterData: true, subtree: true};
  observer.observe(title, config);
}
