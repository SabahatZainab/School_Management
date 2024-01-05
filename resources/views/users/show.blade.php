@extends('layouts.app')
@section('content')
<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{asset('assets/media/photos/photo12@2x.jpg')}}');">
      <div class="bg-black-50">
        <div class="content content-full text-center">
          <div class="my-3">
            <img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar13.jpg')}}" alt="">
          </div>
          <h1 class="h2 text-white mb-0">{{ $user->name }}</h1>
          <span class="text-white-75">{{$user->email}}</span>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
          <div class="col-md-7 col-xl-8">
            <!-- Updates -->
            <ul class="timeline timeline-alt py-0">
              <li class="timeline-event">
                <div class="timeline-event-icon bg-default">
                  {{-- <i class="fab fa-facebook-f"></i> --}}
                </div>
                <div class="timeline-event-block block">
                  <div class="block-header">
                    <h3 class="block-title">Roles</h3>
                    <div class="block-options">
                      <div class="timeline-event-time block-options-item fs-sm">
                        <a class="btn  px-4" href="{{ route('users.index') }}">&larr; Back</a>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            {{-- <dd class="col-sm-9">{{ $v }} </dd> --}}
                            <p class="fw-semibold mb-2">
                                {{ $v }}
                            </p>
                        @endforeach
                    @endif

                    {{-- <p>
                        <a class="btn  px-4" href="{{ route('users.index') }}">&larr; Back</a>
                    </p> --}}
                  </div>
                </div>
              </li>
            </ul>
            <!-- END Updates -->
          </div>
        </div>
    </div>


  </main>
  <!-- END Main Container -->
@endsection
