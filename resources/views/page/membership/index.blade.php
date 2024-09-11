@extends('layouts.app', ['title' => 'Membership'])

@section('content')
    <style>
        body {
            font-family: Georgia, serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 50px;
        }

        .left {
            flex: 1;
            padding-right: 50px;
        }

        .right {
            flex: 1;
            background-color: #c9e5c2;
            border-radius: 10px;
            position: relative;
        }

        h1 {
            font-size: 56px;
            color: #2b2b2b;
            margin: 0 0 20px;
        }

        p {
            font-size: 18px;
            color: #4a4a4a;
        }

        .buttons {
            margin-top: 30px;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            margin-right: 15px;
        }

        .get-started {
            background-color: #000;
            color: #fff;
        }

        .view-plans {
            background-color: transparent;
            color: #000;
            border: 2px solid #000;
        }

        .story-box {
            padding: 30px;
        }

        .story-title {
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
            color: #2b2b2b;
        }

        .author-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .author-info img {
            border-radius: 50%;
            margin-right: 10px;
            width: 50px;
            height: 50px;
        }

        .author-name {
            font-size: 16px;
            font-weight: bold;
            color: #2b2b2b;
        }

        .author-title {
            font-size: 14px;
            color: #6b6b6b;
        }

        .badge {
            background-color: #f8c305;
            color: #000;
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 15px;
            display: inline-block;
        }

        .background-image {
            background-image: url('https://via.placeholder.com/600x300');
            background-size: cover;
            background-position: center;
            height: 200px;
            border-radius: 10px 10px 0 0;
        }
    </style>
    <div class="container">
        <div class="left">
            <h1>Support human stories</h1>
            <p>Become a member to read without limits or ads, fund great writers, and join a global community of people who care about high-quality storytelling.</ps>
            <div class="buttons">
                <a href="#" class="get-started">Get started</a>
                <a href="#" class="view-plans">View plans</a>
            </div>
        </div>
        <div class="right">
            <div class="background-image"></div>
            <div class="story-box">
                <span class="badge">Member-only story</span>
                <p class="story-title">The Case For Reforesting Our Cities</p>
                <div class="author-info">
                    <img src="https://via.placeholder.com/50" alt="Clive Thompson">
                    <div>
                        <span class="author-name">Clive Thompson</span><br>
                        <span class="author-title">Writer at <em>Wired</em> magazine and author of <em>Coders</em></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top:10%;">
            <div class="col-12 text-center">
                <p style="font-weight: 700;font-size:2em;color:#000;font-family: Georgia, serif !important;">
                    Membership plans
                </p>
            </div>
            <div class="col-4">
                <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                        <div class="card-title">
                            <b>
                                Single
                            </b>
                        </div>
                        <div class="card-text" style="margin-top: -4%;">
                            Ideal for beginners
                        </div>
                        <div class="card-text mt-3" style="font-family: Arial, Helvetica, sans-serif !important;font-size:0.9em;">
                            <span style="text-decoration: line-through;">
                                Rp 89.000
                            </span>
                            <span style="background-color: #d8e4fd;
                                            color: #1f2d60;
                                            padding: 5px 10px;
                                            border-radius: 20px;
                                            font-weight: bold;
                                            font-size: 14px;
                            ">
                                DISKON 85%
                            </span>
                        </div>
                        <div class="card-text" style="font-family:Verdana, Geneva, Tahoma, sans-serif !important;">
                            <span style="font-size: 1.2em !important;">
                                Rp
                            </span>
                            <span style="font-size: 36px;color: #2E1F60;font-weight: bold;margin-left:-2%;">
                                12.900
                            </span> 
                            <small style="font-size: 18px !important;color: #2E1F60;margin-left:-4%;">
                                /bln
                            </small>
                        </div>
                        <p style="color: #0040ff;font-size: 18px;margin-top: 10px;">
                            +1 Bulan gratis
                        </p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-dark">Get Membership</a>
                        </div>
                        <p class="harga-berlaku" style="color: #6C757D;font-size: 14px;margin-top: 10px;">
                            Rp29.900/bln saat diperpanjang
                        </p>
                        <hr>
                        <ul>
                            <li>Read member-only stories</li>
                            <li>Support writers you read most</li>
                            <li>Earn money for your writing</li>
                            <li>Listen to audio narrations</li>
                            <li>Read offline with the Medium app</li>
                            <li>Access our Mastodon community</li>
                            <li>Connect your custom domain</li>
                            <li>Create your own publications</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                        <div class="card-title">
                            <b>
                                Premium
                            </b>
                        </div>
                        <div class="card-text" style="margin-top: -4%;">
                            Ideal for intermediate
                        </div>
                        <div class="card-text mt-3" style="font-family: Arial, Helvetica, sans-serif !important;font-size:0.9em;">
                            <span style="text-decoration: line-through;">
                                Rp 109.900
                            </span>
                            <span style="background-color: #d8e4fd;
                                            color: #1f2d60;
                                            padding: 5px 10px;
                                            border-radius: 20px;
                                            font-weight: bold;
                                            font-size: 14px;
                            ">
                                DISKON 77%
                            </span>
                        </div>
                        <div class="card-text" style="font-family:Verdana, Geneva, Tahoma, sans-serif !important;">
                            <span style="font-size: 1.2em !important;">
                                Rp
                            </span>
                            <span style="font-size: 36px;color: #2E1F60;font-weight: bold;margin-left:-2%;">
                                24.990
                            </span> 
                            <small style="font-size: 18px !important;color: #2E1F60;margin-left:-4%;">
                                /bln
                            </small>
                        </div>
                        <p style="color: #0040ff;font-size: 18px;margin-top: 10px;">
                            +3 Bulan gratis
                        </p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-dark">Get Membership</a>
                        </div>
                        <p class="harga-berlaku" style="color: #6C757D;font-size: 14px;margin-top: 10px;">
                            Rp49.900/bln saat diperpanjang
                        </p>
                        <hr>
                        <ul>
                            <li>Read member-only stories</li>
                            <li>Support writers you read most</li>
                            <li>Earn money for your writing</li>
                            <li>Listen to audio narrations</li>
                            <li>Read offline with the Medium app</li>
                            <li>Access our Mastodon community</li>
                            <li>Connect your custom domain</li>
                            <li>Create your own publications</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                        <div class="card-title">
                            <b>
                                Business
                            </b>
                        </div>
                        <div class="card-text" style="margin-top: -4%;">
                            Ideal for advanced
                        </div>
                        <div class="card-text mt-3" style="font-family: Arial, Helvetica, sans-serif !important;font-size:0.9em;">
                            <span style="text-decoration: line-through;">
                                Rp 129.900
                            </span>
                            <span style="background-color: #d8e4fd;
                                            color: #1f2d60;
                                            padding: 5px 10px;
                                            border-radius: 20px;
                                            font-weight: bold;
                                            font-size: 14px;
                            ">
                                DISKON 64%
                            </span>
                        </div>
                        <div class="card-text" style="font-family:Verdana, Geneva, Tahoma, sans-serif !important;">
                            <span style="font-size: 1.2em !important;">
                                Rp
                            </span>
                            <span style="font-size: 36px;color: #2E1F60;font-weight: bold;margin-left:-2%;">
                                45.900
                            </span> 
                            <small style="font-size: 18px !important;color: #2E1F60;margin-left:-4%;">
                                /bln
                            </small>
                        </div>
                        <p style="color: #0040ff;font-size: 18px;margin-top: 10px;">
                            +3 Bulan gratis
                        </p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-dark">Get Membership</a>
                        </div>
                        <p class="harga-berlaku" style="color: #6C757D;font-size: 14px;margin-top: 10px;">
                            Rp93.900/bln saat diperpanjang
                        </p>
                        <hr>
                        <ul>
                            <li>Read member-only stories</li>
                            <li>Support writers you read most</li>
                            <li>Earn money for your writing</li>
                            <li>Listen to audio narrations</li>
                            <li>Read offline with the Medium app</li>
                            <li>Access our Mastodon community</li>
                            <li>Connect your custom domain</li>
                            <li>Create your own publications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection