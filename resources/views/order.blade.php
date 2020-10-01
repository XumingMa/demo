@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-6">
                <h3 class="padding-top-bottom-10">Add an Order</h3>
            </div>
            <div class="col-6 text-right">
                <h3 class="far fa-address-card text-primary padding-top-bottom-10"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form id="order-form" onsubmit="return false;" class="order-form" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first-name">First Name <span class="text-danger">*</span></label> 

                                <input type="text" class="form-control" name="first_name" id="first-name"
                                    placeholder="First Name" required pattern="[A-Za-z]{1,32}">
                                    <i class="valid-feedback">Looks good!</i>
                                    <i class="invalid-feedback">You must input 1-32 letters</i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last-name"
                                    placeholder="Last Name" pattern="[A-Za-z]{1,32}">
                                    <i class="valid-feedback">Looks good!</i>
                                    <i class="invalid-feedback">You can make it empty or input 1-32 letters</i>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@sample.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
                                    <i class="valid-feedback">Looks good!</i>
                                    <i class="invalid-feedback">You can make it empty or input a valid email</i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="phone-number">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" id="phone-number"
                                    placeholder="+1 (888) 123-4567" required pattern="\+[0-9]{1,2}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}">
                                    <i class="valid-feedback">Looks good!</i>
                                    <i class="invalid-feedback">You must input a valid phone number</i>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="schedule-date">Schedule Date <span class="text-danger">*</span></label>
                                <input type="date" name="schedule_date" id="schedule-date"
                                    class="form-control datetimepicker-input" required />
                                    <i class="valid-feedback">Looks good!</i>
                                    <i class="invalid-feedback">You must choose a valid date</i>
                                </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="street-address">Street Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="street_address" id="street-address" required>
                                <i class="valid-feedback">Looks good!</i>
                                <i class="invalid-feedback">Street address is required</i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="city">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="city" id="city" required>
                                <i class="valid-feedback">Looks good!</i>
                                <i class="invalid-feedback">City is required</i>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="state-province">State/Province <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="province" id="state-province" required>
                                <i class="valid-feedback">Looks good!</i>
                                <i class="invalid-feedback">State/Province is required</i>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="postal-zipcode">Postal/Zip Code</label>
                                <input type="text" class="form-control" name="postal" id="postal-zipcode" 
                                pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" 
                                onkeyup="this.value = this.value.toUpperCase();">                         
                                <i class="valid-feedback">Looks good!</i>
                                <i class="invalid-feedback">You cam make it empty or must input a valid Postal, exp: H3C 2Z3</i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="country">Country <span class="text-danger">*</span></label>
                                <select class="form-control" name="country" id="country" required>
                                    <option>Canada</option>
                                    <option>United States</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row padding-bottom-20">
                        <div class="col text-right">
                            <button type="reset" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="container bg-white top-20">

        <div class="row">
            <div class="col-6">
                <h3 class="padding-top-bottom-10">Existing Orders</h3>
            </div>
            <div class="col-6 text-right">
                <h3 class="fas fa-align-justify text-primary padding-top-bottom-10"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Operation</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->first_name }}</td>
                                <td>{{ $order->last_name }}</td>
                                <td>{{ $order->schedule_date }}</td>
                                <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn {{ $operations[$order->status] }}">{{ $order->status }}</button>
                                        <button type="button" class="btn {{ $operations[$order->status] }} dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            @php
                                                $all_operations = array_keys($operations);
                                                $temp_operations = $all_operations;
                                                unset($temp_operations[array_search($order->status, $all_operations)]);
                                            @endphp
                                            @foreach ($temp_operations as $status => $operation)
                                        <a class="dropdown-item" href="/order/status/{{ $order->id }}/{{ $status }}">{{ $operation }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    &nbsp;
                                </td>
                                <td>
                                    <button data-id="{{ $order->id }}" class="btn btn-warning delete-row"><i class="fas fa-trash-alt fa-lg"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row padding-bottom-20">
            <div class="col text-center" id="list">
                {{ $orders->fragment('list')->links() }}
            </div>
        </div>
    </div>


    <div class="footer-copyright text-center py-3">© Xuming 2020 <br />
        Powered by Laravel & Bootstrap
    </div>

    <div class="modal" id="add_data_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="response-text"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="window.location.href='/home';">Ok</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="delete_data_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete confirm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure to delete it?</p>
            </div>
            <div class="modal-footer">
              <a type="button" id="delete-confirm" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
@endsection

