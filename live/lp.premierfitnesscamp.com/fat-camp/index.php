<?php
include 'header.php'; ?>

<section class="bg-white py-12 lg:py-20">
  <div class="container">
    <div class="flex max-md:flex-wrap gap-5 justify-between mb-10">
      <h2>A Week at Camp</h2>
      <a href="#heroForm" class="btn js-has-smooth">Book a Stay</a>
    </div>
    <div class="bg-ss-white-100 p-5">
      <div class="mb-10">
        <div class="ss-custom-tab flex flex-col lg:flex-row justify-between overflow-hidden">
          <div class="mobile-dropdown flex flex-col lg:max-w-52 w-full bg-white p-5">
            <button class="dropBtn relative inline-block text-left w-full p-4 leading-normal border border-gray-300 text-[15px] lg:text-[16px] capitalize lg:hidden">Select Option</button>
            <ul class="tabNav max-w-[1032px] relative hidden lg:block [&_a]:pl-5 before:border-l-2 before:border-solid before:border-primary/10 before:absolute before:left-0 before:top-0 before:bottom-0 [&_li]:mb-4 before:[&_a]:absolute before:[&_a]:border-l-2 before:[&_a]:left-0 before:[&_a]:top-0 before:[&_a]:bottom-0 before:[&_a]:border-transparent before:[&_a.active]:border-primary [&_a.active]:text-primary">
              <li class="max-md:p-2">
                <a href="#tab-1" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora active">Monday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-2" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Tuesday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-3" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Wednesday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-4" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Thursday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-5" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Friday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-6" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Saturday</a>
              </li>
              <li class="max-md:p-2">
                <a href="#tab-7" class="nav-item text-dark hover:text-primary relative w-full text-center transition-all duration-300 lg:text-xl uppercase font-lora">Sunday</a>
              </li>
            </ul>
          </div> <!-- /.mobile-dropdown -->
          <div class="tabContent flex-1 lg:px-12">
            <div class="tabPane overflow-hidden max-md:overflow-x-scroll" id="tab-1">
              <table class="[&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:30 am</strong>
                      <p>Orientation</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:00 am</strong>
                      <p>Fitness Assessments</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:30 pm</strong>
                      <p>Lecture</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">7:00 am</strong>
                      <p>Health Assessment</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">10:00 am</strong>
                      <p>Nutrition 101/Goal Setting</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:30 pm</strong>
                      <p>Max Muscle or Selected Add On</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:00 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">11:00 am</strong>
                      <p>Movement 101/Sports Conditioning</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:40 am</strong>
                      <p>Move Session: InBody Results</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:00 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-2">
              <table class="w-full [&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:30 am</strong>
                      <p>Nutrition Shake</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:15 am</strong>
                      <p>Boxing</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:30 pm</strong>
                      <p>Torrey Pines Hike or Selected Add On</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">7:00 am</strong>
                      <p>HI: Bootcamp -OR- LO: Barre Hybrid</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">10:45 am</strong>
                      <p>Snacks</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:15 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">11:15 am</strong>
                      <p>Beach Workout</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:00 pm</strong>
                      <p>Road Runner Stride Analysis Shoe Fitting</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:30 am</strong>
                      <p>Lecture</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:30 pm</strong>
                      <p>Cooking Demo</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-3">
              <table class="w-full [&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:30 am</strong>
                      <p>Nutrition Shake Laundry Drop Off</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">11:00 am</strong>
                      <p>Snack</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:30 pm</strong>
                      <p>Stand Up Paddle Boarding/Kayaking or Selected Add On</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:15 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:00 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:45 am</strong>
                      <p>Cooking Demo</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:30 pm</strong>
                      <p>Lecture</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:45 am</strong>
                      <p>Max Muscle</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-4">
              <table class="w-full [&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:00 am</strong>
                      <p>Nutrition Shake</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">10:30 am</strong>
                      <p>Snack (During Hike)</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:30 pm</strong>
                      <p>Foam Rolling & Mobility or Selected Add On</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:30 am</strong>
                      <p>Half Day Hike</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:15 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:15 am</strong>
                      <p>Breakfast (During Hike)</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-5">
              <table class="[&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:15 am</strong>
                      <p>Departing Assessments</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:45 am</strong>
                      <p>Lecture -OR- DIY Max Muscle</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">2:30 pm</strong>
                      <p>Snack</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:30 am</strong>
                      <p>Nutrition Shake</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:00 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">3:30 pm</strong>
                      <p>Zumba</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">7:00 am</strong>
                      <p>Double Peak Park Time Trial</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:45 pm</strong>
                      <p>Cooking Demo</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:45 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:30 pm</strong>
                      <p>Tabata or Selected Add On</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-6">
              <table class="[&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">7:30 am</strong>
                      <p>Departing Assessments</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">10:15 am</strong>
                      <p>Snack</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">8:00 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">10:30 am</strong>
                      <p>Batiquitos Lagoon Walk</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:00 am</strong>
                      <p>HI: Ropes, Balls & Sprints -OR- LO: TRX Toner</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">12:00 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div> <!-- /.tabPane -->
            <div class="tabPane hidden overflow-hidden max-md:overflow-x-scroll" id="tab-7">
              <table class="[&_td]:w-1/3 [&_td]:relative [&_th]:hidden [&_tr]:border-b [&_tr]:border-solid [&_tr]:border-dark/10 [&_tr:last-child]:border-none [&_tr:first-child]:border-none min-w-[600px] md:w-full">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">9:00 am</strong>
                      <p>Breakfast</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">4:15 pm</strong>
                      <p>New Arrivals Tour</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">6:00 pm</strong>
                      <p>Inner Connection Meditation</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">1:00 pm</strong>
                      <p>Lunch</p>
                    </div>
                  </td>
                  <td>
                    <div class="relative font-urbanist [&_p:last-child]:mb-0 text-dark/70 text-sm pl-9 pr-4 py-4">
                      <i class="icon-point absolute text-xl left-0 top-4 text-primary"></i>
                      <strong class="font-semibold text-dark text-lg">5:00 pm</strong>
                      <p>Dinner</p>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div> <!-- /.tabContent -->
        </div>
      </div>

      <video playsinline autoplay loop muted class="object-cover object-center w-full h-full">
        <source src="assets/videos/a-week-at-camp-video.mp4" type="video/mp4">
        <source src="assets/videos/a-week-at-camp-video.webm" type="video/webm">
        Sorry, your browser doesn\'t support embedded videos, <a href="assets/videos/hero-feature-video.mp4">download</a> and watch with your favorite video player!
      </video>
    </div>
  </div>
</section>
<!-- Section / {A WEEK AT CAMP}  -->

<section class="schedule js-bg-cover bg-cover bg-center bg-no-repeat py-6 sm:py-12 xl:py-16 relative max-lg:after:absolute after:inset-0 after:bg-primary-200/60">
  <img src="./assets/images/schedule-a-consult-bg.jpg" alt="Schedule a Consult" width="1440" height="641" loading="lazy">
  <div class="container">
    <form method="POST" action="mailer/index.php" id="form-id-1" class="validate form">
      <div class="form-header">
        <h2 class="font-lora lg:!text-[34px]">Schedule Your Personalized Consultation</h2>
        <p>Ready to take the first step toward transformation? Connect with our expert team today for personalized wellness guidance tailored to your unique goals. Your journey to a healthier, happier you begins here.</p>
      </div>
      <div class="form-section-0">
        <div class="form-group lg:col-span-2">
          <input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
          <div class="messages"></div>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Email Address" name="email" type="email" value="">
          <div class="messages"></div>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Phone Number" name="phone-number" type="text" value="">
          <div class="messages"></div>
        </div>
        <div class="form-group lg:col-span-2">
          <select class="form-control  advanced-select2 " name="when-would-you-like-to-start" id="rPD6p" data-placeholder="Select Placeholder">
            <option value="">When would you like to start</option>
            <option value="ASAP">ASAP</option>
            <option value="1-3 months">1-3 months</option>
            <option value="3-6 months">3-6 months</option>
            <option value="6+ months">6+ months</option>
            <option value="Not Sure">Not Sure</option>
          </select>
          <!-- Add more options if needed -->
          <div class="messages"></div>
        </div>
        <div class="form-group lg:col-span-2">
          <textarea class="form-control" placeholder="Your Message Here..." name="your-message-here" cols="50" rows="10"></textarea>
          <div class="messages"></div>
        </div>
        <div class="form-group">
          <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
          <div class="messages"></div>
        </div>
        <div class="form-group m-0">
          <!-- You can enter a value here manually during local testing, That will bypass the validation -->
          <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
          <div class="messages"></div>
        </div>
        <div class="form-group m-0">
          <input type="hidden" name="utm-source" value="<?php echo $utm_source; ?>">
          <input type="hidden" name="utm-medium" value="<?php echo $utm_medium; ?>">
          <input type="hidden" name="utm-campaign" value="<?php echo $utm_campaign; ?>">
          <input type="hidden" name="gclid" value="<?php echo $gclid; ?>">
          <input type="hidden" name="msclkid" value="<?php echo $msclkid; ?>">
        </div>
      </div>
      <div class="form-footer">
        <button type="submit" class="submitButton btn btn-primary">
          <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
            </circle>
            <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
          </svg>
          Submit
        </button>
      </div>
    </form>
  </div>
</section>
<!-- /Section {Schedule an appointment} -->

<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px]">
  <div class="container">
    <div class="block-title text-center mb-6 sm:mb-9 lg:mb-12">
      <h2 class="xl:leading-[60px]">Plan your stay around your goals.</h2>
    </div>
    <div class="flex flex-wrap justify-center -mx-2.5 gap-y-6 sm:gap-y-[1.875rem] pt-8">
      <div class="flex-[0_0_auto] sm:w-1/2 w-full lg:w-1/3 xl:w-1/4 px-2.5 mb-8 xl:mb-0">
        <div class="flex flex-col items-center justify-center relative bg-white h-full pt-12 lg:pt-16 pb-8 px-4 border border-ss-light-orange-gray transition-all duration-300 group hover:shadow-lg">
          <div class="bg-white p-2 absolute -top-[30px] min-w-[176px]">
            <span class="inline-block uppercase bg-ss-rose-white text-center w-full text-base font-semibold leading-[18px] tracking-wider px-4 py-3">One-Week</span>
          </div>
          <div class="text-center mb-6 lg:mb-8 [&_h3]:uppercase [&_h3]:text-xl [&_h3]:mb-4 last:[&_p]:mb-0 lg:[&_p]:text-lg lg:[&_p]:leading-7">
            <span class="inline-block mx-auto text-center min-w-16 max-w-16 mb-8 lg:mb-12">
              <img src="./assets/images/kick-starter-icon.svg" width="64" height="64" alt="Kick Starter icon" loading="lazy">
            </span>
            <h3>Kick Starter</h3>
            <p>Get clear on your goals, jumpstart a new routine, and go home feeling inspired — with a plan!</p>
          </div>
          <div class="btn-wrap w-full text-center pt-6 lg:pt-8 border-t border-ss-light-orange-gray mt-auto">
            <a href="#heroForm" class="js-has-smooth btn btn-outline group-hover:bg-primary group-hover:border-primary group-hover:text-white">Book a Consult</a>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] sm:w-1/2 w-full lg:w-1/3 xl:w-1/4 px-2.5 mb-8 xl:mb-0">
        <div class="flex flex-col items-center justify-center relative bg-white h-full pt-12 lg:pt-16 pb-8 px-4 border border-ss-light-orange-gray transition-all duration-300 group hover:shadow-lg">
          <div class="bg-white p-2 absolute -top-[30px] min-w-[176px]">
            <span class="inline-block uppercase bg-ss-rose-white text-center w-full text-base font-semibold leading-[18px] tracking-wider px-4 py-3">Two-Week</span>
          </div>
          <div class="text-center mb-6 lg:mb-8 [&_h3]:uppercase [&_h3]:text-xl [&_h3]:mb-4 lg:[&_p]:text-lg lg:[&_p]:leading-7 last:[&_p]:mb-0">
            <span class="inline-block mx-auto text-center min-w-16 max-w-16 mb-8 lg:mb-12">
              <img src="./assets/images/momentum-builder-icon.svg" width="64" height="64" alt="Momentum Builder icon" loading="lazy">
            </span>
            <h3>Momentum Builder</h3>
            <p>Learn and implement the fundamentals of optimal health, watch your body transform, and go home with a game plan to maintain it.</p>
          </div>
          <div class="btn-wrap w-full text-center pt-6 lg:pt-8 border-t border-ss-light-orange-gray mt-auto">
            <a href="#heroForm" class="js-has-smooth btn btn-outline group-hover:bg-primary group-hover:border-primary group-hover:text-white">Book a Consult</a>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] sm:w-1/2 w-full lg:w-1/3 xl:w-1/4 px-2.5 mb-8 sm:mb-0 lg:mb-8 xl:mb-0">
        <div class="flex flex-col items-center justify-center relative bg-white h-full pt-12 lg:pt-16 pb-8 px-4 border border-ss-light-orange-gray transition-all duration-300 group hover:shadow-lg">
          <div class="bg-white p-2 absolute -top-[30px] min-w-[176px]">
            <span class="inline-block uppercase bg-ss-rose-white text-center w-full text-base font-semibold leading-[18px] tracking-wider px-4 py-3">Three-Week</span>
          </div>
          <div class="text-center mb-6 lg:mb-8 [&_h3]:uppercase [&_h3]:text-xl [&_h3]:mb-4 lg:[&_p]:text-lg lg:[&_p]:leading-7 last:[&_p]:mb-0">
            <span class="inline-block mx-auto text-center min-w-16 max-w-16 mb-8 lg:mb-12">
              <img src="./assets/images/habit-changer-icon.svg" width="64" height="64" alt="Habit Changer icon" loading="lazy">
            </span>
            <h3>Habit Changer</h3>
            <p>Get the motivation you need to make a permanent shift. Studies show it takes 21 days to integrate new habits into your daily life.</p>
          </div>
          <div class="btn-wrap w-full text-center pt-6 lg:pt-8 border-t border-ss-light-orange-gray mt-auto">
            <a href="#heroForm" class="js-has-smooth btn btn-outline group-hover:bg-primary group-hover:border-primary group-hover:text-white">Book a Consult</a>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] sm:w-1/2 w-full lg:w-1/3 xl:w-1/4 px-2.5">
        <div class="flex flex-col items-center justify-center relative bg-white h-full pt-12 lg:pt-16 pb-8 px-4 border border-ss-light-orange-gray transition-all duration-300 group hover:shadow-lg">
          <div class="bg-white p-2 absolute -top-[30px] min-w-[176px]">
            <span class="inline-block uppercase bg-ss-rose-white text-center w-full text-base font-semibold leading-[18px] tracking-wider px-4 py-3">Four-Week</span>
          </div>
          <div class="text-center mb-6 lg:mb-8 [&_h3]:uppercase [&_h3]:text-xl [&_h3]:mb-4 lg:[&_p]:text-lg lg:[&_p]:leading-7 last:[&_p]:mb-0">
            <span class="inline-block mx-auto text-center min-w-16 max-w-16 mb-8 lg:mb-12">
              <img src="./assets/images/life-transformer-icon.svg" width="64" height="64" alt="Life Transformer icon" loading="lazy">
            </span>
            <h3>Life Transformer</h3>
            <p>Commit to a true transformation for extreme weight loss and a profound shift in how you live. Get the most our health & wellness camp has to offer.</p>
          </div>
          <div class="btn-wrap w-full text-center pt-6 lg:pt-8 border-t border-ss-light-orange-gray mt-auto">
            <a href="#heroForm" class="js-has-smooth btn btn-outline group-hover:bg-primary group-hover:border-primary group-hover:text-white">Book a Consult</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Plan your stay} -->

<section class="pb-12 sm:pb-16 lg:pb-20 xl:pb-[100px]">
  <div class="container">
    <div class="block-content text-center mb-8 lg:mb-[42px] lg:max-w-[500px] xl:max-w-[546px] lg:mx-auto [&_p]:text-base [&_p]:leading-relaxed last:[&_p]:mb-0">
      <h2 class="xl:leading-[50px] mb-4 lg:mb-5">Services to Achieve Your Fat Loss Goals</h2>
      <p>Our range of personalized fitness, nutrition, and support services ensures you have everything you need to succeed in your fat loss journey and maintain long-term results.</p>
    </div>
  </div>
  <div class="flex flex-wrap px-4 xl:px-0 gap-y-6 sm:gap-y-[1.875rem]">
    <div class="w-full sm:w-1/2 lg:w-1/4 sm:pr-2.5 lg:-mt-28">
      <figure class="text-center [&_img]:w-full [&_img]:mb-4">
        <img src="./assets/images/personalized-fitness-programs-img.jpg" width="345" height="475" alt="Personalized fitness programs image" loading="lazy">
        <figcaption class="text-black text-[18px] lg:text-[20px] xl:text-[22px] font-lead">Personalized Fitness Programs</figcaption>
      </figure>
    </div>
    <div class="w-full sm:w-1/2 lg:w-1/4 sm:pl-2.5 lg:pr-2.5">
      <figure class="text-center [&_img]:w-full [&_img]:mb-4">
        <img src="./assets/images/nutritional-guidance-img.jpg" width="345" height="475" alt="Nutritional Guidance image" loading="lazy">
        <figcaption class="text-black text-[18px] lg:text-[20px] xl:text-[22px] font-lead">Nutritional Guidance</figcaption>
      </figure>
    </div>
    <div class="w-full sm:w-1/2 lg:w-1/4 sm:pr-2.5 lg:pl-2.5">
      <figure class="text-center [&_img]:w-full [&_img]:mb-4">
        <img src="./assets/images/weight-loss-workshops-img.jpg" width="345" height="475" alt="Weight Loss Workshops image" loading="lazy">
        <figcaption class="text-black text-[18px] lg:text-[20px] xl:text-[22px] font-lead">Weight Loss Workshops</figcaption>
      </figure>
    </div>
    <div class="w-full sm:w-1/2 lg:w-1/4 sm:pl-2.5 lg:-mt-28">
      <figure class="text-center [&_img]:w-full [&_img]:mb-4">
        <img src="./assets/images/one-on-one-coaching-img.jpg" width="345" height="475" alt="One-on-One Coaching image" loading="lazy">
        <figcaption class="text-black text-[18px] lg:text-[20px] xl:text-[22px] font-lead">One-on-One Coaching</figcaption>
      </figure>
    </div>
  </div>
</section>
<!-- /Section {Services to Achieve} -->

<section class="py-12 lg:py-16 xl:py-20 js-bg-cover bg-cover bg-top bg-no-repeat">
  <img src="./assets/images/benefits-bg.png" alt="Benefits" width="1440" height="589" loading="lazy">
  <div class="container">
    <div class="flex flex-wrap items-center lg:-mx-6 xl:-mx-8">
      <div class="w-full lg:max-w-[50%] lg:flex-[0_0_50%] lg:px-6 xl:px-8 [&_p]:leading-relaxed">
        <h2 class="mb-4 lg:mb-5 xl:leading-[60px]">Benefits Of Camp</h2>
        <p>Our fat loss camps offer expert guidance, personalized support, lasting results, and a motivating community to transform your health.</p>
        <div class="grid md:grid-cols-2 gap-y-2 lg:gap-x-8 max-lg:mb-7 mt-6">
          <ul class="list-point">
            <li>Learn Positive Eating Habits</li>
            <li>Address Mental Limits</li>
            <li>Set at the Omni La Costa Resort</li>
            <li>Physician Designed</li>
            <li>Nutritionist-Designed Meals</li>
            <li>Perfect Weather in San Diego</li>
          </ul>
          <ul class="list-point">
            <li>Address Limiting Beliefs</li>
            <li>Learn Exercise Form and Routine</li>
            <li>World Class Certified Staff</li>
            <li>University Tested (UCSD)</li>
            <li>Stay from 1 Week to 6 Months</li>
          </ul>
        </div>
      </div>
      <div class="w-full lg:max-w-[50%] lg:flex-[0_0_50%] lg:px-6 xl:px-8">
        <div>
          <figure class="[&_img]:w-full">
            <img src="assets/images/benefits-of-camp.jpg" alt="Benefits of camp Image" width="609" height="449" loading="lazy">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Benefits} -->

<section class="pt-12 sm:pt-16 2xl:pt-[100px]">
  <div class="container">
    <header class="text-center max-w-[688px] mx-auto mb-10 lg:mb-12 [&_p]:leading-relaxed">
      <h2 class="mb-4">Hear from Our Participants</h2>
      <p>Discover how our Fat Loss Camp has transformed the lives of individuals just like you. Listen their inspiring testimonials and see the real results of dedication and support!</p>
    </header>

    <div class="swiper participants-slider pb-5">
      <div class="swiper-wrapper lg:py-8 2xl:py-12">
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/brian-straight.png" width="411" height="387" loading="lazy" alt="Brian Straight">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Brian Straight</h4>
                <span class="font-normal">Scottsdale, AZ</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/JJGQlJpCcOg?si=Va7M7oM36mcBP_MF" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/ray-stewart.jpg" width="411" height="387" loading="lazy" alt="Judy Heggen">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Ray Stewart</h4>
                <span class="font-normal">PFC Fitness Camp Client</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/Gqt7uwjRlOg?si=Yh0-knSQRCDgXJcP" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/bob-t.jpg" width="411" height="387" loading="lazy" alt="Judy Heggen">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Bob T.</h4>
                <span class="font-normal">PFC Client Testimonial</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/KlSH9CkNsi4?si=lf0Uvn0uZiEHFSE2" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/phil-jones.jpg" width="411" height="387" loading="lazy" alt="Judy Heggen">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Philip Jones</h4>
                <span class="font-normal">Ft. Atkinson, Wisconsin</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/3dAyqtfzpLw?si=EIbfXCYzziq1hyub" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/bob-lewis.jpg" width="411" height="387" loading="lazy" alt="Judy Heggen">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Bob Lewis</h4>
                <span class="font-normal">Fitness + Workouts at Premier Fitness Camp</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/5iysL6dRhGI?si=LzKErPBBmaMUEw0q" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="relative h-full">
            <figure class="inline-block w-full [&_img]:w-full relative before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:bg-gradient-to-t from-black via-black/20 to-black/0">
              <img src="./assets/images/lauren.jpg" width="411" height="387" loading="lazy" alt="Judy Heggen">
            </figure>
            <div class="flex justify-between items-center absolute left-6 right-6 bottom-6">
              <div class="text-white font-lead">
                <h4 class="text-white text-xl lg:text-2xl font-normal mb-0">Lauren</h4>
                <span class="font-normal">Story from PFC Fitness Camp</span>
              </div>
              <span class="[&_a]:text-white [&_a]:inline-block hover:[&_a]:text-primary [&_i]:text-3xl lg:[&_i]:text-4xl">
                <a href="https://youtu.be/mW4JnbpXSRI?si=GJCwn2Xi3wD-lcVz" data-fancybox class="inline-flex">
                  <i class="icon-play"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- /Section {Hear from Our Participants} -->

<section class="block-why-lose-weight pt-12 sm:pt-16 2xl:pt-[100px]">
  <div class="container">
    <div class="block-title text-center mb-6 lg:mb-9 xl:mb-12">
      <h2 class="xl:leading-[50px]">Why Lose Weight at Premier Fitness Camp?</h2>
    </div>
    <div class="flex flex-wrap -mx-2.5 gap-y-6 sm:gap-y-[1.875rem]">
      <div class="flex-[0_0_auto] w-full lg:w-1/2 px-2.5">
        <div class="relative pl-[18px] lg:pl-5 xl:pl-6 before:absolute before:top-0 before:left-0 before:h-20 before:w-1 before:bg-primary">
          <div class="min-h-[98px] pb-4 lg:pb-[18px] mb-2 lg:mb-3 border-b-[1px] border-ss-light-orange-gray flex items-center">
            <div class="icon min-w-16 min-h-16 relative z-[1] flex items-center justify-center before:absolute before:left-0 before:top-0 before:h-16 before:w-16 lg:before:h-16 lg:before:w-16 before:bg-ss-orange-100 before:rounded-full before:z-[-1] before:hidden [&_i]:text-primary">
              <img src="./assets//images/apple-icon.svg" width="64" height="78" alt="Sustainable Nutritional Habits icon" loading="lazy">
            </div>
            <div class="pl-4 sm:pl-5 lg:pl-6 [&_h3]:text-lg lg:[&_h3]:text-xl [&_h3]:mb-0">
              <h3>Develop Sustainable Nutritional Habits</h3>
            </div>
          </div>
          <div class="last:[&_p]:mb-0 lg:[&_p]:text-lg lg:[&_p]:leading-7">
            <p>At Premier Fitness Camp, you’ll learn how to make lasting, healthy food choices that work for your lifestyle. Our expert nutritionists guide you in creating sustainable habits that support your long-term wellness goals.</p>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] w-full lg:w-1/2 px-2.5">
        <div class="relative pl-[18px] lg:pl-5 xl:pl-6 before:absolute before:top-0 before:left-0 before:h-20 before:w-1 before:bg-primary">
          <div class="min-h-[98px] pb-4 lg:pb-[18px] mb-2 lg:mb-3 border-b-[1px] border-ss-light-orange-gray flex items-center">
            <div class="icon min-w-16 min-h-16 relative z-[1] flex items-center justify-center before:absolute before:left-0 before:top-0 before:h-16 before:w-16 lg:before:h-16 lg:before:w-16 before:bg-ss-orange-100 before:rounded-full before:z-[-1] before:hidden [&_i]:text-primary">
              <img src="./assets//images/generous-accomodations-icon.svg" width="64" height="67" alt="Generous Accommodations icon" loading="lazy">
            </div>
            <div class="pl-4 sm:pl-5 lg:pl-6 [&_h3]:text-lg lg:[&_h3]:text-xl [&_h3]:mb-0">
              <h3>Relax In Our Generous Accommodations</h3>
            </div>
          </div>
          <div class="last:[&_p]:mb-0 lg:[&_p]:text-lg lg:[&_p]:leading-7">
            <p>Stay at the renowned Omni La Costa Resort, where plush bedding, private patios, and access to world-class spa services create the perfect environment for relaxation and rejuvenation after a day of fitness and wellness activities.</p>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] w-full lg:w-1/2 px-2.5">
        <div class="relative pl-[18px] lg:pl-5 xl:pl-6 before:absolute before:top-0 before:left-0 before:h-20 before:w-1 before:bg-primary">
          <div class="min-h-[98px] pb-4 lg:pb-[18px] mb-2 lg:mb-3 border-b-[1px] border-ss-light-orange-gray flex items-center">
            <div class="icon min-w-16 min-h-16 relative z-[1] flex items-center justify-center before:absolute before:left-0 before:top-0 before:h-16 before:w-16 lg:before:h-16 lg:before:w-16 before:bg-ss-orange-100 before:rounded-full before:z-[-1] before:hidden [&_i]:text-primary">
              <img src="./assets//images/fitness-experience-icon.svg" width="64" height="73" alt="Fitness Experience icon" loading="lazy">
            </div>
            <div class="pl-4 sm:pl-5 lg:pl-6 [&_h3]:text-lg lg:[&_h3]:text-xl [&_h3]:mb-0">
              <h3>Enjoy an Approachable Fitness Experience</h3>
            </div>
          </div>
          <div class="last:[&_p]:mb-0 lg:[&_p]:text-lg lg:[&_p]:leading-7">
            <p>Our fitness programs are tailored to all levels, ensuring that you feel confident and supported in your fitness journey. With personalized workouts designed to suit your abilities, fitness becomes enjoyable and achievable.</p>
          </div>
        </div>
      </div>
      <div class="flex-[0_0_auto] w-full lg:w-1/2 px-2.5">
        <div class="relative pl-[18px] lg:pl-5 xl:pl-6 before:absolute before:top-0 before:left-0 before:h-20 before:w-1 before:bg-primary">
          <div class="min-h-[98px] pb-4 lg:pb-[18px] mb-2 lg:mb-3 border-b-[1px] border-ss-light-orange-gray flex items-center">
            <div class="icon min-w-16 min-h-16 relative z-[1] flex items-center justify-center before:absolute before:left-0 before:top-0 before:h-16 before:w-16 lg:before:h-16 lg:before:w-16 before:bg-ss-orange-100 before:rounded-full before:z-[-1] before:hidden [&_i]:text-primary">
              <img src="./assets//images//success-stories-icon.svg" width="64" height="78" alt="Real Success Stories icon" loading="lazy">
            </div>
            <div class="pl-4 sm:pl-5 lg:pl-6 [&_h3]:text-lg lg:[&_h3]:text-xl [&_h3]:mb-0">
              <h3>Become One of Our Real Success Stories</h3>
            </div>
          </div>
          <div class="last:[&_p]:mb-0 lg:[&_p]:text-lg lg:[&_p]:leading-7">
            <p>Join a thriving community of individuals who have achieved incredible transformations. At Premier Fitness Camp, you’ll receive the support and tools you need to become one of our many success stories.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-wrap text-center pt-6 sm:pt-9 lg:pt-12">
      <a href="#heroForm" class="js-has-smooth btn btn-primary">Book a Consult</a>
    </div>
  </div>
</section>
<!-- /Section {Why Lose Weight} -->

<section class="block-testimonial pt-8 lg:pt-0">
  <div class="container">
    <div class="flex flex-wrap -mx-4 gap-y-6 sm:gap-y-[1.875rem]">
      <div class="flex-[0_0_auto] w-full lg:w-1/2 xl:w-[62%] px-4">
        <blockquote class="xl:mt-16">
          <div class="quote [&_i]:text-[48px] lg:[&_i]:text-[64px] [&_i]:text-ss-orange-200">
            <i class="icon-double-quote"></i>
          </div>
          <div class="block-testimonial__content pl-12 lg:pl-16">
            <h2 class="font-base xl:leading-[58px]">
              <i>
                ...the accomplishments I have gained while at PFC far...
              </i>
            </h2>
            <div class="btn-wrap sm:flex sm:flex-wrap pt-5 lg:pt-6">
              <div class="flex items-center sm:pr-12 lg:pr-4 xl:pr-8 2xl:pr-12 mb-6 sm:mb-0">
                <a href="https://youtu.be/NJwNkVwkmfw?si=E1zdt_TiQEKcMdmT" data-fancybox class="inline-flex items-center text-xl text-primary hover:text-primary">
                  <span class="pr-4 [&_i]:text-[40px]">
                    <i class="icon-play"></i>
                  </span>
                  Watch Video
                </a>
              </div>
            </div>
          </div>
        </blockquote>
      </div>
      <figure class="flex-[0_0_auto] w-full lg:w-1/2 xl:w-[38%] px-4">
        <img src="./assets/images/yasmin-before-after-img.png" width="472" height="397" alt="Yasmin before after image" loading="lazy">
      </figure>
    </div>
  </div>
</section>
<!-- /Section {Testimonial} -->

<section class="relative z-10 before:absolute before:top-0 before:right-0 before:left-0 before:bottom-1/3 before:z-[-1] before:bg-gradient-to-b before:from-black  min-h-[400px] md:min-h-[600px] lg:min-h-[792px] bg-no-repeat bg-center bg-cover py-20" style="background-image:url('assets/images/testimonial-bg-cover.jpg')">
  <div class="container w-full text-center">
    <div class="max-w-[820px] mx-auto">
      <h3 class="text-white uppercase text-2xl leading-10">“Walking into Premier Fitness Camp was the start of a life-changing journey. It’s
        more than just a retreat—it’s everything I needed to rediscover myself.”</h3>
    </div>
    <div class="w-1/5 h-[2px] bg-primary-100 mx-auto my-5"></div>
    <div class="mx-auto text-white">
      <h4 class="text-white">Michael R.</h4>
    </div>
  </div>
</section>
<!-- /Section {Walking into premier fitness camp} -->

<section id="trustpilot" class="container py-12 lg:pt-16 lg:pb-14 xl:pt-36 xl:pb-24"> 
  <div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5a8b157058df700001dc47e2" data-style-height="140px" data-style-width="100%" data-theme="light" data-stars="4,5" data-review-languages="en">
    <a href="https://www.trustpilot.com/review/premierfitnesscamp.com" target="_blank" rel="noopener">Trustpilot</a>
  </div> 
</section>
<!-- /section {Testimonial/Trustpilot} -->

<section class="pb-12 sm:pb-16 lg:pb-20 xl:pb-[100px]">
  <div class="container">
    <div class="text-center text-dark/70 mb-8 lg:mb-12 xl:mb-16">
      <h2 class="lg:mb-5">Meet our world-class team</h2>
    </div> <!-- /Section Title Block -->
  </div>
  <div class="container swiper team-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="team-card group">
          <figure class="border-b-8 border-primary inline-block w-full [&_img]:mx-auto">
            <img src="./assets/images/dr-lee-rice.png" width="297" height="235" loading="lazy" alt="Dr. Lee Rice Headshot">
          </figure>
          <div class="team-info bg-white border border-ss-light-orange-gray py-4 px-6 text-center max-w-[267px] mx-auto my-5 lg:my-8 transition duration-150 ease-out group-hover:shadow-xl">
            <h5 class="lg:text-xl">Dr. Lee Rice</h5>
            <span class="font-light lg:text-lg text-dark/70">PFC's Chief Wellness Officer (CWO)</span>
          </div>
        </div>
      </div> <!-- /.swiper-slide -->
      <div class="swiper-slide">
        <div class="team-card group">
          <figure class="border-b-8 border-primary inline-block w-full [&_img]:mx-auto">
            <img src="./assets/images/dara-gorgas-bs.png" width="235" height="235" loading="lazy" alt="Dara Gorgas, BS Headshot">
          </figure>
          <div class="team-info bg-white border border-ss-light-orange-gray py-4 px-6 text-center max-w-[267px] mx-auto my-5 lg:my-8 transition duration-150 ease-out group-hover:shadow-xl">
            <h5 class="lg:text-xl">Dara Gorgas, BS</h5>
            <span class="font-light lg:text-lg text-dark/70">Program Director</span>
          </div>
        </div>
      </div> <!-- /.swiper-slide -->
      <div class="swiper-slide">
        <div class="team-card group">
          <figure class="border-b-8 border-primary inline-block w-full [&_img]:mx-auto">
            <img src="./assets/images/megan-brandit.png" width="280" height="235" loading="lazy" alt="Megan Brandt, NATA, NASM Headshot">
          </figure>
          <div class="team-info bg-white border border-ss-light-orange-gray py-4 px-6 text-center max-w-[267px] mx-auto my-5 lg:my-8 transition duration-150 ease-out group-hover:shadow-xl">
            <h5 class="lg:text-xl">Megan Brandt, NATA, NASM</h5>
            <span class="font-light lg:text-lg text-dark/70">Fitness Director</span>
          </div>
        </div>
      </div> <!-- /.swiper-slide -->
      <div class="swiper-slide">
        <div class="team-card group">
          <figure class="border-b-8 border-primary inline-block w-full [&_img]:mx-auto">
            <img src="./assets/images/page-lauer.png" width="294" height="235" loading="lazy" alt="Page Lauer, MFT, CEDS Headshot">
          </figure>
          <div class="team-info bg-white border border-ss-light-orange-gray py-4 px-6 text-center max-w-[267px] mx-auto my-5 lg:my-8 transition duration-150 ease-out group-hover:shadow-xl">
            <h5 class="lg:text-xl">Page Lauer, MFT, CEDS</h5>
            <span class="font-light lg:text-lg text-dark/70">Behavioral Health Director</span>
          </div>
        </div>
      </div> <!-- /.swiper-slide -->
    </div>
    <div class="flex gap-3 lg:gap-4 justify-center items-center mt-2">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>
<!-- /section {Team} -->

<section class="bg-ss-rose-white py-12 lg:py-16 xl:py-20">
  <div class="container">
    <div class="text-center text-dark/70 mb-8 lg:mb-12 xl:mb-16">
      <h2 class="lg:mb-5">Spa Treatments Omni La Costa Resort</h2>
      <p>Indulge in Luxury: Choose 3 Spa Treatments Each Week, Tailored to Your Wellness Journey</p>
    </div> <!-- /Section Title Block -->

    <div class="container">
      <div class="category-lists-slider">
        <div class="swiper-container overflow-hidden" id="catgory-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <button class="category-button active" data-id="data1">La Costa Custom Massage</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data2">Lomi Lomi Massage</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data3">La Costa Abhyanga Massage</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data4">Chakra Balancing Massage</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data5">Signature Body Scrub</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data6">Osea Hydration Boost - Vichy Shower</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data7">Osea Anti-Aging Firming Facial</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data8">Osea Men's Restorative Facial</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data9">Slow Beauty Manicure & Pedicure</button>
            </div>
            <div class="swiper-slide">
              <button class="category-button" data-id="data10">LightStim LED Red Light Therapy</button>
            </div>
          </div>
        </div>
        <div class="slider-button slider-prev"><i class="icon-arrow-left"></i></div>
        <div class="slider-button slider-next"><i class="icon-arrow-right"></i></div>
      </div>
      <div class="data-text-wrap">
        <div class="data-text active" id="data1">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">La Costa Custom Massage</h3>
              <p>Achieve relaxation and meet your wellness goals with a customizable massage experience. Enjoy light to firm pressure tailored to your needs for a truly personalized session.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img01.jpg" alt="La Costa Custom Massage Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data2">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Lomi Lomi Massage</h3>
              <p>Experience traditional Hawaiian healing with long, fluid strokes designed to deeply relax the mind and body, creating an oasis of serenity.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img02.jpg" alt="Lomi Lomi Massage Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data3">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">La Costa Abhyanga Massage</h3>
              <p>This full-body massage, using warm herbal-infused oils, offers a rhythmic flow that balances your physical and spiritual well-being for a deeply restorative experience.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img03.jpg" alt="La Costa Abhyanga Massage Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data4">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Chakra Balancing Massage</h3>
              <p>Align your body’s energy centers with a combination of aromatherapy, chakra stones, and Ayurvedic Kansa wand massage, promoting peace and clarity.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img04.jpg" alt="Chakra Balancing Massage Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data5">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Signature Body Scrub</h3>
              <p>Rejuvenate your skin with our Sundarya Sea Salt Scrub, enriched with rose, lavender, and papaya for exfoliation and softening.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img05.jpg" alt="Signature Body Scrub Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data6">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Osea Hydration Boost – Vichy Shower</h3>
              <p>Destress and hydrate under the soothing Vichy Shower, combining hydrotherapy with a blend of body serums and algae superfoods for multi-layer hydration.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img06.jpg" alt="Osea Hydration Boost – Vichy Shower Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data7">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Osea Anti-Aging Firming Facial</h3>
              <p>Transform your complexion with organic seaweed-based formulations. This anti-aging facial targets fine lines and multiple skin concerns for all skin types.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img07.jpg" alt="Osea Anti-Aging Firming Facial Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data8">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Osea Men’s Restorative Facial</h3>
              <p>A customized facial for men that cleanses, exfoliates, and repairs, while calming sun damage and razor irritation. Complete with a relaxing face and neck massage.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img08.jpg" alt="Osea Men’s Restorative Facial Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data9">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">Slow Beauty Manicure & Pedicure</h3>
              <p>Enjoy a soothing mineral soak, coconut sugar scrub, and antioxidant massage, topped off with detailed nail care for a refined finish.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img09.jpg" alt="Slow Beauty Manicure & Pedicure Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
        <div class="data-text" id="data10">
          <div class="grid gap-8 lg:grid-cols-2 lg:gap-12 xl:gap-16 py-8 lg:py-12">
            <div class="lg:max-w-lg text-dark/70 last-of-type:[&_p]:mb-6 lg:last-of-type:[&_p]:mb-10">
              <h3 class="text-xl lg:text-2xl capitalize lg:mb-6">LightStim LED Red Light Therapy</h3>
              <p>A series of sessions designed to relieve pain, enhance circulation, and accelerate recovery, promoting optimal physical and mental performance.</p>
              <a href="#heroForm" class="js-has-smooth btn btn-outline">Start Your Journey</a>
            </div>
            <figure>
              <img src="assets/images/spa-treatments-feature-img10.jpg" alt="LightStim LED Red Light Therapy Feature Image" width="640" height="302" loading="lazy">
            </figure>
          </div>
        </div> <!-- /.data-text -->
      </div>
    </div> <!-- /Section Tab block -->
  </div>
</section>
<!-- /Section {Spa treatments omni la costa resort} -->

<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px]">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img01.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img02.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img03.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img04.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img05.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img06.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img07.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide">
        <figure class="[&_img]:w-full [&_img]:h-full">
          <img src="assets/images/experience-feature-img08.jpg" alt="Experience Feature Image" width="625" height="357" loading="lazy">
        </figure>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Experience California} -->

<section class="py-12 sm:py-16 lg:py-20 xl:py-24">
  <div class="container">
    <div class="flex flex-wrap items-center -mx-2.5 lg:-mx-6 xl:-mx-[35px]">
      <div class="w-full lg:w-1/2 xl:w-[47%] 2xl:w-[48%] px-2.5 lg:px-6 xl:px-[35px]">
        <figure class="inline-block w-full [&_img]:w-full">
          <img src="./assets/images/luxury-image.png" width="580" height="651" loading="lazy" alt="Luxury Images">
        </figure>
      </div>
      <div class="w-full lg:w-1/2 xl:w-[53%] 2xl:w-[52%] px-2.5 lg-px-6 xl:px-[35px] max-lg:mt-8">
        <header class="mb-6 lg:mb-8">
          <h2 class="leading-[1.36]">Luxury Fat Camp for Lasting Transformation</h2>
        </header>
        <ul class="[&_li]:mb-5 last:[&_li]:mb-0">
          <li class="lg:[&_p]:text-lg">
            <span class="relative mb-2 lg:mb-3 text-lg lg:text-xl font-semibold leading-relaxed inline-block pl-4 lg:pl-5 before:absolute before:top-2 before:left-0 before:w-2.5 before:h-2.5 before:rounded-full before:bg-primary">Exclusive Expertise:</span>
            <p>Our camp offers access to world-class trainers, wellness experts, and life coaches who are dedicated to helping you achieve sustainable fat loss and overall wellness. Every program is personalized for lasting transformation.</p>
          </li>
          <li class="[&_p]:text-lg">
            <span class="relative mb-2 lg:mb-3 text-lg lg:text-xl font-semibold leading-relaxed inline-block pl-4 lg:pl-5 before:absolute before:top-2 before:left-0 before:w-2.5 before:h-2.5 before:rounded-full before:bg-primary">Luxurious Setting for Health</span>
            <p>Set in a breathtaking environment, our luxurious facilities and amenities allow you to focus solely on your wellness journey. Enjoy gourmet, health-conscious meals, a state-of-the-art fitness center, and spa-like treatments designed for total rejuvenation.</p>
          </li>
          <li class="[&_p]:text-lg">
            <span class="relative mb-2 lg:mb-3 text-lg lg:text-xl font-semibold leading-relaxed inline-block pl-4 lg:pl-5 before:absolute before:top-2 before:left-0 before:w-2.5 before:h-2.5 before:rounded-full before:bg-primary">Supportive Community</span>
            <p>Join a community of like-minded individuals, each striving for personal health goals. At our camp, the friendships and support systems you build will empower you to maintain your results long after your stay.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Luxury Fat Camp for Lasting Transformation} -->

<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px] xl:pb-[140px]">
  <div class="mobile_slider mySwiper2 md:container">
    <div class="swiper-wrapper md:flex md:gap-3">
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/today-logo.png" width="68" height="51" alt="Partners Today logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/abc-logo.png" width="52" height="51" alt="Partners abc logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/cnn-logo.png" width="94" height="45" alt="Partners cnn logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/time-logo.png" width="111" height="37" alt="Partners Time logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/sports-logo.png" width="113" height="29" alt="Partners Sports Illustrated logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/golfdigest-logo.png" width="145" height="31" alt="Partners GolfDigest logo" loading="lazy">
        </figure>
      </div>
      <div class="swiper-slide md:w-[14.28%]">
        <figure>
          <img src="assets/images/fox-logo.png" width="89" height="44" alt="Partners Fox logo" loading="lazy">
        </figure>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Our Partners} -->

<section class="container lg:max-w-[74.25rem] pb-12 sm:pb-16 lg:pb-20 xl:pb-[100px]">
  <div class="text-center mb-6 lg:mb-8 xl:mb-10">
    <h2 class="uppercase">Frequently asked questions</h2>
  </div>
  <div class="accordion-single js-acc-single">
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group is-open">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">What is a Fat Loss Retreat?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Our fat loss retreat offers a transformative environment, combining expert-led fitness, nutrition, and wellness programs designed to achieve long-term results. In a luxurious setting, you’ll experience personalized coaching, gourmet healthy meals, and relaxation amenities, helping you reach your weight loss goals in style.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">How is Our Fat Camp Different from Other Programs?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>We are more than just a traditional fat camp—we provide an immersive, luxurious experience tailored to your individual needs. With state-of-the-art facilities, expert trainers, and a supportive community, our focus is not only on fat loss but on empowering you to make lasting lifestyle changes.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">What Can I Expect from My Stay?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p> Expect a comprehensive and luxurious program that blends intense workouts, nutritional coaching, and spa treatments. Our personalized approach ensures that your specific needs are met in a relaxing, five-star environment designed for maximum results and rejuvenation.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">Who Is the Fat Loss Program For?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Our program is designed for adults seeking a supportive, upscale setting to achieve fat loss and lifestyle transformations. Whether you aim for weight reduction, increased fitness, or enhanced health, our program provides expert guidance, personalized plans, and luxurious accommodations.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">What Kind of Results Can I Expect?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Guests often achieve significant fat loss, improved fitness, and enhanced well-being. Our tailored approach ensures results that extend beyond your stay, creating sustainable habits that support long-term fat loss and healthy living.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">What Is the Length of the Fat Loss Program?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Our programs range from one week to several months, depending on your goals and preferences. Each stay is designed to offer maximum luxury and impact, ensuring you achieve measurable progress during your time with us.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">Is Nutrition a Key Component of the Program?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Yes, our fat loss program includes gourmet, calorie-controlled meals crafted by expert nutritionists to support your weight loss journey. Learn to enjoy delicious, nutritious meals while reaching your fat loss goals in an exclusive, health-focused environment.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">Will I Have Access to a Personal Trainer?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Absolutely. Our team of expert trainers will create a personalized fitness plan tailored to your body, needs, and goals. You’ll receive one-on-one coaching, ensuring that you make the most of your time at our retreat while receiving world-class care.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">Is This a Group or Individual Program?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Our programs are a blend of individual coaching and group activities, allowing for a customized approach to your fat loss journey. You’ll benefit from personalized attention while enjoying the camaraderie of like-minded individuals in a luxurious setting.</p>
      </div>
    </div><!-- accordion-single-item -->
    <div class="accordion-single-item js-acc-item pt-4 px-4 pb-3 lg:pt-5 lg:px-5 group">
      <div class="js-acc-single-trigger cursor-pointer flex justify-between items-center gap-2 relative mb-2">
        <h2 class="h5 accordion-single-title mb-0">Do You Offer Post-Camp Support?</h2>
        <i class="icon-caret-down inline-flex flex-shrink-0 items-center justify-center text-dark text-xs lg:text-sm size-8 xl:size-11 bg-transparent border border-solid border-dark/10 group-[&.is-open]:bg-primary group-[&.is-open]:text-white rounded-full p-2 rotate"></i>
      </div>
      <div class="accordion-single-content text-dark js-acc-single-trigger cursor-pointer accordion-content">
        <p>Yes. After your stay, we provide continuous support, including virtual coaching, meal plans, and fitness guidance to help you maintain your results and stay on track long after you’ve left our luxury retreat.</p>
      </div>
    </div><!-- accordion-single-item -->
  </div>
  <div class="text-center pt-4 lgpt-8 xl:pt-12">
    <a href="#heroForm" class="js-has-smooth btn btn-outline">Book A Consult</a>
  </div>
</section>
<!-- Section ends {Frequently asked questions} -->

<?php
include 'footer.php';
