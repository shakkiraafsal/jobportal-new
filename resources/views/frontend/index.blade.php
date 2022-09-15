 @section("title","SGOU|HOME")
@extends("frontendlayouts.theme")
  @section("maincontent")


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
        


            <!-- Customers Card -->
             <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Slides with controls -->
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/backend/assets/img/slide1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/backend/assets/img/slide2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/backend/assets/img/slide3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with controls -->

            </div>
          </div>


        </div>
            <!-- Reports -->
           

            <!-- Recent Sales -->
         

            <!-- Top Selling -->
           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-4">

          <!-- Recent Activity -->
        
          

           
              
           
             <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show " style="margin-top: 0px;padding: 5px; border-bottom-right-radius: 20px;">Latest Updates</div>

              <div class="activity" style="height: 321px;">
 <marquee  direction="up" scrollamount="3" style="color: blueviolet;"  onmouseover="this.stop();" onmouseout="this.start();" height="100%" >
This is a sample scrolling text that has scrolls texts to down.
</marquee>
  


              </div>

           
        

       

    
          <!-- News & Updates Traffic -->
   

        </div><!-- End Right side columns -->
 <div class="col-lg-12">

              <p style=" text-align: justify;">
                      Sreenarayanaguru Open University, the State University for education and training in blended format, was established by the Govt. of Kerala in September 2020 vide the government ordinance No. 45 of 2020. Having been established as the 15th University in the State of Kerala the Sreenarayanaguru Open University aims at strengthening the structural dynamics of academic cooperation for ensuring quality inclusive education for all regardless of age, creed, gender, and religion. The jurisdiction of the University is limited to the political boundaries of the state of Kerala. The university was officially dedicated by Sri. Pinarayi Vijayan, the Hon. Chief Minister of Kerala on 2nd of October, 2020. In pursuance of the legal procedures, the Sreenarayanaguru Open University was accorded recognition under the section 2(f) and 22 of the University Grant Commission Act of 1956. The State Legislature of Kerala has unanimously enacted the Sreenarayanaguru Open University Act in January, 2021 (Act 1 of 2021).
                    </p>

            </div><!-- End Reports -->
      </div>
    </section>
    @endsection