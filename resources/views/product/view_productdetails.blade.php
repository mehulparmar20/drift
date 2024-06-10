@extends('layouts.user_type.auth')

@section('content')
<div>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Product</h5>
                        </div>
                        <!-- <a href="#" class="button-29 createUserModalStore" data-toggle="modal"  data-target="#"><span>Add</span></a> -->


                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Product Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Product Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Product Code</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($show1)
                    
                                    @foreach ($show1 as $key => $cusData_val)
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $cusData_val->product->prodName }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $cusData_val->product->product_type }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $cusData_val->product->prod_code }}</p>
                                            </td>
                        

                                            <td class="text-center">
                                                   <!--VIEW BUTTON-->
                                                <a href="#" type="button" class="mx-3 createDesignModalStore" id="createDesignModalStore"
                                                        data-user-ids="{{ $cusData_val->product->_id}}" 
                                                        data-user-master_id="{{ $cusData_val['_id'] }}"  
                                                    data-bs-toggle="tooltip">
                                                <button class=" btn btn-sm btn-outline createDesignModalStore ">Add Design +</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">
                                            <center>Record Not Found</center>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>

                        <div>
                            <h5 class="mb-0">All Design</h5>
                        </div>
{{-- 
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">ID</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                Design Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                Action </th>
        </tr>
    </thead>
    <tbody>
        @if ($show1)
            @foreach ($show1 as $key => $cusData_val)
                @foreach($cusData_val->product->designname as $key =>$design_name_1)
        
            {{-- @php
                dd($show1->product->designname);
            @endphp --}}
                {{-- <tr>
                    <td class="ps-4">
                        <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">
                      
                            @php 
                            echo $design_name_1->design_name;    
                            @endphp 
                        
                        </p>
                    </td>
                    <td class="text-center">
                           <!--VIEW BUTTON-->
                        <a href="#" type="button" class="mx-3 " id="#" 
                            data-bs-toggle="tooltip">
                        <button class=" btn btn-sm btn-outline ">Edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            @endforeach
        @else 
            <tr>
                <td colspan="3">
                    <center>Record Not Found</center>
                </td>
            </tr>
        @endif
    </tbody>

</table> --}} 


<table class="table align-items-center mb-0">

    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">ID</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                Design Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                Action </th>
        </tr>
    </thead>


<tbody>
    
    @if ($show1)
        @foreach ($show1 as $key => $cusData_val)
            @if (isset($cusData_val->product->designname) && !empty($cusData_val->product->designname))
                @foreach($cusData_val->product->designname as $key =>$design_name_1)
                    <tr>
                        <td class="ps-4">
                            <p class="text-xs font-weight-bold mb-0">{{ $key + 1 }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">
                                @php 
                                    echo $design_name_1->design_name;    
                                @endphp 
                            </p>
                        </td>
                        <td class="text-center">
                            <!-- VIEW BUTTON -->
                            <a href="#" type="button" class="mx-3 " id="#" data-bs-toggle="tooltip">
                                <button class=" btn btn-sm btn-outline ">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">
                        <center>Record Not Found</center>
                    </td>
                </tr>
            @endif
        @endforeach
    @else 
        <tr>
            <td colspan="3">
                <center>Record Not Found</center>
            </td>
        </tr>
    @endif
</tbody>

</table>



</div>
</div>
</div>
</div>
</div>
</div>

<!--================================= create bank modal ============================= -->
                            <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="addDesignModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel"> Add Design</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <form method="post">
                                                    @csrf
                                                    <input type="hidden" name="_token" id="_tokendesign" value="{{Session::token()}}">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <input type="hidden" name="prod_id" id="prod_id" value="{{$cusData_val->product->_id}}">
                                                            <input type="hidden" name="master_id" id="master_id" value="{{$cusData_val->_id}}">

                                                            <label for="user_firstname">Design Name<span
                                                                    class="required"></span></label>
                                                            <input type="text" class="form-control" name="design_name"
                                                                id="design_name" placeholder="Design Name">
                                                        </div>
                                                    </div>
                                                    </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn bg-gradient-primary " id="savedesign">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>



@endsection
