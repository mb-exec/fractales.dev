<?php require __ROOT__ . '/app/templates/parts/contacts.php' ?>
</main>
  
  <footer class="ftr text-ls">
    <div class="container">
      <div class="ftr__inner">
        <div class="ftr__top">
          <a href="<?php echo $site_url ?>" class="ftr__logo">
            <img loading="lazy" src="<?php echo $site_url ?>/assets/img/logo.svg" alt="Лого" class="ftr__logo-img">
          </a>

          <a href="mailto:<?php echo $email ?>" class="ftr__email text-ls">
            <?php echo $email ?>
          </a>
        </div>
        
        <ul class="ftr__contacts text-ls">
          <?php foreach ($addresses as $address) : 
            $address_tel = $address['tel'];
            $address_tel_link = str_replace(' ', '', $address_tel);;
          ?>
            <li class="ftr__contact">
              <b class="ftr__contact-city"><?php echo $address['city'] ?></b>
              <span class="ftr__contact-street"><?php echo $address['street'] ?></span>
              <a href="tel:<?php echo $address_tel_link ?>" class="ftr__contact-tel"><?php echo $address_tel ?></a>
            </li>
          <?php endforeach ?>
        </ul>

        <div class="ftr__bottom">
          <a href="<?php echo $site_url ?>/policy.pdf" class="ftr__policy">privacy policy</a>
          <p class="ftr__rights">© fractales development, <?php echo getdate()['year'] ?> All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>