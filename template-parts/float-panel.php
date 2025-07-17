<div id="float_panel" class="fixed bottom-7 left-4 w-fit h-fit px-3 py-2 bg-white rounded-lg shadow-lg flex items-center justify-center gap-2 z-50 border-[1.5px] border-neutral-500" style="opacity: 0;">
  <button id="show_calc_popup" class="flex items-center gap-2 text-neutral-500 hover:text-neutral-800 px-0">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calculator-icon lucide-calculator"><rect width="16" height="20" x="4" y="2" rx="2"/><line x1="8" x2="16" y1="6" y2="6"/><line x1="16" x2="16" y1="14" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
    <span class="text-md font-medium leading-normal">คำนวณสินเชื่อ</span>
  </button>
</div>

<div id="calc_modal" class="fixed inset-0 bg-black/80 z-[9999] hidden">
  <div class="absolute max-h-[90vh] overflow-y-auto w-[90%] md:w-[80%] 2xl:w-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-xl">
    <div class="flex items-center justify-end p-4">
      <button id="close_calc_modal" class="text-neutral-500 hover:text-neutral-800">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>
    <div class="relative">
      <?php include 'loan-calculator-mini.php'; ?>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const calcModal = document.getElementById('calc_modal');
  const showCalcBtn = document.getElementById('show_calc_popup');
  const closeCalcBtn = document.getElementById('close_calc_modal');

  showCalcBtn.addEventListener('click', function() {
    calcModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  });

  closeCalcBtn.addEventListener('click', function() {
    calcModal.classList.add('hidden'); 
    document.body.style.overflow = 'auto';
  });

  calcModal.addEventListener('click', function(e) {
    if (e.target === calcModal) {
      calcModal.classList.add('hidden');
      document.body.style.overflow = 'auto';
    }
  });
});
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const floatPanel = document.getElementById('float_panel');
    
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 300) {
            floatPanel.style.opacity = '1';
            floatPanel.style.transform = 'translateY(0)';
            floatPanel.style.transition = 'all 0.3s ease-in-out';
        } else {
            floatPanel.style.opacity = '0';
            floatPanel.style.transform = 'translateY(100px)';
            floatPanel.style.transition = 'all 0.3s ease-in-out';
        }
        
        lastScrollTop = scrollTop;
    });
  });
</script>