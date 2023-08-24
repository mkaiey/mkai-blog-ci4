<?php echo $konten ?>
<div class="my-5">
  <?php
  $session = \Config\Services::session();
  if ($session->getFlashdata('warning')) {
    ?>
    <div class="alert alert-warning">
      <ul>
        <?php
        foreach ($session->getFlashdata('warning') as $val) {
          ?>
          <li>
            <?php echo $val ?>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
    <?php
  }
  if ($session->getFlashdata('success')) {
    ?>
    <div class="alert alert-success">
      <?php echo $session->getFlashdata('success') ?>
    </div>
    <?php
  }
  ?>
  <!-- * * * * * * * * * * * * * * *-->
  <!-- * * SB Forms Contact Form * *-->
  <!-- * * * * * * * * * * * * * * *-->
  <!-- This form is pre-integrated with SB Forms.-->
  <!-- To make this form functional, sign up at-->
  <!-- https://startbootstrap.com/solution/contact-forms-->
  <!-- to get an API token!-->
  <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="" method="POST">
    <div class="form-floating">
      <input class="form-control" id="name" type="text" name="kontak_nama"
        value="<?php echo (isset($kontak_nama)) ? $kontak_nama : "" ?>" placeholder="Masukkan nama lengkap..."
        data-sb-validations="required" />
      <label for="name">Nama Lengkap</label>
      <div class="invalid-feedback" data-sb-feedback="name:required">
        Nama lengkap harus diisi.
      </div>
    </div>
    <div class="form-floating">
      <input class="form-control" id="email" type="email" name="kontak_email"
        value="<?php echo (isset($kontak_email)) ? $kontak_email : "" ?>" placeholder="Masukkan alamat email..."
        data-sb-validations="required,email" />
      <label for="email">Alamat email</label>
      <div class="invalid-feedback" data-sb-feedback="email:required">
        Alamat email harus diisi.
      </div>
      <div class="invalid-feedback" data-sb-feedback="email:email">
        Maaf... email tidak valid..!
      </div>
    </div>
    <div class="form-floating">
      <input class="form-control" id="phone" type="tel" name="kontak_telp"
        value="<?php echo (isset($kontak_telp)) ? $kontak_telp : "" ?>" placeholder="Masukkan no. telepon..."
        data-sb-validations="required" />
      <label for="phone">Telepon/HP</label>
      <div class="invalid-feedback" data-sb-feedback="phone:required">
        Telepon harus diisi.
      </div>
    </div>
    <div class="form-floating">
      <textarea class="form-control" id="message" name="kontak_pesan" placeholder="Masukkan isi pesan..."
        style="height: 12rem"
        data-sb-validations="required"><?php echo (isset($kontak_pesan)) ? $kontak_pesan : "" ?></textarea>
      <label for="message">Pesan</label>
      <div class="invalid-feedback" data-sb-feedback="message:required">
        Pesan harus diisi.
      </div>
    </div>
    <br />
    <!-- Submit success message-->
    <!---->
    <!-- This is what your users will see when the form-->
    <!-- has successfully submitted-->
    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">
        <div class="fw-bolder">Pesan berhasil dikirim..!</div>
        Silahkan tunggu balasan dari kami..
        <!-- <br />
        <a
          href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
      </div>
    </div>
    <!-- Submit error message-->
    <!---->
    <!-- This is what your users will see when there is-->
    <!-- an error submitting the form-->
    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">
        Maaf.. Pesan gagal terkirim..!
      </div>
    </div>
    <!-- Submit Button-->
    <!-- <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">
            Send
        </button> -->
    <input class="btn btn-primary text-uppercase" type="submit" name="submit" value="KIRIM" />
  </form>
</div>