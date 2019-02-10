(function(){
    var navPrimary = document.getElementById("nav-primary"),
        navToggle = document.getElementById("nav-toggle"),
        hero = document.getElementById("hero")
    ;

    navToggle.addEventListener("click", function(e){
        console.log(e.target);
        console.log(navToggle);
        e.target.classList.toggle("is-active");
        navPrimary.classList.toggle("is-hidden");
    }, false);

    document.addEventListener("load", function(){
        hero.style.animationName = "fade-in";
        hero.style.animationPlayState = "running";
    }, false);
})();