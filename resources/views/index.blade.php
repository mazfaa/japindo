<x-master>
  <!-- Careousel -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
      </button>

      <button type="button" data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="1" aria-label="Slide 2"></button>

      <button type="button" data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="2" aria-label="Slide 3"></button>

        <button type="button" data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="3" aria-label="Slide 4"></button>

        <button type="button" data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner position-relative">
      <div class="carousel-item carousel-item-1 active"></div>
      <div class="carousel-item carousel-item-2"></div>
      <div class="carousel-item carousel-item-3"></div>
      <div class="carousel-item carousel-item-4"></div>
      <div class="carousel-item carousel-item-5"></div>

      <div class="careousel-text position-absolute text-white" 
        style="padding-left: 9em; margin-top: 10em;">
        <span style="font-size: 24px; font-weight: 400; 
          margin-bottom: 20px; display: block;">Pendidikan & Pelatihan Kerja</span>

        <h1 style="font-size: 54px; font-weight: 900; 
          line-height: 1.2; margin-bottom: 15px;">
            Ayo Ikutan Program <br /> <span style="color: rgb(7, 59, 101); background: white;">Magang</span> ke Jepang
        </h1>
        
        <p style="font-size: 20px; margin-bottom: 40px; 
        font-weight: 400; line-height: 1.5;">
          Memperkenalkan Bahasa, Budaya Jepang dan Magang, bekerja <br /> 
          di Jepang yang diajarkan oleh guru kompeten dan bepengalaman.
        </p>

        <button class="btn text-white" style="background: rgb(7, 59, 101);">Daftar Sekarang</button>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" 
      data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" 
      data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- /Careousel -->

  <div class="container mt-5">
    <!-- Reason -->
    <section class="mb-5">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h3 style="color:rgb(7, 59, 101);">Why Choose Us</h3>
          <hr class="w-25 text-center mx-auto" style="border-bottom: 1.5px solid rgb(7, 59, 101);" />
        </div>
      </div>

      <div class="row mx-auto">
        <div class="col-4">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-person-vcard" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Guru Berpengalaman</h6>
              <p class="card-text" style="font-size: 13px">Dibimbing oleh pengajar yang mempunyai kemampuan di level N2.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-lightbulb" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Pelatihan Fisik & Mental</h6>
              <p class="card-text" style="font-size: 13px">Program pelatihan yang meliputi fisik, mental dan spiritual yang terintegrasi.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-graph-up-arrow" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Partner Perusahaan</h6>
              <p class="card-text" style="font-size: 13px">Meliputi banyak partner perusahaan di jepang (perusahaan elektronik, manufactur, dll) </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Reason -->
  </div>

  <!-- About -->
  <section class="mt-5 text-white" style="background: rgb(7, 59, 101); width: 100%; padding: 8em 6em; padding-bottom: 4em;">
    <div class="row">
      <div class="col-6">
        <div>
          <img src="{{ asset('assets/img/about/about.jpg') }}" alt="About" style="height: 387px;" />
        </div>
      </div>

      <div class="col-6">
        <h2 class="mb-4" style="font-size: 40px; font-weight: 900;">A COMPREHENSIVE ABOUT ICHIHARA JAYA CIANJUR</h2>

        <p class="mb-4" style="line-height: 1.5; font-size: 17px; font-weight: 400;">Yayasan Lembaga Pelatihan Kerja Ichihara Jaya Cianjur adalah founder group dari Lembaga Pelatihan Kerja JAPINDO Karawang (PT. JAI) yang merupakan Lembaga Penyelenggara Pemagangan Luar Negeri (SO) yang keduanya telah memiliki izin sending organisasi dibawah naungan Ditjen Binalattas Kementerian Ketenagakerjaan RI.</p>

        <p class="mb-4" style="line-height: 1.5; font-size: 17px; font-weight: 400;">Lembaga Pelatihan Kerja Ichihara Jaya Cianjur bergerak dalam bidang jasa pengembangan Sumber Daya Manusia dan pengiriman tenaga magang ke Jepang. Lembaga Pelatihan Kerja di bawah naungan PT JAI ini telah memiliki Izin Penyelenggaraan Pemagangan di Luar Negeri :</p>

        <p>Izin Kementrian Ketenagakerjaan Republik Indonesia DIRJEN BINALATTAS. No. KEP. 239/LATTAS/VII/2018. <br /> <br /> No. Lisensi : 12.32.05.10.22. <br /> No. SK KEMENKUMHAM : AHU-0028298.AH.01.04. <br /> Tahun 2021</p>
      </div>
    </div>
  </section>
  <!-- /About -->

  <!--  -->
  <section style="width: 100%; padding: 8em 6em;">
    <div class="row">
      <div class="col-6">
        <h2 class="mb-4" style="font-size: 40px; font-weight: 900;">The Best Manpower Agency</h2>

        <p class="mb-4" style="line-height: 1.5; font-size: 17px; font-weight: 400;">Menjunjung tinggi nilai keagamaan, dimana memupuk jiwa agamis yang kuat agar menjadi individual yang tangguh dan tidak lupa akan penciptanya.</p>

        <p class="mb-4" style="line-height: 1.5; font-size: 17px; font-weight: 400;">Melatih jiwa sosialisasi yang tinggi, di zaman yang serba modern ini, sosialisasi adalah hal yang sangat penting dimana seorang pemagang harus dapat mempunyai jiwa sosial agar dapat menjadi sebuah pionir bangsa yang berkualitas.</p>
      </div>

      <div class="col-6">
        <div class="text-end">
          <img src="{{ asset('assets/img/section/1.jpg') }}" alt="The best manpower agency" style="height: 387px;" />
        </div>
      </div>
    </div>
  </section>
  <!-- / -->

  <!-- Statistics -->
  <div class="container">
    <section>
      <div class="row">
        <div class="col-3">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">576</h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Siswa Berangkat</h6>
            </div>
          </div>
        </div>
  
        <div class="col-3">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">5</h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Tahun Eksistensi</h6>
            </div>
          </div>
        </div>
  
        <div class="col-3">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">200</h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Perusahaan</h6>
            </div>
          </div>
        </div>
  
        <div class="col-3">
          <div class="card text-center border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">30</h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Guru Berpengalaman</h6>
            </div>
          </div>
        </div>
    </section>
  </div>
  <!-- /Statistics -->

  <!--  -->
  <section style="width: 100%; padding: 8em 6em;">
    <div class="row">
      <div class="col-6">
        <div>
          <img src="{{ asset('assets/img/section/2.jpg') }}" alt="" style="height: 387px;" />
        </div>
      </div>

      <div class="col-6">
        <h2 class="mb-4" style="font-size: 36px; font-weight: 900;">Pelatihan Manpower Modern</h2>
        <p class="mb-4" style="color: #777; font-size: 15px; font-weight: 400; margin-top: -1.3em;">Mempersiapkan Manpower di Era Globalisasi</p>

        <p class="mb-4" style="line-height: 1.5; font-size: 16px; font-weight: 400;">Seorang pemagang adalah pelajar yang harus mempelajari semua aspek yang akan di pelajarinya di dunia kerja sebenarnya.</p>

        <p class="mb-4" style="line-height: 1.5; font-size: 16px; font-weight: 400;">Dengan memupuk jiwa dan tujuan pembelajar yang open minded, maka seorang pemagang harus tahu akan tujuannya yaitu "Mempelajari teknologi yang ada di Jepang untuk diaplikasikan dan mengkontribusikannya untuk kemajuan bangsa Indonesia."</p>

        <p>Dengan posisi Jepang yang sangat maju negaranya, pastilah kita harus memanfaatkan proses pemagangan dengan sebaik baiknya, maka dari itu Japindo adalah fasilitator yang tepat untuk memenuhi semua tantangan tersebut.</p>
      </div>
    </div>
  </section>
  <!-- / -->

  <div class="container" style="margin-bottom: 7em;">
    <!-- Facility -->
    <section class="mb-5">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h3 style="color:rgb(7, 59, 101);">Fasilitas</h3>
          <hr class="w-25 text-center mx-auto" style="border-bottom: 1.5px solid rgb(7, 59, 101);" />
        </div>
      </div>

      <div class="row mx-auto">
        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-house-door" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Asrama</h6>
              <p class="card-text" style="font-size: 13px">Program pelatihan dilengkapi dengan asrama sehingga proses pembelajaran lebih fokus dan termonitor dengan baik.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-inbox" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Catering</h6>
              <p class="card-text" style="font-size: 13px">Siswa tidak perlu bingung mencari makan selama bimbingan dikarenakan program pelatihan kami sudah termasuk catering.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-shield-check" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Pelatihan Akurat</h6>
              <p class="card-text" style="font-size: 13px">Dibimbing oleh pengajar yang rata-rata N2, siswa japindo sudah pasti mendapatkan hasil yang berkualitas.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-auto mt-4">
        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-building" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Perusahaan Ternama</h6>
              <p class="card-text" style="font-size: 13px">Kami bekerjasama dengan banyak perusahaan jepang ternama sehingga siswa siap menjadi pribadi yang siap bekerja secara professional.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="fa-solid fa-mosque" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Program Keagamaan yang Kuat</h6>
              <p class="card-text" style="font-size: 13px">Program pendidikan kami diimbangi oleh pendidikan keagamaan sehingga siswa akan menjadi pribadi yang unggul secara fisik, mental dan spiritual.</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card text-start border-0 mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title fs-2 mb-3">
                <i class="bi bi-wallet2" style="color:rgb(7, 59, 101);"></i>
              </h5>
              <h6 style="font-size: 14px" class="card-subtitle mb-2 text-body-secondary">Biaya Terjangkau</h6>
              <p class="card-text" style="font-size: 13px">Program pelatihan kami cukup terjangkau dengan tetap memberikan fasilitas terbaik untuk para peserta didik.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Facility -->

    <!-- Contact -->
    <section class="mt-5">
      <div class="row">
        <div class="col-6 mt-4">
          <h3 class="mt-5 text-center" style="color: rgb(7, 59, 101);">Hubungi Kami</h3>
  
          <div class="card mt-5 shadow-sm mx-auto" style="max-width: 30rem;">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <small>
                    <i class="bi bi-telephone me-2"></i> 0877-1467-7243
                  </small>
                </li>

                <li class="list-group-item">
                  <small>
                    <i class="bi bi-instagram me-2"></i> lpkichiharacianjur
                  </small>
                </li>

                <li class="list-group-item">
                  <small>
                    <i class="bi bi-envelope me-2"></i> lpkichiharacianjur@gmail.com
                  </small>
                </li>

                <li class="list-group-item">
                  <i class="bi bi-geo-alt me-1"></i>
                  <small>Jln. Raya Bandung, Kp. Cisirih RT/RW 03/04, Desa Sukasirna, Kec. Sukaluyu, Kab. Cianjur, Jawa Barat 43284</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col-6 mt-4">
          <h3 class="mt-5 text-center" style="color: rgb(7, 59, 101);">Kirim Pesan</h3>
  
          <form class="mt-5" method="post">
            @csrf
  
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" id="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" autocomplete="off" />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-sm text-white" style="background: rgb(7, 59, 101);"><i class="bi bi-send"></i> Submit</button>
          </form>
        </div>
      </div>
    </section>
    <!-- /Contact -->

    <!-- Map -->
      <section style="margin-top: 8em">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.10272480426!2d107.2203271!3d-6.7971243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e685532d00431ad%3A0x72f3fded15093060!2sLPK%20ICHIHARA%20JAYA%20CIANJUR!5e0!3m2!1sen!2sid!4v1693536653577!5m2!1sen!2sid" style="border: 0; height: 20em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
    <!-- /Map -->
  </div>
</x-master>