
@extends('layouts.master',
[
    'title' => 'Industries We Serve | Prakhar Consulting Group',
    'keyword' => 'Industries We Serve, Information Technology (IT) and Telecom, Media and Entertainment, Education and Edtech, Retail and E-commerce, Fast-Moving Consumer Goods',
    'description' => 'Explore the diverse industries we serve at Prakhar Consulting Group, providing tailored recruitment solutions for each sector'
])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container text-center">
                <p class="page-title text-white banner_text text-center">Industries We Serve</p>
            </div>
        </div>
    </div> 
</div>

<main class="wrapper">
    <section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title text-center">
                        <h1 class="text-center">Connecting Talent to Industry Needs for Maximum Impact</h1>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background1">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/IT-telecome.png') }}" title="IT Telecom" alt="IT Telecom">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center "><span class="whatwedotitile">IT & Telecom</span></p>
                            <p class="text-center">Rapid advancements in Artificial Intelligence (AI), Cloud Computing, and 5G moving towards 6G require adaptable, tech-savvy talent. We connect businesses with specialists skilled in digital transformation, ensuring competitiveness in this fast-paced sector.</p>
                        </div>
                    </div>
    
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background2">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/Media-Entertainment.png') }}" title="Media Entertainment" alt="Media Entertainment">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center"><span class="whatwedotitile">Media & Entertainment</span></p>
                            <p class="text-center">The shift to digital platforms demands versatile professionals skilled in content creation, digital marketing, and data analytics. We help businesses secure creative talent to lead in a dynamic and competitive market.</p>
                        </div>
                    </div>
    
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background1">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/Education-EdTech.png') }}" title="Education EdTech" alt="Education EdTech">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center"><span class="whatwedotitile">Education & EdTech</span></p>
                            <p class="text-center">As digital learning grows, so does the demand for professionals skilled in curriculum design, e-learning platforms, and AI-based learning tools. We help organisations build teams that enhance education for a digital age.</p>
                        </div>
                    </div>
    
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background2">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/Retail-E-Commerce.png') }}" title="Retail E Commerce" alt="Retail E Commerce">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center mt-2"><span class="whatwedotitile">Retail & E-Commerce</span></p>
                            <p class="text-center">From inventory management to AI-driven customer insights, we connect businesses with talent skilled in optimising digital platforms and driving customer engagement, ensuring seamless retail experiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background1">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/E-Governance.png') }}" title="E Governance" alt="E Governance">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center mt-2"><span class="whatwedotitile">E-Governance</span></p>
                            <p class="text-center">E-Governance recruitment requires the best talent to drive digital transformation, public service efficiency, and innovation. We source skilled professionals in IT, public policy, and project management, ensuring seamless execution of e-governance projects for impactful community development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background2">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/fmcg.png') }}" title="FMCG" alt="FMCG">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center mt-2"><span class="whatwedotitile">FMCG</span></p>
                            <p class="text-center">FMCG companies rely on innovation, marketing, and logistics experts to manage product turnover and respond to consumer trends. We connect businesses with talent that ensures operational efficiency and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background1">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/Manufacturing.png') }}" title="Manufacturing" alt="Manufacturing">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center mt-2"><span class="whatwedotitile">Manufacturing</span></p>
                            <p class="text-center">From addressing workforce shortages to managing automation, we connect businesses with skilled professionals who ensure operational efficiency and adapt to advancements in manufacturing technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card industries-we-serve shadow">
                        <div class="text-center heading_background2">
                            <img class="py-3" src="{{ asset('assets/img/PCGImages/industry-we-serve/automobile.png') }}" title="Automobile" alt="Automobile">
                        </div>
                        <div class="mt-2 px-2">
                            <p class="text-center mt-2"><span class="whatwedotitile">Automobiles</span></p>
                            <p class="text-center">As the industry shifts from traditional transmissions toward Hybrids & EVs and other sustainable technology types, we have geared up to specialise in sourcing talent skilled in engineering, software integration, and sustainable innovation to drive progress.</p>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </div>
    </section>

     {{-- <section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">

        <div class="container">
            <div class="text-center heading-title">
                <h2>IT & Telecom</h2>
            </div>
             <div class="row align-items-center">
              <div class="col-md-6">
                <p>Rapid advancements in Artificial Intelligence (AI), Cloud Computing, and 5G moving towards 6G require adaptable, tech-savvy talent. We connect businesses with specialists skilled in digital transformation, ensuring competitiveness in this fast-paced sector.</p>
              </div>
              <div class="col-md-6">
                Visual (Right): A stylized tech lab with professionals working on 5G infrastructure, cloud servers, and AI systems. Icons for connectivity (Wi-Fi, networks) complement the theme.
              </div>
        </div>
       
     </section>

     <section class="section" >
        <div class="container">
            <div class="text-center heading-title">
                <h2>Media & Entertainment</h2>
            </div>
             <div class="row align-items-center">
              <div class="col-md-6">
               Visual (Left): A modern Editing studio setup with Editors editing in a collaborative platform and social media dashboards. Add digital analytics charts to reflect industry transformation.
              </div>
              <div class="col-md-6">
                       <p>The shift to digital platforms demands versatile professionals skilled in content creation, digital marketing, and data analytics. We help businesses secure creative talent to lead in a dynamic and competitive market.</p>
              </div>
             </div>
        </div>
     

  </section>


  <section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));">
    <div class="container">
        <div class="text-center heading-title1">
            <h2 class="text-white">Education & EdTech</h2>
          </div>
         <div class="row align-items-center">
          <div class="col-md-6">
              <p class="text-white">As digital learning grows, so does the demand for professionals skilled in curriculum design, e-learning platforms, and AI-based learning tools. We help organisations build teams that enhance education for a digital age.</p>
          </div>
          <div class="col-md-6">
              Visual (Right): A virtual classroom scene with educators and AI tools like digital whiteboards, e-learning apps, and smart devices. Students interacting with tech completes the look.
      
          </div>
    </div>
   
</section>

<section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h2>Retail & E-Commerce</h2>
        </div>
         <div class="row align-items-center">
      
          <div class="col-md-6">
              Visual (Left): A digital storefront with shopping carts, analytics dashboards, and professionals managing omnichannel marketing strategies. Icons for logistics and CRM enhance this.
          </div>
          <div class="col-md-6">
              <p>From inventory management to AI-driven customer insights, we connect businesses with talent skilled in optimising digital platforms and driving customer engagement, ensuring seamless retail experiences.</p>
          </div>
    </div>
  
</section>

<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">

    <div class="text-center heading-title">
       <h2>E-Governance</h2>
   </div>
    <div class="row align-items-center">
 
     <div class="col-md-6">
        <p>E-Governance recruitment requires the best talent to drive digital transformation, public service efficiency, and innovation. We source skilled professionals in IT, public policy, and project management, ensuring seamless execution of e-governance projects for impactful community development.</p>
    </div>
     <div class="col-md-6">
            Visual (Right): A digital government service center with citizens accessing e-services on touchscreens and kiosks, while a team of professionals in the background analyzes digital dashboards displaying data on public service delivery, citizen engagement, and IT infrastructure metrics.
    </div>
 </section>



<section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h2>FMCG</h2>
        </div>
         <div class="row align-items-center">
          <div class="col-md-6">
              <p>FMCG companies rely on innovation, marketing, and logistics experts to manage product turnover and respond to consumer trends. We connect businesses with talent that ensures operational efficiency and customer satisfaction.</p>
          </div>
          <div class="col-md-6">
              Visual (Right): A warehouse setup showing fast-moving goods being sorted, with professionals analysing marketing dashboards and logistics data.
      
          </div>
    </div>
</section>

<section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));">
    <div class="container">
        <div class="text-center heading-title1">
            <h2 class="text-white">Manufacturing</h2>
        </div>
         <div class="row align-items-center">
          <div class="col-md-6">
             Visual (Right): An automated factory floor with robotics, professionals managing control systems, and quality assurance stations. Icons for automation and efficiency complete this.
         </div>
         <div class="col-md-6">
             <p class="text-white">From addressing workforce shortages to managing automation, we connect businesses with skilled professionals who ensure operational efficiency and adapt to advancements in manufacturing technology.</p>
         </div>
    </div>
</section>

 <section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h2>Automobiles</h2>
        </div>
         <div class="row align-items-center">
          <div class="col-md-6">
             <p>As the industry shifts from traditional transmissions toward Hybrids & EVs and other sustainable technology types, we have geared up to specialise in sourcing talent skilled in engineering, software integration, and sustainable innovation to drive progress.</p>
         </div>
          <div class="col-md-6">
             Visual (Right): A modern EV assembly line with engineers working on battery systems and autonomous tech integration. Include design blueprints for a futuristic feel.
         </div>
    </div>
</section> --}}
</main>
@endsection
