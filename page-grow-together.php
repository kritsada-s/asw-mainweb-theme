<?php 
get_header();

// wp_enqueue_script('momentjs-min', 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js', array(), '', true);
// wp_enqueue_script('datepickerjs-min', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js', array(), '', true);
// wp_enqueue_style('datepickercss', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css', array(), '', 'all');

?>

<style>
  :root {
    --grow-together-blue: #1690D1;
    --btn-bg: #FFCA5F;
  }
  #info, #form {
    background-color: var(--grow-together-blue);
  }
  #form input, #form textarea {
    background-color: #fff;
    border: none;
    border-radius: 5px;
    width: 100%;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
  }
  #form {
    background: #aecab8;
    background-image: url('https://assetwise.test/wp-content/uploads/2025/04/bg-02-3.png');
    background-size: 100% 100%;
    background-position: center bottom;
    background-repeat: no-repeat;
    padding: 3rem 0 4rem;
  }
  #form label {
    color: #fff;
    margin-bottom: 5px;
  }
  #form #submit {
    background-color: var(--btn-bg);
    color: #032855;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
  }
  #info {
    background-image: url('https://assetwise.test/wp-content/uploads/2025/04/bg-01-2.png');
    background-size: 100% 100%;
    background-position: center bottom;
    background-repeat: no-repeat;
    min-height: 70vh;
    display: flex;
    align-items: center;
  }

  @media screen and (max-width: 520px) {
    #info {
      background-image: url('https://assetwise.test/wp-content/uploads/2025/04/bg-info-m-2.png');
      padding-bottom: 2rem;
    }
    #form {
      padding: 20px 0 60px;
      background-image: url('https://assetwise.test/wp-content/uploads/2025/04/bg-form-m-2.png');
    }
  }
</style>

<section id="heroBanner">
  <img src="https://assetwise.test/wp-content/uploads/2025/04/asw-club_grow-together_desktop_banner.jpg" alt="Grow Together" class="img-fluid hidden md:block">
  <img src="https://assetwise.test/wp-content/uploads/2025/04/asw-club_grow-together_mobile_banner.jpg" alt="Grow Together" class="img-fluid md:hidden">
</section>

<section id="info" class="py-20">
  <div class="container mx-auto px-4 lg:px-0">
    <img src="https://assetwise.test/wp-content/uploads/2025/04/aswVlub_grow-together-benefit_d.png" alt="" class="hidden md:block">
    <img src="https://assetwise.test/wp-content/uploads/2025/04/aswClub_grow-together-benefit_m.png" alt="" class="md:hidden">
  </div>
</section>

<section id="form">
  <div class="container mx-auto px-4 lg:px-0">
    <div class="col-12">
      <h2 class="text-white text-center font-medium text-[48px]">ลงทะเบียนร้านค้า</h2>
    </div>
    <div class="col-12 lg:w-3/5 mx-auto">
      <form action="" class="grid grid-cols-1 lg:grid-cols-2 gap-x-0 md:gap-x-4 gap-y-5">
        <div class="form-group col-span-2">
          <label for="shopName">ชื่อร้านค้า <span>*</span></label>
          <input type="text" class="form-control" id="shopName" name="shopName">
        </div>
        <div class="form-group col-span-2 md:col-span-1">
          <label for="contactNumber">เบอร์ติดต่อ <span class="text-red-500">*</span></label>
          <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="089-999-9999">
        </div>
        <div class="form-group col-span-2 md:col-span-1">
          <label for="email">อีเมล <span class="text-red-500">*</span></label>
          <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group col-span-2">
          <label for="address">ที่อยู่ร้านค้า <span class="text-red-500">*</span></label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group col-span-2">
          <label for="productType">ประเภทผลิตภัณฑ์</label>
          <input type="text" class="form-control" id="productType" name="productType">
        </div>
        <div class="form-group col-span-2">
          <label for="promotion">โปรโมชั่นที่ต้องการให้ส่วนลด</label>
          <textarea class="form-control" id="promotion" name="promotion"></textarea>
        </div>
        <div class="form-group col-span-2 mb-3">
          <label for="promotionPeriod">ระยะเวลาโปรโมชั่น</label>
          <input type="text" class="form-control" id="promotionPeriod" name="promotionPeriod">
        </div>
        <div class="form-group col-span-2 mb-0">
          <button id="submit" type="submit" class="btn btn-primary w-[200px] block mx-auto">ส่งข้อมูล</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- <script>
  $(document).ready(function() {
    console.log('ready');
    $('input[name="promotionPeriod"]').daterangepicker();
  });
</script> -->
<?php get_footer() ?>