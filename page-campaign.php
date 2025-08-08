<?php
/**
 * Template Name: ASW Campaign
 *
 * @package SeedSpring
 */

 $fields = get_fields();
 $hero_banner = $fields['hero_banner'];
 $settings = $fields['page_setting'];
?>
<?php get_header() ?>

<?php if ($hero_banner) : ?>
  <section id="banner">
    <?php foreach ($hero_banner as $banner) : ?>
      <div class="banner-item">
        <img src="<?php echo $banner['desktop_banner']['url']; ?>" alt="<?php echo $banner['desktop_banner']['alt']; ?>" class="desktop-only">
        <img src="<?php echo $banner['mobile_banner']['url']; ?>" alt="<?php echo $banner['mobile_banner']['alt']; ?>" class="mobile-only">
      </div>
    <?php endforeach; ?>
  </section>
<?php endif; ?>

<section id="projects_selector">
  <div class="container mx-auto">
    <?php if ($settings['group_project']) : ?>
      <div class="flex items-center py-8">
        <nav class="flex gap-4 justify-center w-full">
          <?php foreach ($fields['projects_selector_group'] as $group) : ?>
            <button class="projects-selector-item w-1/4 min-h-10 bg-gray-200 rounded-lg p-5 border-2 border-gray-400" data-group="<?php echo $group['project_group']['group_name']; ?>">
              <?php print_r($group['project_group']['group_name']); ?>
            </button>
          <?php endforeach; ?>
        </nav>
      </div>
      <div class="projects-selector-wrapper">
        <div class="projects-selector-item"></div>
      </div>
    <?php else : ?>
      <div class="projects-selector-wrapper">
        <div class="projects-selector-item"></div>
      </div>
    <?php endif; ?>
  </div>
</section>
<hr/>
<pre>
  <?php print_r($fields); ?>
</pre>

<?php get_footer() ?>