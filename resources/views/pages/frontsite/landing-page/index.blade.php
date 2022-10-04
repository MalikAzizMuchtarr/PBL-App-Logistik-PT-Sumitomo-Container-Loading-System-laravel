@extends('layouts.default')

@section('title','home')

@section('content')
    <!--Content-->
    <main class="min-h-screen">
                <!-- Hero -->
                <section class="relative mt-12">
                    <!-- Hero Image -->
                    <div
                      class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0"
                      aria-hidden="true"
                    >
                      <img
                        src="{{ asset('assets/frontsite/images/hero-image.png') }}"
                        class="bg-cover bg-center object-cover object-center max-h-[580px]"
                        alt="Hero Image"
                      />
                      <div
                        class="text-center absolute bottom-0 -left-20 -translate-y-14 bg-white px-7 py-5 rounded-xl shadow-2xl"
                      >
                        <h5 class="font-medium text-[#1E2B4F]">PT Sumitomo</h5>
                        <p class="text-xs text-[#AFAEC3] mt-1">Loading System</h1>
                        <span class="block text-xs text-[#1E2B4F] font-medium bg-[#F2F6FE] px-4 py-2 rounded-full text-center mt-7">MORE</span>
                      </div>
                    </div>
            
                    <!-- Hero Description -->
                    <div class="relative mx-auto max-w-7xl px-4 lg:px-14 lg:py-16">
                      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="lg:col-span-6">
            
                          <!-- Label New -->
                          <h1>
                            <div class="flex items-center">
                              <span
                                class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2"
                              >
                                New
                              </span>
                              <span
                                class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4"
                              >
                              Tracking feature updated
                              </span>
                            </div>
                            <span class="mt-6 block text-4xl font-semibold sm:text-5xl">
                              <span class="block text-[#1E2B4F] leading-normal"
                                >Loading System <br />
                                Trusted & Professional.</span
                              >
                            </span>
                          </h1>
                          <!-- End Label New -->
            
                          <!-- Text -->
                          <div class="flex flex-wrap gap-16 mt-8">
                            <div class="flex items-center gap-4">
                              <div class="flex-shrink-0">
                                <img
                                  src="{{ asset('assets/frontsite/images/service.svg') }}"
                                  alt="service icon"
                                />
                              </div>
                              <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">
                                    Supply Chain Solutions
                                </h5>
                                <p class="text-[#AFAEC3]">Scalable solutions for your
                                </p>
                              </div>
                            </div>
                            <div class="flex items-center gap-4">
                              <div class="flex-shrink-0">
                                <img
                                  src="{{ asset('assets/frontsite/images/service.svg') }}"
                                  alt="service icon"
                                />
                              </div>
                              <div>
                                <h5 class="text-[#1E2B4F] text-lg font-medium">
                                    End-to-End Transportation
                                </h5>
                                <p class="text-[#AFAEC3]">Effective, efficient shipment options</p>
                              </div>
                            </div>
                          </div>
                          <!-- Text -->
            
                          <!-- CTA Button -->
                          <div class="grid lg:flex flex-wrap mt-20 gap-5">
                            <a
                              href="{{ route('register') }}"
                              class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3"
                            >
                              Sign Up
                            </a>
                            <a
                              href="#"
                              class="text-[#1E2B4F] text-lg font-medium text-center bg-[#F2F6FE] rounded-full px-16 py-3"
                            >
                              Story
                            </a>
                          </div>
                          <!-- CTA Button -->
                          
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- End Hero -->
    </main>
    <!--End Content-->
@endsection