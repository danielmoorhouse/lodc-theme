<?php get_header(); ?>


<?php get_template_part('parts/slider'); ?>
<div class="container-fluid bkg">
    <div class="container text-center visio">

	<h1 class="display-4">Welcome to the LODC UK</h1>
	<hr class="my-4">
	<p class="lead">
		Our vision is to provide universal access to dance literacy as a
		mean to explore and create dance.
		We deliver Language of Dance sessions in primary, secondary
		and special educational needs schools, as well as Continuous Professional Development (CPD), training courses
		and resources for teachers.</p>
	<p class="lead">
		<a class="btn btn-primary btn-lg" href="https://lodc.nic-edesign.com/about/what-is-language-of-dance/" role="button">Learn more</a>
	</p>
    </div>
</div>

<div class="container-fluid text-center team-front">
    <h2 class="text-center">TEAM</h2> 
        <div class="row justify-content-md-center">
	        <?php $the_query = new WP_Query( array( 'category_name' => 'team', 'posts_per_page' => 3) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="col-md-4 text-center">
                <div class="wraps team" style="width:95%;">
                <?php the_post_thumbnail('team-thumb'); ?>
                    
                <br><a class="name" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
        </div>
    
    <?php endwhile; ?>
    <?php  wp_reset_postdata();?>
</div>
</div>
<div class="container-fluid  events">
   <div class="row"> 
    <div class="col-md-6">
           
           <h1> INSTAGRAM FEED HERE</h1>
        </div>
      

       
       
        <div class="col-md-6">
            <h2 class="ev">EVENTS</h2>
            <div class="row justify-content-md-center">
                 <?php $the_query = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => 3, 'the_post_thumbnail' => 'homepage-thumb' ) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="col-md-10 box">
                    <div class="row"> 
                        <div class="date col-md-4">
                            <p class="card-title bold"><i class="far fa-calendar-alt"></i> <?php the_field('event_start_date'); ?></p>
                             <p><i class="far fa-clock"></i> <?php the_field('start_time'); ?><?php the_field('event_end_time'); ?></p><br>
                    </div>
                        <div class="info col-md-8"><h6><a class="name" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6><p class="text">                            <?php the_field('event_description'); ?></p>
                        </div>
                    
                </div>
          </div>
  <?php endwhile; ?>
    <?php  wp_reset_postdata();?>
            
        </div>
       </div>
    </div>
</div>
<div class="container-fluid cats">
   <div class="row justify-content-md-center"> 
    <div class="col-md-4 text-center">
    <div class="container">
     <a href="https://lodc.nic-edesign.com/projects">   <img width="80%" src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/joint-project-2161493_640.jpg"><br>
        PROJECTS</a>
    </div></div>
    <div class="col-md-4 text-center">
        <div class="container">
         <a href="https://lodc.nic-edesign.com/courses">  <img width="80%" src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/road-908176_640.jpg"><br>
       COURSES</a>
    </div></div>
    <div class="col-md-4 text-center">
        <div class="container">
        <a href="https://lodc.nic-edesign.com/poducts">   <img width="80%" src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/cube-1655118_640.jpg"><br>
       PRODUCTS</a>
    </div></div>
   </div>
</div>



<div class="container-fluid banner">
    <div class="row justify-content-md-center"> 
  <div class="col-md-3 icons text-center"><img src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/trophy.jpg"><br><h2 class="stat">80</h2><br><h4 class="stat">Winners</h4></div> 
    <div class="col-md-3 icons text-center"><img src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/heart.png"><br><h2 class="stat">1000</h2><br><h4 class="stat">Hearts</h4></div> 
      <div class="col-md-3 icons text-center"><img src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/student.png"><br><h2 class="stat">100+</h2><br><h4 class="stat">Students</h4></div> 
        <div class="col-md-3 icons text-center"><img src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/edit.png"><br><h2 class="stat">50</h2><br><h4 class="stat">Certifications</h4></div> 
 </div>
    </div>

  

<div class="container-fluid donate">
    <div class="row"> 
        <div class="col-md-6 minusleft">
        <img src="https://lodc.nic-edesign.com/wp-content/uploads/2021/04/template-1.png">
        </div>
        <div class="col-md-6">
           <h1> DONATE.....</h1>
           <h2>Please support us by....</h2>
        </div>
    </div>
</div>



    
<?php get_footer(); ?>