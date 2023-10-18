<?php

/**
 * Child Theme's textdomain.
 *
 */
function eut_child_theme_setup() {

}
add_action( 'after_setup_theme', 'eut_child_theme_setup' );

//Omit closing PHP tag to avoid accidental whitespace output errors.
// function custom_client_shortcode($atts) {
//     $output =  $output .= '<h1>Hey I am amit</h3>';
//     return $output;
// }
// add_shortcode('client_shortcode', 'custom_client_shortcode');

function client_shortcode_function($atts) {
    // Shortcode content goes here
    ob_start(); // Start output buffering

    ?>

    
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
                          <div class="bebo">
                              <div class="main">
                                  <p class="emo-<?php echo $post_id; ?> active  temp1">Client</p>
                                  <p class="emo1-<?php echo $post_id; ?> temp2">Personal</p>
                                  <p class="emo2-<?php echo $post_id; ?> temp3">Demo</p>
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
                          <td class="stro"><?php the_field('years_in_industry');?></td>
                                              <td class="lig"><?php the_field('8_years');?> years</td>
                                            </tr>
                                            
                                             <tr class="tab">
                          <td class="stro"><?php the_field('favorite_cloudnine@_software');?></td>
                                              <td class="lig"><?php the_field('cloudnine_review');?></td>
                                            </tr>
                                           
                                            <tr class="tab">
                          <td class="stro"><?php the_field('favorite_thing_about_coludnine@');?></td>
                                              <td class="lig"><?php the_field('customer_focus_is_in_its_dna');?></td>
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
                                            <td class="stro"><?php the_field('sports_team');?></td>
                                            <td class="lig"><?php the_field('anything_vegetarian');?></td>
                                          </tr>
                                          
                                           <tr class="tab">
                                            <td class="stro"><?php the_field('food');?></td>
                                            <td class="lig"><?php the_field('charlie_and_the_chocolate_factory');?></td>
                                          </tr>
                                         
                                          <tr class="tab">
                                            <td class="stro"><?php the_field('movie');?></td>
                                            <td class="lig"><?php the_field('ping_pong');?></td>
                                          </tr>

                                          <tr class="tab">
                                            <td class="stro"><?php the_field('book');?></td>
                                            <td class="lig"><?php the_field('cooking');?></td>
                                          </tr>

                                          <tr class="tab">
                                            <td class="stro"><?php the_field('hobby');?></td>
                                            <td class="lig"><?php the_field('games');?></td>
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
                                            <td class="stro"><?php the_field('fav_hero');?></td>
                                            <td class="lig"><?php the_field('superman');?></td>
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
 
    <?php
    $output = ob_get_clean(); // Get the output
    return $output; // Return the output
}

add_shortcode('client_shortcode', 'client_shortcode_function');
