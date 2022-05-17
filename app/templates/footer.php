<?php require './app/templates/parts/contacts.php' ?>
</main>
  
  <footer class="ftr text-ls">
    <div class="container">
      <div class="ftr__inner">
        <p class="ftr__rights">© fractales agency, <?php echo getdate()['year'] ?></p>
        
        <div class="ftr__contacts">
          <a href="mailto:<?php echo $email ?>" class="ftr__contacts-item ftr__contacts-item--email">
            <?php echo $email ?>
          </a>
          <span class="ftr__contacts-item ftr__contacts-item--address">
            <?php echo $address ?>
          </span>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>