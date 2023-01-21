@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@section('content')
    <section id="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="heading">
                    <h1>HACKTHON</h1>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                        enim ad minim veniam. </p>
                </div>
                <div class="btn">
                    <div class="sign">
                        <a href="{{ route('register') }}">SIGN UP</a>
                    </div>
                    <div class="login">
                        <a href="{{ route('login') }}">LOGIN</a>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/img/MetaverseConnect.png') }}" alt="hero-icon">
            </div>
        </div>
    </section>
    <section id="recap-section">
        <div class="heading">
            <h4>RECAP TECHNOSCAPE</h4>
        </div>
        <div class="container">
            <div class="recap-content">
                <iframe width="720" height="480" src="https://www.youtube.com/embed/KAskJvPQk98"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section id="champion">
        <div class="container">
            <div class="heading">
                <h4>CHAMPION PRIZE</h4>
            </div>
            <div class="total">
                <div>Total Hadiah</div>
                <div class="hadiah">RP. 9000.000</div>
                <img src="{{ asset('assets/img/Trophies.png') }}" alt="Trophies">
            </div>
        </div>
    </section>
    <section id="pemenang">
        <div class="container">
            <div class="juara2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/2.png') }}" alt="juara2">
                </div>
                <div class="detail">
                    <div>Rp. 5000.000</div>
                    <div>Merchandise</div>
                    <div>Sertifikat</div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="juara1">
                <div class="gambar">
                    <img src="{{ asset('assets/img/1.png') }}" alt="juara1">
                </div>
                <div class="detail">
                    <div>Rp. 5000.000</div>
                    <div>Merchandise</div>
                    <div>Sertifikat</div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="juara3">
                <div class="gambar">
                    <img src="{{ asset('assets/img/3.png') }}" alt="juara3">
                </div>
                <div class="detail">
                    <div>Rp. 5000.000</div>
                    <div>Merchandise</div>
                    <div>Sertifikat</div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="mentor">
        <div class="heading">
            <h4>OUR MENTORS</h4>
        </div>
        <div class="container">
            <div class="mentors">
                <div class="img">
                    <img src="{{ asset('assets/img/mentordummy.png') }}" alt="mentordummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="mentors">
                <div class="img">
                    <img src="{{ asset('assets/img/mentordummy.png') }}" alt="mentordummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="mentors">
                <div class="img">
                    <img src="{{ asset('assets/img/mentordummy.png') }}" alt="mentordummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
    </section>
    <section id="juries">
        <div class="heading">
            <h4>MEET OUR JURIES</h4>
        </div>
        <div class="container">
            <div class="jury">
                <div class="img">
                    <img src="{{ asset('assets/img/jurydummy.png') }}" alt="jurydummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="jury">
                <div class="img">
                    <img src="{{ asset('assets/img/jurydummy.png') }}" alt="jurydummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="jury">
                <div class="img">
                    <img src="{{ asset('assets/img/jurydummy.png') }}" alt="jurydummy">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="heading">
            <h4>ABOUT HACKATHON</h4>
        </div>
        <div class="content">
            <div></div>
            <p>Hackthon merupakan puncak dari rangkaian acara TechnoScape berupa kompetisi coding selama 36 jam, di mana
                setiap tim bersaing untuk membuat aplikasi atau situs web inovatif yang dapat memecahkan permasalahan di
                kehidupan nyata. Peserta berkesempatan untuk berinteraksi dengan para mentor dalam sesi mentoring bisnis,
                teknologi, dan desain.</p>
        </div>
    </section>
    <section id="join">
        <div class="heading">
            <h4>JOIN US</h4>
        </div>
        <div class="btn">
            <div class="regis">
                <a href="#">REGISTRASI</a>
            </div>
            <div class="book">
                <a href="#">GUIDEBOOK</a>
            </div>
        </div>
    </section>
    <section id="why">
        <div class="heading">
            <h4>WHY YOU SHOULD JOIN HACKTHON</h4>
        </div>
        <div class="container">
            <div class="block">
                <div class="card">
                    <div class="content">
                        <div>
                            Melakukan Mentoring Dengan Para Ahli
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                            enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div>Mendapatkan Peluang Wawancara Kerja</div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                            enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div>Menambah Relasi</div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                            enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div>Mengembangkan Keterampilan</div>
                        <p>Lorem ipsum dolor sit amet, consectetur elit, ed do eiusmod tempor incididunt ut magna aliqua. Ut
                            enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <h4>FREQUENTLY ASK QUESTION</h4>
        <div class="container">
            <div class="bubble">
                <div>
                    Lorem ipsum dolor sit amet, consectetur
                    elit, ed do eiusmod tempor incididunt ut.
                </div>
                <button><i class="fa-regular fa-plus"></i></i></button>
            </div>
        </div>
    </section>
    <section id="time">
        <h4>OUR TIMELINE</h4>
        <div class="container">
            <div class="close">
                <div>Close Registration</div>
                <p>Minggu 22 Mei 2023</p>
            </div>
            <div class="competition">
                <div>Competition Day</div>
                <p>Selasa 24 Mei 2023</p>
            </div>
        </div>
        <div class="img">
            <img src="{{ asset('assets/img/timeline.png') }}" alt="timeline">
        </div>
        <div class="container2">
            <div class="open">
                <div>Open Registration </div>
                <p>Sabtu 21 Mei 2023</p>
            </div>
            <div class="meet">
                <div>Technical Meeting</div>
                <p>Senin 23 Mei 2023</p>
            </div>
        </div>
    </section>
    <section id="sponsor">
        <div class="container">
            <h4>OUR SPONSOR</h4>
            <div class="platinum">
                <div>PLATINUM SPONSOR</div>
                <img src="{{ asset('assets/img/techreview.png') }}" alt="">
            </div>
            <div class="gold">
                <div>GOLD SPONSOR</div>
                <div class="golds">
                    <img src="{{ asset('assets/img/microsoft.png') }}" alt="">
                    <img src="{{ asset('assets/img/techstar.png') }}" alt="">
                    <img src="{{ asset('assets/img/creative.png') }}" alt="">
                </div>
            </div>
            <div class="silver">
                <div>SILVER SPONSOR</div>
                <img src="{{ asset('assets/img/bristol.png') }}" alt="">
            </div>
        </div>
    </section>
    <section id="medpar">
        <div class="container">
            <h4>OUR MEDIA PARTNER</h4>
            <div class="partner">
                <img src="{{ asset('assets/img/technomarine.png') }}" alt="">
                <img src="{{ asset('assets/img/mediaset.png') }}" alt="">
                <img src="{{ asset('assets/img/codingame.png') }}" alt="">
                <img src="{{ asset('assets/img/retailtech.png') }}" alt="">
            </div>
        </div>
    </section>
    <section id="other">
        <h4>OTHER EVENTS</h4>
        <div class="container">
            <div></div>
            <div></div>
        </div>
        <div class="btn">
            <div class="btn1"><a href="#">REGISTER NOW</a></div>
            <div class="btn2"><a href="#">REGISTER NOW</a></div>
        </div>
    </section>
    <section id="contact">
        <h4>CONTACT US</h4>
        <form action="#" class="form">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="input">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="input">
                <label for="subject">Subject</label>
                <input type="text" name="subject" placeholder="Enter subject">
            </div>
            <div class="input">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="6" placeholder="Enter your message"></textarea>
            </div>
            <div class="primary">
                <input type="Submit" value="SEND">
            </div>

        </form>
    </section>
    <section id="footer">
        <div class="container">
            <div class="left">
                <div>Organized by</div>
                <img src="{{ asset('assets/img/bncc.png') }}" alt="">
                <div class="socmed">
                    <a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f fa-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                </div>
            </div>
            <div class="right">
                <p>Official Learning Partner</p>
                <img src="{{ asset('assets/img/gojek.png') }}" alt="">
                <p>Official Empowering Affiliate</p>
                <img src="{{ asset('assets/img/tiket.png') }}" alt="">

            </div>
        </div>
    </section>
    <section id="end">
        <div class="container">
            <div>All Rights Reserved BNCC 2022 © Bina Nusantara Computer Club</div>
            <div>Privacy Policy & Terms of Service</div>
        </div>
    </section>
@endsection
