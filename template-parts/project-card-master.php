<?php
$post = $args['post'];
$project_logo = get_field('logo', $post->ID);
$status = get_the_terms($post->ID, 'project_status');
$colors = array(
  'new' => '#F1683B',
  'rtm' => '#1d9f9b',
  'sold' => '#8d38e2',
);
?>
<a href="<?php echo get_the_permalink($post->ID); ?>" class="project-card-master shadow-lg bg-white">
  <div class="card-header py-4 pr-3 flex justify-between items-center">
    <span class="text-xs text-ci-blue-400"><?php echo $status[0]->name; ?></span>
    <img src="<?php echo $project_logo['url']; ?>" alt="<?php echo $project_logo['alt']; ?>" class="w-[95px] h-auto object-contain mr-2">
  </div>
  <div class="card-body">
    <div class="project-card-master-image">
      <img src="<?php echo get_the_post_thumbnail_url($post->ID, '2048x2048'); ?>" alt="<?php echo get_the_title($post->ID); ?>" class="w-full h-full object-cover">
    </div>  
    <div class="project-card-master-content">
      <h3><?php echo get_the_title($post->ID); ?></h3>
    </div>
  </div>
</a>