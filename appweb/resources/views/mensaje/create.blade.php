@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-6 offset-lg-3">
    <div class="card mb-0 card-body py-4">
      <p class="h2 d-block">Nuevo mensaje</p>
      <form action="{{ route('mensaje.store') }}" method="post">
        <div class="form-group">
          <label for="business-size">Tipo de mensaje:</label>
          <select id="business-size" class="custom-select form-control">
            <option selected="">Seleccione una opción</option>
            <option value="1">Just me</option>
            <option value="2">1 - 10</option>
            <option value="3">10 - 50</option>
            <option value="4">50+</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Asunto">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="4" placeholder="Escriba el mensaje a enviar"></textarea>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Enviar Mensaje</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
<div class="col-lg-6 offset-lg-3">
    <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
              <form class="wizard card sw-main sw-theme-default">
                <ul class="nav nav-tabs card-header text-center bg-light p-0 step-anchor">
                  <li class="nav-item flex-fill active">
                    <a class="nav-link" href="#first">1. Business Type</a>
                  </li>
                  <li class="nav-item flex-fill done">
                    <a class="nav-link" href="#second">2. Information</a>
                  </li>
                  <li class="nav-item flex-fill">
                    <a class="nav-link" href="#third">3. Your Details</a>
                  </li>
                  <li class="nav-item flex-fill">
                    <a class="nav-link" href="#fourth">4. Confirm</a>
                  </li>
                </ul>
                <div class="tab-content sw-container" style="min-height: 352px;">
                  <div id="first" class="tab-pane step-content" style="display: block;">
                    <div class="card-body py-4">
                      <div class="mb-4 text-center">
                        <span class="h3 d-block">What kind of business are you?</span>
                        <p class="lead">Here's a brief description of this step in the process.</p>
                      </div>
                      <div class="row">
                        <div class="col-sm mb-3 mb-sm-0">
                          <button class="sw-btn-next btn btn-block btn-outline-light border py-4" type="button">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mb-3">
                              <path d="M25.9981 27.002C24.1416 27.002 22.3611 26.2645 21.0483 24.9517C19.7356 23.6389 18.9981 21.8585 18.9981 20.002C18.9981 18.1454 19.7356 16.365 21.0483 15.0522C22.3611 13.7394 24.1416 13.002 25.9981 13.002C27.8546 13.002 29.6351 13.7394 30.9478 15.0522C32.2606 16.365 32.9981 18.1454 32.9981 20.002C32.9981 21.8585 32.2606 23.6389 30.9478 24.9517C29.6351 26.2645 27.8546 27.002 25.9981 27.002ZM25.9981 25.002C27.3241 25.002 28.5959 24.4752 29.5336 23.5375C30.4713 22.5998 30.9981 21.328 30.9981 20.002C30.9981 18.6759 30.4713 17.4041 29.5336 16.4664C28.5959 15.5287 27.3241 15.002 25.9981 15.002C24.672 15.002 23.4002 15.5287 22.4625 16.4664C21.5249 17.4041 20.9981 18.6759 20.9981 20.002C20.9981 21.328 21.5249 22.5998 22.4625 23.5375C23.4002 24.4752 24.672 25.002 25.9981 25.002ZM44.5221 41.272C45.3521 40.264 46.1101 39.173 46.7851 38.004C47.5153 36.7405 48.1295 35.4134 48.6201 34.039C49.7915 30.7277 50.2256 27.2005 49.8921 23.704C49.5525 20.2082 48.4535 16.8288 46.6721 13.802C45.928 12.546 45.0714 11.3601 44.1131 10.259C43.2429 9.25675 42.2917 8.32795 41.2691 7.48195C40.2591 6.65195 39.1691 5.89495 38.0001 5.21995C36.7366 4.48969 35.4095 3.87551 34.0351 3.38495C30.7238 2.21351 27.1966 1.77939 23.7001 2.11295C20.2043 2.45255 16.8249 3.55149 13.7981 5.33295C12.5422 6.07675 11.3563 6.93292 10.2551 7.89095C9.25283 8.7614 8.32402 9.71295 7.47807 10.736C6.64807 11.746 5.89107 12.836 5.21607 14.004C0.236067 22.711 1.01307 33.841 7.88707 41.75C7.97321 41.8491 8.03899 41.9642 8.08064 42.0888C8.12228 42.2134 8.13899 42.3449 8.12979 42.476C8.1206 42.607 8.08569 42.7349 8.02706 42.8524C7.96842 42.97 7.88722 43.0748 7.78807 43.161C7.68892 43.2471 7.57377 43.3129 7.44921 43.3545C7.32464 43.3962 7.19309 43.4129 7.06206 43.4037C6.93104 43.3945 6.80311 43.3596 6.68558 43.3009C6.56805 43.2423 6.46321 43.1611 6.37707 43.062C-2.08293 33.328 -2.01893 19.089 5.93507 9.46395C7.8566 7.127 10.1738 5.14587 12.7811 3.61095C16.0565 1.67289 19.7192 0.481558 23.5081 0.121953C27.2261 -0.239047 31.0481 0.195951 34.7041 1.49995C37.5563 2.50913 40.2089 4.01165 42.5411 5.93895C44.878 7.86048 46.8591 10.1777 48.3941 12.785C50.3321 16.0604 51.5235 19.7231 51.8831 23.5119C52.2531 27.2999 51.7826 31.1228 50.5051 34.708C49.4956 37.5602 47.9927 40.2129 46.0651 42.545C38.1351 52.189 24.1701 54.97 13.0001 48.521C12.7723 48.3874 12.6065 48.1692 12.539 47.9139C12.4715 47.6586 12.5078 47.3869 12.6398 47.1583C12.7718 46.9296 12.989 46.7624 13.2438 46.6932C13.4986 46.624 13.7705 46.6584 14.0001 46.789C23.0751 52.029 34.1501 50.668 41.6651 44.196C42.695 43.3006 43.6504 42.323 44.5221 41.273V41.272ZM18.0841 27.597C18.1917 27.3545 18.3913 27.1648 18.6389 27.0696C18.8864 26.9743 19.1617 26.9813 19.4041 27.089C19.6465 27.1966 19.8362 27.3962 19.9314 27.6437C20.0267 27.8913 20.0197 28.1665 19.9121 28.409L17.1621 34.597C17.0946 34.7492 17.0663 34.9158 17.0796 35.0818C17.0929 35.2477 17.1474 35.4077 17.2381 35.5473C17.3289 35.6868 17.4531 35.8015 17.5994 35.8809C17.7458 35.9603 17.9096 36.0019 18.0761 36.002H33.9201C34.0867 36.002 34.2506 35.9604 34.3971 35.8809C34.5435 35.8015 34.6678 35.6867 34.7586 35.547C34.8494 35.4073 34.9039 35.2471 34.9171 35.081C34.9302 34.915 34.9017 34.7482 34.8341 34.596L32.0841 28.4079C31.9764 28.1655 31.9694 27.8903 32.0647 27.6427C32.16 27.3952 32.3497 27.1956 32.5921 27.0879C32.8345 26.9803 33.1097 26.9733 33.3573 27.0686C33.6048 27.1638 33.8044 27.3535 33.9121 27.596L36.6621 33.784C36.865 34.2407 36.9506 34.741 36.911 35.2392C36.8715 35.7375 36.7081 36.218 36.4357 36.637C36.1633 37.0561 35.7905 37.4005 35.3511 37.6388C34.9118 37.8772 34.4199 38.002 33.9201 38.002H18.0761C17.5762 38.002 17.0843 37.8772 16.645 37.6388C16.2057 37.4005 15.8329 37.0561 15.5604 36.637C15.288 36.218 15.1246 35.7375 15.0851 35.2392C15.0455 34.741 15.1311 34.2407 15.3341 33.784L18.0841 27.596V27.597Z" transform="translate(3.00195 2.99805)" fill="#333333"></path>
                            </svg>

                            <span class="h6 mb-0 d-block">Solo / Freelance</span>
                          </button>
                        </div>
                        <div class="col-sm mb-3 mb-sm-0">
                          <button class="sw-btn-next btn btn-block btn-outline-light border py-4" type="button">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mb-3">
                              <path d="M9.18047 22.892L23.5845 8.489C25.7245 3.497 30.6825 -2.13623e-07 36.4575 -2.13623e-07C44.1895 -2.13623e-07 50.4575 6.268 50.4575 14C50.4575 19.775 46.9605 24.734 41.9685 26.873L18.6835 50.161C18.4946 50.3466 18.2405 50.4509 17.9756 50.4515C17.7107 50.452 17.4562 50.3488 17.2665 50.164C17.1728 50.0711 17.0984 49.9606 17.0478 49.8388C16.9971 49.717 16.9712 49.5863 16.9715 49.4544C16.9718 49.3224 16.9983 49.1919 17.0494 49.0703C17.1006 48.9487 17.1754 48.8385 17.2695 48.746L38.1115 27.904C37.5695 27.968 37.0175 28.001 36.4585 28.001C33.0902 28.0058 29.834 26.7913 27.2915 24.582L4.54147 47.332C4.35265 47.5181 4.0984 47.6227 3.83329 47.6235C3.56818 47.6242 3.31334 47.521 3.12347 47.336C3.02982 47.2431 2.95557 47.1325 2.90502 47.0106C2.85446 46.8888 2.82862 46.7581 2.829 46.6262C2.82937 46.4942 2.85594 46.3637 2.90718 46.2421C2.95842 46.1206 3.0333 46.0104 3.12747 45.918L25.8775 23.168C23.6682 20.6255 22.4537 17.3693 22.4585 14.001C22.4585 13.441 22.4915 12.891 22.5555 12.348L10.5955 24.308C10.2125 24.69 9.57447 24.673 9.19547 24.294C9.10203 24.2033 9.02749 24.095 8.97616 23.9754C8.92483 23.8557 8.89774 23.7271 8.89643 23.5969C8.89513 23.4667 8.91965 23.3376 8.96858 23.2169C9.0175 23.0963 9.08986 22.9865 9.18147 22.894L9.18047 22.892ZM0.297471 31.775L4.94447 27.128C5.13329 26.9411 5.38786 26.8357 5.65354 26.8344C5.91922 26.833 6.17482 26.936 6.36547 27.121C6.46019 27.2137 6.53533 27.3244 6.58645 27.4467C6.63757 27.569 6.66362 27.7003 6.66306 27.8328C6.6625 27.9653 6.63534 28.0963 6.58319 28.2182C6.53105 28.34 6.45497 28.4501 6.35947 28.542L1.71247 33.189C1.52352 33.3749 1.26919 33.4794 1.00408 33.48C0.738978 33.4805 0.484213 33.3772 0.294471 33.192C0.200908 33.0992 0.126704 32.9887 0.0761559 32.867C0.0256081 32.7452 -0.000275903 32.6147 3.14633e-06 32.4829C0.000282196 32.3511 0.0267182 32.2206 0.077781 32.0991C0.128844 31.9776 0.203516 31.8674 0.297471 31.775V31.775ZM24.4575 14C24.4575 20.627 29.8305 26 36.4575 26C43.0845 26 48.4575 20.627 48.4575 14C48.4575 7.373 43.0845 2 36.4575 2C29.8305 2 24.4575 7.373 24.4575 14V14ZM35.8005 4.959C35.8323 4.83155 35.8888 4.71161 35.967 4.60603C36.0451 4.50044 36.1433 4.41128 36.2558 4.34363C36.3684 4.27599 36.4932 4.23118 36.6232 4.21177C36.7531 4.19235 36.8855 4.19872 37.013 4.2305C37.1404 4.26228 37.2604 4.31885 37.3659 4.39698C37.4715 4.47512 37.5607 4.57328 37.6283 4.68587C37.696 4.79846 37.7408 4.92328 37.7602 5.05318C37.7796 5.18309 37.7733 5.31555 37.7415 5.443C37.6725 5.718 37.6305 6.276 37.7455 7.013C37.9435 8.276 38.5585 9.534 39.7415 10.716C40.9235 11.899 42.1815 12.514 43.4455 12.712C44.1815 12.827 44.7395 12.785 45.0145 12.716C45.2693 12.6587 45.5365 12.7033 45.7588 12.8404C45.9812 12.9775 46.141 13.1961 46.2043 13.4495C46.2675 13.703 46.2291 13.9711 46.0972 14.1966C45.9653 14.422 45.7504 14.5869 45.4985 14.656C44.9815 14.786 44.1605 14.849 43.1355 14.688C41.4645 14.426 39.8165 13.62 38.3265 12.131C36.8365 10.641 36.0315 8.993 35.7695 7.322C35.6095 6.297 35.6715 5.476 35.8005 4.959V4.959Z" transform="translate(3.77661 2.79907)" fill="#333333"></path>
                            </svg>

                            <span class="h6 mb-0 d-block">Startup</span>
                          </button>
                        </div>
                        <div class="col-sm mb-3 mb-sm-0">
                          <button class="sw-btn-next btn btn-block btn-outline-light border py-4" type="button">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mb-3">
                              <path d="M52 22.977V42C52 43.0609 51.5786 44.0783 50.8284 44.8284C50.0783 45.5786 49.0609 46 48 46H4C2.93913 46 1.92172 45.5786 1.17157 44.8284C0.421428 44.0783 0 43.0609 0 42V23.023V12C0 10.9391 0.421428 9.92172 1.17157 9.17157C1.92172 8.42143 2.93913 8 4 8H48C49.0609 8 50.0783 8.42143 50.8284 9.17157C51.5786 9.92172 52 10.9391 52 12V22.977V22.977ZM50 22.284V12C50 11.4696 49.7893 10.9609 49.4142 10.5858C49.0391 10.2107 48.5304 10 48 10H4C3.46957 10 2.96086 10.2107 2.58579 10.5858C2.21071 10.9609 2 11.4696 2 12V22.284L20 28.404V27C20 26.2044 20.3161 25.4413 20.8787 24.8787C21.4413 24.3161 22.2044 24 23 24H29C29.7956 24 30.5587 24.3161 31.1213 24.8787C31.6839 25.4413 32 26.2044 32 27V28.404L50 22.284ZM50 24.396L32 30.516V33C32 33.7956 31.6839 34.5587 31.1213 35.1213C30.5587 35.6839 29.7956 36 29 36H23C22.2044 36 21.4413 35.6839 20.8787 35.1213C20.3161 34.5587 20 33.7956 20 33V30.516L2 24.396V42C2 42.5304 2.21071 43.0391 2.58579 43.4142C2.96086 43.7893 3.46957 44 4 44H48C48.5304 44 49.0391 43.7893 49.4142 43.4142C49.7893 43.0391 50 42.5304 50 42V24.396ZM23 26C22.7348 26 22.4804 26.1054 22.2929 26.2929C22.1054 26.4804 22 26.7348 22 27V33C22 33.2652 22.1054 33.5196 22.2929 33.7071C22.4804 33.8946 22.7348 34 23 34H29C29.2652 34 29.5196 33.8946 29.7071 33.7071C29.8946 33.5196 30 33.2652 30 33V27C30 26.7348 29.8946 26.4804 29.7071 26.2929C29.5196 26.1054 29.2652 26 29 26H23ZM1 48H51C51.2652 48 51.5196 48.1054 51.7071 48.2929C51.8946 48.4804 52 48.7348 52 49C52 49.2652 51.8946 49.5196 51.7071 49.7071C51.5196 49.8946 51.2652 50 51 50H1C0.734784 50 0.480429 49.8946 0.292892 49.7071C0.105356 49.5196 0 49.2652 0 49C0 48.7348 0.105356 48.4804 0.292892 48.2929C0.480429 48.1054 0.734784 48 1 48ZM27.01 29C27.556 29 28 29.464 28 30C28 30.552 27.568 31 27.01 31H24.99C24.444 31 24 30.536 24 30C24 29.448 24.432 29 24.99 29H27.01ZM19.893 5.45C19.7725 5.68489 19.5641 5.86261 19.3131 5.9444C19.0621 6.0262 18.7889 6.00544 18.5532 5.88664C18.3175 5.76785 18.1383 5.56066 18.0547 5.31027C17.9711 5.05987 17.9899 4.78658 18.107 4.55C19.624 1.535 22.309 0 26 0C29.69 0 32.376 1.534 33.893 4.55C33.9532 4.66738 33.9896 4.79552 34.0001 4.92702C34.0105 5.05853 33.9949 5.19081 33.954 5.31624C33.9131 5.44167 33.8478 5.55777 33.7619 5.65786C33.6759 5.75794 33.571 5.84003 33.4532 5.8994C33.3354 5.95877 33.207 5.99424 33.0754 6.00377C32.9439 6.01329 32.8117 5.99669 32.6866 5.95492C32.5614 5.91315 32.4458 5.84703 32.3463 5.76037C32.2469 5.67371 32.1655 5.56823 32.107 5.45C30.94 3.131 28.959 2 26 2C23.04 2 21.06 3.132 19.893 5.45V5.45Z" transform="translate(3 5)" fill="#333333"></path>
                            </svg>

                            <span class="h6 mb-0 d-block">Established Business</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="second" class="tab-pane step-content" style="display: none;">
                    <div class="card-body py-4">
                      <div class="mb-4 text-center">
                        <span class="h3 d-block">Tell us about your business</span>
                        <p class="lead">Here's a brief description of this step in the process.</p>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                          <div class="form-group">
                            <label for="business-name">Business Name:</label>
                            <input id="business-name" type="text" class="form-control" name="business-name">
                          </div>
                          <div class="form-group">
                            <label for="business-website">Website URL:</label>
                            <input id="business-website" type="url" class="form-control" name="business-website" placeholder="eg: http://companywebsite.co/">
                          </div>
                          <div class="form-group">
                            <label for="business-industry">Industry:</label>
                            <input id="business-industry" type="text" class="form-control" name="business-industry">
                          </div>
                          <div class="form-group">
                            <label for="business-size">Number of employees:</label>
                            <select id="business-size" class="custom-select form-control">
                              <option selected="">Select an option</option>
                              <option value="1">Just me</option>
                              <option value="2">1 - 10</option>
                              <option value="3">10 - 50</option>
                              <option value="4">50+</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="business-budget">Approximate budget:</label>
                            <select id="business-budget" class="custom-select form-control">
                              <option selected="">Select an option</option>
                              <option value="1">0 - $1,000</option>
                              <option value="2">$1,000 - $5,000</option>
                              <option value="3">$5,000 - $10,000</option>
                              <option value="4">$10,000+</option>
                            </select>
                          </div>
                          <button class="btn btn-block btn-primary sw-btn-next">Next Step</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="third" class="tab-pane step-content">
                    <div class="card-body py-4">
                      <div class="mb-4 text-center">
                        <span class="h3 d-block">How can we contact you?</span>
                        <p class="lead">Here's a brief description of this step in the process.</p>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="contact-first-name">First Name:</label>
                                <input id="contact-first-name" type="text" class="form-control" name="contact-first-name">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="contact-last-name">Last Name:</label>
                                <input id="contact-last-name" type="text" class="form-control" name="contact-last-name">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="contact-email">Email Address:</label>
                            <input id="contact-email" type="email" class="form-control" name="contact-email">
                            <small>* We will never share your email address with third parties.</small>
                          </div>
                          <div class="form-group">
                            <label for="contact-number">Contact Number:</label>
                            <input id="contact-number" type="tel" class="form-control" name="contact-number">
                          </div>
                          <button class="btn btn-block btn-primary sw-btn-next">Next Step</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="fourth" class="tab-pane step-content">
                    <div class="card-body p-4 px-lg-5">
                      <div class="mb-4 text-center">
                        <div class="icon-rounded bg-success mx-auto mb-3">
                          <i class="material-icons text-white">check</i>
                        </div>
                        <span class="h3 d-block">Thanks for providing your details.</span>
                        <p class="lead">Please ensure you read our
                          <a href="#">Privacy Policy</a> before submitting your proposal request. You will recieve a personal response within 24 hours.</p>
                        <hr>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="privact-policy-agree">
                          <label class="custom-control-label" for="privact-policy-agree">I have read and agree to the Privacy Policy</label>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit Planner</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="card-footer text-center">
                <small>Having trouble filling out this form?
                  <a href="#">Contact Support</a>
                </small>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
</div>

@endsection