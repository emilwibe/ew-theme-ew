(function(){
    var navPrimary = document.getElementById("nav-primary"),
        navToggle = document.getElementById("nav-toggle")
    ;

    navToggle.addEventListener("click", function(e){
        navPrimary.classList.toggle("is-hidden");
    }, false);
})();