<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\airlines;
use Validator;
use App\Firmetransport;

use DB;

class ICS {

    var $data;
    var $name;

   public function ICS($start,$end,$name,$description,$location) {

        $this->name = $name;
        $this->data = "BEGIN:VCALENDAR\nVERSION:2.0\nMETHOD:PUBLISH\nBEGIN:VEVENT\nDTSTART:".date("Ymd\THis\Z",strtotime($start))."\nDTEND:".date("Ymd\THis\Z",strtotime($end))."\nLOCATION:".$location."\nTRANSP: OPAQUE\nSEQUENCE:0\nUID:\nDTSTAMP:".date("Ymd\THis\Z")."\nSUMMARY:".$name."\nDESCRIPTION:".$description."\nPRIORITY:1\nCLASS:PUBLIC\nBEGIN:VALARM\nTRIGGER:-PT10080M\nACTION:DISPLAY\nDESCRIPTION:Reminder\nEND:VALARM\nEND:VEVENT\nEND:VCALENDAR\n";
    }


    public function save() { 

        file_put_contents($this->name.".ics",$this->data);
    }


    function show() {
        header("Content-type:text/calendar");
        header('Content-Disposition: attachment; filename="'.$this->name.'.ics"');
        Header('Content-Length: '.strlen($this->data));
        Header('Connection: close');
        echo $this->data;
    }
}


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        return view('home');
    }


    public function myCalendar(){
      
      $events = [];

      $events[] = \Calendar::event(
            'Event', //event title
            false, //full day event?
            '2016-06-08T0800', //start time (you can also use Carbon instead of DateTime)
            '2016-06-08T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
      );

      $events[] = \Calendar::event(
            "Valentine's Day", //event title
    true, //full day event?
    new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
    new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
    'stringEventId' //optionally, you can specify an event ID
);

//$eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

$calendar = \Calendar::addEvent($events[0], [ //set custom color fo this event
        'color' => '#800',
    ])->setOptions([ //set fullcalendar options
        'firstDay' => 1
    ]);

return view('calendar', compact('calendar'));
    }




    public function getContact(){ 

        return view('contact');

     }

   public function storevot(Request $request)
    {
      if($request->bulina1!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Etihad Airways')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Etihad Airways')->increment('Popularitate',$request->bulina1);
        }
      if($request->bulina2!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','JetBlue Airlines')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','JetBlue Airlines')->increment('Popularitate',$request->bulina2);
        }
      if($request->bulina3!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Hainan Airlines')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Hainan Airlines')->increment('Popularitate',$request->bulina3);
        }
      if($request->bulina4!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','QANTAS')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','QANTAS')->increment('Popularitate',$request->bulina4);
        }
      if($request->bulina5!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Air New Zealand')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Air New Zealand')->increment('Popularitate',$request->bulina5);
        }
      if($request->bulina6!='')
        {
          
        DB::table('firmetransport')->where('Firma','=',' KLM')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=',' KLM')->increment('Popularitate',$request->bulina6);
        }
      if($request->bulina7!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Air Canada')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Air Canada')->increment('Popularitate',$request->bulina7);
        }       
        if($request->bulina8!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','EVA Air')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','EVA Air')->increment('Popularitate',$request->bulina8);
        }
        if($request->bulina9!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Emirates')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Emirates')->increment('Popularitate',$request->bulina9);
        }
        if($request->bulina10!='')
        {
          
        DB::table('firmetransport')->where('Firma','=','Cathay Pacific Airways')->increment('NumarVoturi');
            DB::table('firmetransport')->where('Firma','=','Cathay Pacific Airways')->increment('Popularitate',$request->bulina10);
        } 
           return view('/home');
    }



    public function gettop()
    { 
         $users = Firmetransport::all();
           
      return view('form')->with('valori',$users);
    }



     public function getPreferences(){ 
        
        $loginEmail = Session::get('loginEmail');

        $countries1 = DB::table('airports') -> select('country') -> distinct() -> orderBy('country') -> get();
        $countries2 = DB::table('airports') -> select('country') -> distinct() -> orderBy('country') -> get();
        $cities1 = DB::table('airports') -> select('city') -> distinct() -> orderBy('city') -> get();
        $cities2 = DB::table('airports') -> select('city') -> distinct() -> orderBy('city') -> get();
        $airports1 = DB::table('airports') -> select('name') -> distinct() -> orderBy('name') -> get();
        $airports2 = DB::table('airports') -> select('name') -> distinct() -> orderBy('name') -> get();
        $airlines = DB::table('airlines') -> select('name') -> orderBy('name') -> get();
        $user_info= DB::table('users')->select('city','country','company','stopover')->where('email','=',$loginEmail)->get();

        $data = array(
                    $countries1,
                    $countries2,
                    $cities1,
                    $cities2,
                    $airports1,
                    $airports2,
                    $airlines,
                    $user_info
                );
    
        return view('AllDataForm') -> withDates($data);

     } 

      protected function validator(array $data)
    {
        return Validator::make($data, [
            'country1' => 'required|max:40',
            'country2' => 'required|max:40',
            'city1' => 'required|max:40',
            'city2' => 'required|max:40',
            
        ]);
    }
      public function mailContact(){ 

       if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "avram.bogdan95@yahoo.ro";
 
    $email_subject = "Travlr issue";
 
     
 
     
 
    function died($error) {
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name'])){
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 

    $name = $_POST['name']; 
    $email_from = $_POST['email'];   
    $comments = $_POST['message'];  
 
     
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\r\n";
 
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 echo  $email_to;
 echo $email_subject;
 echo $email_message;
 echo $headers;
 
 @mail($email_to, $email_subject, $email_message, $headers,"-f bogdan.avram95@yahoo.ro");  
echo 'Message sent with succes';

 
 
}

} 

  public function getRoute(){ 

    return view('route');

  }



  public function store(Request $request){ 


    
  
    
    $validator = Validator::make($request->all(), [
            'country1' => 'required',
            'country2' => 'required',
            'city1' => 'required',
            'city2' => 'required',
        ]);

     if ($validator->fails()) {
            return redirect('preferences')
                        ->withErrors($validator)
                        ->withInput();
        }


    Session::put('country1',$request->country1);
    Session::put('country2',$request->country2);
    Session::put('city1',$request->city1);
    Session::put('city2',$request->city2);
    Session::put('airports1',$request->airport1);
    Session::put('airports2',$request->airport2);
    Session::put('airline',$request->airline);


  /* $from = Session::get('airports1');
   $to  = Session::get('airports2');



    $resultAltitude1 = DB::table('airports')->where('name',$from)->value('latitude');
    $resultLongitude1 = DB::table('airports')->where('name',$from)->value('longitude');

    $resultAltitude2 = DB::table('airports')->where('name',$to)->value('latitude');
    $resultLongitude2 = DB::table('airports')->where('name',$to)->value('longitude');




    Session::put('latitude1',$resultAltitude1);
    Session::put('longitude1', $resultLongitude1);

    Session::put('latitude2',$resultAltitude2);
    Session::put('longitude2', $resultLongitude2);*/


    if($request->input('airport1')==null)
        $cod1 = DB::table('airports') -> select('airport_id') -> where(['country'=>$request->input('country1'),'city'=>$request->input('city1')])-> get();
    else
        $cod1 = DB::table('airports') -> select('airport_id') -> where(['country'=>$request->input('country1'),'city'=>$request->input('city1'),'name'=>$request->input('airport1')])-> get();


    if($request->input('airport2')==null)
        $cod2 = DB::table('airports') -> select('airport_id') -> where(['country'=>$request->input('country2'),'city'=>$request->input('city2')])-> get();
    else
        $cod2 = DB::table('airports') -> select('airport_id') -> where(['country'=>$request->input('country2'),'city'=>$request->input('city2'),'name'=>$request->input('airport2')])-> get();

    if($request->input('airline')==null){ 
       
        $routes = array();
        $i=0;

        foreach($cod1 as $c1){
          foreach($cod2 as $c2){

            $row=DB::table('routes')->join('airports as s','routes.source_airport_id','=','s.airport_id')
                        ->join('airports as d','routes.destination_airport_id','=','d.airport_id')
                        ->join('airlines as ar','routes.airline_id','=','ar.airline_id')
                        ->select('s.country as country1','d.country as country2','s.name as name1','d.name as name2','s.latitude as lat1','s.longitude as long1',
                          'd.latitude as lat2','d.longitude as long2','s.city as city1','d.city as city2','ar.name as air',
                          'ar.name as air','s.IATA/FAA as iata1','d.IATA/FAA as iata2')
                        ->where(['s.airport_id'=>$c1->airport_id,'d.airport_id'=>$c2->airport_id])->first();

            if($row!=null){
              $routes[$i]=$row;
              $i=$i+1;
            }       

        }
      }

    } 
    else{ 


        $routes = array();
        $i=0;

        foreach($cod1 as $c1){
          foreach($cod2 as $c2){

            $row=DB::table('routes')->join('airports as s','routes.source_airport_id','=','s.airport_id')
                        ->join('airports as d','routes.destination_airport_id','=','d.airport_id')
                        ->join('airlines as ar','routes.airline_id','=','ar.airline_id')
                        ->select('s.country as country1','d.country as country2','s.name as name1','d.name as name2','s.latitude as lat1','s.longitude as long1',
                          'd.latitude as lat2','d.longitude as long2','s.city as city1','d.city as city2','ar.name as air','s.IATA/FAA as iata1','d.IATA/FAA as iata2')
                        ->where(['s.airport_id'=>$c1->airport_id,'d.airport_id'=>$c2->airport_id,'ar.name'=>
                          $request->input('airline')])->first();

            if($row!=null){
              $routes[$i]=$row;
              $i=$i+1;
            }       

        }
      }
    }


     $username =Session::get('loginUser');
     $city1 = Session::get('city1');
     $city2 = Session::get('city2');

     $event = new ICS();

     $event->ICS(date("Y-m-d"),date("Y-m-d")+1,$username,"Travel to ".$city2, $city1);
     echo $event->name;
     $event->save();  
    
      $this->myCalendar($username,date("Y-m-d"),$city2,$city1);
      Session::put('routesArray',$routes);
      
    return view('route');

  }



public function getAbout() {


    return view('about');

}

}
