function parallax(element, distance, speed){
    const item = document.querySelector(element);
    item.style.transform = `translateY(${distance * speed}px)`;
    }
    
    window.addEventListener("scroll", function(){
    
      
      parallax('.s1', window.scrollY, 1.1);
      parallax('.s3', window.scrollY, 1.1);
      parallax('.s2', window.scrollY, 1.2);
    });