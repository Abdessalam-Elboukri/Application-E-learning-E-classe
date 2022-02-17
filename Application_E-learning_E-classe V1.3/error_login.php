<?php  if (count($errors) > 0) : ?>
        <?php foreach ($errors as $error) : ?>
        <div class="d-flex align-items-center mb-1 rounded-2 p-2 w-100" style="background: #FFC0D3; height:35px;" >
            <i class="bi bi-exclamation me-1 fs-5 text-danger"></i><p class="text-muted m-0" style="font-size: 13px;"><?php echo $error ?></p>
          </div>
        <?php endforeach ?>
<?php  endif ?>
