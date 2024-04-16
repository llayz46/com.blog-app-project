</main>

<?php ?>

<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <?php foreach ($mainMenu as $key => $menuItem) { 
      if(!array_key_exists('exclude', $menuItem)) { ?>      
        <li class="nav-item"><a href="<?=$key?>" class="nav-link px-2 text-body-secondary"><?=$menuItem['menu_title']?></a></li>
    <?php } } ?>
  </ul>
  <p class="text-center text-body-secondary">© 2024 LLAYZ</p>
</footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>