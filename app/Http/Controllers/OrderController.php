<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Status;
use App\Providers\OrderUpdate;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $userId= $request->user->id;
    
        //get order for the current user
        $order = Order::where('user_id', $userId)->orderBy('created_at', 'desc')->where('is_draft', true)->with('books')->first();
        //check if order has book
        $noBooks= count($order->books) == 0;
        //if no books redirect back with alert message
        if ($noBooks) {
            $request->session()->flash('status', 'Vous devez au moins commander un livre !');
            return redirect()->route('studentHome');
        }
        //if books
        if (!$noBooks) {
            //add status no paid to order
            $order->statuses()->attach(1, ['created_at'=>now(), 'updated_at'=>now()]);
            //remove draft status
            $order->is_draft = 0;
            //save order
            $order->save();
            //redirect
            return  redirect()->route('studentPay');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $order = Order::with(['user','books','activeStatus.status','academicYear'])->firstWhere('id', $id);
        
        foreach ($order->books as $book) {
            $book = $book->setRelation('sale', $book->sales->where('academic_year_id', "$order->academic_year_id")->first());
        };
        
        $statuses = Status::all();
        return view('teacher.show-order-infos', ['order'=>$order, 'statuses'=>$statuses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update(Request $request)
    {
        $order = Order::where("id", $request->order_id)->with('activeStatus.status', 'user:id,email,name,firstname')->first();
        if ($order->activeStatus->status_id != $request->status_id) {
            $order->statuses()->attach($request->status_id, ['created_at'=>now(), 'updated_at'=>now()]);
        }
        if ($request->status_id == 4) {
            $order->is_archived = true;
        } else {
            $order->is_archived = false;
        }
        $order->save();
        OrderUpdate::dispatch($order);
        return redirect()->back();
    }

    public function updateBooks(Request $request)
    {
        $user = $request->user()->id;
        $book = $request->book_id;
        $quantity = $request->quantity;
        $order = Order::with(['books'=>function ($qb) use ($book) {
            $qb->where('id', $book);
        }])->where('user_id', $user)->where('is_draft', true)->first();

        if (count($order->books)) {
            if ($quantity != 0) {
                $order->books[0]->pivot->quantity = $quantity;
                $order->books[0]->pivot->save();
            } else {
                $order->books()->detach($book);
            }
        } else {
            if ($quantity != 0) {
                $order->books()->attach($book, ['quantity' => $request->quantity,'created_at'=>now(), 'updated_at'=>now()]);
            }
        }
        
        return redirect('/');
    }

    public function showOrderDone()
    {
        return view('livewire.showOrderDone');
    }


    public function destroy(Request $request)
    {
        $user = $request->user();
        $userOrder = Order::where('user_id', $user->id)->where('is_draft', true)->first();
        Order::destroy($userOrder->id);
        return redirect()->back();
    }
}
