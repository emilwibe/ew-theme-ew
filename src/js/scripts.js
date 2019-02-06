(function(){
    var navPrimary = document.getElementById("nav-primary"),
        navToggle = document.getElementById("nav-toggle")
    ;

    navToggle.addEventListener("click", function(e){
        e.target.classList.toggle("is-active");
        navPrimary.classList.toggle("is-hidden");
    }, false);
})();