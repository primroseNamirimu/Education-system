<!--
=========================================================
* Material Dashboard PRO - v3.0.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro 
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png') }}">
  <title>
Education Management System
  </title>
 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <!-- <link id="pagestyle" href="{{ url('assets/css/material-dashboard.css?v=3.0.1') }}" rel="stylesheet" /> -->
  <link id="pagestyle" href="{{ url('css/material-dashboard.css?v=3.0.1') }}" rel="stylesheet"/>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html " target="_blank">
        <img src="{{url('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Education Management System</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <img src="{{url('assets/img/team-3.jpg') }}" class="avatar">
            <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
          </a>
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('pages/pages/profile/overview.html') }}}">
                  <span class="sidenav-mini-icon"> MP </span>
                  <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="{{url('pages/pages/account/settings.html') }}">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " href="{{url('pages/authentication/signin/basic.html') }}">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <hr class="horizontal light mt-0">
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="../../pages/dashboards/sales.html" class="nav-link text-white active" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Dashboard</span>
          </a>

        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Student Management</h6>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
            <span class="nav-link-text ms-2 ps-1">Admissions</span>
          </a>
          <div class="collapse " id="pagesExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Profile <b class="caret"></b></span>
                </a>
                <div class="collapse " id="profileExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/overview.html">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Profile Overview </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/projects.html">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal  ms-2  ps-1"> All Projects </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                  <span class="sidenav-mini-icon"> U </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Users <b class="caret"></b></span>
                </a>
                <div class="collapse " id="usersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/reports.html">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/new-user.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Account <b class="caret"></b></span>
                </a>
                <div class="collapse " id="accountExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/billing.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Billing </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/invoice.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Invoice </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/security.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Security </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Projects <b class="caret"></b></span>
                </a>
                <div class="collapse " id="projectsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/general.html">
                        <span class="sidenav-mini-icon"> G </span>
                        <span class="sidenav-normal  ms-2  ps-1"> General </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/timeline.html">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/new-project.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New Project </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                  <span class="sidenav-mini-icon"> V </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Virtual Reality <b class="caret"></b></span>
                </a>
                <div class="collapse " id="vrExamples">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-default.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Default </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-info.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Info </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/pricing-page.html">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Pricing Page </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/rtl-page.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal  ms-2  ps-1"> RTL </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/widgets.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Widgets </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/charts.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Charts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/sweet-alerts.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Sweet Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/notifications.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Notifications </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
            <span class="nav-link-text ms-2 ps-1">Attendance</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/crm.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Class </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/kanban.html">
                  <span class="sidenav-mini-icon"> K </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Exam </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/wizard.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Wizard </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/datatables.html">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal  ms-2  ps-1"> DataTables </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/calendar.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Calendar </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/applications/stats.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Stats </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
            <span class="nav-link-text ms-2 ps-1">Accounts</span>
          </a>
          <div class="collapse " id="ecommerceExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Payrolls <b class="caret"></b></span>
                </a>
                <div class="collapse " id="productsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/products/new-product.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Invoices </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/products/edit-product.html">
                        <span class="sidenav-mini-icon"> E </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Edit Product </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/products/product-page.html">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Product Page </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/products/products-list.html">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Products List </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Orders <b class="caret"></b></span>
                </a>
                <div class="collapse " id="ordersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/orders/list.html">
                        <span class="sidenav-mini-icon"> O </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Order List </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/ecommerce/orders/details.html">
                        <span class="sidenav-mini-icon"> O </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Order Details </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/ecommerce/referral.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Referral </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white " aria-controls="authExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
            <span class="nav-link-text ms-2 ps-1">Reports</span>
          </a>
          <div class="collapse " id="authExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Sign In <b class="caret"></b></span>
                </a>
                <div class="collapse " id="signinExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signin/basic.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signin/cover.html">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signin/illustration.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Sign Up <b class="caret"></b></span>
                </a>
                <div class="collapse " id="signupExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signup/basic.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signup/cover.html">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/signup/illustration.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Reset Password <b class="caret"></b></span>
                </a>
                <div class="collapse " id="resetExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/reset/basic.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/reset/cover.html">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/reset/illustration.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                  <span class="sidenav-mini-icon"> L </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Lock <b class="caret"></b></span>
                </a>
                <div class="collapse " id="lockExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/lock/basic.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/lock/cover.html">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/lock/illustration.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                  <span class="sidenav-mini-icon"> 2 </span>
                  <span class="sidenav-normal  ms-2  ps-1"> 2-Step Verification <b class="caret"></b></span>
                </a>
                <div class="collapse " id="StepExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/verification/basic.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/verification/cover.html">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/verification/illustration.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                  <span class="sidenav-mini-icon"> E </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Error <b class="caret"></b></span>
                </a>
                <div class="collapse " id="errorExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/error/404.html">
                        <span class="sidenav-mini-icon"> E </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Error 404 </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/authentication/error/500.html">
                        <span class="sidenav-mini-icon"> E </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Error 500 </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <hr class="horizontal light" />
          <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Employee Management</h6>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#employeeManagement" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
            <span class="nav-link-text ms-2 ps-1">Employee Lists</span>
          </a>
          <div class="collapse " id="employeeManagement">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Payrolls <b class="caret"></b></span>
                </a>
                <div class="collapse " id="profileExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/overview.html">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Tuition </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/projects.html">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal  ms-2  ps-1"> All Projects </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                  <span class="sidenav-mini-icon"> U </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Users <b class="caret"></b></span>
                </a>
                <div class="collapse " id="usersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/reports.html">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/new-user.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Account <b class="caret"></b></span>
                </a>
                <div class="collapse " id="accountExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/billing.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Billing </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/invoice.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Invoice </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/security.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Security </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Projects <b class="caret"></b></span>
                </a>
                <div class="collapse " id="projectsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/general.html">
                        <span class="sidenav-mini-icon"> G </span>
                        <span class="sidenav-normal  ms-2  ps-1"> General </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/timeline.html">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/new-project.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New Project </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                  <span class="sidenav-mini-icon"> V </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Virtual Reality <b class="caret"></b></span>
                </a>
                <div class="collapse " id="vrExamples">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-default.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Default </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-info.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Info </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/pricing-page.html">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Pricing Page </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/rtl-page.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal  ms-2  ps-1"> RTL </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/widgets.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Widgets </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/charts.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Charts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/sweet-alerts.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Sweet Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/notifications.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Notifications </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#employeeAttendance" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
            <span class="nav-link-text ms-2 ps-1">Attendance</span>
          </a>
          <div class="collapse " id="employeeAttendance">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Payrolls <b class="caret"></b></span>
                </a>
                <div class="collapse " id="profileExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/overview.html">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Tuition </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/profile/projects.html">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal  ms-2  ps-1"> All Projects </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                  <span class="sidenav-mini-icon"> U </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Users <b class="caret"></b></span>
                </a>
                <div class="collapse " id="usersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/reports.html">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/users/new-user.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Account <b class="caret"></b></span>
                </a>
                <div class="collapse " id="accountExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/billing.html">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Billing </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/invoice.html">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Invoice </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/account/security.html">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Security </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Projects <b class="caret"></b></span>
                </a>
                <div class="collapse " id="projectsExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/general.html">
                        <span class="sidenav-mini-icon"> G </span>
                        <span class="sidenav-normal  ms-2  ps-1"> General </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/timeline.html">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/projects/new-project.html">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal  ms-2  ps-1"> New Project </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                  <span class="sidenav-mini-icon"> V </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Virtual Reality <b class="caret"></b></span>
                </a>
                <div class="collapse " id="vrExamples">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-default.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Default </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="../../pages/pages/vr/vr-info.html">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal  ms-2  ps-1"> VR Info </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/pricing-page.html">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Pricing Page </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/rtl-page.html">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal  ms-2  ps-1"> RTL </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/widgets.html">
                  <span class="sidenav-mini-icon"> W </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Widgets </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/charts.html">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Charts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/sweet-alerts.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Sweet Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="../../pages/pages/notifications.html">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Notifications </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <hr class="horizontal light" />
          <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Results</h6>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link text-white " aria-controls="basicExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">upcoming</i>
            <span class="nav-link-text ms-2 ps-1">Basic</span>
          </a>
          <div class="collapse " id="basicExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#gettingStartedExample">
                  <span class="sidenav-mini-icon"> G </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Getting Started <b class="caret"></b></span>
                </a>
                <div class="collapse " id="gettingStartedExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> Q </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Quick Start </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/license/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> L </span>
                        <span class="sidenav-normal  ms-2  ps-1"> License </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Contents </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Build Tools </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#foundationExample">
                  <span class="sidenav-mini-icon"> F </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Foundation <b class="caret"></b></span>
                </a>
                <div class="collapse " id="foundationExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Colors </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/grid/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> G </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Grid </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/typography/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Typography </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/icons/material-dashboard" target="_blank">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal  ms-2  ps-1"> Icons </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link text-white " aria-controls="componentsExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">view_in_ar</i>
            <span class="nav-link-text ms-2 ps-1">Components</span>
          </a>
          <div class="collapse " id="componentsExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Alerts </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/badge/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> B </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Badge </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> B </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Buttons </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/cards/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Card </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Carousel </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> C </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Collapse </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> D </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Dropdowns </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> F </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Forms </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/modal/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> M </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Modal </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/navs/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Navs </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> N </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Navbar </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Pagination </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Popovers </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/progress/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Progress </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Spinners </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/tables/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Tables </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/material-dashboard" target="_blank">
                  <span class="sidenav-mini-icon"> T </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Tooltips </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/creativetimofficial/ct-material-dashboard-pro/blob/master/CHANGELOG.md" target="_blank">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
            <span class="nav-link-text ms-2 ps-1">Changelog</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-3 text-dark" href="javascript:;">
                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop </title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                          <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sales</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Sales</h6>
        </nav>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link text-body p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search here</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item">
              <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body p-0 position-relative" target="_blank">
                <i class="material-icons me-sm-1">
              account_circle
            </i>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-icons fixed-plugin-button-nav cursor-pointer">
              settings
            </i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2">
              <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons cursor-pointer">
              notifications
            </i>
                <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
                  <span class="small">11</span>
                  <span class="visually-hidden">unread notifications</span>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">email</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Check new messages
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">podcasts</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Manage podcast session
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">shopping_cart</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Payment successfully completed
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">Sales</p>
                  <h5 class="font-weight-bolder mb-0">
                    $230,220
                  </h5>
                  <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+55% <span class="font-weight-normal text-secondary">since last month</span></span>
                </div>
                <div class="col-5">
                  <div class="dropdown text-end">
                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="text-xs text-secondary">6 May - 7 May</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">Customers</p>
                  <h5 class="font-weight-bolder mb-0">
                    3.200
                  </h5>
                  <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+12% <span class="font-weight-normal text-secondary">since last month</span></span>
                </div>
                <div class="col-5">
                  <div class="dropdown text-end">
                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="text-xs text-secondary">6 May - 7 May</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers2">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">Avg. Revenue</p>
                  <h5 class="font-weight-bolder mb-0">
                    $1.200
                  </h5>
                  <span class="font-weight-normal text-secondary text-sm"><span class="font-weight-bolder text-success">+$213</span> since last month</span>
                </div>
                <div class="col-5">
                  <div class="dropdown text-end">
                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="text-xs text-secondary">6 May - 7 May</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers3">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-sm-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">Channels</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
            </div>
            <div class="card-body pb-0 p-3 mt-4">
              <div class="row">
                <div class="col-7 text-start">
                  <div class="chart">
                    <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                  </div>
                </div>
                <div class="col-5 my-auto">
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-info"></i>
                    <span class="text-dark text-xs">Facebook</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-primary"></i>
                    <span class="text-dark text-xs">Direct</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-dark"></i>
                    <span class="text-dark text-xs">Organic</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-secondary"></i>
                    <span class="text-dark text-xs">Referral</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
              <div class="w-60">
                <p class="text-sm">
                  More than <b>1,200,000</b> sales are made using referral marketing, and <b>700,000</b> are from social media.
                </p>
              </div>
              <div class="w-40 text-end">
                <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">Revenue</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
              <div class="d-flex align-items-center">
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-primary"></i>
                  <span class="text-dark text-xs">Facebook Ads</span>
                </span>
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-dark"></i>
                  <span class="text-dark text-xs">Google Ads</span>
                </span>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-8">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">Sales by Age</h6>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-bar" class="chart-canvas" height="340"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">Sales by Country</h6>
              </div>
            </div>
            <div class="card-body p-3">
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0 border-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Country flag -->
                      <img src="../../assets/img/icons/flags/US.png" alt="Country flag">
                    </div>
                    <div class="col">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm font-weight-normal mb-0">United States</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                      <h6 class="text-sm font-weight-normal mb-0">2500</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                      <h6 class="text-sm font-weight-normal mb-0">29.9%</h6>
                    </div>
                  </div>
                  <hr class="horizontal dark mt-3 mb-1">
                </li>
                <li class="list-group-item px-0 border-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Country flag -->
                      <img src="../../assets/img/icons/flags/DE.png" alt="Country flag">
                    </div>
                    <div class="col">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm font-weight-normal mb-0">Germany</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                      <h6 class="text-sm font-weight-normal mb-0">3.900</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                      <h6 class="text-sm font-weight-normal mb-0">40.22%</h6>
                    </div>
                  </div>
                  <hr class="horizontal dark mt-3 mb-1">
                </li>
                <li class="list-group-item px-0 border-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Country flag -->
                      <img src="../../assets/img/icons/flags/GB.png" alt="Country flag">
                    </div>
                    <div class="col">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm font-weight-normal mb-0">Great Britain</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                      <h6 class="text-sm font-weight-normal mb-0">1.400</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                      <h6 class="text-sm font-weight-normal mb-0">23.44%</h6>
                    </div>
                  </div>
                  <hr class="horizontal dark mt-3 mb-1">
                </li>
                <li class="list-group-item px-0 border-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Country flag -->
                      <img src="../../assets/img/icons/flags/BR.png" alt="Country flag">
                    </div>
                    <div class="col">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm font-weight-normal mb-0">Brasil</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                      <h6 class="text-sm font-weight-normal mb-0">562</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                      <h6 class="text-sm font-weight-normal mb-0">32.14%</h6>
                    </div>
                  </div>
                  <hr class="horizontal dark mt-3 mb-1">
                </li>
                <li class="list-group-item px-0 border-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Country flag -->
                      <img src="../../assets/img/icons/flags/AU.png" alt="Country flag">
                    </div>
                    <div class="col">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm font-weight-normal mb-0">Australia</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                      <h6 class="text-sm font-weight-normal mb-0">400</h6>
                    </div>
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                      <h6 class="text-sm font-weight-normal mb-0">56.83%</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Top Selling Products</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ads Spent</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refunds</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div>
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg" class="avatar me-3" alt="image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Nike v22 Running</h6>
                            <p class="text-sm font-weight-normal text-secondary mb-0"><span class="text-success">8.232</span> orders</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$130.992</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm font-weight-normal mb-0">$9.500</p>
                      </td>
                      <td class="align-middle text-end">
                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                          <p class="text-sm font-weight-normal mb-0">13</p>
                          <i class="ni ni-bold-down text-sm ms-1 text-success"></i>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div>
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-mug.jpg" class="avatar me-3" alt="image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Business Kit (Mug + Notebook)</h6>
                            <p class="text-sm font-weight-normal text-secondary mb-0"><span class="text-success">12.821</span> orders</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$80.250</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm font-weight-normal mb-0">$4.200</p>
                      </td>
                      <td class="align-middle text-end">
                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                          <p class="text-sm font-weight-normal mb-0">40</p>
                          <i class="ni ni-bold-down text-sm ms-1 text-success"></i>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div>
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" class="avatar me-3" alt="image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Black Chair</h6>
                            <p class="text-sm font-weight-normal text-secondary mb-0"><span class="text-success">2.421</span> orders</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$40.600</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm font-weight-normal mb-0">$9.430</p>
                      </td>
                      <td class="align-middle text-end">
                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                          <p class="text-sm font-weight-normal mb-0">54</p>
                          <i class="ni ni-bold-up text-sm ms-1 text-danger"></i>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div>
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/bang-sound.jpg" class="avatar me-3" alt="image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Wireless Charger</h6>
                            <p class="text-sm font-weight-normal text-secondary mb-0"><span class="text-success">5.921</span> orders</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$91.300</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm font-weight-normal mb-0">$7.364</p>
                      </td>
                      <td class="align-middle text-end">
                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                          <p class="text-sm font-weight-normal mb-0">5</p>
                          <i class="ni ni-bold-down text-sm ms-1 text-success"></i>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div>
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/photo-tools.jpg" class="avatar me-3" alt="image">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Mountain Trip Kit (Camera + Backpack)</h6>
                            <p class="text-sm font-weight-normal text-secondary mb-0"><span class="text-success">921</span> orders</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$140.925</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm font-weight-normal mb-0">$20.531</p>
                      </td>
                      <td class="align-middle text-end">
                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                          <p class="text-sm font-weight-normal mb-0">121</p>
                          <i class="ni ni-bold-up text-sm ms-1 text-danger"></i>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Sidenav Mini</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Buy now</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-pie").getContext("2d");
    var ctx3 = document.getElementById("chart-bar").getContext("2d");

    // Line chart
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Facebook Ads",
            tension: 0,
            pointRadius: 5,
            pointBackgroundColor: "#e91e63",
            pointBorderColor: "transparent",
            borderColor: "#e91e63",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 100, 200, 190, 400, 350, 500, 450, 700],
            maxBarThickness: 6
          },
          {
            label: "Google Ads",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "#3A416F",
            pointBorderColor: "transparent",
            borderColor: "#3A416F",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [10, 30, 40, 120, 150, 220, 280, 250, 280],
            maxBarThickness: 6
          }
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#c1c4ce5c'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#9ca2b7',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: true,
              borderDash: [5, 5],
              color: '#c1c4ce5c'
            },
            ticks: {
              display: true,
              color: '#9ca2b7',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    // Pie chart
    new Chart(ctx2, {
      type: "pie",
      data: {
        labels: ['Facebook', 'Direct', 'Organic', 'Referral'],
        datasets: [{
          label: "Projects",
          weight: 9,
          cutout: 0,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 1,
          backgroundColor: ['#17c1e8', '#e91e63', '#3A416F', '#a8b8d8'],
          data: [15, 20, 12, 60],
          fill: false
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });

    // Bar chart
    new Chart(ctx3, {
      type: "bar",
      data: {
        labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42-50', '50+'],
        datasets: [{
          label: "Sales by age",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: '#3A416F',
          data: [15, 20, 12, 60, 20, 15, 25],
          fill: false
        }],
      },
      options: {
        indexAxis: 'y',
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#c1c4ce5c'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#c1c4ce5c',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: true,
              drawTicks: true,
              color: '#9ca2b7'
            },
            ticks: {
              display: true,
              color: '#9ca2b7',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.min.js?v=3.0.1"></script>
</body>

</html>