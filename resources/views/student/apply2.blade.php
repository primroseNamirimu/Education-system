@extends('layouts.external')
@section('content')

<div class="container-fluid py-4">
  
<div class="row">
  <div class="col-12 text-center">
  
    <h3 class="mt-5">Build Your Application</h3>
    <h5 class="font-weight-normal opacity-6">This information will let us know more about you.</h5>
    <div class="multisteps-form mb-5">
      <!--progress bar-->
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto my-5">
          <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                    <span>About</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address">
                    <span>Course</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Academic Evidence</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="multisteps-form__form">
                <!--single form panel-->
                <div class="multisteps-form__panel js-active" data-animation="FadeIn">
                  <div class="row text-center mt-4">
                    <div class="col-10 mx-auto">
                      <h5 class="font-weight-normal">Let's start with the basic information</h5>
                      <p>Enter your bio data</p>
                    </div>
                  </div>
                  <div class="multisteps-form__content">
                    <div class="row mt-3">
                      <div class="col-12 col-sm-4">
                        <div class="avatar avatar-xxl position-relative">
                          <img src="../../assets/img/download.png" class="border-radius-md" alt="team-2">
                          <a href="javascript:;" class="btn btn-sm btn-icon-only bg-gradient-primary position-absolute bottom-0 end-0 mb-n2 me-n2">
                            <span class="material-icons text-xs top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image">
                              edit
                            </span>
                          </a>
                        </div>
                      </div>
                      <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                        <div class="input-group input-group-dynamic mb-4">
                          <label class="form-label">First Name</label>
                          <input type="text" required class="form-control multisteps-form__input">
                        </div>
                        <div class="input-group input-group-dynamic mb-4">
                          <label class="form-label">Last Name</label>
                          <input type="text" required class="form-control multisteps-form__input">
                        </div>  
                         <div class="input-group input-group-dynamic mb-4">
                          <label class="form-label">Other Names</label>
                          <input type="text" class="form-control multisteps-form__input">
                        </div>
                        <div class="input-group input-group-dynamic">
                          <label class="form-label">Email Address</label>
                          <input type="email" class="form-control multisteps-form__input">
                        </div>
                     
                        <div class="input-group input-group-static my-3">
                          <label>Date of birth</label>
                          <input type="date" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                       
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel" data-animation="FadeIn">
                  <div class="row text-center mt-4">
                    <div class="col-10 mx-auto">
                      <h5 class="font-weight-normal">What are you are you interested in doing?</h5>
                      <p>Select a school.</p>
                    </div>
                  </div>
                  <div class="multisteps-form__content">
                    <div class="row mt-4">
                      <div class="col-sm-3 ms-auto">
                        <input type="checkbox" class="btn-check" id="btncheck1">
                        <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                          <i class="material-icons">
                      brush
                    </i>
                        </label>
                        <h6>Medicine</h6>
                      </div>
                      <div class="col-sm-3 ms-auto">
                        <input type="checkbox" class="btn-check" id="btncheck1">
                        <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                          <i class="material-icons">
                      brush
                    </i>
                        </label>
                        <h6>Computing</h6>
                      </div>
                      <div class="col-sm-3">
                        <input type="checkbox" class="btn-check" id="btncheck2">
                        <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck2">
                          <i class="material-icons">
                      integration_instructions
                    </i>
                        </label>
                        <h6>Eucation</h6>
                      </div>
                      <div class="col-sm-3 me-auto">
                        <input type="checkbox" class="btn-check" id="btncheck3">
                        <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck3">
                          <i class="material-icons">
                      developer_mode
                    </i>
                        </label>
                        <h6>Engineering</h6>
                      </div>
                    </div>
                  </div>
                    <!--second row  -->
                   
                      <div class="multisteps-form__content">
                        <div class="row mt-4">
                          <div class="col-sm-3 ms-auto">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                              <i class="material-icons">
                          brush
                        </i>
                            </label>
                            <h6>College of Design</h6>
                          </div>
                          <div class="col-sm-3 ms-auto">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                              <i class="material-icons">
                          brush
                        </i>
                            </label>
                            <h6>College of Business</h6>
                          </div>
                          <div class="col-sm-3 ms-auto">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                              <i class="material-icons">
                          brush
                        </i>
                            </label>
                            <h6>Dance and Drama</h6>
                          </div>
                          <div class="col-sm-3 ms-auto">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-lg btn-outline-primary border-2 px-6 py-5" for="btncheck1">
                              <i class="material-icons">
                          brush
                        </i>
                            </label>
                            <h6>Agriculture</h6>
                          </div>
                      </div>

                    </div>
                    <!-- end second row -->
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                
              
                <!--single form panel-->
                <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                  <h5 class="font-weight-bolder">Pricing</h5>
                  <div class="multisteps-form__content mt-3">
                    <div class="row">
                      <div class="col-3">
                        <div class="input-group input-group-dynamic">
                          <label class="form-label">Price</label>
                          <input type="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="col-4">
                        <select class="form-control" name="choices-sizes" id="choices-currency">
                          <option value="Choice 1" selected="">USD</option>
                          <option value="Choice 2">EUR</option>
                          <option value="Choice 3">GBP</option>
                          <option value="Choice 4">CNY</option>
                          <option value="Choice 5">INR</option>
                          <option value="Choice 6">BTC</option>
                        </select>
                      </div>
                      <div class="col-5">
                        <div class="input-group input-group-dynamic">
                          <label class="form-label">SKU</label>
                          <input class="multisteps-form__input form-control" type="text" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <label class="mt-4 form-label">Tags</label>
                        <select class="form-control" name="choices-tags" id="choices-tags" multiple>
                          <option value="Choice 1" selected>In Stock</option>
                          <option value="Choice 2">Out of Stock</option>
                          <option value="Choice 3">Sale</option>
                          <option value="Choice 4">Black Friday</option>
                        </select>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-0 mt-md-4">
                      <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Send</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>

</div>


   <script>
  if (document.getElementById('choices-tags')) {
      var tags = document.getElementById('choices-tags');
      const examples = new Choices(tags, {
        removeItemButton: true
      });

      examples.setChoices(
        [{
            value: 'One',
            label: 'Expired',
            disabled: true
          },
          {
            value: 'Two',
            label: 'Out of Stock',
            selected: true
          }
        ],
        'value',
        'label',
        false,
      );
    }
   </script>
</div>
@endsection