<section class="news fullpage">
    <div class="container news__content--container aven-section-padding">
        <div class="news__header--title text-center aven-section-title">
            <h1>Recent <span>New's</span></h1>
        </div>
        <div class="news__content--body">
            <div class="row">
                   <!-- Loop start here -->
               <?php 

                get_template_part( 'loop-templates/loop', 'news' );

                ?>   
           
            </div>
        <div class="news__view--all">
            <a href="#">View All <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        </div>
    </div>
</section>