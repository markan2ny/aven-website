<section class="news-section section-padding">
    <div class="container news-section__content--container aven-section-padding">
        <div class="text-center aven-section-title">
            <h1>Recent <span>New's</span></h1>
        </div>
        <div class="news-section__content--body">
            <div class="row">
                   <!-- Loop start here -->
               <?php 

                get_template_part( 'loop-templates/loop', 'news' );

                ?>   
           
            </div>
        <div class="news-section__view--all">
            <a href="/news">See More <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
    </div>
</section>