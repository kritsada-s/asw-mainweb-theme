<?php
/**
 * Template Name: ASW Campaign
 * Template Post Type: promotion
 * @package SeedSpring
 */

 $fields = get_fields();
 $hero_banner = $fields['hero_banner'];
 $settings = $fields['page_setting'];

function clean_string($string) {
    // Remove zero-width space characters from string
    $string = str_replace('​', '', $string); // Remove zero-width space (U+200B)
    $string = str_replace('‌', '', $string); // Remove zero-width non-joiner (U+200C)
    $string = str_replace('‍', '', $string); // Remove zero-width joiner (U+200D)
    $string = trim($string);
    return $string;
}
?>
<?php get_header() ?>

<style>
  .tab-button {
    border: 3px solid #eee;
    background-color: white;
    color: #333;
  }
  .tab-button.active {
    color: #fff;
    background-color: #22c55e;
    border-color: #16a34a;
  }
</style>

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

<hr/>

<?php if ($settings['display_type'] == 'default') : ?>
  <p>Default</p>
<?php elseif ($settings['display_type'] == 'group') : ?>
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
<?php elseif ($settings['display_type'] == 'tabs') : ?>
    <div class="tabs-container py-10">
      <div class="tab-buttons w-full lg:w-4/5 mx-auto grid grid-cols-2 lg:grid-cols-4 mb-7 gap-5">
        <?php foreach (get_field('project_selector_tabs', get_the_ID()) as $index => $tab) : ?>
          <button class="tab-button group flex items-center justify-center gap-4 min-h-10 p-4 rounded-lg transition-all duration-300 <?php echo $index === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $index; ?>">
            <div class="w-7 h-7">
              <svg class="block group-[.active]:hidden" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="Circle"> <circle cx="12" cy="12" data-name="Circle" fill="none" id="Circle-2" r="10" stroke="#eee" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle> </g> </g> </g></svg>

              <svg class="hidden group-[.active]:block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#fff"></path> </g></svg>
            </div>
            <h4 class="text-2xl font-medium leading-none"><?= clean_string($tab['tab_label']); ?></h4>
          </button>
        <?php endforeach; ?>
      </div>
      
      <div class="tab-content w-full lg:w-4/5 mx-auto">
        <?php foreach (get_field('project_selector_tabs', get_the_ID()) as $index => $tab) : ?>
          <div class="tab-pane bg-white <?php echo $index === 0 ? 'active' : 'hidden'; ?>" id="tab-<?php echo $index; ?>">
            <div class="">
              <?php if ($tab['tab_label'] != '') : ?>
                <h3 class="text-4xl text-center font-medium mb-2 text-neutral-800"><?= clean_string($tab['tab_label']); ?></h3>
              <?php endif; ?>
              <?php foreach ($tab['projects_group'] as $group) : ?>
                <p class="text-neutral-800 font-medium text-2xl mb-2"><?= clean_string($group['group_label']); ?></p>
                <div class="projects-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
                  <?php foreach ($group['projects'] as $project) : ?>
                    <div class="project-item bg-blue-50 text-neutral-800">
                      <?php
                      $f = get_field('project_code', $project['project']);
                      ?>
                      <img src="<?= get_the_post_thumbnail_url($project['project'], 'full'); ?>" alt="<?= get_the_title($project['project']); ?>" class="w-full aspect-[3/4] object-cover">
                      <img src="<?= get_field('logo', $project['project'])['url']; ?>" alt="<?= get_the_title($project['project']); ?>" class="w-[120px] ml-0">
                      <p>project id : <?= $project['project']; ?></p>
                      <p>project code : <?= $f; ?></p>
                      <p>เริ่มต้น <?= $project['price']; ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabButtons.forEach(button => {
          button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.add('hidden'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active');

            // Show corresponding tab pane
            const targetPane = document.getElementById(targetTab);
            if (targetPane) {
              targetPane.classList.remove('hidden');
              targetPane.classList.add('active');
            }
          });
        });
      });
    </script>
<?php endif; ?>

<?php get_footer() ?>