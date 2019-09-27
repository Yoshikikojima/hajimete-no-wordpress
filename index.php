<?php get_header(); ?>

<main>
  <div class="container">
    <div class="kv">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv.jpg">
    </div>
    <article>
      <h2>NEWS</h2>
      <dl class="table">
        <dt>2019.10.01</dt>
        <dd><a href="#">中野駅前店 オープンのお知らせ</a></dd>
        <dt>2019.04.01</dt>
        <dd><a href="#">新メニュー フルーツティーの紹介</a></dd>
        <dt>2019.01.01</dt>
        <dd><a href="#">スタッフ募集のお知らせ</a></dd>
      </dl>
    </article>
    <article>
      <h2>MENU</h2>
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" alt="ブラックティー">
          <div class="card-body">
            <h3 class="card-title">ブラックティー</h3>
            <p class="card-text">イギリスでは「紅茶」のことを「ブラックティー」と呼びます。こだわりぬいた茶葉を使ったブラックティーを提供します。</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" alt="ジャスミンティー">
          <div class="card-body">
            <h3 class="card-title">ジャスミンティー</h3>
            <p class="card-text">中国茶のひとつで、独特のフレーバーが魅力です。リラックス効果や消化促進など体にも優しいお茶です。</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/image3.jpg" alt="鉄観音">
          <div class="card-body">
            <h3 class="card-title">鉄観音</h3>
            <p class="card-text">鉄観音は中国茶のひとつで、フルーティで芳醇な香りが特徴です。烏龍茶の1つに分類されます。</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/image4.jpg" alt="抹茶">
          <div class="card-body">
            <h3 class="card-title">抹茶</h3>
            <p class="card-text">おなじみの抹茶は緑茶の一種。茶の葉を蒸してから乾燥させ、粉末状にしたものをお湯で練ったものです。様々なトッピングと相性抜群。</p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="#" class="btn">もっと見る</a>
      </div>
    </article>
    <article>
      <h2>ACCESS</h2>
      <div class="flexbox table">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.6952565460024!2d139.6634918154422!3d35.70911613604925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f290b2ddee83%3A0xe1b67e4ee0eff0be!2z5Lit6YeO44OW44Ot44O844OJ44Km44Kn44Kk!5e0!3m2!1sja!2sjp!4v1569156136427!5m2!1sja!2sjp"
          width="300" height="300" frameborder="0" style="border:0;margin-right: 1rem;" allowfullscreen=""></iframe>
        <div>
          <p>〒164-0001<br>東京都中野区中野5丁目52 中野ブロードウェイ2F</p>
          <p>中野駅北口から徒歩5分</p>
        </div>
      </div>
    </article>
  </div>
</main>

<?php get_footer(); ?>