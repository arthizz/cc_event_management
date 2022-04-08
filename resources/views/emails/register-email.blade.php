@extends('layout.app')

@section('content')

    <section id="email_verification">

        <div class="container shadow-lg mt-5 py-3 px-5">

            <h3 class="content-header-font">Email Verification Required!</h3>

            <p class="text-muted">

                Verification link sent to your email please click it to verify your email, Thank you!

            </p>

            <p class="text-muted">
                Did not received any emails? please click here to resend verification:
                <br>
                <a href="javascript:void(0)" id="resend-email-verification">Resend email verification</a>
            </p>
            

        </div>

    </section>
 
@endsection

