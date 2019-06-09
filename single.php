<?php get_header(); 
while(have_posts()){
            the_post();
      ?>
    <h2 class="page-heading"><?php the_title( ) ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
          <?php if(get_post_type(  )==='post') {?>
          <div class="card-meta">
            posted by <?php the_author(  ) ?> on <?php the_time('f j,y') ?>
            in <a> <?php  echo get_the_category_list(' ,'); ?> </a>
            </div>
            <?php }?>
          </div>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail( get_the_ID()); ?>" alt="Card Image">
          </div>
          <div class="card-description">
            <h3><?php the_title( ) ;?></h3>
            <p>
            <?php the_content( ) ;?>
            </p>
          </div>
        </div>

        <div id="comments-section">
        <?php
        
        $fields =  array(

            'author' =>
              '<p  class="comment-form-author">' .
              '<input placeholder="Enter your name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
              '" size="30"' . $aria_req . ' /></p>',
          
            'email' =>
              '<p class="comment-form-email">' .
              '<input  placeholder="Enter your email"  id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
              '" size="30"' . $aria_req . ' /></p>'
          
           
          );
        $args=array(
            'title_reply'=>'Share your thoughts',
            'fields'=>$fields,
            'comment_field'=> '<p class="comment-form-comment"><textarea  placeholder="Add Comment/reply"   id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
            '</textarea></p>',
            'comment_notes_before'=>'<p class="comment-notes">Your email address will not be published 
            all fields are required
            </p>'
        );
        comment_form($args); 
        $comments_number=get_comments_number(  );
        if(!$comments_number==0){    
        ?>
        <div class="comments">
        <h3>what others says</h3>
        <ol class="all-comments">
       <?php 
       $comments=get_comments( array(
           'post_id'=>$post->id,
           'status'=>'approve'
       ) );
       wp_list_comments( array(
           'per_page'=>15),$comments );

       ?>
        </ol>
        </div>
        <?php   } ?>
        </div>
      </section>
<?php }?>
      <aside id="sidebar">
       <?php dynamic_sidebar( 'main_sidebar' ) ; ?>
      </aside>
    </div>
<?php get_footer(  ); ?>