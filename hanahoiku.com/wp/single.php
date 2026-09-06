<?php

if ( in_category('school') ) {
  include(TEMPLATEPATH . '/single-school.php');
} else if ( in_category('news') ) {
  include(TEMPLATEPATH . '/single-news.php');
} else if ( in_category('blog') ) {
  include(TEMPLATEPATH . '/single-blog.php');
} else if ( get_post_type() === 'job' ) {
  include(TEMPLATEPATH . '/single-job.php');
} else {
  include(TEMPLATEPATH . '/single-default.php');
}
?>
