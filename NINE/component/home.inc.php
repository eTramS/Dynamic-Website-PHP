<section id="home">
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <h1 class="text-white display-5">Pokémon Scarlet and Pokémon Violet</h1>
               <h3 class="text-white display-20">Embark on an open-world adventure</h3>
               <p class="text-white">The first open-world RPGs in The Series</p>
               <a href="https://www.youtube.com/watch?v=BzRCZnxPl_k" class="btn btn-brand">watch trailer</a>
               <a href="https://ecommerce.datablitz.com.ph/collections/pokemon-scarlet-violet-pre-order" class="btn btn-brand">Pre-order</a>
            </div>
         </div>
      </div>
   </section>
   <script>
$(function() {
var loc = window.location.href;
   $(".navbar .navbar-nav > li").each(function() {
      if (loc.match('/software')) { // software is the name of the page/slug
        $(this).addClass("active"); 
        }
   });
});
</script>