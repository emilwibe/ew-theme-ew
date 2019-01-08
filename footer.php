<footer class="footer primary">
    <ul>
        <li>Emil Wibe</li>
        <li>CVR.: 36626208</li>
    </ul>
</footer>

    <?php if(is_single() && get_post_type() == 'project') : ?>

    <div id="particles-js" class="particles-js"></div>
    
    <?php endif; ?>

    <?php wp_footer(); ?>

    <?php if(is_single() && get_post_type() == 'project') : ?>
    

    <script>
      var projectParticleColor = "#333333";
      <?php if(get_field('project_color')) : ?>
      projectParticleColor = "<?php the_field('project_color'); ?>";
      <?php endif; ?>
      particlesJS("particles-js",{particles:{number:{value:40,density:{enable:!0,value_area:800}},color:{value:projectParticleColor},shape:{type:"circle",stroke:{width:0,color:"#000000"},polygon:{nb_sides:5},image:{src:"img/github.svg",width:100,height:100}},opacity:{value:.5,random:!1,anim:{enable:!1,speed:1,opacity_min:.1,sync:!1}},size:{value:5,random:!0,anim:{enable:!1,speed:40,size_min:.1,sync:!1}},line_linked:{enable:!1,distance:150,color:"#c909f2",opacity:.4,width:1},move:{enable:!0,speed:.5,direction:"none",random:!1,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!0,rotateX:600,rotateY:1200}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!1,mode:"repulse"},onclick:{enable:!0,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:1}},bubble:{distance:400,size:40,duration:2,opacity:8,speed:3},repulse:{distance:200,duration:.4},push:{particles_nb:4},remove:{particles_nb:2}}},retina_detect:!0});
    </script>

    <?php endif; ?>
</body>
</html>