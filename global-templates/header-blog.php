<section class="blog">
    <div class="container blog__content--container">
        <div class="text-center aven-section-title">
            <h1>Recent Blog's</h1>
        </div>
        <div class="blog__items">
            <div class="row" style="gap: 20px 0;">
            <!-- Loop start here -->
               <?php 

               get_template_part( 'loop-templates/loop', 'blog' );
               
               ?>   
            </div>
            <div class="blog__view--tab">
                <a href="/blog">View All

                <i class="fa fa-arrow-right"></i>


                </a>
            </div>
        </div>
    </div>
</section>