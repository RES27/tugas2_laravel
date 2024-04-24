<!-- ======= Values Section ======= -->

<section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">

        <p>Job List</p>
      </header>

      <div class="row">
        @foreach ($data as $job)

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="{{ $job['img']}}" class="img-fluid" alt="">
            <h3>{{ $job['name']}}</h3>
            <p>{{ $job['Deskripsi']}}</p>
          </div>
        </div>
        @endforeach
      </div>


    </div>

  </section><!-- End Values Section -->

