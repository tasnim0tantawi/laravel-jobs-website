@extends('layout.master')
@section('title', 'TasnoGigs | Find Software Development Jobs & Projects')
@section('content')

            @include('partials._hero')

            <!-- Search -->
            @include('partials._search')

            @if(count($listings) !== 0)
      
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @foreach($listings as $listing)

                <!-- Items -->
                <x-listing-card :listing="$listing" />

                @endforeach

                @else
                <P> No listings found </P>
                @endif

 
                            
                        </div>
                        <div class="mt-6 p-4">
                            {{$listings->links()}}
                        </div>
                        
                    </div>
                </div>
            </div>

            @endsection
 