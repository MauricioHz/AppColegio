<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Insight Bootstrap Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,600i,700,700i%7cPermanent+Marker" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
      <div class="container">
        <div class="collapse navbar-collapse navMenu justify-content-between">
          <div class="d-flex justify-content-end justify-content-lg-start pt-1 pt-lg-0">
            <div class="dropdown">
              <button class="btn dropdown-toggle btn-dark btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/img/flag-us.svg" alt="United States" class="btn-image">
                <span>United States</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Asia</a>
                <a class="dropdown-item" href="#">Australia</a>
                <a class="dropdown-item" href="#">Europe</a>
                <a class="dropdown-item" href="#">India</a>
                <a class="dropdown-item" href="#">United States</a>
              </div>
            </div>
          </div>
          <div class="py-1 d-flex align-items-center justify-content-end">
            <ul class="navbar-nav d-flex flex-row">
              <li class="nav-item">
                <a href="documentation/index.html" class="text-small nav-link px-2">Docs</a>
              </li>
              <li class="nav-item">
                <a href="documentation/changelog.html" class="text-small nav-link px-2">Changelog                 <span class="d-none d-sm-inline-block badge badge-success">1.0.1</span>
</a>
              </li>
            </ul>
            <button class="btn btn-sm btn-dark mr-2" data-toggle="collapse" data-target="#searchCollapse"><i class="material-icons">search</i> Search</button>
            <a href="login" class="btn btn-primary btn-sm">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <div id="searchCollapse" class="bg-dark collapse">
      <div class="container px-3 px-sm-0 px-lg-2">
        <div class="input-group input-group-lg pb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="navSearch">
              <i class="material-icons">search</i>
            </span>
          </div>
          <input type="search" class="form-control" placeholder="Search" aria-label="Search">
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img alt="Insight" src="assets/img/logo.svg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end navMenu">

          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link h5" href="index.html">Overview</a>
            </li>

            <li class="dropdown">
              <a class="nav-link h5 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pages-dropdown">Pages</a>
              <div class="dropdown-menu dropdown-menu-wide p-0 o-hidden dropdown-menu-right" aria-labelledby="pages-dropdown">
                <div class="list-group list-group-flush">
                  <a href="pages-landing.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-rounded bg-gradient mr-3">
                        <i class="material-icons text-white">layers</i>
                      </div>
                      <div>
                        <span class="h6 d-block mb-0">Landing Pages</span>
                        <span>Put your business&apos;s best foot forward</span>
                      </div>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                  <a href="pages-inner.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-rounded bg-gradient-2 mr-3">
                        <i class="material-icons text-white">fingerprint</i>
                      </div>
                      <div>
                        <span class="h6 d-block mb-0">Inner Pages</span>
                        <span>Complete your online presence</span>
                      </div>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                  <a href="pages-utility.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-rounded bg-gradient-3 mr-3">
                        <i class="material-icons text-white">waves</i>
                      </div>
                      <div>
                        <span class="h6 d-block mb-0">Utility Pages</span>
                        <span>Extend the functionality to your site</span>
                      </div>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                </div>
                <div class="p-3 d-flex border-top">
                  <img src="assets/img/avatar-female-1.jpg" alt="Avatar" class="avatar mr-3">
                  <p class="mb-0">
                    &#x201C;Insight&apos;s diverse array of pages make building complete business websites quicker than ever.&#x201D;
                  </p>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link h5" href="blocks.html">Blocks</a>
            </li>

            <li class="dropdown">
              <a class="nav-link h5 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="components-dropdown">Components</a>
              <div class="dropdown-menu dropdown-menu-wide p-0 o-hidden dropdown-menu-right" aria-labelledby="components-dropdown">
                <div class="list-group list-group-flush">
                  <a href="components-insight.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-rounded bg-gradient mr-3">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" class="icon text-white">
                          <!-- Generator: Sketch 49.1 (51147) - http://www.bohemiancoding.com/sketch -->
                          <title>In</title>
                          <desc>Created with Sketch.</desc>
                          <defs/>
                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="bootstrap-4" transform="translate(-456.000000, -157.000000)" fill="#FFFFFF">
                              <path d="M458.124,180.192 C457.50533,180.192 457.009335,180.000002 456.636,179.616 C456.262665,179.231998 456.076,178.73067 456.076,178.112 L456.076,159.328 C456.076,158.70933 456.262665,158.213335 456.636,157.84 C457.009335,157.466665 457.50533,157.28 458.124,157.28 C458.764003,157.28 459.270665,157.466665 459.644,157.84 C460.017335,158.213335 460.204,158.70933 460.204,159.328 L460.204,178.112 C460.204,178.73067 460.017335,179.231998 459.644,179.616 C459.270665,180.000002 458.764003,180.192 458.124,180.192 Z M473.804,163.968 C475.681343,163.968 477.078662,164.501328 477.996,165.568 C478.913338,166.634672 479.372,168.245323 479.372,170.4 L479.372,178.272 C479.372,178.869336 479.196002,179.338665 478.844,179.68 C478.491998,180.021335 478.00667,180.192 477.388,180.192 C476.76933,180.192 476.278668,180.021335 475.916,179.68 C475.553332,179.338665 475.372,178.869336 475.372,178.272 L475.372,170.624 C475.372,169.407994 475.142669,168.522669 474.684,167.968 C474.225331,167.413331 473.505338,167.136 472.524,167.136 C471.371994,167.136 470.449337,167.498663 469.756,168.224 C469.062663,168.949337 468.716,169.919994 468.716,171.136 L468.716,178.272 C468.716,178.869336 468.534668,179.338665 468.172,179.68 C467.809332,180.021335 467.31867,180.192 466.7,180.192 C466.08133,180.192 465.596002,180.021335 465.244,179.68 C464.891998,179.338665 464.716,178.869336 464.716,178.272 L464.716,165.888 C464.716,165.333331 464.897332,164.885335 465.26,164.544 C465.622668,164.202665 466.11333,164.032 466.732,164.032 C467.286669,164.032 467.739998,164.197332 468.092,164.528 C468.444002,164.858668 468.62,165.290664 468.62,165.824 L468.62,166.688 C469.153336,165.813329 469.867996,165.141336 470.764,164.672 C471.660004,164.202664 472.673328,163.968 473.804,163.968 Z" id="In" />
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div>
                        <span class="h6 d-block mb-0">Insight Components</span>
                        <span>Components to help you build sites faster</span>
                      </div>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                  <a href="components-bootstrap.html" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-rounded bg-gradient-2 mr-3">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
                        <svg width="130px" height="156px" viewBox="0 0 130 156" version="1.1" xmlns="http://www.w3.org/2000/svg" class="icon text-white">
                          <!-- Generator: Sketch 49.1 (51147) - http://www.bohemiancoding.com/sketch -->
                          <title>Shape</title>
                          <desc>Created with Sketch.</desc>
                          <defs/>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-72.000000, -50.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <path d="M106.158,113.238 L106.158,76.985 L138.069,76.985 C141.109,76.985 144.039,77.238 146.861,77.745 C149.683,78.251 152.18,79.155 154.351,80.458 C156.521,81.761 158.258,83.57 159.561,85.885 C160.863,88.201 161.515,91.168 161.515,94.785 C161.515,101.298 159.561,106.002 155.653,108.896 C151.746,111.791 146.753,113.238 140.674,113.238 L106.158,113.238 Z M72.075,50.5 L72.075,205.5 L147.187,205.5 C154.134,205.5 160.9,204.632 167.485,202.895 C174.07,201.158 179.931,198.481 185.069,194.863 C190.206,191.245 194.295,186.577 197.334,180.861 C200.374,175.144 201.893,168.378 201.893,160.563 C201.893,150.866 199.541,142.581 194.838,135.707 C190.134,128.832 183.006,124.02 173.454,121.27 C180.401,117.942 185.648,113.672 189.194,108.462 C192.739,103.252 194.512,96.74 194.512,88.924 C194.512,81.688 193.318,75.61 190.93,70.689 C188.542,65.769 185.177,61.825 180.835,58.858 C176.494,55.891 171.284,53.756 165.205,52.454 C159.127,51.151 152.397,50.5 145.016,50.5 L72.075,50.5 Z M106.158,179.015 L106.158,136.466 L143.279,136.466 C150.66,136.466 156.594,138.166 161.081,141.568 C165.567,144.969 167.811,150.649 167.811,158.609 C167.811,162.662 167.123,165.99 165.748,168.595 C164.373,171.2 162.528,173.263 160.212,174.782 C157.897,176.302 155.219,177.387 152.18,178.039 C149.14,178.689 145.957,179.015 142.628,179.015 L106.158,179.015 Z" id="Shape" />
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div>
                        <span class="h6 d-block mb-0">Bootstrap Components</span>
                        <span>Inludes everything Bootstrap has to offer</span>
                      </div>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                </div>
                <div class="px-3 py-2 border-top">
                  <ul class="list-unstyled m-0 d-flex justify-content-between">
                    <li class="my-1"><a href="/documentation/index.html" class="d-flex align-items-center"><i class="material-icons mr-1">book</i> View Documentation</a></li>
                    <li class="my-1"><a href="/documentation/changelog.html" class="d-flex align-items-center">View Changelog <span class="ml-1 badge badge-success">1.0.1</span></a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="header-3 p-0">
      <img src="assets/img/header-8.jpg" alt="Image" class="bg-image">
      <div class="container">
        <div class="row no-gutters justify-content-center justify-content-md-start">
          <div class="col-10 col-md-8 col-lg-7 col-xl-6 bg-white spacer-y-4 height-60 height-md-70">
            <div class="px-4">
              <h1 class="display-4 d-block">
                Build a beautiful, performant site with Insight
              </h1>
              <p class="lead">
                Speed up your workflow with tons of pre-made content blocks. Assembling your site is easier than ever before.
              </p>
              <form class="d-flex">
                <div class="input-group input-group-lg mr-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">search</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-primary btn-lg" type="submit">
                  Go
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pb-2">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <span class="h2 d-block">A bold choice for your business.</span>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md d-flex">
            <a href="#" class="card text-center flex-fill hover-effect">
              <div class="card-body d-flex flex-column align-items-center justify-content-center py-2">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mt-2 mb-3">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M35.78 42.125L42.465 48.885C42.9053 49.2967 43.4233 49.6165 43.9886 49.8257C44.5539 50.0349 45.1553 50.1294 45.7576 50.1035C46.3598 50.0776 46.9508 49.932 47.4962 49.6751C48.0415 49.4182 48.5301 49.0551 48.9335 48.6072C49.3369 48.1593 49.647 47.6354 49.8456 47.0663C50.0442 46.4972 50.1274 45.8941 50.0903 45.2925C50.0532 44.6908 49.8966 44.1026 49.6295 43.5622C49.3625 43.0217 48.9904 42.54 48.535 42.145L44.63 38.06C44.5324 37.9721 44.453 37.8658 44.3964 37.7472C44.3399 37.6286 44.3072 37.5 44.3004 37.3688C44.2935 37.2376 44.3125 37.1063 44.3564 36.9825C44.4003 36.8586 44.4681 36.7446 44.556 36.647C44.6439 36.5494 44.7502 36.47 44.8688 36.4134C44.9874 36.3569 45.116 36.3242 45.2472 36.3174C45.3784 36.3105 45.5097 36.3295 45.6335 36.3734C45.7574 36.4173 45.8714 36.4851 45.969 36.573L49.873 40.658C50.5223 41.2291 51.0517 41.9233 51.4308 42.7005C51.8098 43.4777 52.0309 44.3224 52.0811 45.1856C52.1314 46.0488 52.0099 46.9134 51.7236 47.7293C51.4374 48.5453 50.9921 49.2963 50.4135 49.9389C49.835 50.5815 49.1346 51.1029 48.3531 51.4729C47.5716 51.8429 46.7244 52.0542 45.8607 52.0945C44.997 52.1348 44.1338 52.0033 43.3212 51.7076C42.5087 51.4119 41.7629 50.958 41.127 50.372L34.09 43.255C30.751 44.982 26.994 46 23 46C10.297 46 0 35.703 0 23C0 10.297 10.297 0 23 0C35.703 0 46 10.297 46 23C46 30.973 41.943 37.999 35.78 42.125ZM23 44C34.598 44 44 34.598 44 23C44 11.402 34.598 2 23 2C11.402 2 2 11.402 2 23C2 34.598 11.402 44 23 44ZM8.477 26.767C8.41716 26.5125 8.45937 26.2447 8.59459 26.0209C8.7298 25.7972 8.94726 25.6353 9.2004 25.5699C9.45353 25.5045 9.7222 25.5409 9.94885 25.6712C10.1755 25.8015 10.3421 26.0154 10.413 26.267C11.1375 29.0539 12.7664 31.5216 15.0444 33.283C17.3223 35.0445 20.1205 36.0001 23 36C30.18 36 36 30.18 36 23C36 15.82 30.18 10 23 10C20.2868 10 17.6415 10.8486 15.4347 12.427C13.2278 14.0053 11.5699 16.2344 10.693 18.802C10.6506 18.9263 10.5841 19.041 10.4973 19.1396C10.4106 19.2382 10.3053 19.3188 10.1874 19.3767C10.0695 19.4346 9.94136 19.4687 9.8103 19.4771C9.67923 19.4854 9.5478 19.4679 9.4235 19.4255C9.17247 19.3398 8.96576 19.158 8.84883 18.9199C8.79093 18.802 8.75682 18.6739 8.74844 18.5428C8.74006 18.4117 8.75758 18.2803 8.8 18.156C9.81167 15.1934 11.7246 12.6214 14.2709 10.8003C16.8173 8.97911 19.8694 7.99998 23 8C31.284 8 38 14.716 38 23C38 31.284 31.284 38 23 38C19.6772 38 16.4483 36.897 13.8199 34.864C11.1915 32.831 9.31231 29.9831 8.477 26.767V26.767Z" transform="translate(3 3)" fill="#333333" />
                </svg>

                <span class="h6 mb-2">Small Business</span>
              </div>
            </a>
          </div>
          <div class="col-6 col-md d-flex">
            <a href="#" class="card text-center flex-fill hover-effect">
              <div class="card-body d-flex flex-column align-items-center justify-content-center py-2">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mt-2 mb-3">
                  <path d="M9.18047 22.892L23.5845 8.489C25.7245 3.497 30.6825 -2.13623e-07 36.4575 -2.13623e-07C44.1895 -2.13623e-07 50.4575 6.268 50.4575 14C50.4575 19.775 46.9605 24.734 41.9685 26.873L18.6835 50.161C18.4946 50.3466 18.2405 50.4509 17.9756 50.4515C17.7107 50.452 17.4562 50.3488 17.2665 50.164C17.1728 50.0711 17.0984 49.9606 17.0478 49.8388C16.9971 49.717 16.9712 49.5863 16.9715 49.4544C16.9718 49.3224 16.9983 49.1919 17.0494 49.0703C17.1006 48.9487 17.1754 48.8385 17.2695 48.746L38.1115 27.904C37.5695 27.968 37.0175 28.001 36.4585 28.001C33.0902 28.0058 29.834 26.7913 27.2915 24.582L4.54147 47.332C4.35265 47.5181 4.0984 47.6227 3.83329 47.6235C3.56818 47.6242 3.31334 47.521 3.12347 47.336C3.02982 47.2431 2.95557 47.1325 2.90502 47.0106C2.85446 46.8888 2.82862 46.7581 2.829 46.6262C2.82937 46.4942 2.85594 46.3637 2.90718 46.2421C2.95842 46.1206 3.0333 46.0104 3.12747 45.918L25.8775 23.168C23.6682 20.6255 22.4537 17.3693 22.4585 14.001C22.4585 13.441 22.4915 12.891 22.5555 12.348L10.5955 24.308C10.2125 24.69 9.57447 24.673 9.19547 24.294C9.10203 24.2033 9.02749 24.095 8.97616 23.9754C8.92483 23.8557 8.89774 23.7271 8.89643 23.5969C8.89513 23.4667 8.91965 23.3376 8.96858 23.2169C9.0175 23.0963 9.08986 22.9865 9.18147 22.894L9.18047 22.892ZM0.297471 31.775L4.94447 27.128C5.13329 26.9411 5.38786 26.8357 5.65354 26.8344C5.91922 26.833 6.17482 26.936 6.36547 27.121C6.46019 27.2137 6.53533 27.3244 6.58645 27.4467C6.63757 27.569 6.66362 27.7003 6.66306 27.8328C6.6625 27.9653 6.63534 28.0963 6.58319 28.2182C6.53105 28.34 6.45497 28.4501 6.35947 28.542L1.71247 33.189C1.52352 33.3749 1.26919 33.4794 1.00408 33.48C0.738978 33.4805 0.484213 33.3772 0.294471 33.192C0.200908 33.0992 0.126704 32.9887 0.0761559 32.867C0.0256081 32.7452 -0.000275903 32.6147 3.14633e-06 32.4829C0.000282196 32.3511 0.0267182 32.2206 0.077781 32.0991C0.128844 31.9776 0.203516 31.8674 0.297471 31.775V31.775ZM24.4575 14C24.4575 20.627 29.8305 26 36.4575 26C43.0845 26 48.4575 20.627 48.4575 14C48.4575 7.373 43.0845 2 36.4575 2C29.8305 2 24.4575 7.373 24.4575 14V14ZM35.8005 4.959C35.8323 4.83155 35.8888 4.71161 35.967 4.60603C36.0451 4.50044 36.1433 4.41128 36.2558 4.34363C36.3684 4.27599 36.4932 4.23118 36.6232 4.21177C36.7531 4.19235 36.8855 4.19872 37.013 4.2305C37.1404 4.26228 37.2604 4.31885 37.3659 4.39698C37.4715 4.47512 37.5607 4.57328 37.6283 4.68587C37.696 4.79846 37.7408 4.92328 37.7602 5.05318C37.7796 5.18309 37.7733 5.31555 37.7415 5.443C37.6725 5.718 37.6305 6.276 37.7455 7.013C37.9435 8.276 38.5585 9.534 39.7415 10.716C40.9235 11.899 42.1815 12.514 43.4455 12.712C44.1815 12.827 44.7395 12.785 45.0145 12.716C45.2693 12.6587 45.5365 12.7033 45.7588 12.8404C45.9812 12.9775 46.141 13.1961 46.2043 13.4495C46.2675 13.703 46.2291 13.9711 46.0972 14.1966C45.9653 14.422 45.7504 14.5869 45.4985 14.656C44.9815 14.786 44.1605 14.849 43.1355 14.688C41.4645 14.426 39.8165 13.62 38.3265 12.131C36.8365 10.641 36.0315 8.993 35.7695 7.322C35.6095 6.297 35.6715 5.476 35.8005 4.959V4.959Z" transform="translate(3.77661 2.79907)" fill="#333333" />
                </svg>

                <span class="h6 mb-2">Startup</span>
              </div>
            </a>
          </div>
          <div class="col-6 col-md d-flex">
            <a href="#" class="card text-center flex-fill hover-effect">
              <div class="card-body d-flex flex-column align-items-center justify-content-center py-2">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mt-2 mb-3">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M26.6976 34H41.0106C42.6666 34 44.0036 35.362 44.0036 37C44.0036 38.653 42.6596 40 41.0106 40H38.0426L36.3596 48.417C36.2434 48.9847 36.0139 49.5232 35.6846 50H47.0026C47.2678 50 47.5221 50.1054 47.7097 50.2929C47.8972 50.4804 48.0026 50.7348 48.0026 51C48.0026 51.2652 47.8972 51.5196 47.7097 51.7071C47.5221 51.8946 47.2678 52 47.0026 52H5.00256C4.73734 52 4.48299 51.8946 4.29545 51.7071C4.10791 51.5196 4.00256 51.2652 4.00256 51C4.00256 50.7348 4.10791 50.4804 4.29545 50.2929C4.48299 50.1054 4.73734 50 5.00256 50H16.3186C15.9903 49.5228 15.7614 48.9845 15.6456 48.417L13.9626 40H10.9956C9.33956 40 8.00256 38.638 8.00256 37C8.00256 35.347 9.34656 34 10.9956 34H24.6056C24.5256 33.725 24.4456 33.42 24.3636 33.088C23.3236 28.808 23.3226 23.882 25.0516 18.69C23.5172 17.8166 22.2416 16.5524 21.3544 15.026C20.4672 13.4996 20.0001 11.7655 20.0006 10C20.0006 4.477 24.4786 0 30.0006 0C35.5246 0 40.0006 4.477 40.0006 10C40.0006 15.523 35.5246 20 30.0006 20C28.9433 20.0011 27.8925 19.8343 26.8876 19.506C25.3476 24.242 25.3606 28.727 26.3066 32.616C26.4436 33.178 26.5786 33.643 26.6966 34H26.6976ZM26.0256 36H10.9956C10.4556 36 10.0026 36.448 10.0026 37C10.0026 37.536 10.4466 38 10.9956 38H41.0096C41.5496 38 42.0026 37.552 42.0026 37C42.0026 36.464 41.5576 36 41.0096 36H26.0256V36ZM16.0026 40L17.6076 48.024C17.8246 49.113 18.8956 50 19.9966 50H32.0086C33.0966 50 34.1786 49.115 34.3976 48.024L36.0026 40H16.0026V40ZM30.0026 18C32.1243 18 34.1591 17.1571 35.6594 15.6569C37.1597 14.1566 38.0026 12.1217 38.0026 10C38.0026 7.87827 37.1597 5.84344 35.6594 4.34315C34.1591 2.84285 32.1243 2 30.0026 2C27.8808 2 25.846 2.84285 24.3457 4.34315C22.8454 5.84344 22.0026 7.87827 22.0026 10C22.0026 12.1217 22.8454 14.1566 24.3457 15.6569C25.846 17.1571 27.8808 18 30.0026 18ZM30.0026 16C28.4113 16 26.8851 15.3679 25.7599 14.2426C24.6347 13.1174 24.0026 11.5913 24.0026 10C24.0026 8.4087 24.6347 6.88258 25.7599 5.75736C26.8851 4.63214 28.4113 4 30.0026 4C31.5939 4 33.12 4.63214 34.2452 5.75736C35.3704 6.88258 36.0026 8.4087 36.0026 10C36.0026 11.5913 35.3704 13.1174 34.2452 14.2426C33.12 15.3679 31.5939 16 30.0026 16ZM30.0026 14C31.0634 14 32.0808 13.5786 32.831 12.8284C33.5811 12.0783 34.0026 11.0609 34.0026 10C34.0026 8.93913 33.5811 7.92172 32.831 7.17157C32.0808 6.42143 31.0634 6 30.0026 6C28.9417 6 27.9243 6.42143 27.1741 7.17157C26.424 7.92172 26.0026 8.93913 26.0026 10C26.0026 11.0609 26.424 12.0783 27.1741 12.8284C27.9243 13.5786 28.9417 14 30.0026 14V14ZM8.72256 25.114C10.6396 25.547 12.7166 25.529 14.6726 25.234C15.1916 25.155 15.5666 25.078 15.7596 25.03C16.015 24.9708 16.2835 25.0143 16.5073 25.1511C16.731 25.288 16.892 25.5072 16.9556 25.7616C17.0192 26.016 16.9803 26.2853 16.8473 26.5113C16.7143 26.7373 16.4978 26.902 16.2446 26.97C15.9936 27.033 15.5566 27.123 14.9716 27.211C12.7896 27.541 10.4766 27.561 8.28156 27.065C2.74455 25.812 -0.450444 21.619 0.0515561 13.935L0.117556 12.943L1.10955 13.002C8.53455 13.44 14.0046 16.113 17.7726 20.301C19.1402 21.8161 20.2666 23.5325 21.1126 25.39C21.5896 26.443 21.8616 27.274 21.9766 27.775C22.0061 27.903 22.0102 28.0355 21.9885 28.1651C21.9668 28.2946 21.9198 28.4186 21.8502 28.53C21.7806 28.6414 21.6898 28.7379 21.5829 28.8142C21.4759 28.8905 21.355 28.945 21.2271 28.9745C21.0991 29.004 20.9665 29.0081 20.837 28.9864C20.7075 28.9647 20.5835 28.9178 20.4721 28.8482C20.3607 28.7786 20.2641 28.6877 20.1878 28.5808C20.1116 28.4739 20.0571 28.353 20.0276 28.225C19.9406 27.847 19.7106 27.141 19.2906 26.216C18.5293 24.5451 17.5158 23.001 16.2856 21.638C13.0366 18.028 8.37756 15.65 2.00356 15.074C1.87556 21.095 4.37356 24.13 8.72256 25.114V25.114ZM33.3226 25.37C32.252 26.2319 31.2713 27.1998 30.3956 28.259C29.9156 28.841 29.6006 29.287 29.4536 29.525C29.3126 29.7469 29.0898 29.9044 28.8336 29.9633C28.5773 30.0223 28.3082 29.9779 28.0844 29.8398C27.8607 29.7018 27.7003 29.4812 27.638 29.2257C27.5757 28.9703 27.6165 28.7006 27.7516 28.475C27.9436 28.162 28.3106 27.643 28.8516 26.986C29.8137 25.8225 30.8912 24.7594 32.0676 23.813C37.1636 19.706 43.5846 17.987 51.2596 20.033L52.2116 20.287L51.9716 21.243C49.8986 29.539 44.6776 31.279 34.6866 27.949C34.4349 27.8652 34.2268 27.6848 34.1081 27.4476C33.9894 27.2104 33.9697 26.9357 34.0536 26.684C34.1374 26.4323 34.3177 26.2242 34.555 26.1055C34.7922 25.9868 35.0669 25.9672 35.3186 26.051C43.8946 28.91 47.8956 27.851 49.7646 21.725C43.1866 20.245 37.7316 21.816 33.3236 25.37H33.3226Z" transform="translate(2.99951 3)" fill="#333333" />
                </svg>

                <span class="h6 mb-2">Non-profit</span>
              </div>
            </a>
          </div>
          <div class="col-6 col-md d-flex">
            <a href="#" class="card text-center flex-fill hover-effect">
              <div class="card-body d-flex flex-column align-items-center justify-content-center py-2">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon mt-2 mb-3">
                  <path d="M35.178 37.838C36.302 34.645 36.906 31.034 36.99 27H18C17.7348 27 17.4804 26.8946 17.2929 26.7071C17.1054 26.5196 17 26.2652 17 26C17 25.7348 17.1054 25.4804 17.2929 25.2929C17.4804 25.1054 17.7348 25 18 25H36.99C36.902 20.966 36.294 17.357 35.165 14.164C32.1428 14.728 29.0744 15.0079 26 15C22.839 15 19.784 14.722 16.835 14.164C15.612 17.624 15 21.572 15 26.02C15 30.452 15.607 34.388 16.822 37.838C19.8484 37.2725 22.9212 36.9919 26 37C29.166 37 32.225 37.28 35.178 37.838ZM34.428 39.733C31.6461 39.2381 28.8256 38.9928 26 39C23.093 39 20.284 39.244 17.572 39.733C19.403 43.877 22.212 47.24 26 49.837C29.788 47.24 32.597 43.877 34.428 39.733V39.733ZM7.138 40.841C9.62362 39.7429 12.2057 38.8775 14.851 38.256C13.617 34.648 13 30.566 13 26.02C13 21.458 13.621 17.364 14.864 13.747C12.2141 13.1253 9.6277 12.2589 7.138 11.159C4.01392 15.1169 2.2224 19.9618 2.02 25H10C10.2652 25 10.5196 25.1054 10.7071 25.2929C10.8946 25.4804 11 25.7348 11 26C11 26.2652 10.8946 26.5196 10.7071 26.7071C10.5196 26.8946 10.2652 27 10 27H2.02C2.2224 32.0382 4.01392 36.8831 7.138 40.841V40.841ZM8.504 42.429C12.2334 46.4082 17.2095 48.9952 22.609 49.762C19.517 47.136 17.171 43.926 15.571 40.142C13.1525 40.6944 10.7876 41.4597 8.504 42.429V42.429ZM44.864 40.842C45.596 39.912 46.264 38.922 46.86 37.877C46.9241 37.761 47.0105 37.659 47.1144 37.5767C47.2182 37.4945 47.3374 37.4337 47.4649 37.3979C47.5925 37.362 47.7258 37.3519 47.8573 37.3681C47.9888 37.3842 48.1158 37.4264 48.2308 37.492C48.3459 37.5577 48.4468 37.6455 48.5276 37.7505C48.6084 37.8554 48.6676 37.9754 48.7017 38.1034C48.7357 38.2315 48.744 38.365 48.726 38.4962C48.7081 38.6275 48.6642 38.7538 48.597 38.868C46.3261 42.8578 43.0387 46.1748 39.0695 48.4815C35.1003 50.7881 30.5908 52.0022 26 52C11.64 52 0 40.36 0 26C0 11.64 11.64 0 26 0C40.36 0 52 11.64 52 26C52 27.885 51.8 29.744 51.405 31.556C51.3463 31.8128 51.1886 32.0361 50.9661 32.1773C50.7437 32.3186 50.4746 32.3663 50.2171 32.3102C49.9597 32.2541 49.7349 32.0986 49.5914 31.8776C49.4479 31.6566 49.3975 31.388 49.451 31.13C49.745 29.78 49.922 28.399 49.98 27H38.99C38.907 31.155 38.293 34.91 37.149 38.256C39.7951 38.8777 42.3778 39.7434 44.864 40.842V40.842ZM43.498 42.43C41.2138 41.4602 38.8482 40.6946 36.429 40.142C34.829 43.926 32.484 47.135 29.392 49.761C34.7912 48.9937 39.7672 46.4077 43.498 42.43V42.43ZM44.862 11.159C42.3723 12.2589 39.7859 13.1253 37.136 13.747C38.286 17.092 38.903 20.845 38.989 25H49.979C49.7769 19.9619 47.9857 15.117 44.862 11.159V11.159ZM43.496 9.571C39.7531 5.57731 34.7549 2.98647 29.334 2.23C32.444 4.856 34.804 8.07 36.414 11.861C38.8377 11.3085 41.2077 10.5422 43.496 9.571V9.571ZM34.41 12.27C32.58 8.143 29.776 4.792 26 2.203C22.224 4.793 19.42 8.143 17.589 12.27C20.296 12.757 23.099 13 26 13C28.9 13 31.704 12.757 34.411 12.27H34.41ZM8.504 9.57C10.784 10.539 13.144 11.302 15.586 11.86C17.196 8.07 19.556 4.855 22.666 2.229C17.2451 2.98547 12.2469 5.57631 8.504 9.57V9.57Z" transform="translate(3 3)" fill="#333333" />
                </svg>

                <span class="h6 mb-2">Multinational</span>
              </div>
            </a>
          </div>
        </div>

      </div>
    </section>
    <section class="pt-0">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <span>&#x1F389; Use this handy bar to announce new features and call your users to <a href="#">perform an action</a>.</span>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-5 align-self-center mb-3 mb-lg-0">
            <div class="pr-lg-4">
              <span class="h2 d-block">A video to demontstrate your product or service</span>
              <p class="lead mb-0">Include some additional text here to help describe an important facet of your product or service.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="video-cover rounded">
              <img alt="Image" src="assets/img/header-11.jpg" class="bg-image">
              <div class="video-play-icon"></div>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/DYaq2sWTWAA?rel=0&amp;showinfo=0&amp;autoplay=1" allowfullscreen allow="autoplay; encrypted-media"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white o-hidden">
      <div class="container">
        <div class="slider-highlight-selected" data-flickity="{ &quot;cellAlign&quot;: &quot;center&quot;, &quot;contain&quot;: true, &quot;imagesLoaded&quot;: true, &quot;wrapAround&quot;: true }">
          <div class="col-md-6 col-xl-5 text-center carousel-cell">
            <div class="d-flex justify-content-center mb-3">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="h4 d-block">&#x201C;Using Insight has allowed me to expand my business beyond my wildest dreams, the team knew all the tricks.&#x201D;</span>
            <img src="assets/img/avatar-male-3.jpg" alt="Adam Richards, Business Owner" class="avatar mr-2">
            <span class="d-block mt-2">Adam Richards, Business Owner</span>
          </div>
          <div class="col-md-6 col-xl-5 text-center carousel-cell">
            <div class="d-flex justify-content-center mb-3">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="h4 d-block">&#x201C;After Insight, I can&apos;t see myself going back to the old way of doings things. It has been a total life-saver!&#x201D;</span>
            <img src="assets/img/avatar-female-3.jpg" alt="Lou-Anne, Freelancer" class="avatar mr-2">
            <span class="d-block mt-2">Lou-Anne, Freelancer</span>
          </div>
          <div class="col-md-6 col-xl-5 text-center carousel-cell">
            <div class="d-flex justify-content-center mb-3">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="h4 d-block">&#x201C;Big ups for the support team. They were on-hand to assist me within minutes and were all too happy to help.&#x201D;</span>
            <img src="assets/img/avatar-male-4.jpg" alt="Jason Tyrell" class="avatar mr-2">
            <span class="d-block mt-2">Jason Tyrell</span>
          </div>
          <div class="col-md-6 col-xl-5 text-center carousel-cell">
            <div class="d-flex justify-content-center mb-3">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="h4 d-block">&#x201C;Couldn&apos;t be happier with the work.&#x201D;</span>
            <img src="assets/img/avatar-female-2.jpg" alt="Abigail Standley" class="avatar mr-2">
            <span class="d-block mt-2">Abigail Standley</span>
          </div>
        </div>
      </div>
    </section>
    <section class="pb-0 pt-3">
      <div class="container">
        <section class="pt-md-4 pb-md-0">
          <div class="container">
            <div class="row align-items-center justify-content-around">
              <div class="col-lg-5 col-md-6">
                <span class="h2 d-block">Dedicated to high quality customer service.</span>
                <p class="lead mb-4">Insight includes everything you&apos;ll need to build a beautiful website.</p>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block mr-3 icon icon-sm">
                        <path d="M30.707 0.292999C30.8 0.385738 30.8738 0.495938 30.924 0.617268C30.9743 0.738597 31.0001 0.868664 31 1V10.033C31 10.2982 31.1054 10.5526 31.2929 10.7401C31.4804 10.9276 31.7348 11.033 32 11.033L34.989 11C35.2542 10.9971 35.5097 11.0996 35.6993 11.2851C35.8889 11.4706 35.9971 11.7238 36 11.989C36.0029 12.2542 35.9004 12.5097 35.7149 12.6993C35.5294 12.8889 35.2762 12.9971 35.011 13L32.033 13.033H32C31.2044 13.033 30.4413 12.7169 29.8787 12.1543C29.3161 11.5917 29 10.8287 29 10.033V2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V45C2 45.2652 2.10536 45.5196 2.29289 45.7071C2.48043 45.8946 2.73478 46 3 46H39C39.2652 46 39.5196 45.8946 39.7071 45.7071C39.8946 45.5196 40 45.2652 40 45V12.071L34.69 6.703C34.5913 6.6112 34.5122 6.5004 34.4574 6.37726C34.4026 6.25411 34.3733 6.12116 34.3712 5.98639C34.3691 5.85162 34.3942 5.71782 34.4452 5.59303C34.4961 5.46823 34.5717 5.35501 34.6675 5.26018C34.7633 5.16534 34.8772 5.09085 35.0025 5.04118C35.1278 4.9915 35.2618 4.96766 35.3966 4.9711C35.5313 4.97454 35.664 5.00519 35.7866 5.06119C35.9092 5.11719 36.0192 5.1974 36.11 5.297L42 11.249V45C42 45.7956 41.6839 46.5587 41.1213 47.1213C40.5587 47.6839 39.7956 48 39 48H3C2.20435 48 1.44129 47.6839 0.878679 47.1213C0.31607 46.5587 0 45.7956 0 45V3C0 2.20435 0.31607 1.44129 0.878679 0.878679C1.44129 0.31607 2.20435 0 3 0H30C30.276 0 30.526 0.111999 30.707 0.292999ZM10 19C10 18.448 10.5 18 11.121 18H30.88C31.499 18 32.001 18.464 32.001 19C32.001 19.552 31.501 20 30.88 20H11.12C10.502 20 10 19.536 10 19ZM10 26C10 25.448 10.5 25 11.121 25H30.88C31.499 25 32.001 25.464 32.001 26C32.001 26.552 31.501 27 30.88 27H11.12C10.502 27 10 26.536 10 26ZM10 33C10 32.448 10.296 32 10.663 32H22.337C22.703 32 23 32.464 23 33C23 33.552 22.704 34 22.337 34H10.663C10.297 34 10 33.536 10 33ZM28 36C27.2044 36 26.4413 35.6839 25.8787 35.1213C25.3161 34.5587 25 33.7956 25 33C25 32.2044 25.3161 31.4413 25.8787 30.8787C26.4413 30.3161 27.2044 30 28 30C28.7956 30 29.5587 30.3161 30.1213 30.8787C30.6839 31.4413 31 32.2044 31 33C31 33.7956 30.6839 34.5587 30.1213 35.1213C29.5587 35.6839 28.7956 36 28 36ZM28 34C28.2652 34 28.5196 33.8946 28.7071 33.7071C28.8946 33.5196 29 33.2652 29 33C29 32.7348 28.8946 32.4804 28.7071 32.2929C28.5196 32.1054 28.2652 32 28 32C27.7348 32 27.4804 32.1054 27.2929 32.2929C27.1054 32.4804 27 32.7348 27 33C27 33.2652 27.1054 33.5196 27.2929 33.7071C27.4804 33.8946 27.7348 34 28 34Z" transform="translate(8 5)" fill="#333333" />
                      </svg>

                      <span class="mb-0 h6">Browse the Knowledgebase</span>
                    </div>
                    <i class="material-icons d-block">keyboard_arrow_right</i>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block mr-3 icon icon-sm">
                                <path d="M30.707 0.292999C30.8 0.385738 30.8738 0.495938 30.924 0.617268C30.9743 0.738597 31.0001 0.868664 31 1V10.033C31 10.2982 31.1054 10.5526 31.2929 10.7401C31.4804 10.9276 31.7348 11.033 32 11.033L34.989 11C35.2542 10.9971 35.5097 11.0996 35.6993 11.2851C35.8889 11.4706 35.9971 11.7238 36 11.989C36.0029 12.2542 35.9004 12.5097 35.7149 12.6993C35.5294 12.8889 35.2762 12.9971 35.011 13L32.033 13.033H32C31.2044 13.033 30.4413 12.7169 29.8787 12.1543C29.3161 11.5917 29 10.8287 29 10.033V2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V45C2 45.2652 2.10536 45.5196 2.29289 45.7071C2.48043 45.8946 2.73478 46 3 46H39C39.2652 46 39.5196 45.8946 39.7071 45.7071C39.8946 45.5196 40 45.2652 40 45V12.071L34.69 6.703C34.5913 6.6112 34.5122 6.5004 34.4574 6.37726C34.4026 6.25411 34.3733 6.12116 34.3712 5.98639C34.3691 5.85162 34.3942 5.71782 34.4452 5.59303C34.4961 5.46823 34.5717 5.35501 34.6675 5.26018C34.7633 5.16534 34.8772 5.09085 35.0025 5.04118C35.1278 4.9915 35.2618 4.96766 35.3966 4.9711C35.5313 4.97454 35.664 5.00519 35.7866 5.06119C35.9092 5.11719 36.0192 5.1974 36.11 5.297L42 11.249V45C42 45.7956 41.6839 46.5587 41.1213 47.1213C40.5587 47.6839 39.7956 48 39 48H3C2.20435 48 1.44129 47.6839 0.878679 47.1213C0.31607 46.5587 0 45.7956 0 45V3C0 2.20435 0.31607 1.44129 0.878679 0.878679C1.44129 0.31607 2.20435 0 3 0H30C30.276 0 30.526 0.111999 30.707 0.292999ZM10 19C10 18.448 10.5 18 11.121 18H30.88C31.499 18 32.001 18.464 32.001 19C32.001 19.552 31.501 20 30.88 20H11.12C10.502 20 10 19.536 10 19ZM10 26C10 25.448 10.5 25 11.121 25H30.88C31.499 25 32.001 25.464 32.001 26C32.001 26.552 31.501 27 30.88 27H11.12C10.502 27 10 26.536 10 26ZM10 33C10 32.448 10.296 32 10.663 32H22.337C22.703 32 23 32.464 23 33C23 33.552 22.704 34 22.337 34H10.663C10.297 34 10 33.536 10 33ZM28 36C27.2044 36 26.4413 35.6839 25.8787 35.1213C25.3161 34.5587 25 33.7956 25 33C25 32.2044 25.3161 31.4413 25.8787 30.8787C26.4413 30.3161 27.2044 30 28 30C28.7956 30 29.5587 30.3161 30.1213 30.8787C30.6839 31.4413 31 32.2044 31 33C31 33.7956 30.6839 34.5587 30.1213 35.1213C29.5587 35.6839 28.7956 36 28 36ZM28 34C28.2652 34 28.5196 33.8946 28.7071 33.7071C28.8946 33.5196 29 33.2652 29 33C29 32.7348 28.8946 32.4804 28.7071 32.2929C28.5196 32.1054 28.2652 32 28 32C27.7348 32 27.4804 32.1054 27.2929 32.2929C27.1054 32.4804 27 32.7348 27 33C27 33.2652 27.1054 33.5196 27.2929 33.7071C27.4804 33.8946 27.7348 34 28 34Z" transform="translate(8 5)" fill="#333333" />
                              </svg>
                      <span class="mb-0 h6">Speak with a team member</span>
                    </div>
                    <i class="material-icons d-block">keyboard_arrow_right</i>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-md-4">
                <img src="assets/img/female-isolated-1.jpg" alt="Image" class="d-none d-md-block">
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <section class="bg-primary">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-12 text-center">
            <span class="d-block mb-3 h2 text-white">Start building beautiful block-based websites.</span>
            <a class="btn btn-light btn-lg" href="#">Learn More</a>
            <span class="d-block mt-3 mt-3 text-white">Available exclusively at Bootstrap Themes.</span>
          </div>
        </div>
      </div>
    </section>

    <footer class="spacer-y-3 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3 mb-3 mb-md-0">
            <h5 class="text-white">Product</h5>
            <ul class="list-unstyled">
              <li class="py-0 py-md-1"><a href="#" class="text-white">Features</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Pricing</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Case studies</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Signup</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Support</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-3 mb-md-0">
            <h5 class="text-white">Company</h5>
            <ul class="list-unstyled">
              <li class="py-0 py-md-1"><a href="#" class="text-white">About us</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Leadership Team</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Careers</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Press</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-3 mb-3 mb-md-0">
            <h5 class="text-white">Help &amp; Support</h5>
            <ul class="list-unstyled">
              <li class="py-0 py-md-1"><a href="#" class="text-white">Contact us</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Locate a branch</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">Important information</a></li>
              <li class="py-0 py-md-1"><a href="#" class="text-white">FAQs</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-3">
            <ul class="list-social-links">
              <li class="text-white"><a href="#"><i class="socicon-facebook"></i></a></li>
              <li class="text-white"><a href="#"><i class="socicon-twitter"></i></a></li>
              <li class="text-white"><a href="#"><i class="socicon-youtube"></i></a></li>
              <li class="text-white"><a href="#"><i class="socicon-linkedin"></i></a></li>
              <li class="text-white"><a href="#"><i class="socicon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-3 mt-md-4">
          <div class="col">
            <span class="text-small text-white opacity-50">&#xA9; 2018 Medium Rare ABN: 88 88888 88888 and Australian Credit License No 88888888</span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <ul class="list-unstyled d-flex list-pipe-separator">
              <li><a href="#" class="text-white text-small">Privacy Policy</a></li>
              <li><a href="#" class="text-white text-small">Terms and Conditions</a></li>
              <li><a href="#" class="text-white text-small">Information Statement</a></li>
              <li><a href="#" class="text-white text-small">Sitemap</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.10.0/prism.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.polyfills.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/scrollmonitor@1.2.4/scrollMonitor.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/jquery-countdown@2.2.0/dist/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/smartwizard@4.3.1/dist/js/jquery.smartWizard.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fancyapps/fancybox@3.3.5/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/zoom-vanilla.js@2.0.6/dist/zoom-vanilla.min.js"></script>
    <script type="text/javascript" src="assets/js/theme.js"></script>

  </body>
</html>