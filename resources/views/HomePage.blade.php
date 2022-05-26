@extends('Layout.app')
@section('content')
    <section class="main_menu-category">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_menu-box d-flex justify-content-around">
                        <ul>
                            <li><a href="pages/referee-wallet.html"><span><img src={{asset('images/refer.png')}} alt="..."></span>রেফার ওয়া‌লেট</a></li>

                            <li><a href="pages/daily-incomewallet.html"><span><img src={{asset('images/income-removebg-preview.png')}} alt="..."></span>দৈ‌নিক আয়</a></li>

                            <li><a href="pages/reward-wallet.html"><span><img src={{asset('images/reward.png')}} alt="..."></span>রিওয়ার্ড</a></li>

                            <!-- <li><a href="maine-bad-lens-wallet.html"><span><img src="./assets/img/payment.png" alt="..."></span>মেইন ব‌্যা‌লেন্স</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_menu-box d-flex justify-content-around">
                        <ul>
                            <li><a href="pages/new-offer.html"><span><img src={{asset('images/new-offer.png')}} alt="..."></span>নতুন অফার</a></li>
                            <li class=""><a href="pages/to-do-list.html"><span><img src={{asset('images/to-do-list.png')}} alt=""></span>কা‌জের তা‌লিকা</a></li>
                            <li><a href="pages/action-form.html"><span><img src={{asset('images/more.png')}} alt="..."></span>কর্ম ফর্ম</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="main_menu-box d-flex justify-content-around">
                        <ul>
                            <li><a href="pages/plian-active.html"><span><img src={{asset('images/active.png')}} alt="..."></span>প্লান এ‌ক্টিভ</a></li>
                            <li><a href="pages/refer-list.html"><span><img src={{asset('images/refer.png')}} alt="..."></span>রেফার লিস্ট</a></li>
                            <li class=""><a href="#"><span><img src={{asset('images/jobrepot.png')}} alt=""></span>কাজের রি‌পোর্ট</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

