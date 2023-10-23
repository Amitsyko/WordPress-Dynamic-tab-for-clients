  <?php
  /* Template Name: Client */
  ?>
  <?php get_header(); ?>

  <!DOCTYPE html>
  <html>

  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <style>
          
    .main{
      display: flex;
      justify-content: space-between;
     
    }
    .navi{
      width: 20rem;
  /*    margin: 5rem;*/
  /*    border: 0.1px solid black;*/
      padding: 2rem;
      border-radius: 5px;
      background: #f7fbfe;
    }

    hr {
      width: 113% !important;   
    }

    hr {
        margin: -7px 0px 5px -14px !important;
        color: inherit;
        border: 0;
        border-top: var(--bs-border-width) solid;
        opacity: .25;
        align-items: center;
        position: relative;
    }

    progress{
      vertical-align: baseline;
      text-align: center;
      padding: 15px;
      margin: 31px 0px 21px 4px;
      width: 100%;
     
    }

    #div2 progress {
      margin: 0px 0px 17px 0px;
    }

    /* Hide Personal and Demo content initially */
    #div2, #div3 {
      display: none;
    }

    hr{
      width: 100% ;
    }
    
    .card{
      border:none;
      background: none;
      margin-bottom: -5rem;
    }
    
    .card-img-top{
          box-shadow: 3px 4px 11px -1px;
    }

    .strong{
      font-weight:400;
      font-size: 13px;
    }

    .light{
      font-weight:400;
      font-size: 11px;
      padding-left: 2rem;
    }

    table{
       background: transparent;
       border:none;
    }

    #div2 table{
      margin-top: 2rem;
    }


    #div3 table{
      margin-top: 2rem;n
    }

    #div1 progress{
      margin-top: 4rem;
      margin-bottom:3rem;
      width: 100%;
      padding: 1rem;
    }

    #div2 progress{
      width: 100%;
      padding: 1rem;
    }

    .optwo progress {
      margin: 0px 0px 14px 0px;
    }

    .opthree .card-body {
        flex: 1 1 auto;
        color: var(--bs-card-color);
        margin-top: -49px;
    }
    

    .optwo .card-body {
        flex: 1 1 auto;
        color: var(--bs-card-color);
        margin-top: -22px;
    }

    .opthree .card-img, .card-img-top {
      border-top-left-radius: var(--bs-card-inner-border-radius);
      border-top-right-radius: var(--bs-card-inner-border-radius);
      margin-bottom: 1rem;
    }

    .opthree .card {
        border: none;
        background: none;
        margin-bottom: -2rem;
    }

    .clicked{
        text-decoration: underline 3px solid #009de1;
    /*    position: absolute;*/
    }

    .card-title {
      margin-bottom: var(--bs-card-title-spacer-y);
      color: #003594;
      font-weight: 600;
    }

    img.card-img-top {
    border-radius: 45px;
    }
    /* CSS for progress bar animation */

    /* Progress bar CSS */

.progress *:not([data-progress]) {
  margin: 5px 0;
  font-size: 14px;
}

.progress {
  width: 100%;
  max-width: 500px;
  padding: 15px;
  box-sizing: border-box;
  margin-top: 29px;
  margin-bottom: 20px;
}

.progress{
  --bs-progress-bg: #e9ecef00!important;
}

.progress [data-progress] {
  height: 100px;
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25) inset;
  border-radius: 50px;
margin: 5px 0 10px 0;
overflow: hidden;
}

.progress [data-progress] {
    height: 17px;
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25) inset;
    width: 100%;
    border-radius: 16px !important;
    margin: -10px 0 10px 0;
    overflow: hidden;
}

/* Add the following CSS to remove padding and margin on the progress bars */




[data-progress]::after {
  content: "";
  display: flex;
  justify-content: flex-end;
  align-items: center;
  background-image: linear-gradient(#99caff, #1a88ff 50%, #007bff 50%);
  width: 0;
  height: 100%;
  box-sizing: border-box;
  font-size: 10px;
  color: white;
  padding: 0 3px;
  transition: 2s;
  margin-right: auto;
}

[data-progress].animate-progress::after {
  content: attr(data-progress) "%";
  width: var(--animate-progress);
}
div#prog {
    margin-top: 0px !important;
}
/* End Progress bar CSS 

      </style>
  </head>

  <body>
         

<div class="container text-center">

          <div class="row align-items-start mt-5">
              <?php
              $args = array(
                  'post_type' => 'Client',
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                      $the_query->the_post();
                      $post_id = get_the_ID(); // Get the post ID

              ?>

                      <div class="col-lg-4 mb-5">
                          <div class="navi">
                              <div class="main">  
                                  <p class="client-<?php echo $post_id; ?> active client1">Client</p>
                                  <p class="personal-<?php echo $post_id; ?> personal2">Personal</p>
                                  <p class="demo-<?php echo $post_id; ?> demo3">Demo</p>
                              </div>
                              <hr>
                              <center>
                                  <div id="div1-<?php echo $post_id; ?>">
                                        <div class="card" style="width: 16rem;">
                                             <div class="card-body">
                                            <h6 class="card-title"><?php the_title();?></h6>
                                            <p class="card-text"><?php the_content();?></p>
                                          </div>
                                          <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top" alt="...">


                                            <!-- <progress value="<?php the_field('8_years');?>" max="100"></progress> -->
                                            
<div class="progress">
   
  <div data-progress="<?php the_field('8_years');?>"></div>
</div>

                                          <table>   
                                            <tr>
                          <td class="strong"><?php the_field('years_in_industry');?></td>
                                              <td class="light"><?php the_field('8_years');?> years</td>
                                            </tr>
                                            
                                             <tr class="tab">
                          <td class="strong"><?php the_field('favorite_cloudnine@_software');?></td>
                                              <td class="light"><?php the_field('cloudnine_review');?></td>
                                            </tr>
                                           
                                            <tr class="tab">
                          <td class="strong"><?php the_field('favorite_thing_about_coludnine@');?></td>
                                              <td class="light"><?php the_field('customer_focus_is_in_its_dna');?></td>
                                            </tr>
                                          </table>
                                        </div> 
                                  </div>
                              </center>
                              <br>

                              <center>
                                  <div id="div2-<?php echo $post_id; ?>" class="optwo">
                                        <div class="card" style="width: 16rem;">
                                           <div class="card-body">
                                          <h6 class="card-title"><?php the_title();?></h6>
                                          <p class="card-text"><?php the_content();?></p>
                                        </div>
<div id="prog"  class="progress">
  <div data-progress="<?php the_field('8_years');?>"></div>
</div>


                                         <table>
                                          <tr>
                                            <td class="strong"><?php the_field('sports_team');?></td>
                                            <td class="light"><?php the_field('anything_vegetarian');?></td>
                                          </tr>
                                          
                                           <tr class="tab">
                                            <td class="strong"><?php the_field('food');?></td>
                                            <td class="light"><?php the_field('charlie_and_the_chocolate_factory');?></td>
                                          </tr>
                                         
                                          <tr class="tab">
                                            <td class="strong"><?php the_field('movie');?></td>
                                            <td class="light"><?php the_field('ping_pong');?></td>
                                          </tr>

                                          <tr class="tab">
                                            <td class="strong"><?php the_field('book');?></td>
                                            <td class="light"><?php the_field('cooking');?></td>
                                          </tr>

                                          <tr class="tab">
                                            <td class="strong"><?php the_field('hobby');?></td>
                                            <td class="light"><?php the_field('games');?></td>
                                          </tr>
                                        </table>
                                      </div> 
                                  </div>
                              </center>
                              <br>

                              <center>
                                  <div id="div3-<?php echo $post_id; ?>" class="opthree">
                                                                          
                                        <div class="card" style="width: 16rem;">
                                           <div class="card-body">
                                          <h6 class="card-title"><?php the_title();?></h6>
                                          <p class="card-text"><?php the_content();?></p>
                                        </div>

                                        <?php 
                                      $image = get_field('img');
                                      if( !empty( $image ) ): ?>
                                          <img src="<?php echo esc_url($image['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($image['alt']); ?>" />
                                      <?php endif; ?>

                                       
                                        
                                        <table>
                                          <tr>
                                            <td class="strong"><?php the_field('fav_hero');?></td>
                                            <td class="light"><?php the_field('superman');?></td>
                                          </tr>
                                          
                                          
                                        </table>
                                      </div>  

                                  </div>
                              </center>
                          </div>
                      </div>



              <?php
                  endwhile;
              else:
                  echo 'No posts found';
              endif;
              ?>
          </div>
      </div>
  


      <script>
          $(document).ready(function () {
              <?php
              if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                      $the_query->the_post();
                      $post_id = get_the_ID(); // Get the post ID
              ?>
                      // Initially, only the Client content is visible
                      $(".client-<?php echo $post_id; ?>").addClass("active");
                      $("#div1-<?php echo $post_id; ?>").show();
                      $("#div2-<?php echo $post_id; ?>, #div3-<?php echo $post_id; ?>").hide();

                      $(".client-<?php echo $post_id; ?>").click(function () {
                          $(".client-<?php echo $post_id; ?>").removeClass("active");
                          $(this).addClass("active");
                          $("#div1-<?php echo $post_id; ?>").slideDown(200);
                          $("#div2-<?php echo $post_id; ?>, #div3-<?php echo $post_id; ?>").slideUp(200);
                      });

                      $(".personal-<?php echo $post_id; ?>").click(function () {
                          $(".personal-<?php echo $post_id; ?>").removeClass("active");
                          $(this).addClass("active");
                          $("#div2-<?php echo $post_id; ?>").slideDown(200);
                          $("#div1-<?php echo $post_id; ?>, #div3-<?php echo $post_id; ?>").slideUp(200);
                      });

                      $(".demo-<?php echo $post_id; ?>").click(function () {
                          $(".demo-<?php echo $post_id; ?>").removeClass("active");
                          $(this).addClass("active");
                          $("#div3-<?php echo $post_id; ?>").slideDown(200);
                          $("#div1-<?php echo $post_id; ?>, #div2-<?php echo $post_id; ?>").slideUp(200);
                      });


                      // ----------------------Click with underline------------------

                      $(document).ready(function() {
                        $('.client1').click(function() {
                            $(this).addClass('clicked');
                            $('.personal2, .demo3').removeClass('clicked'); // Remove the class from other elements
                        });

                        $('.personal2').click(function() {
                            $(this).addClass('clicked');
                            $('.client1, .demo3').removeClass('clicked'); // Remove the class from other elements
                        });
                        $('.demo3').click(function() {
                            $(this).addClass('clicked');
                            $('.client1, .personal2').removeClass('clicked'); // Remove the class from other elements
                        });
                    });

                      // --------------------Progress Bar---------------------



                        window.onload = function () {
                          if (
                            document.querySelectorAll(".progress").length > 0 &&
                            document.querySelectorAll(".progress [data-progress]").length > 0
                          ) {
                           
                            document
                              .querySelectorAll(".progress [data-progress]")
                              .forEach((x) => AnimateProgress(x));
                          }
                        };

                        function AnimateProgress(el) {
                          
                          el.className = "animate-progress";
                          
                          el.setAttribute(
                            "style",
                            `--animate-progress:${el.getAttribute("data-progress")}%;`
                          );
                         
                        }

              <?php
                  endwhile;
              endif;
              ?>
          });


      </script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>

  <?php get_footer(); ?>
