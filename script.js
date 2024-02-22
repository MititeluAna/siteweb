onload = function () { // deodata cum este afisata pagina incepe executarea
     setTimeout(function run() {
       let date = new Date(); // creaza obiectul de tip Date
       let h = date.getHours();
       let m = date.getMinutes();
       let s = date.getSeconds();
   
       let d = date.getDate();
       let mm = date.getMonth() + 1;
       let y = date.getFullYear();
   
       if (h < 10) h = "0" + h;       if (m < 10) m = "0" + m;
       if (s < 10) s = "0" + s;
   
       if (d < 10) d = "0" + d;
       if (mm < 10) mm = "0" + mm;
   
       let clock = h + ":" + m + ":" + s;
       let dat = d + "." + mm + "." + y;
   
       documet.getElementById("clock").innerHTML = clock; // returneaza un element din html cu id specificat
       document.getElementById("dat").innerHTML = dat;
   
       setTimeout(run, 1000); // la interval de 1 secunda apeleaza run
     }, 0);
   };
   
   /* -------------------------------------------------- */
   
   function myFunction() {
     // classList se foloseste pentru manipularea colectiei de atribute
    document.getElementById("myDropdown").classList.toggle("show"); // cand dam click pe button comutam între ascunderea și afișarea conținutului derulant
  }
  
  window.onclick = function(event) { // cand dam click inafara butonului, se inchid linkurile
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
   /* -------------------------------------------------- */
   
   let slideIndex = 1;
   showSlides(slideIndex);
   
   function plusSlides(n) {
     showSlides((slideIndex += n));
   }
   
   function currentSlide(n) {
     showSlides((slideIndex = n));
   }
   
   function showSlides(n) {
     let i;
     let slides = document.getElementsByClassName("derula"); // le citeste si pastreaza in variabila slides 
     
     if (n > slides.length) {
       slideIndex = 1;
     }
     if (n < 1) {
       slideIndex = slides.length;
     }
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
     }
     slides[slideIndex - 1].style.display = "block"; // afiseaza slide la index slideIndex-1
   }
   
   /* -------------------------------------------------- */
  

  
   
  