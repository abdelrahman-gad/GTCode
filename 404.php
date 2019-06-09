<?php get_header(  ) ?>
<div class="container-404">
    <h2 class="page-heading">
        Oh!!? what 404
    </h2>
    <img src="https://source.unsplash.com/440x489/?cats" alt="pagem not found">
    <h3>  Sorry ! I think you'd lost something check thos links </h3> 
    <ul>
        <li><a href="<?php  echo site_url('/blogs') ?>">Blogs List</a></li>
        <li><a href="<?php  echo site_url('/projects') ?>">Projects List</a></li>
        <li><a href="<?php  echo site_url('/about') ?>">About Me</a></li>
        <li><a href="<?php  echo site_url('/') ?>">Home</a></li>
    </ul>
</div>

<?php get_footer( ) ?>