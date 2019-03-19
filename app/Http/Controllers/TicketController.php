<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\User;
use App\Ticket;
use App\Linkinpark;

class TicketController extends Controller
{
    public function index($cid)
    {

        $bandconcerts = DB::table('bandconcerts')->where('concertNo',$cid)->get();
        return view('ticket.booking')->withBandconcert($bandconcerts);

        //var_dump($bandconcerts);
    }

    public function store(Request $request,$cid)
    {
        
        $validator = Validator::make($request->all(), [

                        'fname' => 'required',
                        'email' => 'required | email | unique:tickets,userEmail' ,
                        'mobile' => 'required | unique:tickets,userMobileNo'
                        //'password' => 'required | min:8 | same:repassword',
                        //'repassword' => 'required | min:8'



            ]);

        if($validator->fails())
        {
            return redirect()->route('ticket.book',$cid)
                             ->with('errors',$validator->errors());
        }

        $bandconcerts = DB::table('bandconcerts')->where('concertNo',$cid)->first();

        $quan = $bandconcerts->ticketQuantity - $request->num;
        //echo $quan;

        //var_dump($bandconcerts);
        //die();

        $name = $request->fname;
        //echo "$name";
        //echo "<br>";

        $email = $request->email;
        //echo "$email";
        //echo "<br>";

        $mobile = $request->mobile;
        //echo "$mobile";
        //echo "<br>";
        $quantity = $request->num;

        $totalCost = $request->concertTicketPrice * $request->num;
        //echo "$totalCost";
        $cname = $request->concertName;
        $cdateTime = $request->concertDateTime;
        $cvenue = $request->concertVenue;


        $issuedDate = date("Y/m/d");
        //echo "$issuedDate";
        //echo "<br>";

        //$concertDate = date("2017/11/20");
        //echo "$concertDate";

        $ticket = new Ticket();
        $ticket->userName = $name;
        $ticket->userEmail = $email;
        $ticket->userMobileNo = $mobile;
        $ticket->concertName = $cname;
        $ticket->concertDateTime = $cdateTime;
        $ticket->issueDate = $issuedDate;
        $ticket->concertVenue = $cvenue;
        $ticket->ticketQuantity = $quantity;
        $ticket->totalPrice = $totalCost;

        $ticket->save();


        $link = Linkinpark :: find($cid);
        $link->bandName = $bandconcerts->bandName;
        $link->concertName = $bandconcerts->concertName;
        $link->concertDateTime = $bandconcerts->concertDateTime;
        $link->concertVenue = $bandconcerts->concertVenue;
        $link->ticketQuantity = $quan;
        $link->perTicketPrice = $bandconcerts->perTicketPrice;
        $link->save();

        return view('ticket.confirm')
                    ->with('mob', $mobile);

        
        

    }

        public function print($mob)
        {
            /*$ticket = Ticket::find($mob);
            return view('ticket.print')->withTicket($ticket);*/

            $ticket = DB::table('tickets')->where('userMobileNo',$mob)->first();
            return view('ticket.print')->withTicket($ticket);
        }
}
