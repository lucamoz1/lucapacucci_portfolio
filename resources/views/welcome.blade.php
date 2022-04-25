@extends('layout.layout')
@section("content")
<div class="main-img-container">
</div>
<div class="written-content">
    <div class="header-box">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center text-center">
                    <div>
                        <h1>Luca Pacucci</h1>
                        <hr>
                        <h2>Full Stack Software Developer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-section">
        <div class="mini-box">
            <a href="https://www.linkedin.com/in/luca-pacucci-b18293134/" title="Linkedin profile" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
                <span style="opacity: 0;">
                    Linkedin
                </span>
            </a>
        </div>
        <div class="mini-box">
            <a href="https://www.instagram.com/lucamoz1/" title="Instagram profile" target="_blank">
                <i class="fa-brands fa-instagram"></i>
                <span style="opacity: 0;">
                    Instagram
                </span>
            </a>
        </div>
        <div class="mini-box">
            <a href="https://github.com/lucamoz1" title="Github profile" target="_blank">
                <i class="fa-brands fa-github"></i>
                <span style="opacity: 0;">
                    Github
                </span>
            </a>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="application/javascript" src="{{ mix('/js/landing.js') }}"></script>
@endsection