<section id="contacts" class="contacts sect">
  <div class="container">
    <h2 class="sect__title">Contacts</h2>

    <div class="contacts__inner text-ls">
      <section class="contacts__sect">
        <h3 class="contacts__sect-title">EMAIL</h3>

        <div class="contacts__sect-content">
          <a href="mail:<?php echo $email ?>" class="contacts__link"><?php echo $email ?></a>
        </div>
      </section>

      <section class="contacts__sect">
        <h3 class="contacts__sect-title">PHONE</h3>

        <div class="contacts__sect-content">
          <a href="mail:<?php echo $tel_link ?>" class="contacts__link"><?php echo $tel ?></a>
        </div>
      </section>

      <section class="contacts__sect">
        <h3 class="contacts__sect-title">SOCIALS</h3>

        <div class="contacts__sect-content">
          <ul class="socials">
            <?php foreach ( $socials as $name => $link ) : ?>
              <li class="socials__item">
                <a href="<?php echo $link ?>" class="socials__link"><?php echo $name ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </section>

      <section class="contacts__sect">
        <h3 class="contacts__sect-title">CONTACT US</h3>

        <div class="contacts__sect-content">
          <form action="" class="contact-form text-ls">
            <input type="text" name="first_name" placeholder="First name" class="field field--fname">
            <input type="text" name="last_name" placeholder="Last name" class="field field--lname">
            <input type="text" name="email" placeholder="Email*" required class="field field--email">
            <input type="text" name="phone" placeholder="Phone number" class="field field--phone">

            <textarea name="msg" placeholder="Tell about your task" class="field field--msg"></textarea>

            <label class="file">
              <input type="file" name="file" class="file__input">
              <span class="file__field">Attach file</span>
            </label>

            <div class="contact-form__bottom">
              <p class="contact-form__warning">By clicking the "send" button you consent to the processing of personal data</p>

              <button class="contact-form__send btn text-ls frame-hover">
                Send 
                <span class="small-arrow"></span>
                <span class="frame-hover__top"></span>
                <span class="frame-hover__bottom"></span>
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
</section>