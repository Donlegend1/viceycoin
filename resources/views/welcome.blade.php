<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        <link rel="stylesheet" href="/css/output.css">
        <link rel="icon" href="favicon.ico"><link href="style.css" rel="stylesheet"></head>

    </head>
    <body x-data="
    {
      scrolledFromTop: false
    }
  " x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" class="kf fl">
  <!-- ===== Header start ===== -->
  <div id="app"></div>
  <!-- ===== Header end ===== -->

 

  <!-- ===== Brands Section start ===== -->
  <section>
    <div class="a">
      <div class="wow fadeInUp ue bf yh al" data-wow-delay="0s">
        <h2 class="ra fi gi pi yi vl en">
          Join the 20,000+ companies using the our platform
        </h2>

        <div class="ha qb _d be de">
          <div class="ng">
            <a href="index-1.htm" target="_blank" rel="nofollow noopenner" class="ra qb hd de hj nj nk ok gm">
              <img src="/images/brands/uideck-white.svg" alt="uideck" class="la sb ac fi wk">
              <img src="/images/brands/uideck.svg" alt="uideck" class="la ac fi xk">
            </a>
          </div>
          <div class="ng">
            <a href="https://tailgrids.com" target="_blank" rel="nofollow noopenner" class="ra qb hd de hj nj nk ok gm">
              <img src="/images/brands/TailGrids-white.svg" alt="tailgrids" class="la sb ac fi wk">
              <img src="/images/brands/tailgrids.svg" alt="tailgrids" class="la ac fi xk">
            </a>
          </div>
          <div class="ng">
            <a href="https://lineicons.com" target="_blank" rel="nofollow noopenner" class="ra qb hd de hj nj nk ok gm">
              <img src="/images/brands/LineIcons-white.svg" alt="lineicons" class="la sb ac fi wk">
              <img src="/images/brands/lineicons.svg" alt="lineicons" class="la ac fi xk">
            </a>
          </div>
          <div class="ng">
            <a href="https://ayroui.com" target="_blank" rel="nofollow noopenner" class="ra qb hd de hj nj nk ok gm">
              <img src="/images/brands/AyroUI-white.svg" alt="ayroui" class="la sb ac fi wk">
              <img src="/images/brands/ayroui.svg" alt="ayroui" class="la ac fi xk">
            </a>
          </div>
          <div class="ng">
            <a href="index-2.htm" target="_blank" rel="nofollow noopenner" class="ra qb hd de hj nj nk ok gm">
              <img src="/images/brands/PlainAdmin-white.svg" alt="plainadmin" class="la sb ac fi wk">
              <img src="/images/brands/plainadmin.svg" alt="plainadmin" class="la ac fi xk">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Brands Section end ===== -->

  <!-- ===== Features Section start ===== -->
  <section id="features" class="th zh">
    <div class="a">
      <div class="wow fadeInUp la fb id fi qn" data-wow-delay="0s">
        <span class="va gi pi ri bj fn">
          CRYPTO FEATURE
        </span>
        <h2 class="va li pi ui yi vl bo">
          Best Features
        </h2>
        <p class="gi qi xi ul">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed
          congue arcu, In et dignissim quam condimentum vel.
        </p>
      </div>

      <div class="ha qb _d">
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.66675L5 8.33341V18.3334C5 27.5834 11.4 36.2334 20 38.3334C28.6 36.2334 35 27.5834 35 18.3334V8.33341L20 1.66675ZM20 19.9834H31.6667C30.7833 26.8501 26.2 32.9667 20 34.8834V20.0001H8.33333V10.5001L20 5.31675V19.9834Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Safe & Secure
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.3333 9.99992H29.6999C29.8833 9.48325 29.9999 8.91658 29.9999 8.33325C29.9999 5.56659 27.7666 3.33325 24.9999 3.33325C23.2499 3.33325 21.7333 4.23325 20.8333 5.58325L19.9999 6.69992L19.1666 5.56659C18.2666 4.23325 16.7499 3.33325 14.9999 3.33325C12.2333 3.33325 9.99992 5.56659 9.99992 8.33325C9.99992 8.91658 10.1166 9.48325 10.2999 9.99992H6.66659C4.81659 9.99992 3.34992 11.4833 3.34992 13.3333L3.33325 31.6666C3.33325 33.5166 4.81659 34.9999 6.66659 34.9999H33.3333C35.1833 34.9999 36.6666 33.5166 36.6666 31.6666V13.3333C36.6666 11.4833 35.1833 9.99992 33.3333 9.99992ZM24.9999 6.66659C25.9166 6.66659 26.6666 7.41658 26.6666 8.33325C26.6666 9.24992 25.9166 9.99992 24.9999 9.99992C24.0833 9.99992 23.3333 9.24992 23.3333 8.33325C23.3333 7.41658 24.0833 6.66659 24.9999 6.66659ZM14.9999 6.66659C15.9166 6.66659 16.6666 7.41658 16.6666 8.33325C16.6666 9.24992 15.9166 9.99992 14.9999 9.99992C14.0833 9.99992 13.3333 9.24992 13.3333 8.33325C13.3333 7.41658 14.0833 6.66659 14.9999 6.66659ZM33.3333 31.6666H6.66659V28.3333H33.3333V31.6666ZM33.3333 23.3333H6.66659V13.3333H15.1333L11.6666 18.0499L14.3666 19.9999L18.3333 14.5999L19.9999 12.3333L21.6666 14.5999L25.6333 19.9999L28.3333 18.0499L24.8666 13.3333H33.3333V23.3333Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Early Bonus
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33325L10.8334 18.3333H29.1667L20 3.33325Z" fill="white"></path>
                <path d="M29.1666 36.6667C33.3088 36.6667 36.6666 33.3089 36.6666 29.1667C36.6666 25.0246 33.3088 21.6667 29.1666 21.6667C25.0245 21.6667 21.6666 25.0246 21.6666 29.1667C21.6666 33.3089 25.0245 36.6667 29.1666 36.6667Z" fill="white"></path>
                <path d="M5 22.5H18.3333V35.8333H5V22.5Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Universal Access
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 24.9999H18.3333V21.6666H5V24.9999ZM5 31.6666H18.3333V28.3333H5V31.6666ZM5 18.3333H18.3333V14.9999H5V18.3333ZM5 8.33325V11.6666H18.3333V8.33325H5ZM21.6667 8.33325H35V31.6666H21.6667V8.33325Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Secure Storage
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 30V31.6667C35 33.5 33.5 35 31.6667 35H8.33333C6.48333 35 5 33.5 5 31.6667V8.33333C5 6.5 6.48333 5 8.33333 5H31.6667C33.5 5 35 6.5 35 8.33333V10H20C18.15 10 16.6667 11.5 16.6667 13.3333V26.6667C16.6667 28.5 18.15 30 20 30H35ZM20 26.6667H36.6667V13.3333H20V26.6667ZM26.6667 22.5C25.2833 22.5 24.1667 21.3833 24.1667 20C24.1667 18.6167 25.2833 17.5 26.6667 17.5C28.05 17.5 29.1667 18.6167 29.1667 20C29.1667 21.3833 28.05 22.5 26.6667 22.5Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Low Cost
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2 yo/3">
          <div class="wow fadeInUp la bb jd fi" data-wow-delay="0s">
            <div class="la gb qb cc mc be de oe of zi">
              <svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 13.3333C16.3167 13.3333 13.3333 16.3167 13.3333 20C13.3333 23.6833 16.3167 26.6667 20 26.6667C23.6833 26.6667 26.6667 23.6833 26.6667 20C26.6667 16.3167 23.6833 13.3333 20 13.3333ZM8.33333 25H5V31.6667C5 33.5 6.5 35 8.33333 35H15V31.6667H8.33333V25ZM8.33333 8.33333H15V5H8.33333C6.5 5 5 6.5 5 8.33333V15H8.33333V8.33333ZM31.6667 5H25V8.33333H31.6667V15H35V8.33333C35 6.5 33.5 5 31.6667 5ZM31.6667 31.6667H25V35H31.6667C33.5 35 35 33.5 35 31.6667V25H31.6667V31.6667Z" fill="white"></path>
              </svg>
            </div>

            <div>
              <h3 class="va ji pi yi vl gn rp rq">
                Several Profit
              </h3>

              <p class="ii qi xi ul dn qp pq">
                Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod
                tempor labore labore labore et dolor .
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Features Section end ===== -->

  <!-- ===== Token Section start ===== -->

  <!-- ===== Token Section end ===== -->

  <!-- ===== Roadmap Section start ===== -->
  <section id="roadmap" class="e ca gh">
    <div class="a">
      <div class="wow fadeInUp la fb id fi qn" data-wow-delay="0s">
        <span class="va gi pi ri bj fn">
          ROADMAP
        </span>
        <h2 class="va li pi ui yi vl bo">
          The Timeline
        </h2>
        <p class="gi qi xi ul">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed
          congue arcu, In et dignissim quam condimentum vel.
        </p>
      </div>

      <div class="ha qb de">
        <div class="jc ng zo/12 iq/12">
          <div class="wow fadeInUp e ha qb _d yn mp" data-wow-delay="0s">
            <span class="d f w sb yb sc nf nl ln/2 un"></span>
            <div class="jc ng vn/2">
              <div class="e ca ra me nf hh sg gl rn sn ao oo">
                <span class="d h/2 l sb ec tc qd/2 oe te df kf bl mn nn un io"></span>
                <span class="d x h/2 sb bc qc qd/2 sd nf gl un"></span>
                <h3 class="va ji pi yi vl">
                  Feb 25,2020
                </h3>
                <p class="za ii qi xi ul">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed congue arcu, In et dignissim quam condimentum vel
                </p>

                <a href="" class="rb be de oe kf ig _h">
                  <span class="uh">
                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7287 11.1771C16.5267 15.9986 11.6433 18.9329 6.82128 17.7306C2.00125 16.5285 -0.933006 11.6449 0.269537 6.82378C1.47102 2.00177 6.3544 -0.932704 11.175 0.269311C15.9966 1.47133 18.9307 6.35553 17.7286 11.1772L17.7287 11.1771H17.7287Z" fill="#F7931A"></path>
                      <path d="M13.1113 8.32768C13.2804 7.19652 12.4193 6.58848 11.2416 6.18285L11.6237 4.65059L10.6909 4.41817L10.319 5.91009C10.0738 5.84893 9.82201 5.79131 9.57173 5.73418L9.94632 4.23242L9.01417 4L8.63193 5.53176C8.42902 5.48556 8.22972 5.4399 8.03636 5.39179L8.03744 5.38697L6.75117 5.06577L6.50305 6.06199C6.50305 6.06199 7.19507 6.22062 7.18048 6.23038C7.55819 6.32465 7.62649 6.57468 7.61515 6.77286L7.17998 8.51847C7.20599 8.52507 7.23973 8.53463 7.27695 8.54959C7.24584 8.54186 7.21272 8.53343 7.17836 8.5252L6.56841 10.9705C6.52225 11.0853 6.40509 11.2575 6.14101 11.1921C6.15036 11.2057 5.46309 11.0229 5.46309 11.0229L5 12.0906L6.2138 12.3932C6.43961 12.4498 6.66089 12.5091 6.87881 12.5648L6.49283 14.1146L7.42449 14.347L7.80672 12.8137C8.06124 12.8828 8.30824 12.9465 8.55005 13.0066L8.1691 14.5327L9.10188 14.7651L9.48781 13.2182C11.0783 13.5192 12.2743 13.3979 12.7776 11.9592C13.1833 10.801 12.7574 10.1329 11.9207 9.69725C12.5301 9.55669 12.9892 9.15584 13.1116 8.32781L13.1113 8.3276L13.1113 8.32768ZM10.9802 11.316C10.6919 12.4743 8.74179 11.8481 8.10952 11.6911L8.62171 9.63788C9.25394 9.79571 11.2814 10.1081 10.9802 11.316H10.9802ZM11.2686 8.3109C11.0057 9.36445 9.38257 8.8292 8.85604 8.69795L9.32041 6.83576C9.84694 6.96701 11.5426 7.21197 11.2687 8.3109H11.2686Z" fill="white"></path>
                    </svg>
                  </span>
                  <span class="rh ki oi xi ul">
                    Bitcoin
                  </span>

                  <span class="ni oi xi wl">
                    4.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B"></path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="jc ng vn/2"></div>
            <div class="jc ng vn/2"></div>
            <div class="jc ng vn/2">
              <div class="e ca ra me nf hh sg gl tn sn po">
                <span class="d h/2 l sb ec tc qd/2 oe te df kf bl on pn un jo"></span>
                <span class="d y h/2 sb bc qc qd/2 sd nf gl un"></span>
                <h3 class="va ji pi yi vl">
                  Jan 14,2021
                </h3>
                <p class="za ii qi xi ul">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed congue arcu, In et dignissim quam condimentum vel
                </p>

                <a href="" class="rb be de oe kf ig _h">
                  <span class="uh">
                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7307 11.1771C16.5286 15.9986 11.6446 18.9329 6.82205 17.7306C2.00148 16.5285 -0.933111 11.6449 0.269567 6.82378C1.47119 2.00177 6.35511 -0.932704 11.1762 0.269311C15.9985 1.47133 18.9329 6.35553 17.7306 11.1772L17.7307 11.1771H17.7307Z" fill="#1181E7"></path>
                      <g clip-path="url(#clip0_27_564)">
                        <path d="M8.99897 4L8.93188 4.22789V10.84L8.99897 10.907L12.0682 9.09273L8.99897 4Z" fill="#D6D6D6"></path>
                        <path d="M8.99899 4L5.92969 9.09273L8.99899 10.907V7.69762V4Z" fill="white"></path>
                        <path d="M8.99899 11.4881L8.96118 11.5342V13.8896L8.99899 13.9999L12.0701 9.6748L8.99899 11.4881Z" fill="#D6D6D6"></path>
                        <path d="M8.99899 13.9999V11.4881L5.92969 9.6748L8.99899 13.9999Z" fill="white"></path>
                        <path d="M8.99902 10.907L12.0682 9.09274L8.99902 7.69763V10.907Z" fill="#F3F3F3"></path>
                        <path d="M5.92969 9.09274L8.99899 10.907V7.69763L5.92969 9.09274Z" fill="#E2E2E2"></path>
                      </g>
                      <defs>
                        <clippath id="clip0_27_564">
                          <rect width="10" height="10" fill="white" transform="translate(4 4)"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </span>
                  <span class="rh ki oi xi ul">
                    ethereum
                  </span>

                  <span class="ni oi xi wl">
                    2.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B"></path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="jc ng vn/2">
              <div class="e ca ra me nf hh sg gl rn sn ao oo">
                <span class="d h/2 l sb ec tc qd/2 oe te df kf bl mn nn un io"></span>
                <span class="d x h/2 sb bc qc qd/2 sd nf gl un"></span>
                <h3 class="va ji pi yi vl">
                  Mar 30,2021
                </h3>
                <p class="za ii qi xi ul">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed congue arcu, In et dignissim quam condimentum vel
                </p>

                <a href="" class="rb be de oe kf ig _h">
                  <span class="uh">
                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7287 11.1771C16.5267 15.9986 11.6433 18.9329 6.82128 17.7306C2.00125 16.5285 -0.933006 11.6449 0.269537 6.82378C1.47102 2.00177 6.3544 -0.932704 11.175 0.269311C15.9966 1.47133 18.9307 6.35553 17.7286 11.1772L17.7287 11.1771H17.7287Z" fill="#295ADA"></path>
                      <path d="M9 4L8.15344 4.47477L5.84656 5.77523L5 6.25V10.75L5.84656 11.2248L8.1746 12.5252L9.02116 13L9.86772 12.5252L12.1534 11.2248L13 10.75V6.25L12.1534 5.77523L9.84656 4.47477L9 4ZM6.69312 9.80046V7.19954L9 5.89908L11.3069 7.19954V9.80046L9 11.1009L6.69312 9.80046Z" fill="white"></path>
                    </svg>
                  </span>
                  <span class="rh ki oi xi ul">
                    chainlink
                  </span>

                  <span class="ni oi xi wl">
                    4.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B"></path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="jc ng vn/2"></div>
            <div class="jc ng vn/2"></div>
            <div class="jc ng vn/2">
              <div class="e ca ra me nf hh sg gl tn sn po">
                <span class="d h/2 l sb ec tc qd/2 oe te df kf bl on pn un jo"></span>
                <span class="d y h/2 sb bc qc qd/2 sd nf gl un"></span>
                <h3 class="va ji pi yi vl">
                  Dec 19,2021
                </h3>
                <p class="za ii qi xi ul">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed congue arcu, In et dignissim quam condimentum vel
                </p>

                <a href="" class="rb be de oe kf ig _h">
                  <span class="uh">
                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7307 11.1771C16.5286 15.9986 11.6446 18.9329 6.82205 17.7306C2.00148 16.5285 -0.933111 11.6449 0.269567 6.82378C1.47119 2.00177 6.35511 -0.932704 11.1762 0.269311C15.9985 1.47133 18.9329 6.35553 17.7306 11.1772L17.7307 11.1771H17.7307Z" fill="#8247E5"></path>
                      <path d="M11.5718 7.75074C11.389 7.64392 11.154 7.64392 10.9452 7.75074L9.48303 8.63205L8.49086 9.19288L7.05483 10.0742C6.87206 10.181 6.63708 10.181 6.4282 10.0742L5.30548 9.37982C5.12272 9.273 4.99217 9.05935 4.99217 8.81899V7.48368C4.99217 7.27003 5.09661 7.05638 5.30548 6.92285L6.4282 6.25519C6.61097 6.14837 6.84595 6.14837 7.05483 6.25519L8.17755 6.94956C8.36031 7.05638 8.49086 7.27003 8.49086 7.51039V8.39169L9.48303 7.80415V6.89614C9.48303 6.68249 9.37859 6.46884 9.16971 6.33531L7.08094 5.08012C6.89817 4.97329 6.66319 4.97329 6.45431 5.08012L4.31332 6.36202C4.10444 6.46884 4 6.68249 4 6.89614V9.40653C4 9.62018 4.10444 9.83383 4.31332 9.96736L6.4282 11.2226C6.61097 11.3294 6.84595 11.3294 7.05483 11.2226L8.49086 10.368L9.48303 9.78042L10.9191 8.92582C11.1018 8.81899 11.3368 8.81899 11.5457 8.92582L12.6684 9.59347C12.8512 9.7003 12.9817 9.91395 12.9817 10.1543V11.4896C12.9817 11.7033 12.8773 11.9169 12.6684 12.0504L11.5718 12.7181C11.389 12.8249 11.154 12.8249 10.9452 12.7181L9.82245 12.0504C9.63969 11.9436 9.50914 11.73 9.50914 11.4896V10.635L8.51697 11.2226V12.1039C8.51697 12.3175 8.62141 12.5312 8.83029 12.6647L10.9452 13.9199C11.1279 14.0267 11.3629 14.0267 11.5718 13.9199L13.6867 12.6647C13.8695 12.5579 14 12.3442 14 12.1039V9.56677C14 9.35312 13.8956 9.13947 13.6867 9.00594L11.5718 7.75074Z" fill="white"></path>
                    </svg>
                  </span>
                  <span class="rh ki oi xi ul">
                    polygon
                  </span>

                  <span class="ni oi xi wl">
                    2.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B"></path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d l n ea">
      <img src="/images/shapes/timeline.svg" alt="shape">
    </div>
  </section>
  <!-- ===== Roadmap Section end ===== -->

  <!-- ===== Testimonial Section start ===== -->
  <section id="testimonial" class="nf th oh ml">
    <div class="a">
      <div class="wow fadeInUp la fb id fi qn" data-wow-delay="0s">
        <span class="va gi pi ri bj fn">
          TESTIMONIALS
        </span>
        <h2 class="va li pi ui yi vl bo">
          What Our Client Say's
        </h2>
        <p class="gi qi xi ul">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed
          congue arcu, In et dignissim quam condimentum vel.
        </p>
      </div>

      <div class="ha qb _d">
        <div class="jc ng vn/2">
          <div class="wow fadeInUp e ca ra ke qe kf sg hh ol um xn mq" data-wow-delay="0s">
            <div class="d m f da">
              <img src="/images/shapes/testimonial-shape.svg" alt="shape">
            </div>
            <div class="xa qb be">
              <div class="sa cc jc kd ke ne">
                <image src="/images/testimonials/image-01.jpg" alt="author"></image>
              </div>
              <div class="jc">
                <h3 class="jb gi oi aj vl">
                  Jason Keys
                </h3>
                <p class="hi qi xi vl">
                  CEO & Founder @ Dreampeet.
                </p>
              </div>
            </div>
            <div>
              <p class="ii qi ti xi ul">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2">
          <div class="wow fadeInUp e ca ra ke qe kf sg hh ol um xn mq" data-wow-delay="0s">
            <div class="d m f da">
              <img src="/images/shapes/testimonial-shape.svg" alt="shape">
            </div>
            <div class="xa qb be">
              <div class="sa cc jc kd ke ne">
                <image src="/images/testimonials/image-02.jpg" alt="author"></image>
              </div>
              <div class="jc">
                <h3 class="jb gi oi aj vl">
                  Mariya Merry
                </h3>
                <p class="hi qi xi vl">
                  CEO & Founder @ Betex.
                </p>
              </div>
            </div>
            <div>
              <p class="ii qi ti xi ul">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2">
          <div class="wow fadeInUp e ca ra ke qe kf sg hh ol um xn mq" data-wow-delay="0s">
            <div class="d m f da">
              <img src="/images/shapes/testimonial-shape.svg" alt="shape">
            </div>
            <div class="xa qb be">
              <div class="sa cc jc kd ke ne">
                <image src="/images/testimonials/image-03.jpg" alt="author"></image>
              </div>
              <div class="jc">
                <h3 class="jb gi oi aj vl">
                  Andria Jolly
                </h3>
                <p class="hi qi xi vl">
                  CEO & Founder @ CryptoX.
                </p>
              </div>
            </div>
            <div>
              <p class="ii qi ti xi ul">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>
            </div>
          </div>
        </div>
        <div class="jc ng vn/2">
          <div class="wow fadeInUp e ca ra ke qe kf sg hh ol um xn mq" data-wow-delay="0s">
            <div class="d m f da">
              <img src="/images/shapes/testimonial-shape.svg" alt="shape">
            </div>
            <div class="xa qb be">
              <div class="sa cc jc kd ke ne">
                <image src="/images/testimonials/image-04.jpg" alt="author"></image>
              </div>
              <div class="jc">
                <h3 class="jb gi oi aj vl">
                  Devid Willium
                </h3>
                <p class="hi qi xi vl">
                  CEO & Founder @ Coinbase.
                </p>
              </div>
            </div>
            <div>
              <p class="ii qi ti xi ul">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Testimonial Section end ===== -->


  <!-- ===== Faq Section start ===== -->
  <section id="faq" x-data="
      {
        openFaq1: false,
        openFaq2: false,
        openFaq3: false,
        openFaq4: false,
        openFaq5: false,
      }
    " class="e ca nf ih ml">
    <div class="a">
      <div class="wow fadeInUp la fb ld fi qn" data-wow-delay="0s">
        <span class="va gi pi ri bj fn">
          FAQ
        </span>
        <h2 class="va li pi ui yi vl bo">
          Frequently Asked Questions
        </h2>
        <p class="la id gi qi xi ul">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed
          congue arcu, In et dignissim quam condimentum vel.
        </p>
      </div>

      <div class="ha qb _d de">
        <div class="jc ng _o/12 jq/12">
          <div class="single-faq wow fadeInUp ra me kf ah ch gl zn _n" data-wow-delay="0s">
            <button @click="openFaq1 = !openFaq1" class="faq-btn qb jc be ee ei">
              <h3 class="kb ii pi aj vl dn co">
                How can I participate in the ICO Token sale?
              </h3>
              <span class="icon rb gc jc md be de ne wf zi yl pl gi oi" :class="openFaq1 && 'ud' ">
                <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)"></rect>
                    </clippath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq1" class="faq-content">
              <p class="ar bi ii xi ul">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be sure there isn't anything.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp ra me kf ah ch gl zn _n" data-wow-delay="0s">
            <button @click="openFaq2 = !openFaq2" class="faq-btn qb jc be ee ei">
              <h3 class="kb ii pi aj vl dn co">
                What is ICO Crypto?
              </h3>
              <span class="icon rb gc jc md be de ne wf zi yl pl gi oi" :class="openFaq2 && 'ud' ">
                <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)"></rect>
                    </clippath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq2" class="faq-content">
              <p class="ar bi ii xi ul">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be sure there isn't anything.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp ra me kf ah ch gl zn _n" data-wow-delay="0s">
            <button @click="openFaq3 = !openFaq3" class="faq-btn qb jc be ee ei">
              <h3 class="kb ii pi aj vl dn co">
                How do I benefit from the ICO Token?
              </h3>
              <span class="icon rb gc jc md be de ne wf zi yl pl gi oi" :class="openFaq3 && 'ud' ">
                <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)"></rect>
                    </clippath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq3" class="faq-content">
              <p class="ar bi ii xi ul">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be sure there isn't anything.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp ra me kf ah ch gl zn _n" data-wow-delay="0s">
            <button @click="openFaq4 = !openFaq4" class="faq-btn qb jc be ee ei">
              <h3 class="kb ii pi aj vl dn co">
                How can i purchase bitcoin?
              </h3>
              <span class="icon rb gc jc md be de ne wf zi yl pl gi oi" :class="openFaq4 && 'ud' ">
                <svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)"></rect>
                    </clippath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq4" class="faq-content">
              <p class="ar bi ii xi ul">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be sure there isn't anything.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d l z ea">
      <img src="/images/shapes/faq-shape-1.svg" alt="shape">
    </div>
    <div class="d m _ ea">
      <img src="/images/shapes/faq-shape-2.svg" alt="shape">
    </div>
  </section>
  <!-- ===== Faq Section end ===== -->

  <!-- ===== Contact Section start ===== -->
  <section id="contact" class="nf gh ml">
    <div class="a">
      <div class="ha qb _d be">
        <div class="jc ng ap/12">
          <div class="wow fadeInUp fb nd" data-wow-delay="0s">
            <span class="va gi pi ri bj fn">
              Contact Us
            </span>
            <h2 class="va li pi ui yi vl bo">
              Let's talk about your problem.
            </h2>
          </div>

          <div class="ha qb _d">
            <div class="jc ng qm/2">
              <div class="wow fadeInUp lb _c" data-wow-delay="0s">
                <h3 class="pa gi oi aj vl">
                  Our Location
                </h3>
                <p class="ii qi wi xi ul">
                  401 Broadway, 24th Floor, Orchard Cloud View, London
                </p>
              </div>
            </div>
            <div class="jc ng qm/2">
              <div class="wow fadeInUp lb _c" data-wow-delay="0s">
                <h3 class="pa gi oi aj vl">
                  Email Address
                </h3>
                <p class="ii qi wi xi ul">
                  <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="1d74737b725d6472686f7972707c7473337e7270">[email&#160;protected]</a>
                </p>
                <p class="ii qi wi xi ul">
                  <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6b0804051f0a081f2b12041e190f04060a020545080406">[email&#160;protected]</a>
                </p>
              </div>
            </div>
            <div class="jc ng qm/2">
              <div class="wow fadeInUp lb _c" data-wow-delay="0s">
                <h3 class="pa gi oi aj vl">
                  Phone Number
                </h3>
                <p class="ii qi wi xi ul">
                  +990 846 73644
                </p>
                <p class="ii qi wi xi ul">
                  +550 9475 4543
                </p>
              </div>
            </div>
            <div class="jc ng qm/2">
              <div class="wow fadeInUp lb _c" data-wow-delay="0s">
                <h3 class="pa gi oi aj vl">
                  How Can We Help?
                </h3>
                <p class="ii qi wi xi ul">
                  Tell us your problem we will get back to you ASAP.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="jc ng bp/12">
          <div class="sm:ud-14 wow fadeInUp pe kf fh wg gl" data-wow-delay="0s">
            <h3 class="xa mi pi aj vl hn tp sq">
              Send us a Message
            </h3>

            <form>
              <div class="za">
                <label for="name" class="ya ob hi qi aj vl">
                  Full Name*
                </label>

                <input type="text" id="name" placeholder="Enter your full name" class="jc pe re ff if zg _g ii qi _i lj pk dl il tl">
              </div>
              <div class="za">
                <label for="email" class="ya ob hi qi aj vl">
                  Email Address*
                </label>

                <input type="email" id="email" placeholder="Enter your email address" class="jc pe re ff if zg _g ii qi _i lj pk dl il tl">
              </div>
              <div class="za">
                <label for="message" class="ya ob hi qi aj vl">
                  Message*
                </label>

                <textarea rows="6" id="message" placeholder="Type your message" class="jc pe re ff if zg _g ii qi _i lj pk dl il tl"></textarea>
              </div>
              <div>
                <button class="jc oe of lg fi ii oi zi hk il yl dm">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Contact Section end ===== -->

  <!-- ===== Newsletter Section start ===== -->
  <section id="newsletter" class="e ca">
    <div class="d f l ea hc jc nf ml"></div>
    <div class="a">
      <div class="wow fadeInUp e ca ke ne qf gg tm" data-wow-delay="0s">
        <div class="ha qb _d be">
          <div class="jc ng yo/2">
            <div class="ra no">
              <div class="cd">
                <h2 class="ya li pi ui zi bo">
                  Newsletter
                </h2>
                <p class="gi qi zi">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                  vitae quam nec ante aliquet fringilla vel at erat.
                </p>
              </div>
            </div>
          </div>
          <div class="jc pg yo/2">
            <div>
              <form class="e">
                <input type="email" placeholder="Enter email address" class="jc oe re _e kf xg bh ii qi xi lj ul an">
                <button class="o h/2 ab rb _b be oe of ch ii qi zi hk im mm rm/2">
                  Submit
                  <span class="sh">
                    <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.67496 17.5L19.1666 10L1.67496 2.5L1.66663 8.33333L14.1666 10L1.66663 11.6667L1.67496 17.5Z" fill="white"></path>
                    </svg>
                  </span>
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="d f m ea">
          <img src="/images/shapes/newsletter-shape.svg" alt="shape">
        </div>
      </div>
    </div>
  </section>
  <!-- ===== Newsletter Section end ===== -->

  <!-- ===== Footer start ===== -->
  <footer class="e ca th">
    <div class="a">
      <div class="ha qb _d">
        <div class="jc ng vn/2 wo/12 gq/12">
          <div class="wow fadeInUp bb dd eq" data-wow-delay="0s">
            <a href="/" class="ta pb">
              <img src="/images/logo/logo-white.svg" alt="logo" class="sb wk">
              <img src="/images/logo/logo.svg" alt="logo" class="xk">
            </a>
            <p class="ra ii qi xi ul">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
              vitae quam nec ante fringilla vel at erat convallis elit.
            </p>
            <div class="qb be ge">
              <a href="javascript:void(0)" class="qb ac pc be de oe nf xi fk lk gl vl bm" name="social-link" aria-label="social-link">
                <svg width="18" height="18" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.25 8.46875C7.6875 8.46875 7.28125 8.96875 7.28125 9.53125C7.28125 10.0938 7.71875 10.5938 8.25 10.5938C8.8125 10.5938 9.21875 10.125 9.21875 9.53125C9.25 8.9375 8.8125 8.46875 8.25 8.46875Z" fill="currentColor"></path>
                  <path d="M11.75 10.5625C12.285 10.5625 12.7187 10.0868 12.7187 9.5C12.7187 8.9132 12.285 8.4375 11.75 8.4375C11.215 8.4375 10.7812 8.9132 10.7812 9.5C10.7812 10.0868 11.215 10.5625 11.75 10.5625Z" fill="currentColor"></path>
                  <path d="M16.4687 0.3125H3.53125C2.4375 0.3125 1.53125 1.1875 1.53125 2.28125V15.375C1.53125 16.4688 2.40625 17.3438 3.5 17.3438H14.4687L13.9375 15.5938L15.1562 16.75L16.3437 17.8437L18.4062 19.6875V2.28125C18.5 1.1875 17.5625 0.3125 16.4687 0.3125ZM12.7187 12.9375C12.7187 12.9375 12.375 12.5313 12.0625 12.1563C13.3437 11.8125 13.8125 11 13.8125 11C13.4062 11.25 13.0312 11.4375 12.7187 11.5625C12.25 11.7812 11.75 11.9062 11.3125 11.9687C10.375 12.1562 9.5625 12.0937 8.8125 11.9687C8.25 11.875 7.8125 11.7188 7.40625 11.5625C7.1875 11.4687 6.90625 11.375 6.6875 11.25C6.65625 11.25 6.65625 11.2188 6.59375 11.2188C6.59375 11.2188 6.5625 11.2187 6.5625 11.1875C6.375 11.0937 6.3125 11 6.3125 11C6.3125 11 6.8125 11.7813 8.03125 12.1563C7.71875 12.5 7.375 12.9375 7.375 12.9375C5.21875 12.8438 4.4375 11.5 4.4375 11.5C4.4375 8.375 5.84375 5.875 5.84375 5.875C7.25 4.8125 8.5625 4.875 8.5625 4.875L8.65625 5C6.875 5.46875 6.09375 6.25 6.09375 6.25C6.09375 6.25 6.3125 6.125 6.65625 6C7.71875 5.5625 8.5 5.4375 8.84375 5.375C8.875 5.375 8.9375 5.375 9.03125 5.375C9.59375 5.28125 10.3125 5.28125 10.9687 5.375C11.9062 5.46875 12.875 5.78125 13.875 6.3125C13.875 6.3125 13.125 5.59375 11.4375 5.09375L11.5625 4.90625C11.5625 4.90625 12.875 4.875 14.2812 5.90625C14.2812 5.90625 15.6875 8.40625 15.6875 11.5313C15.7187 11.5 14.875 12.9063 12.7187 12.9375Z" fill="currentColor"></path>
                </svg>
              </a>
              <a href="javascript:void(0)" class="qb ac pc be de oe nf xi fk lk gl vl bm" name="social-link" aria-label="social-link">
                <svg width="18" height="15" viewbox="0 0 18 15" class="cg">
                  <path d="M17.7165 2.00016C17.0749 2.29183 16.3832 2.4835 15.6665 2.57516C16.3999 2.1335 16.9665 1.4335 17.2332 0.591829C16.5415 1.0085 15.7749 1.30016 14.9665 1.46683C14.3082 0.750163 13.3832 0.333496 12.3332 0.333496C10.3749 0.333496 8.77487 1.9335 8.77487 3.9085C8.77487 4.19183 8.8082 4.46683 8.86654 4.72516C5.89987 4.57516 3.2582 3.15016 1.49987 0.991829C1.19154 1.51683 1.01654 2.1335 1.01654 2.7835C1.01654 4.02516 1.64154 5.12516 2.6082 5.75016C2.01654 5.75016 1.46654 5.5835 0.983203 5.3335C0.983203 5.3335 0.983203 5.3335 0.983203 5.3585C0.983203 7.09183 2.21654 8.54183 3.84987 8.86683C3.54987 8.95016 3.2332 8.99183 2.9082 8.99183C2.6832 8.99183 2.4582 8.96683 2.24154 8.92516C2.69154 10.3335 3.99987 11.3835 5.57487 11.4085C4.3582 12.3752 2.81654 12.9418 1.1332 12.9418C0.84987 12.9418 0.566536 12.9252 0.283203 12.8918C1.86654 13.9085 3.74987 14.5002 5.76654 14.5002C12.3332 14.5002 15.9415 9.05016 15.9415 4.32516C15.9415 4.16683 15.9415 4.01683 15.9332 3.8585C16.6332 3.3585 17.2332 2.72516 17.7165 2.00016Z"></path>
                </svg>
              </a>
              <a href="javascript:void(0)" class="qb ac pc be de oe nf xi fk lk gl vl bm" name="social-link" aria-label="social-link">
                <svg width="16" height="16" viewbox="0 0 16 16" class="cg">
                  <path d="M13.8333 0.5C14.2754 0.5 14.6993 0.675595 15.0118 0.988155C15.3244 1.30072 15.5 1.72464 15.5 2.16667V13.8333C15.5 14.2754 15.3244 14.6993 15.0118 15.0118C14.6993 15.3244 14.2754 15.5 13.8333 15.5H2.16667C1.72464 15.5 1.30072 15.3244 0.988155 15.0118C0.675595 14.6993 0.5 14.2754 0.5 13.8333V2.16667C0.5 1.72464 0.675595 1.30072 0.988155 0.988155C1.30072 0.675595 1.72464 0.5 2.16667 0.5H13.8333ZM13.4167 13.4167V9C13.4167 8.27949 13.1304 7.5885 12.621 7.07903C12.1115 6.56955 11.4205 6.28333 10.7 6.28333C9.99167 6.28333 9.16667 6.71667 8.76667 7.36667V6.44167H6.44167V13.4167H8.76667V9.30833C8.76667 8.66667 9.28333 8.14167 9.925 8.14167C10.2344 8.14167 10.5312 8.26458 10.75 8.48338C10.9688 8.70217 11.0917 8.99891 11.0917 9.30833V13.4167H13.4167ZM3.73333 5.13333C4.10464 5.13333 4.46073 4.98583 4.72328 4.72328C4.98583 4.46073 5.13333 4.10464 5.13333 3.73333C5.13333 2.95833 4.50833 2.325 3.73333 2.325C3.35982 2.325 3.0016 2.47338 2.73749 2.73749C2.47338 3.0016 2.325 3.35982 2.325 3.73333C2.325 4.50833 2.95833 5.13333 3.73333 5.13333ZM4.89167 13.4167V6.44167H2.58333V13.4167H4.89167Z"></path>
                </svg>
              </a>
              <a href="javascript:void(0)" class="qb ac pc be de oe nf xi fk lk gl vl bm" name="social-link" aria-label="social-link">
                <svg width="18" height="12" viewbox="0 0 18 12" class="cg">
                  <path d="M7.33366 8.49984L11.6587 5.99984L7.33366 3.49984V8.49984ZM16.967 1.97484C17.0753 2.3665 17.1503 2.8915 17.2003 3.55817C17.2587 4.22484 17.2837 4.79984 17.2837 5.29984L17.3337 5.99984C17.3337 7.82484 17.2003 9.1665 16.967 10.0248C16.7587 10.7748 16.2753 11.2582 15.5253 11.4665C15.1337 11.5748 14.417 11.6498 13.317 11.6998C12.2337 11.7582 11.242 11.7832 10.3253 11.7832L9.00033 11.8332C5.50866 11.8332 3.33366 11.6998 2.47533 11.4665C1.72533 11.2582 1.24199 10.7748 1.03366 10.0248C0.925326 9.63317 0.850326 9.10817 0.800326 8.44151C0.741992 7.77484 0.716992 7.19984 0.716992 6.69984L0.666992 5.99984C0.666992 4.17484 0.800326 2.83317 1.03366 1.97484C1.24199 1.22484 1.72533 0.741504 2.47533 0.533171C2.86699 0.424837 3.58366 0.349837 4.68366 0.299837C5.76699 0.241504 6.75866 0.216504 7.67533 0.216504L9.00033 0.166504C12.492 0.166504 14.667 0.299837 15.5253 0.533171C16.2753 0.741504 16.7587 1.22484 16.967 1.97484Z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="jc ng qm/2 vn/2 wo/12 hq/12">
          <div class="wow fadeInUp bb eq" data-wow-delay="0s">
            <h2 class="za mi pi yi vl">
              Quick Links
            </h2>
            <div class="he">
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                What is ico
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Roadmap
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Whitepaper
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Social Network
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Join Us Now
              </a>
            </div>
          </div>
        </div>

        <div class="jc ng qm/2 vn/2 wo/12 hq/12">
          <div class="wow fadeInUp bb eq" data-wow-delay="0s">
            <h2 class="za mi pi yi vl">
              Supports
            </h2>
            <div class="he">
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Setting & Privacy
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Help & Support
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                Terms & Conditions
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                24/7 Supports
              </a>
              <a href="javascript:void(0)" class="ob ii qi xi kk ul fm">
                On Point FAQ
              </a>
            </div>
          </div>
        </div>

        <div class="jc ng vn/2 yo/2 gq/12">
          <div class="wow fadeInUp bb eq" data-wow-delay="0s">
            <h2 class="za mi pi yi vl">
              News & Post
            </h2>
            <div class="he">
              <div class="qb">
                <div class="sa xb jc ed pe">
                  <img src="/images/footer/blog-01.jpg" alt="post" class="yb jc pe dg eg">
                </div>
                <div>
                  <a href="javascript:void(0)" class="ii qi xi kk ul fm">
                    Roll Out New Features Without Hurting Loyal Users
                  </a>
                  <p class="qb be">
                    <span class="uh xi ul">
                      <svg width="14" height="16" viewbox="0 0 14 16" class="cg">
                        <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"></path>
                      </svg>
                    </span>
                    <span class="hi qi xi ul">
                      Dec 18, 2025
                    </span>
                  </p>
                </div>
              </div>
              <div class="qb">
                <div class="sa xb jc ed pe">
                  <img src="/images/footer/blog-02.jpg" alt="post" class="yb jc pe dg eg">
                </div>
                <div>
                  <a href="javascript:void(0)" class="ii qi xi kk ul fm">
                    Top 10 Best Cryptocurrency Blogs and Websites
                  </a>
                  <p class="qb be">
                    <span class="uh xi ul">
                      <svg width="14" height="16" viewbox="0 0 14 16" class="cg">
                        <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"></path>
                      </svg>
                    </span>
                    <span class="hi qi xi ul">
                      Dec 18, 2025
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wow fadeInUp we bf dh fi al" data-wow-delay="0s">
        <p class="ii qi wi xi ul">
          © Crypto - all Rights Reserved, Crafted by
          <a href="index-1.htm" rel="noopenner nofollow" target="_blank" class="kk">
            UIdeck
          </a>
        </p>
      </div>
    </div>

    <div class="d f l ea">
      <img src="/images/shapes/footer-shape-2.svg" alt="shape">
    </div>

    <div class="d n m ea">
      <img src="/images/shapes/footer-shape-1.svg" alt="shape">
    </div>
  </footer>
  <!-- ===== Footer end ===== -->

  <!-- ====== Back To Top Start -->
  <a x-show="scrolledFromTop" href="javascript:void(0)" name="scrollToTop" aria-label="scrollToTop" class="zq back-to-top c p q r fa qb ac pc be de me of zi kj rj">
    <span class="cb bc qc sd we xe cf"></span>
  </a>
  <!-- ====== Back To Top End -->

  <!-- ===== JS Files ====== -->
  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".scroll-menu");

    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      });
    });

    // section menu active
    function onScroll(event) {
      const sections = document.querySelectorAll(".scroll-menu");
      const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

      for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
          document
            .querySelector(".scroll-menu")
            .classList.remove("vl", "bj");
          currLink.classList.add("vl", "bj");
        } else {
          currLink.classList.remove("vl", "bj");
        }
      }
    }

    window.document.addEventListener("scroll", onScroll);
  </script>
<script defer="" src="bundle.js"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9017a8ebababef1d',t:'MTczNjc5NTE0OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
</body>
</html>
