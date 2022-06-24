<main class="container mx-auto">
  <img class="mx-auto" src="<?= base_url('assets/') ?>img/welcomeImage.png" alt="Welcome Image">
  <section class="bg-white px-4 py-12 my-12 w-full rounded-3xl -translate-y-12 ">
    <div class="flex flex-col">
      <img class="mx-auto h-10 w-10" src="<?= base_url('assets/') ?>img/Schedule.png">
      <h1 class="my-3 text-center md:text-lg font-bold">Pendaftaran</h1>
      <h3 class="text-center md:text-lg">Pilih poli untuk melakukan pendaftaran</h1>
    </div>
    <div class="flex flex-wrap justify-evenly items-center">
      <?php foreach($dbResult as $d) { ?>
        <?php if(!empty($this->session->userdata('role'))) { ?>
          <a href="<?= base_url('poli/daftar/') ?><?= $d->id_poli ?>" class="bg-white shadow-xl m-4 rounded-lg hover:scale-110">
          <img class="w-52 h-32 md:w-56 md:h-28" src="<?= base_url('assets/') ?>img/poliImage/<?= $d->poli_image ?>" />
        </a>
        <?php } else { ?>
          <a href="<?= base_url('auth/') ?>login" class="bg-white shadow-xl m-4 rounded-lg hover:scale-110">
          <img class="w-52 h-32 md:w-56 md:h-28" src="<?= base_url('assets/') ?>img/poliImage/<?= $d->poli_image ?>" />
        </a>
        <?php } ?>
      <?php } ?>
    </div>
  </section>
</main>