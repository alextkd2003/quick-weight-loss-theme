function docReady() {
  
  var debounce = function(fn, time){
    let timeout;
    return function() {
      const functionCall = () => fn.apply(this, arguments);
      clearTimeout(timeout);
      timeout = setTimeout(functionCall, time);
    }
  }

  var showBtn = function() {
      if (window.scrollY > 400) {
        backToTopBtn.classList.add('active');
      } else backToTopBtn.classList.remove('active');
  }

  var backToTopBtn = document.querySelector('footer a.back-to-top');
  if (backToTopBtn !== null) {    
    document.addEventListener('scroll', debounce(showBtn, 20));
  }
}

document.readyState !== 'loading' ? docReady() : document.addEventListener('DOMContentLoaded', docReady);
