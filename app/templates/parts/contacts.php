<section id="contacts" class="contacts sect" data-animation="appear-bottom">
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
                <a href="<?php echo $link ?>" class="socials__link" target="_blank"><?php echo $name ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </section>

      <section class="contacts__sect contact-form-sect">
        <h3 class="contacts__sect-title">CONTACT US</h3>

        <div class="contacts__sect-content contact-form-sect__form" data-type="form">
          <form id="contact-form" method="POST" class="contact-form text-ls">
            <input type="text" name="first_name" placeholder="First name" class="field field--fname">
            <input type="text" name="last_name" placeholder="Last name" class="field field--lname">
            <input type="email" name="email" placeholder="Email*" required class="field field--email">
            <input type="number" name="phone" placeholder="Phone number" class="field field--phone">

            <textarea name="msg" placeholder="Tell about your task" class="field field--msg"></textarea>

            <div class="attachments">
              <span class="attachments__preview">
                <span class="attachments__name"></span>
                <button class="attachments__remove" title="remove file" aria-label="remove attachment"></button>
              </span>
              <label class="file">
                <input type="file" name="file" class="file__input" accept=".png, .jpg, .jpeg, .pdf">
                <span class="file__field">Attach file</span>
              </label>
            </div>

            <div class="contact-form__bottom">
              <p class="contact-form__warning">By clicking the "send" button you consent to the processing of <a class="contact-form__warning-link" href="<?php echo $site_url ?>/policy/#information">personal data</a></p>

              <button class="contact-form__send btn text-ls frame-hover">
                Send 
                <span class="small-arrow"></span>
                <span class="frame-hover__top"></span>
                <span class="frame-hover__bottom"></span>
              </button>
            </div>
          </form>
        </div>

        <div class="contacts__sect-content contact-form-sect__message hidden" data-type="success">
          <strong class="contact-form-sect__message-title">Thank you!</strong>
          <p class="contact-form-sect__message-text text-ls">Your application has been sent, the information will be sent to you by mail.</p>
        </div>

        <div class="contacts__sect-content contact-form-sect__message hidden" data-type="error">
          <strong class="contact-form-sect__message-title contact-form-sect__message-title--orange">Failed to send your message!</strong>
          <p class="contact-form-sect__message-text text-ls">Something wrong, try one more time.</p>
          <button class="contact-form-sect__message-btn btn-hollow">Try again</button>
        </div>
      </section>
    </div>
  </div>
</section>