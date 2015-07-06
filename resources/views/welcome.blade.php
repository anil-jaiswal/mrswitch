@extends('pages.default')

@section('content')

<div class="page-wrapper">
  <!-- header-6 -->
  @include('partials.nav')

  <section class="header-6-sub bg-midnight-blue">
      <div class="background">&nbsp;</div>
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <h2 style="color:white;"><b>Book a service, anytime anywhere.</b></h2>
                  <div class="row">
                      <p class="lead col-sm-10 col-sm-offset-1" style="color:#fff">
                          Now find an electrician quickly, at the comfort of your own!
                      </p>
                  </div>
              </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                  <div class="signup-form">
                    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="check_submitted()"></iframe>
                    <form action="https://docs.google.com/forms/d/1DvbZ4M2oeFVsV3s1ODcUL52CvJrEH95arKwxoIFifHk/formResponse" method="POST" id="ss-form" target="hidden_iframe" onsubmit="submitted=true;">
                      <div class="clearfix">
                        <input placeholder="Name" type="text" name="entry.589106005" value="" class="form-control" id="entry_589106005" dir="auto" aria-label="Name  " aria-required="true" required="" title="">
                        <input placeholder="Phone" type="text" name="entry.1689824019" value="" class="form-control" id="entry_1689824019" dir="auto" aria-label="Phone Number  Please enter a valid number." aria-required="true" required="" pattern=".*^(?:\+91(?:-)?|0\d{2,4}-|0|)\d{7,10}$.*" title="Please enter a valid number.">
                        <input placeholder="Email" type="email" name="entry.1805097311" value="" class="form-control" id="entry_1805097311" dir="auto" aria-label="Email Address  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">                        
                        <input type="hidden" name="draftResponse" value="[,,&quot;4766546142149717159&quot;]">
                        <input type="hidden" name="pageHistory" value="0">
                        <input type="hidden" name="fbzx" value="4766546142149717159">
                        <button type="submit" class="btn btn-primary">Get Started</button>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Multi useful components</h3>
                      <p>
                          Startup Design Framework contains components and complex blocks which
                          can easily be integrated into almost any design. All of these components are made in
                          the same style.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img src="/img/ticket-green@2x.png" width="380" height="187" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Demo version</h3>
                      <p>
                          In this demo version of Startup Framework, we show you the structure of our framework.
                          The package includes few samples that can be used to create the design.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img width="380" height="179" alt="" src="/img/map@2x.png">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Twenty five awesome samples</h3>
                      <p>
                          The most important part of the Startup Framework is the samples.
                          The samples form a set of 25 usable pages or you can add new blocks from UI Kit.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img width="397" height="193" alt="" src="/img/ps-wire-imac@2x.png">
                  </div>
              </div>
          </div>
      </div>
  </section>

  @include('partials.footer')

</div>

@stop