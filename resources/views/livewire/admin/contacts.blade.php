<div>
    @section('title', 'Inquiries')

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="margin-bottom: 50px;">
                  <thead>
                      <tr>
                         <th>#</th>
                         <th>Full Name</th>
                         <th>Email Address</th>
                         <th>Phone</th>
                         <th width="40%">Message</th>
                         <th>Created</th>
                         <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $key => $contact)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$contact->fullname}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->message}}</td>
                            <td>{{$contact->created_at->diffforHumans()}}</td>
                            <td>
                                <a href=""><i class="far fa-edit text-success"></i></a>
                                <a href=""><i class="far fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
             </div>

</div>
