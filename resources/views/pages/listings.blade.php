@extends('layout.master')
@section('title', 'TasnoGigs | Find Software Development Jobs & Projects')
@section('content')

            @include('partials._hero')

            <!-- Search -->
            @include('partials._search')
      
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @foreach($listings as $listing)

                <!-- Items -->
                <x-listing-card :listing="$listing" />

                @endforeach
 
                            
                        </div>
                    </div>
                </div>
            </div>

            @endsection
 