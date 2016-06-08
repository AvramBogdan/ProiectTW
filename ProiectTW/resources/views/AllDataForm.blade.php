@extends('layouts.preferences')
    @section ('country1')

       <select id="country1" name="country1" class="form-control" >  
                    <option ></option>
                    @foreach ($dates[0] as $country) 
                            @foreach($dates[7] as $elements)
                                @if( strcmp($country->country,$elements->country) == 0 )
                                    <option value="{{ $country -> country  }}" selected>{{ $country -> country }}</option>
                                @else
                                    <option value="{{ $country -> country  }}">{{ $country -> country }}</option>
                                @endif
                            @endforeach
                    @endforeach 
             </select>

    @endsection


    @section('country2')

            <select id="country2" name="country2" class="form-control">  
                    <option></option>
                    @foreach ($dates[1] as $country)
                        <option value="{{ $country -> country  }}">{{ $country -> country }}</option>
                    @endforeach
             </select>
    @endsection




    @section('city1')
            <select id="city1" name="city1" class="form-control">
                    <option></option>

                    @foreach ($dates[2] as $city)
                      @foreach($dates[7] as $elements)
                                @if( strcmp($city->city,$elements->city) == 0 )
                                    <option value="{{ $city -> city  }}" selected>{{ $city -> city }}</option>
                                @else
                                    <option value="{{ $city -> city  }}">{{ $city -> city }}</option>
                                @endif
                            @endforeach


                    @endforeach

             </select>
    @endsection

    @section('city2')
           <select id="city2" name="city2" class="form-control">
                    <option></option> 
                    @foreach ($dates[3] as $city)
                        <option value="{{ $city -> city }}">{{ $city -> city }}</option>
                    @endforeach
             </select>
    @endsection




    @section('airport1')
             <select id="airport1" name="airport1" class="form-control"> 
                    <option></option>
                    @foreach ($dates[4] as $airport)
                        <option value="{{ $airport -> name }}">{{ $airport -> name }}</option>
                    @endforeach
             </select>
    @endsection


    @section('airport2')
           <select id="airport2" name="airport2" class="form-control"> 
                    <option></option>
                    @foreach ($dates[5] as $airport)
                        <option value="{{ $airport -> name }}">{{ $airport -> name }}</option>
                    @endforeach
             </select>
    @endsection



    @section('airline')
            <select id="airline" name="airline" class="form-control">    
                    <option></option>


                    @foreach ($dates[6] as $airline)
                        @foreach($dates[7] as $elements)
                                @if( strcmp($airline->name,$elements->company) == 0 )
                                    <option value="{{ $airline -> name  }}" selected>{{ $airline -> name }}</option>
                                @else
                                    <option value="{{ $airline -> name  }}">{{ $airline -> name }}</option>
                                @endif
                            @endforeach
                    @endforeach

             </select>
    @endsection 


    @section('stopover')

        <select id="escala" class="form-control">
        
                 @foreach($dates[7] as $elements)
                    @if ($elements->stopover == 0)

                            <option value="da" >YES</option>
                            <option value="nu"selected>NO</option>
                    @else
                         
                            <option value="da" selected>YES</option>
                            <option value="nu">NO</option>   
                    @endif

                @endforeach
        

        </select>


    @endsection
