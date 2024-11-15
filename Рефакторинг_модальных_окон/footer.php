<section class="cta">
    <div class="bg-grey section-cta">
      <img src="img/cta-bg.png" alt="cta" class="cta-image">
      <div class="cta-form-wrapper container">
        <form action="\handler.php" method="POST" class="cta-form">
          <h2  class="cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input 
                id="user-name" 
                type="text" 
                class="input"
                name="username"
                placeholder=" "
                maxlength="100"
                required
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input 
                id="user-phone" 
                type="tel"
                name="userphone"
                class="input phone-mask" 
                placeholder=" "
                maxlength="30"
                required
                />
                <label class="input-group-label" for="user-phone">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
             <div class="cta-form-footer">
              <button type="submit" class=" cta-button cta-form-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#shield"></use>
                 </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
             </div>
             <!-- /.cta-form-footer -->
        </form>
        <!-- /.cta-form -->
      </div>
      <!-- /.cta-form-wrapper -->
    </div>
    <!-- /.bg-grey -->
   </section>
   <!-- /.cta -->
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo ">
            <use href="img/sprite.svg#logo"></use>
           </svg>
           <a href="tel:+79996861014" class="footer-phone">
            +7 (999) 686-10-14
          </a>
          <div class="footer-info">
            <svg class="footer-map-icon"  width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
             </svg>
             <address class="footer-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
            
          </div>
          <!-- /.mobile-info -->
          <div class="footer-info">
          <svg class="footer-mail-icon"  width="24" height="24">
            <use href="img/sprite.svg#mail"></use>
           </svg>
           <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
            a.dragunov@tdaliance.ru
          </a>
        </div>
        <!-- /.mobile-info -->
        <div class="footer-social">
          <a href="https://vk.com/feed" class="footer-social-link-vk">
            <svg class="network-icon"  width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
             </svg>
        </a>
          <a href="https://www.instagram.com/" class="footer-social-link-inst">
            <svg class="network-icon"  width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
             </svg>
          </a>
        </div>
        <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div><!-- /.container-->
      <hr  class="	footer-seporator">
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item footer-list1">
                <a href="/product-avtohim.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item footer-list2">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item footer-list3">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item footer-list4">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item footer-list5">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item footer-list6">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title mark-title">Собственные марки</h2>
            <ul class="footer-menu-list mark-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link mark-link1">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link mark-link2">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.footer-bottom -->
      </div>
      <hr  class="footer-seporator">
      <div class="container">
        <div class="footer-wrapper">
         <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.</p>
              <a class="footer-policy" href="#">Политики конфиденциальности</a>
         </div>
         <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <span class="made-in2">Дизайн и разработка:</span>
              <svg class="made-in-icon" width="52" height="11">
                <use href="img/sprite.svg#ruso"></use>
               </svg>
          </div>
          <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <!-- /.footer -->
     <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="close-icon"  width="30" height="30">
            <use href="img/sprite.svg#close"></use>
           </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-vertical">
            <div class="input-group modal-input-group">
              <input 
              id="modal-user-name" 
              type="text" 
              class="input modal-input"
              name="username"
              placeholder=" "
              required
              >
              <label 
              class="input-group-label modal-input-label"
               for="modal-user-name"
               >Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input 
              id="modal-user-phone" 
              type="tel" 
              class="input modal-input phone-mask" 
              name="userphone"
              placeholder=" "
              required
              >
              <label 
              class="input-group-label modal-input-label" 
              for="modal-user-phone"
              >Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
           <div class="modal-form-footer">
            <button type="submit" class="modal-button modal-form-button">Отправить заявку</button>
            <div class="modal-notify">
              <svg class="modal-notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
               </svg>
              <p class="modal-notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
           </div>
           <!-- /.cta-form-footer -->
        </form>
      </div>
     </div>
     <div class="modal" id="alert-modal">
      <div class="modal-dialog alert-dialog">
        <img src="img/thanks_illu.png" alt="" class="alert-image">
        <h2 class="modal-title alert-title">Спасибо за заявку!</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon"  width="30" height="30">
            <use href="img/sprite.svg#close"></use>
           </svg>
        </a>
        <p class="modal-text alert-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <a class="alert-link" href="/index.php">
        <button type="submit" class="modal-button modal-form-button thanks-button">Вернуться на главную</button>
        </a>
      </div>
     </div>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/just-validate.production.min.js"></script>
<script src="js/alliance.js"></script>
</body>
</html>