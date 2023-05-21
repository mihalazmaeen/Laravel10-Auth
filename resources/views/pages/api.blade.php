@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About API') }}</div>

                <div class="card-body">
                   <p>
                    Advanced Project Integration Limited in short API is a software development company having its Head Office in Dhaka Bangladesh. Our specialties lay in very cost-effective rapid prototyping, full-cycle software development and testing/QA, sustaining/maintaining and supporting existing software and infrastructure and AI based IoT product development.Our current team consists of a range of specializations:
                        AWS Solution Architect 

                        Software Architects/Analysts

                        Software Project Managers

                        Software Engineers

                        QA Engineers

                        IT Engineers
                   </p>
                </div>
                <div class="card-body">
                        
                        <ul>
                            <li><a href="{{ route('home') }}">back to Home</a></li>
                            {{-- <li><a href="{{ route('dashboard.users') }}">Users</a></li> --}}
                           
                        </ul>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
