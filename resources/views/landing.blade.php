@extends('layouts.student-login')

@section('custom-css')
<style>
    /* ── Page background ───────────────────────────────────────────── */
    body {
        background: linear-gradient(135deg, #0d3b66 0%, #1a6496 50%, #0d3b66 100%);
        min-height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* ── Centered wrapper ──────────────────────────────────────────── */
    .landing-wrapper {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px 15px;
    }

    /* ── Header / Branding ─────────────────────────────────────────── */
    .landing-header {
        text-align: center;
        margin-bottom: 40px;
        color: #fff;
    }

    .landing-header img {
        height: 100px;
        margin-bottom: 18px;
        filter: drop-shadow(0 4px 12px rgba(0,0,0,0.35));
    }

    .landing-header h1 {
        font-size: 1.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.4);
    }

    .landing-header .lead {
        font-size: 1rem;
        color: rgba(255,255,255,0.85);
        max-width: 560px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* ── Card row ──────────────────────────────────────────────────── */
    .portal-cards {
        display: flex;
        gap: 28px;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;
        max-width: 820px;
    }

    /* ── Individual portal card ────────────────────────────────────── */
    .portal-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.25);
        padding: 36px 32px 30px;
        flex: 1 1 320px;
        max-width: 370px;
        text-align: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border-top: 5px solid transparent;
    }

    .portal-card:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 18px 50px rgba(0,0,0,0.3);
    }

    /* Student card accent colour */
    .portal-card.student {
        border-top-color: #1a6496;
    }

    /* Admin card accent colour */
    .portal-card.admin {
        border-top-color: #c0392b;
    }

    /* Card icon */
    .portal-card .card-icon {
        font-size: 3rem;
        margin-bottom: 14px;
        line-height: 1;
    }

    .portal-card h2 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: #2c3e50;
    }

    .portal-card p {
        font-size: 0.92rem;
        color: #6c757d;
        line-height: 1.65;
        margin-bottom: 24px;
        min-height: 66px;
    }

    /* Buttons */
    .btn-student {
        background-color: #1a6496;
        border-color: #1a6496;
        color: #fff;
        padding: 10px 32px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: background-color 0.2s ease, border-color 0.2s ease;
        display: inline-block;
        text-decoration: none;
    }

    .btn-student:hover, .btn-student:focus {
        background-color: #155f88;
        border-color: #155f88;
        color: #fff;
        text-decoration: none;
    }

    .btn-admin {
        background-color: #c0392b;
        border-color: #c0392b;
        color: #fff;
        padding: 10px 32px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: background-color 0.2s ease, border-color 0.2s ease;
        display: inline-block;
        text-decoration: none;
    }

    .btn-admin:hover, .btn-admin:focus {
        background-color: #a93226;
        border-color: #a93226;
        color: #fff;
        text-decoration: none;
    }

    /* ── Footer note ───────────────────────────────────────────────── */
    .landing-footer {
        margin-top: 36px;
        text-align: center;
        color: rgba(255,255,255,0.6);
        font-size: 0.82rem;
    }

    /* ── Responsive tweaks ─────────────────────────────────────────── */
    @media (max-width: 600px) {
        .landing-header h1 {
            font-size: 1.35rem;
        }
        .portal-card {
            max-width: 100%;
            padding: 28px 22px 24px;
        }
    }
</style>
@endsection

@section('content')
<div class="landing-wrapper">

    {{-- ── Header / Branding ─────────────────────────────────────── --}}
    <div class="landing-header">
        <img src="{{ asset('images/logo.png') }}" alt="Rajarata University Logo" />
        <h1>Rajarata University<br>Examination Management System</h1>
        <p class="lead">
            Welcome to the Rajarata University Examination Management System.
            Please select your portal to continue.
        </p>
    </div>

    {{-- ── Portal Cards ───────────────────────────────────────────── --}}
    <div class="portal-cards">

        {{-- Student Portal --}}
        <div class="portal-card student">
            <div class="card-icon">🎓</div>
            <h2>Student Portal</h2>
            <p>
                Access student services including profile management,
                exam registration, results, and transcripts.
            </p>
            <a href="{{ url('/login') }}" class="btn btn-student" id="btn-student-login">
                Student Login
            </a>
        </div>

        {{-- Administration Portal --}}
        <div class="portal-card admin">
            <div class="card-icon">🛠</div>
            <h2>Administration Portal</h2>
            <p>
                Access administrative functions including student management,
                examinations, results, reports, and system configuration.
            </p>
            <a href="{{ url('/admin/login') }}" class="btn btn-admin" id="btn-admin-login">
                Administrator Login
            </a>
        </div>

    </div>

    {{-- ── Footer ─────────────────────────────────────────────────── --}}
    <div class="landing-footer">
        &copy; {{ date('Y') }} Faculty of Agriculture &mdash; Rajarata University of Sri Lanka. All rights reserved.
    </div>

</div>
@endsection
