@extends('layout')

@section('title', 'Maxime Pie')
@section('pageClassName', 'Home')

@section('content')
    <div class="Home__section">
        <div class="Home__section-header-container">
            <h2 class="Home__section-header">Maxime Pie</h2>
        </div>
        <div class="Home__section-body">
            <img class ="Home__section-illustration" src="{{asset('/images/maximepie.jpg')}}" alt="Maxime Pie">
            <div class="Home__section-profile-details">
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        22 ans
                    </span>
                </div>
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        Informatique et cuisine
                    </span>
                </div>
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        Spontané
                    </span>
                </div>
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        Spontané
                    </span>
                </div>
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        Spontané
                    </span>
                </div>
                <div class="Home__section-profile-detail">
                    <span class="Home__section-profile-detail-icon">O</span>
                    <span class="Home__section-profile-detail-wording">
                        Spontané
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
