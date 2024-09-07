<?php require ('partials/head.php') ?>
<body class="h-full">
<div class="min-h-full">


 <?php require ('partials/nav.php') ?>
 <?php require ('partials/banner.php') ?>

 <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <p>
            <a href="/notes" class="text-blue-500 hover:underline">go back ...</a></br>
            <?= $note['body'] ?>
          </p>
      </div>

  </main>

  
</div>

</body>
</html>