
        var navLinks=document.getElementById("Links");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hidemenu(){
            navLinks.style.right="-200px";
        }
        window.addEventListener('load', e => {
  
            registerSW(); 
          });
          
          async function registerSW() { 
            if ('serviceWorker' in navigator) { 
              try {
                await navigator.serviceWorker.register('./sw.js'); 
              } catch (e) {
                alert('ServiceWorker registration failed. Sorry about that.'); 
              }
            } else {
              document.querySelector('.alert').removeAttribute('hidden'); 
            }
          }